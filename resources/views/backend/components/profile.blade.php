<div class="card">
    <div class="card-header">Profile</div>
    <div class="card-body">
        <div class="row">
            <div class="col-12">
                {{-- for image  --}}
            </div>
            <div class="col-4 mb-3">Username</div><div class="col-8">{{ Auth::user()->name }}</div>
            <div class="col-4 mb-3">Email</div><div class="col-8">{{ Auth::user()->email }}</div>
            <div class="col-4 mb-3">Created on</div><div class="col-8">{{ Auth::user()->created_at->diffForHumans() }}</div>
        </div>
        {{-- account status  --}}
        <div class="row mb-2">
            <div class="col-12 my-2">
                <h5 class="text-md text-muted text-underline">Status</h5>
            </div>
            <div class="col-4">
                <span class="text-muted">Followers: 0</span>
            </div>
            <div class="col-4">
                <span class="text-muted">Likes: 0 </span>
            </div>
            <div class="col-4">
                <span class="text-muted">Comments: 0</span>
            </div>
        </div>
        {{-- follow button  --}}
        @if (Auth::user()->id != $user->id)
            <div class="row my-3">
                <div class="col-12">
                    <a href="" class="rounded-pill border border-2 text-secondary px-4 py-1 text-decoration-none">
                        Follow
                    </a>
                </div>
            </div>
        @endif
    </div>
</div>
