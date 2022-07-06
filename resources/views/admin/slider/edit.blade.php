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

                    <div class="custom-file" style="width: 50%">
                        <label class="custom-file-label" for="inputGroupFile01">Choose files</label>
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="slider_image">

                    </div>

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Edit Slider</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
