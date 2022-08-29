@extends('layouts.app')
@section('tab-title', 'Create article')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Create article') }}</div>
					<div class="card-body">
						@include('components.forms.article.create_article_form')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
