@extends('layouts.app')
@section('tab-title', 'Edit article')

@section('content')
	<div class="card">
		<div class="card-header">{{ __('Edit article') }}</div>
		<div class="card-body">
			@include('components.forms.article.edit_article_form')
		</div>
	</div>
@endsection
