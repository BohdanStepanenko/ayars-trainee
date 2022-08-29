<?php

namespace App\Http\Requests\Article;

use Illuminate\Foundation\Http\FormRequest;

class CreateArticleRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'slug' => 'required|regex:/(^[A-Za-z0-9_-]+$)+/|unique:articles,slug',
            'title' => 'required|string|between:5,100',
            'description' => 'required|string|max:255',
            'full_description' => 'required|string',
        ];
    }
}
