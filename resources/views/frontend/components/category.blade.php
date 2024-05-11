<div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    @if (count($categories) != 0)
                        <li>
                            <a href="{{ route('user.home') }}">All</a>
                        </li>
                        @foreach ($categories as $category)
                            <li><a href="{{ route('blog.category', $category->id) }}">{{ $category->name }}</a></li>
                        @endforeach
                    @else
                        <span class="text-muted text-sm">No categories.</span>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
