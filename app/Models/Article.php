<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
		'slug',
		'title',
		'description',
		'full_description',
		'is_published',
    ];

	public function tags()
	{
		return $this->morphToMany(Tag::class, 'taggable');
	}
}
