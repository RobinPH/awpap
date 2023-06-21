<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ArticleCard extends Component
{
    public $img;
    public $title;
    public $date;
    public $publisher;

    public function render()
    {
        return view('livewire.article-card');
    }
}
