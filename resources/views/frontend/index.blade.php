@extends('layouts.frontend')

@section('content')

<!-- Page header with logo and tagline-->
<header class="bg-light border-bottom mb-4">
</header>
<!-- Page content-->
<div class="container">
    <div class="row">
        @if (request()->routeIs('user.home'))
        <div class="col-12">
            <h3 class="mb-2">Feature Post</h3>
        </div>
        @endif
        <!-- Blog entries-->
        <div class="col-lg-8 px-3">
            {{-- feature post goes here  --}}
            @include('frontend.components.feature_post')
            {{-- posts  --}}
            @include('frontend.components.posts')
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">

            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <form action="{{ route('blog.search') }}" method="POST" class="d-flex gap-2">
                        @csrf
                        <div class="input-group">
                            <input class="form-control" name="searchTerm" @if (request()->routeIs('blog.search'))
                                value="{{ $term }}"
                            @endif
                             type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                            <button class="btn btn-primary" id="button-search" type="sumbit">Go!</button>
                        </div>
                        @if (request()->routeIs('blog.search'))
                            <a href="{{ route('user.home') }}" class="btn-danger btn">Clear</a>
                        @endif
                    </form>
                </div>
            </div>

            <!-- Categories widget-->
            @include('frontend.components.category')

        </div>
    </div>
</div>

@endsection
