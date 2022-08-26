@extends('layouts.app')
@section('tab-title', 'Feedbacks')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Feedbacks') }}</div>
						<table class="table">
							<thead>
								<tr>
									<th scope="col">#</th>
									<th scope="col">Email</th>
									<th scope="col">Message</th>
									<th scope="col">Date of receiving</th>
								</tr>
							</thead>
							<tbody>
								@foreach($feedbacks as $feedback)
									<tr>
										<th scope="row">{{ $loop->index + 1}}</th>
										<td>{{ $feedback->email }}</td>
										<td>{{ $feedback->message }}</td>
										<td>{{ date_format($feedback->created_at, 'd-m-Y H:m') }}</td>
									</tr>
								@endforeach
							</tbody>
						</table>
                </div>
            </div>
        </div>
    </div>
@endsection
