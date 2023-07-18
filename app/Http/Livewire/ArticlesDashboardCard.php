<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArticlesDashboardCard extends Component
{
    public $article;

    public function mount($article)
    {
        $this->article = $article;
    }

    public function render()
    {
        return view('livewire.articles-dashboard-card');
    }
}
