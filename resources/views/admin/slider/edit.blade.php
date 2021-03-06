@extends('admin.layouts.master')
@section('content')
    <div class="page-wrapper">
        <div class="col-sm-12">
            <div class="card card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <h1>Slider Edit Page</h1>
                <form method="POST" action="{{ route('slider.update') }}" class="form-horizontal mt-4">
                    @csrf
                    <input type="hidden" value="{{ $slider->id }}" name="id_slider">
                    <div class="form-group" style="width: 50%">
                        <label>Slider Title</label>
                        <input value="{{ $slider->title }}" type="text" class="form-control" name="slider_title">
                    </div>

                    <div class="form-group" style="width: 50%">
                        <label>Status</label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect">
                            <option selected disabled>Choose status</option>
                            <option value=" {{$slider->status }}" @if ($slider->status == 1) selected @endif >Active</option>
                            <option value=" {{$slider->status }}" @if ($slider->status == 0) selected @endif>Deactive</option>
                       
                        </select>
                    </div>

                    <div class="custom-file" style="width: 50%">
                        <label class="custom-file-label" for="inputGroupFile01">Choose files</label>
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="slider_image">

                        <p>Image now:</p>
                        <img style="width: 80px" src="{{ asset('img/slider_images') . '/' . $slider->image}}" alt="">
                    </div>



                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Edit Slider</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
