@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"><h4 class="card-title">Product Table </h4></div>
                        <div style="text-align: right" class="col-md-6"><a href="{{ route('product.create') }}" class="btn waves-effect waves-light btn-success">Add product</a></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                {{-- <th>Image</th> --}}
                                <th>Product Name</th>
                                <th>Slug</th>
                                <th>Price</th>
                                <th>Status</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                {{-- <td><img src="{{ $product_details->image}}" /></td> --}}
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->slug }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="status{{ $product->id }}" id="status{{ $product->id }}">
                                        <label class="custom-control-label" for="status{{ $product->id }}"></label>
                                    </div>
                                </td>
                                    <td> <a href="{{ route('product.edit',$product->id) }}" class="btn waves-effect waves-light btn-warning">Edit</a></td>
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
