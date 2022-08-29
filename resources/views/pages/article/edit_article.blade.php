@extends('layouts.app')
@section('tab-title', 'Edit article')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Edit article') }}</div>
					<div class="card-body">
						@include('components.forms.article.edit_article_form')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
