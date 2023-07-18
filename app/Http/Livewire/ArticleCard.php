<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class ArticleCard extends Component
{
    /** @var Article $article */
    public $article;

    public function mount($article)
    {
        $this->article = $article;
    }

    public function render()
    {
        return view('livewire.article-card');
    }
}
