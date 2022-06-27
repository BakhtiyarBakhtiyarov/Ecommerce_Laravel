@extends('admin.layouts.master')
@section('content')
<div class="page-wrapper">
        <div class="col-sm-12">
            <div class="card card-body">
                <h1>Category Create Page</h1>
                <form class="form-horizontal mt-4">  
                    <div class="form-group" style="width: 50%">
                        <label>Category Name</label>
                        <input type="text" class="form-control" name="category_name">
                    </div>

                    <div class="custom-file" style="width: 50%">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="category_icon" value="category_icon">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="button" class="btn waves-effect waves-light btn-success">Add Category</button>
                    </div> 

                </form>
            </div>
        </div>
</div>
@endsection
