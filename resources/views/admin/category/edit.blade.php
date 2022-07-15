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
                <h1>Category Edit Page</h1>
                <form method="POST" action="{{ route('category.update') }}" class="form-horizontal mt-4">
                    @csrf
                    <input type="hidden" value="{{ $category->id }}" name="id_category">
                    <div class="form-group" style="width: 50%">
                        <label>Category Name</label>
                        <input value="{{ $category->name }}" type="text" class="form-control" name="category_name">
                    </div>

                    <div class="form-group" style="width: 50%">
                        <label>Status</label>
                        <select class="custom-select col-12" id="inlineFormCustomSelect">
                            <option selected disabled>Choose status</option>
                            <option value="{{ $category->status }}">Active</option>
                            <option value="{{ $category->status }}">Deactive</option>
                        </select>
                    </div>

                    <div class="custom-file" style="width: 50%">
                        <label class="custom-file-label" for="inputGroupFile01">Choose files</label>
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="category_icon" value="category_icon">

                    </div>

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="submit" class="btn waves-effect waves-light btn-success">Edit Category</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
