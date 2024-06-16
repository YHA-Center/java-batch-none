@extends('layouts.backend')


@section('content')

    {{-- title  --}}
    <div class="row">
        <div class="col-4 d-flex align-items-center justify-content-start gap-2">
            <a href="{{ route('post.create') }}" class="btn btn-primary">New Post</a>
            <a href="{{ route('category.create') }}" class="btn btn-secondary">New Category</a>
        </div>
        <div class="col-8">
        </div>
    </div>

    {{-- posts list  --}}
    <div class="row mt-4">

        @if (count($posts) == 0)
            <span class="text-muted">Empty!</span>
        @endif

        @foreach ($posts as $post)
            <div class="col-12 col-md-6 col-lg-4">
                <!-- Blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" height="180" src="{{ asset($post->cover) }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted d-flex justify-content-between "><span>{{  $post->created_at->diffForHumans() }}</span> </div>
                        <h2 class="card-title h4"> {{ $post->title }} </h2>
                        <p class="card-text">
                            <?= Str::words($post->description, 15, '...') ?>
                        </p>
                        <a class="btn btn-primary" href="{{ route('blog.get', $post->id) }}">Read more →</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
