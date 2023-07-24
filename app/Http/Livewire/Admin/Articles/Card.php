<?php

namespace App\Http\Livewire\Admin\Articles;

use App\Models\Article;
use Livewire\Component;

class Card extends Component
{
    /** @var Article $article */
    public $article;

    public function mount($article)
    {
        $this->article = $article;
    }
    public function render()
    {
        return view('livewire.admin.articles.card');
    }
}
