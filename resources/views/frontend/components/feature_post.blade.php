<div class="row">
    <!-- Featured blog post-->
    @if (request()->routeIs('user.home'))
    @if($feature_post != null)
        <div class="card mb-4">
            <a href="#!"><img class="card-img-top" height="300" src="{{ asset($feature_post->cover) }}" alt="..." /></a>
            <div class="card-body">
                <div class="small text-muted">
                    Post by <b>{{ $feature_post->User->name }}</b> | {{ $feature_post->created_at->diffForHumans() }}
                </div>
                <h2 class="card-title">{{ $feature_post->title }}</h2>
                <p class="card-text">
                    <?= Str::words($feature_post->description, 20, '...') ?>
                </p>
                <div class="flex items-center justify-start">
                    <div class="fa fa-arrow"></div>
                    <a class="btn btn-primary" href="{{ route('blog.get', $feature_post->id) }}">Read more →</a>
                </div>
            </div>
        </div>
    @else
        <div class="alert alert-warning">
            There is no feature post.
        </div>
    @endif
    @endif
</div>
