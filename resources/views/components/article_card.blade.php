<div class="card">
    <h5 class="card-header">{{ $article->title }}</h5>
    <div class="card-body">
        <p class="card-title">
            Posted: <b>{{ date_format($article->created_at, 'd-m-Y H:m') }}</b>
        </p>
		<p class="card-title">
			Tags:
			@foreach($article->tags as $tag)
				<a href="{{ route('taggable.index', $tag->id) }}" class="label text-bg-primary">{{ $tag->name }}</a>
			@endforeach
		</p>
        <h5>{{ $article->description }}</h5>

        <a href="{{ route('articles.show', $article->slug) }}" class="btn btn-primary">Show article</a>
    </div>
</div>
