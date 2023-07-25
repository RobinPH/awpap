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

        $this->articles = Article::query()
            ->where(function ($query) {
                $query->where('title', 'like', '%'.$this->search.'%')
                      ->orWhere('author', 'like', '%'.$this->search.'%');
            })
            ->get();

        return view('livewire.admin.articles.index');
    }
}
