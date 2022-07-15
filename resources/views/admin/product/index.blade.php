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
                                {{-- <td><img style="width: 80px" src="{{ asset('img/product_images') . '/' . $product->detail->image}}" /></td>                                <td>{{ $category->name }}</td> --}}
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
                                    <td><button onclick="ProductDelete('{{$product->id}}')" type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function ProductDelete(id) {
        swal({
            title: "Warning",
            text: "Are you sure?",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            buttons: ["No", "Yes"],
        })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: "{{ route('product.delete') }}",
                        data: { "_token": "{{ csrf_token() }}", id:id },
                        method: "POST",
                        success: function (data) {
                            if(data==="ok"){
                                swal("Success!", "Product deleted!", "success");
                                window.setTimeout(function(){location.reload()},2000)
                            }else{
                                swal("Error!", "Product didn't deleted!", "error");
                            }
                        },
                        error: function (x, sts) {
                            console.log("Error...");
                            console.log('no');
                        },
                    });
                } else {
                    swal("Cancelled!");
                }
            });
    }
</script>

@endsection
