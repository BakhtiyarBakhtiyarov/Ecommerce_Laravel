@extends('admin.layouts.master')
@section('css')
@stop
@section('content')
    <div class="page-wrapper">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product Table </h4>
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
                                <td>1</td>
                                {{-- <td><img src="{{ $product_details->image}}" /></td> --}}
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->slug }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <div class="input-group">
                                    <ul class="icheck-list"><li>
                                        <input type="checkbox" class="check" id="minimal-checkbox-2" checked>
                                        <label for="minimal-checkbox-2">Checkbox 2</label>
                                    </li>
                                    </ul>
                                   
                                    </div></td>
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
