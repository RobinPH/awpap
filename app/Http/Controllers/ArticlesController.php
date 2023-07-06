<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function getArticles()
    {
        $articles = Articles::all();
        return view('/Admin/articles', compact('articles'));
    }
}
