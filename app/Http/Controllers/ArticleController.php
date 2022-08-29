<?php

namespace App\Http\Controllers;

use App\Http\Requests\Article\CreateArticleRequest;
use App\Http\Requests\Article\UpdateArticleRequest;
use App\Models\Article;
use App\Models\Tag;

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
		$tags = Tag::all();

		return view('pages.article.create_article', ['tags' => $tags]);
	}

	public function store(CreateArticleRequest $request): \Illuminate\Http\RedirectResponse
    {
        $article = Article::create([
            'slug' => $request->slug,
            'title' => $request->title,
            'description' => $request->description,
            'full_description' => $request->full_description,
            'is_published' => $request->has('is_published'),
        ]);

		$article->tags()->sync($request->input('tags'));

        return redirect()->back()->with('success', 'Article successful added');
    }

	public function edit(string $slug): \Illuminate\Contracts\View\View
	{
		$article = Article::where('slug', $slug)->with('tags')->first();
		$tags = Tag::all();

		return view('pages.article.edit_article', ['article' => $article, 'tags' => $tags]);
	}

	public function update(UpdateArticleRequest $request, int $id): \Illuminate\Http\RedirectResponse
	{
		$article = Article::findOrFail($id)->first();
		$article->update($request->validated());
		$article->tags()->sync($request->input('tags'));

		return redirect()->back()->with('success', 'Article successful updated');
	}

	public function destroy(int $id): \Illuminate\Http\RedirectResponse
	{
		$article = Article::findOrFail($id);
		$article->tags()->delete();
		$article->delete();

		return redirect()->route('articles.index')->with('success', 'Article successful deleted');
	}
}
