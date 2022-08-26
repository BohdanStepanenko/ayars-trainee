<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function getAllArticles(): \Illuminate\Contracts\View\View
    {
        $articles = Article::where('is_published', true)->orderBy('created_at', 'DESC')->get();

        return view('pages.articles', ['articles' => $articles]);
    }

    public function getArticle(string $slug): \Illuminate\Contracts\View\View
    {
        $article = Article::where('slug', $slug)->first();

        return view('pages.article', ['article' => $article]);
    }

    public function storeArticle(Request $request): \Illuminate\Http\RedirectResponse
    {
        Article::create([
            'slug' => $request->slug,
            'title' => $request->title,
            'description' => $request->description,
            'full_description' => $request->full_description,
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()->back();
    }
}
