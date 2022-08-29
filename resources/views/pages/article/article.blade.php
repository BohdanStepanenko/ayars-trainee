@extends('layouts.app')
@section('tab-title', 'Article')

@section('content')
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
			<h5>{{ $article->full_description }}</h5>

			<a href="{{ route('articles.index') }}" class="btn btn-primary">Back to articles</a>
			<a href="{{ route('articles.edit', $article->slug) }}" class="btn btn-warning">Update</a>
			<form action="{{ route('articles.destroy', $article->id )}}" method="POST">
				@csrf
				@method('delete')
				<button type="submit" class="btn btn-danger">Delete</button>
			</form>
		</div>
	</div>
@endsection
