<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticles()
    {
        return view('pages.articles', ['Articles' => Article::paginate(5)]);
    }

    public function getArticle(string $slug)
    {
        $articles = Article::where('slug', $slug)->get();

        return view('pages.articles', ['articles' => $articles]);
    }
}
