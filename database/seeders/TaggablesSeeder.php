<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaggablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Tag::all();
		$articles = Article::all();

		// Give each tag some articles
		foreach($tags as $tag)
		{
			foreach ($articles as $article)
			{
				if (rand(1, 10) > 7)
				{
					$tag->articles()->attach($article->id);
				}
			}
			$tag->save();
		}
    }
}
