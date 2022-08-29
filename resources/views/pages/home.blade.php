@extends('layouts.app')
@section('tab-title', 'Articles')

@section('content')
	<div class="card">
		<div class="card-header">{{ __('Articles') }}</div>
		@foreach($articles as $article)
			@include('components.article_card')
		@endforeach
	</div>
@endsection
