<div class="card mb-4">
    <div class="card-header">Latest Posts</div>
    <div class="card-body">
        @if (count($latest_post) != 0)
        @foreach ($latest_post as $p)
        <div class="mb-3 py-2" style="">
            <a href="{{ route('blog.get', $p->id) }}" class="text-primary text-bold text-decoration-none">{{ $p->title }}</a>
            <p class="text-sm text-muted"><?= Str::words($p->description, 10, '...') ?></p>
        </div>
        @endforeach
        @else
            <span class="text-muted text-sm">No posts.</span>
        @endif
    </div>
</div>
