@extends('home')

@section('container')
    @include('create')
    <div class="container mt-4">
        <h1 class="text-center mb-3">{{ $title }}</h1>
        {{-- @if ($posts->count() > 0) --}}
        <div class="container">
            @foreach ($posts as $post)
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <small class="d-flex justify-content-between align-items-center mb-3">
                                    <h5>{{ $post->user->name }}</h5>
                                    {{ $post->created_at->diffForHumans() }}
                                </small>
                                <p class="card-text">{{ $post->body }}</p>
                                <a href="" class="btn btn-primary">Reply</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- @else
            <p class="text-center fs-4">No Post Found!</p>
        @endif --}}
    </div>
@endsection
