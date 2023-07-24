<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;

class Index extends Component
{
    /** @var string $card */
    public $card;

    /** @var Article[] $articles */
    public $articles;

    public $search;

    protected $queryString = [
        'search' => ['except' => ''],
        // 'page' => ['except' => 1],
    ];

    public function render()
    {
        return view('livewire.admin.articles.index');
    }
}
