@extends('layouts.app')
@section('tab-title', 'Article')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h5 class="card-header">{{ $article->title }}</h5>
                    <div class="card-body">
                        <p class="card-title">
                            Posted: <b>{{ date_format($article->created_at, 'd-m-Y H:m') }}</b>
                        </p>
                        <h5>{{ $article->full_description }}</h5>
                        <a href="{{ route('articles') }}" class="btn btn-primary">Back to articles</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
