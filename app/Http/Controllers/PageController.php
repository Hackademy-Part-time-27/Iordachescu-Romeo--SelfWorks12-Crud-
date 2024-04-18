<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function articles()
    {
        $articles = \App\Models\Article::all();

        return view('pages.articles', ['articles' => $articles]);
    }

    public function articlesView(\App\Models\Article $article)
    {
        return view('pages.article', ['article' => $article]);
    }
}