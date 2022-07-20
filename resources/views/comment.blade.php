@include('create-comment')

<div class="container">
    {{-- <h1 class="text-center">{{ $post->title }}</h1> --}}
    @if ($post->comments->count() > 0)
        <p class="ms-4 mb-3 fs-3 fst-italic">Replies :</p>
        <div class="mb-2 me-4 ms-5">
            <ul class="list-group list-group-flush">
                @foreach ($post->comments as $comment)
                    <li class="list-group-item p-1 mb-3">
                        <small class="d-flex justify-content-between align-items-center mb-3">
                            <h5>{{ $comment->user->name }}</h5>
                            {{ $comment->created_at->diffForHumans() }}
                        </small>
                        <p class="card-text mb-3">{{ $comment->body }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
