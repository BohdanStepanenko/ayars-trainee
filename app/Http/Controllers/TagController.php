<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagController extends Controller
{
	public function getArticlesByTag(int $id): \Illuminate\Contracts\View\View
	{
		$tagged = Tag::with('articles')->where('id', $id)->first();

		return view('pages.taggable', ['tagged' => $tagged]);
	}
}
