@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">

            <a href="{{ route('user.home') }}" class="btn-link">back</a>
            <h3 class=" text-primary text-uppercase">Login</h3>
            <span class="mb-4 text-muted block text-sm">Please, login to your account!</span>
            <div class="mb-4"></div>

            <form method="POST" class="p-3" action="{{ route('login') }}">
                @csrf
                {{-- email  --}}
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleFormControlInput1" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                    @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="d-flex align-items-center justify-content-between mt-2">
                    @if (Route::has('password.request'))
                        <a class="btn btn-link text-sm" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                </div>
            </form>
        </div>
    </div>
</div>
@endsection
