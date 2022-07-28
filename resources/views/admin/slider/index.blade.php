@extends('admin.layouts.master')
@section('css')
@stop
@section('content')
    <div class="page-wrapper">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6"><h4 class="card-title">Slider Table </h4></div>
                        <div style="text-align: right" class="col-md-6">
                        @if(session('success'))
                            <div>{{ session('success') }}</div>
                        @endif
                        <a href="{{ route('slider.create') }}" class="btn waves-effect waves-light btn-success">Add slider</a></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Slider Title</th>                               
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $key => $slider)
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><img style="width: 80px" src="{{ asset('img/slider_images') . '/' . $slider->image}}"/></td>                             
                                <td>{{ $slider->title }}</td>
                                <td> <a href="{{ route('slider.edit',$slider->id) }}" class="btn waves-effect waves-light btn-warning">Edit</a></td>
                                <td> <button onclick="SliderDelete('{{$slider->id}}')" type="button" class="btn waves-effect waves-light btn-danger">Delete</button></td>
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
        function SliderDelete(id) {
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
                            url: "{{ route('slider.delete') }}",
                            data: { "_token": "{{ csrf_token() }}", id:id },
                            method: "POST",
                            success: function (data) {
                                if(data==="ok"){
                                    swal("Success!", "Slider deleted!", "success");
                                    window.setTimeout(function(){location.reload()},2000)
                                }else{
                                    swal("Error!", "Slider didn't deleted!", "error");
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
