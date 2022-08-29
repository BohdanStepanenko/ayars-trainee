<?php

namespace App\Http\Requests\Article;

use App\Models\Article;
use Illuminate\Foundation\Http\FormRequest;

class UpdateArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
		$article_id = Article::where('id', $this->route('article'))->first()->id;

        return [
			'slug' => 'required|regex:/(^[A-Za-z0-9_-]+$)+/|unique:articles,slug,' . $article_id,
			'title' => 'required|string|between:5,100',
			'description' => 'required|string|max:255',
			'full_description' => 'required|string',
        ];
    }
}
