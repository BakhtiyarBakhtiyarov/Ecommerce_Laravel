@extends('admin.layouts.master')
@section('css')
@stop
@section('content')
    <div class="page-wrapper">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"><h4 class="card-title">Category Table </h4></div>
                        <div style="text-align: right" class="col-md-6"><a href="{{ route('category.create') }}" class="btn waves-effect waves-light btn-success">Add Category</a></div>
                    </div>
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
                            @foreach($categories as $key => $category)
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><img src="{{ $category->icon}}" /></td>
                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1"></label>
                                  </div>
                                </td>
                                <td> <button type="button" class="btn waves-effect waves-light btn-warning">Edit</button></td>
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
