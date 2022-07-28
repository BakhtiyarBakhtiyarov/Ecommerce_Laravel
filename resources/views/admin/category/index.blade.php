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
                    <div class="col-md-6" style="text-align: right">
                    @if(session('success'))
                        <div>{{ session('success') }}</div>
                    @endif
                    
                    <a href="{{ route('category.create') }}" type="button" class="btn waves-effect waves-light btn-success">Add category</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img style="width: 80px" src="{{ asset('img/category_images') . '/' . $category->icon}}" /></td>                                <td>{{ $category->name }}</td>
                                <td>{{ $category->slug }}</td>
                                <td> <a href="{{ route('category.edit',$category->id) }}" class="btn waves-effect waves-light btn-warning">Edit</a></td>
                                <td> <button onclick="CategoryDelete('{{$category->id}}')" type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    function CategoryDelete(id) {
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
                        url: "{{ route('category.delete') }}",
                        data: { "_token": "{{ csrf_token() }}", id:id },
                        method: "POST",
                        success: function (data) {
                            if(data==="ok"){
                                swal("Success!", "Category deleted!", "success");
                                window.setTimeout(function(){location.reload()},2000)
                            }else{
                                swal("Error!", "Category didn't deleted!", "error");
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