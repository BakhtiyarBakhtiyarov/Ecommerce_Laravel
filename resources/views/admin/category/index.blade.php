@extends('admin.layouts.master')
@section('css')
@stop
@section('content')
    <div class="page-wrapper">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Category Table </h4>
                    @if(session('success'))
                        <div>{{ session('success') }}</div>
                    @endif
                    <a href="{{ route('category.create') }}" type="button" class="btn waves-effect waves-light btn-success">Add category</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ $category->icon}}" /></td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="status{{ $category->id }}" id="status{{ $category->id }}">
                                        <label class="custom-control-label" for="status{{ $category->id }}"></label>
                                    </div>
                                </td>
                                <td> <a href="{{ route('category.edit',$category->id) }}" class="btn waves-effect waves-light btn-warning">Edit</a></td>
                                <td> <button type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection