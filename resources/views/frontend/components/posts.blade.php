

    <!-- Nested row for non-featured blog posts-->
    <div class="row">
        {{-- check category route  --}}
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
            {{-- Post title  --}}
            <div class="col-12 mb-2">
                <h3>Post</h3>
            </div>
        @endif

        @if (count($posts) == 0)
            <div class="alert alert-warning">
                There is no posts.
            </div>
        @endif

        @foreach ($posts as $post)
            <div class="col-lg-6">
                <!-- Blog post-->
                <div class="card mb-4">
                    <a href="#!"><img class="card-img-top" height="180" src="{{ asset($post->cover) }}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted d-flex justify-content-between "> <span>Post by <b>{{ $post->User->name }}</b></span> <span>{{  $post->created_at->diffForHumans() }}</span> </div>
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
