@extends('layouts.backend')

@section('content')
<div class="container-fluid p-4">

    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3>Post List</h3>
            <a href="{{ route('post.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <table class="table  table-bordered" width="100%" style="">
                <tr class="p-3">
                    <th>No.</th>
                    <th>Title</th>
                    <th>Category Name</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                </tr>
                <tbody>
                    @foreach($posts as $row)
                    <tr >
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->Category->name }}</td>
                        <td>{{ date('d/m/Y', strtotime($row->created_at)) }}</td>
                        <td>
                            {{-- Detail button  --}}
                            <a href="{{ route('post.edit', $row->id) }}" class="btn btn-secondary btn-icon-split btn-sm">
                                <span class="icon">
                                    <i class="fas fa-file"></i>
                                </span>
                                <span class="text">Detail</span>
                            </a>
                            <a href="{{ route('post.edit', $row->id) }}" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                            <a href="{{ route('post.delete', $row->id) }}" class="btn btn-danger btn-sm btn-icon-split">
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
        </div>
    </div>
</div>
@endsection
