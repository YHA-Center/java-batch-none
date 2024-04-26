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
            <h3>Category List</h3>
            <a href="{{ route('category.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="card-body">
            <table class="" style="">
                <tr class="p-3">
                    <th>NO.</th>
                    <th>Category Name</th>
                    <th>Actions.</th>
                </tr>
                <tbody>
                    @foreach($categories as $row)
                    <tr>
                        <td>{{ $row['id'] }}</td>
                        <td> {{ $row['name'] }} </td>
                        <td>
                            <a href="{{ route('category.edit', $row->id) }}" class="btn btn-primary btn-icon-split btn-sm">
                                <span class="icon">
                                    <i class="fas fa-pen"></i>
                                </span>
                                <span class="text">Edit</span>
                            </a>
                            <a href="{{ route('category.delete', $row->id) }}" class="btn btn-danger btn-sm btn-icon-split">
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
