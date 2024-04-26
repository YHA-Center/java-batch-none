@extends('layouts.backend')

@section('content')

    <div class="container-fluid p-5">

        <div class="card">
            <div class="card-header">
                <h4>Create new category</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="category_name" class="form-label">Name</label>
                        <input type="text" name="category_name" value="{{ $category->name }}" id="category_name"
                        class="form-control @error('category_name') is-invalid @enderror">
                        @error('category_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
