<?php

namespace App\Http\Livewire\Admin\Analytics;

use App\Models\WebTraffic as ModelsWebTraffic;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class WebTraffic extends Component
{
    public $traffics;
    public $ref_traffics;
    public $history;

    public $recents;

    public $recent_count = 50;

    public function mount() {
        $traffics = DB::table('web_traffic')->selectRaw('url, COUNT(*) as count')->groupBy('url')->orderBy('count', 'desc')->get()->toArray();

        $this->traffics = array_filter($traffics, function ($row) {
            return !str_starts_with($row->url, "admin") && !str_starts_with($row->url, "livewire") && !str_starts_with($row->url, "api") && !str_starts_with($row->url, "auth");
        });

        $this->ref_traffics = DB::table('web_traffic')->selectRaw('ref, COUNT(*) as count')->groupBy('ref')->orderBy('count', 'desc')->get()->toArray();

        $this->history = DB::table('web_traffic')->selectRaw("count(id) as count, MIN(created_at) as start_time, MAX(created_at) as end_time")->where("created_at", ">=", "DATE_SUB(CONVERT_TZ(NOW(), @@session.time_zone, '+00:00'), INTERVAL 10 MINUTE)")->groupByRaw("date_format(created_at, '%Y%m%d%H')")->orderBy('start_time', 'desc')->get()->toArray();

        $this->recents = ModelsWebTraffic::query()->orderBy('created_at', "desc")->take($this->recent_count)->get()->toArray();
    }

    public function loadMoreRequests() {
        $this->recent_count += 20;
        $this->recents = ModelsWebTraffic::query()->orderBy('created_at', "desc")->take($this->recent_count)->get()->toArray();
    }

    public function render()
    {

        return view('livewire.admin.analytics.web-traffic');
    }
}
