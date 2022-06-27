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
                        <div style="text-align: right" class="col-md-6"><a href="{{ route('slider.create') }}" class="btn waves-effect waves-light btn-success">Add slider</a></div>
                    </div>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Image</th>
                                <th>Slider Title</th>
                                <th>Status</th>                               
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($sliders as $key => $slider)
                            <tr>
                                <td><?= ++$key ?></td>
                                <td><img style="width: 50px" src="{{ $slider->image}}" /></td>
                                <td>{{ $slider->title }}</td>
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
