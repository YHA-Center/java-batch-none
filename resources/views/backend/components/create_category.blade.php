@extends('layouts.backend')

@section('content')

<a href="{{ route('user.profile') }}" class="btn btn-link">Back</a>

<div class="card mb-5">
    <div class="card-header">
        <h5 class="text-primary">Create new category</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="category_name" class="form-label">Name</label>
                <input type="text" name="category_name" id="category_name"
                class="form-control @error('category_name') is-invalid @enderror">
                @error('category_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <h5 class="text-muted">Category List</h5>
    </div>
    <div class="col-12">
        {{-- check category count  --}}
        @if (count($categories) == 0)
            <span class="text-muted">Empty!</span>
        @else

        {{-- show the category table  --}}
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Category Name</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($categories as $category)
              <tr>
                <th scope="row">{{ $category->name }}</th>
                <td>
                    <a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary btn-icon-split btn-sm">
                        <span class="icon">
                            <i class="fas fa-pen"></i>
                        </span>
                        <span class="text">Edit</span>
                    </a>
                    <a href="{{ route('category.delete', $category->id) }}" class="btn btn-danger btn-sm btn-icon-split">
                        <span class="icon">
                            <i class="fas fa-trash"></i>
                        </span>
                        <span class="text">Delete</span>
                    </a>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>

        @endif

    </div>
</div>

@endsection
