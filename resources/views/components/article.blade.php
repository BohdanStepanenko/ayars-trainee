<div class="card">
    <h5 class="card-header">{{ $article->title }}</h5>
    <div class="card-body">
        <p class="card-title">
            Posted: <b>{{ date_format($article->created_at, 'd-m-Y H:m') }}</b>
        </p>
        <h5>{{ $article->description }}</h5>
        <a href="{{ route('article', $article->slug) }}" class="btn btn-primary">Show article</a>
    </div>
</div>
