<?php

namespace App\Http\Livewire\Admin\Analytics;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Adoptions extends Component
{
    public $history;


    public function mount() {

        $this->history = DB::table('animals')->selectRaw("count(id) as count, MIN(adopted_at) as start_time, MAX(adopted_at) as end_time")->whereRaw("adopted_at IS NOT NULL")->where("adopted_at", ">=", "DATE_SUB(CONVERT_TZ(NOW(), @@session.time_zone, '+00:00'), INTERVAL 1 DAY)")->groupByRaw("date_format(adopted_at, '%Y%m%d%H')")->orderBy('created_at', 'desc')->get()->toArray();
    }

    public function render()
    {

        return view('livewire.admin.analytics.adoptions');
    }
}
