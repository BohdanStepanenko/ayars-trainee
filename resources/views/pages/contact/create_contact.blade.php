@extends('layouts.app')
@section('tab-title', 'Contacts')

@section('content')
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">{{ __('Contacts') }}</div>
					<div class="card-body">
						@include('components.forms.contact.create_contact_form')
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
