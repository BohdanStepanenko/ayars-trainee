@extends('layouts.app')
@section('tab-title', 'Contacts')

@section('content')
	<div class="card">
		<div class="card-header">{{ __('Contacts') }}</div>
		<div class="card-body">
			@include('components.forms.contact.create_contact_form')
		</div>
	</div>
@endsection
