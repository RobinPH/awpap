<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function getArticles()
    {
        $articles = Article::all();
        return view('/Admin/articles', compact('articles'));
    }
}
