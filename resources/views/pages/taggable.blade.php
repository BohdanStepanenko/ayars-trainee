@extends('layouts.app')
@section('tab-title', 'Taggable')

@section('content')
	<div class="card">
		<div class="card-header">Tag: {{ $tagged->name }}</div>
		@foreach($tagged->articles as $article)
			@include('components.article_card')
		@endforeach
	</div>
@endsection
