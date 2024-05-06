@extends('layouts.frontend')

@section('content')

<!-- Page header with logo and tagline-->
<header class="bg-light border-bottom mb-4">
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        @if (!request()->routeIs('blog.category'))
        <div class="col-12">
            <h3 class="mb-2">Feature Post</h3>
        </div>
        @endif
        <!-- Blog entries-->
        <div class="col-lg-8">
            <!-- Featured blog post-->
            @if (!request()->routeIs('blog.category'))
            <div class="card mb-4">
                <a href="#!"><img class="card-img-top" height="300" src="{{ asset($feature_post->cover) }}" alt="..." /></a>
                <div class="card-body">
                    <div class="small text-muted">
                        {{ $feature_post->created_at->diffForHumans() }}
                    </div>
                    <h2 class="card-title">{{ $feature_post->title }}</h2>
                    <p class="card-text">
                        <?= Str::words($feature_post->description, 20, '...') ?>
                    </p>
                    <a class="btn btn-primary" href="{{ route('blog.get', $feature_post->id) }}">Read more →</a>
                </div>
            </div>
            @endif
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                @if (request()->routeIs('blog.category'))
                <div class="col-12 mb-2">
                    <a href="{{ route('user.home') }}">Back</a>
                    <h3>Category - {{ $category->name }}</h3>

                    @if (count($posts) == 0)
                    <div class="alert alert-warning">
                        There is no posts.
                    </div>
                    @endif
                </div>
                @else
                <div class="col-12 mb-2">
                    <h3>Post</h3>
                </div>
                @endif

                @foreach ($posts as $post)
                <div class="col-lg-6">
                    <!-- Blog post-->
                    <div class="card mb-4">
                        <a href="#!"><img class="card-img-top" height="180" src="{{ asset($post->cover) }}" alt="..." /></a>
                        <div class="card-body">
                            <div class="small text-muted"> {{  $post->created_at->diffForHumans() }} </div>
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
            <!-- Pagination-->
            {{ $posts->links() }}
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="{{ route('user.home') }}">All</a>
                                </li>
                                @foreach ($categories as $category)
                                    <li><a href="{{ route('blog.category', $category->id) }}">{{ $category->name }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Latest Posts</div>
                <div class="card-body">
                    @foreach ($latest_post as $p)
                    <div class="mb-3 py-2 px-3" style="">
                        <a href="{{ route('blog.get', $p->id) }}" class="text-primary text-bold text-decoration-none">{{ $p->title }}</a>
                        <p><?= Str::words($p->description, 15, '...') ?></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
