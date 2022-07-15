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
                <h1>Slider Create Page</h1>
                <form enctype="multipart/form-data" method="POST" action="{{ route('slider.store') }}" class="form-horizontal mt-4">
                    @csrf 
                    <div class="form-group" style="width: 50%">
                        <label>Slider Title</label>
                        <input type="text" class="form-control" name="slider_title">
                    </div>

                    <div class="form-group" style="width: 50%">
                        <label>Status</label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect">
                            <option selected disabled>Choose status</option>
                            <option value="0">Active</option>
                            <option value="1">Deactive</option>
                        </select>
                    </div>

                    <div class="custom-file" style="width: 50%">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="slider_image" value="slider_image">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Add Slider</button>
                    </div> 

                </form>
            </div>
        </div>
</div>
@endsection

