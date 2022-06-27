@extends('admin.layouts.master')
@section('content')
<div class="page-wrapper">
        <div class="col-sm-12">
            <div class="card card-body">
                <h1>Product Create Page</h1>
                <form class="form-horizontal mt-4">  
                    <div class="form-group" style="width: 50%">
                        <label>Product Name</label>
                        <input type="text" class="form-control" name="product_name" value="product_name">
                    </div>

                    <div class="form-group" style="width: 50%">
                        <label>Product Description</label>
                        <textarea class="form-control" rows="5" name="product_description" value="product_description"></textarea>
                    </div>
                    {{-- @foreach($categories as $category)
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">{{ $category->name }}</label>
                    </div>
                    @endforeach --}}

                    <div class="custom-file" style="width: 50%">
                        <input type="file" class="custom-file-input" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>

                    <div class="form-group" style="width: 50%; padding-top: 20px">
                        <label>Product Price</label>
                        <input type="number" class="form-control" name="product_price" value="product_price">
                    </div>

                    <div class="col-sm-4">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="is_bestseller" class="custom-control-input" value="productStatus">
                            <label class="custom-control-label" for="customRadio1">Bestseller Product</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="is_new" class="custom-control-input" value="productStatus">
                            <label class="custom-control-label" for="customRadio2">New Product</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="is_onsale" class="custom-control-input" value="productStatus">
                            <label class="custom-control-label" for="customRadio2">Onsale Product</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio4" name="is_chance" class="custom-control-input" value="productStatus">
                            <label class="custom-control-label" for="customRadio2">Chance of Day Product</label>
                        </div>
                    </div>

                    <div class="button-group" style="margin-left: 450px; padding-top: 20px">
                        <button type="button" class="btn waves-effect waves-light btn-success">Add Product</button>
                    </div> 

                </form>
            </div>
        </div>
</div>
@endsection

