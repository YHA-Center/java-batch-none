@extends('layouts.backend')

@section('content')

    <div class="container-fluid p-5">

        @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
        @endif

        <div class="card">
            <div class="card-header">
                <h4>Profile</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('user.update') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" value="{{ Auth::user()->name }}" id="name"
                        class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" value="{{ Auth::user()->email }}" id="email"
                        class="form-control @error('email') is-invalid @enderror" disabled>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="cpassword" class="form-label">Current Password</label>
                        <input type="password" name="cpassword" value="" id="cpassword"
                        class="form-control @error('cpassword') is-invalid @enderror">
                        @error('cpassword')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="npassword" class="form-label">New Password</label>
                        <input type="password" name="npassword" value="" id="npassword"
                        class="form-control @error('npassword') is-invalid @enderror">
                        @error('npassword')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <a  class="btn btn-secondary" href="{{ route('post.list') }}">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
