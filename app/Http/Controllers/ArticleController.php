<?php

namespace App\Http\Controllers;

use App\Http\Requests\Article\CreateArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Models\Article;

class ArticleController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $articles = Article::where('is_published', true)->orderBy('created_at', 'DESC')->get();

        return view('pages.home', ['articles' => $articles]);
    }

    public function show(string $slug): \Illuminate\Contracts\View\View
    {
        $article = Article::where('slug', $slug)->first();

        return view('pages.article.article', ['article' => $article]);
    }

	public function create(): \Illuminate\Contracts\View\View
	{
		return view('pages.article.create_article');
	}

	public function store(CreateArticleRequest $request): \Illuminate\Http\RedirectResponse
    {
        Article::create([
            'slug' => $request->slug,
            'title' => $request->title,
            'description' => $request->description,
            'full_description' => $request->full_description,
            'is_published' => $request->has('is_published'),
        ]);

        return redirect()->back()->with('success', 'Article successful added');
    }

	public function edit(string $slug): \Illuminate\Contracts\View\View
	{
		$article = Article::where('slug', $slug)->first();

		return view('pages.article.edit_article', ['article' => $article]);
	}

	public function update(UpdateArticleRequest $request, int $id): \Illuminate\Http\RedirectResponse
	{
		$article = Article::findOrFail($id)->first();
		$article->update($request->validated());

		return redirect()->back()->with('success', 'Article successful updated');
	}

	public function destroy(int $id): \Illuminate\Http\RedirectResponse
	{
		$article = Article::findOrFail($id);
		$article->delete();

		return redirect()->route('articles.index')->with('success', 'Article successful deleted');
	}
}
