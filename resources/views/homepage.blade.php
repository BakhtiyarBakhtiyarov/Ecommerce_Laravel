@extends('layouts.master')
@section('title',$title)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="panel panel-default">
                    <div class="panel-heading">Categories</div>
                    <div class="list-group categories">
                        @foreach($categories as $category)
                            <a target="_blank" href="{{ route('category.show',$category->id) }}" class="list-group-item"><img src="{{ $category->icon }}"/> {{ $category->name }} </a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                        @foreach($sliders as $slider)
                        <div class="item @if($sliders[0] == $slider) active  @endif">
                            <img src="{{ $slider->image }}" alt="{{ $slider->title }}">
                            <div class="carousel-caption">
                                {{ $slider->title }}
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-md-3">
                <div class="panel panel-default" id="sidebar-product">
                    <div class="panel-heading">Chance of day</div>
                    <div class="panel-body">
                        <a href="#">
                            {{-- <img src="{{ $chance->img }}" class="img-responsive"> --}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">New Products</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($new_products as $new_product)
                            <div class="col-md-3 product">
                                <a href="{{ route('product.show',$new_product->slug) }}"><img src="{{ $new_product->img }}"></a>
                                <p><a href="#">{{ $new_product->name }}</a></p>
                                <p class="price">{{ $new_product->price }} ₼</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">Best Seller Products</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach($best_sellers as $best_seller)
                            <div class="col-md-3 product">
                                <a href="#"><img src="{{ $best_seller->img }}"></a>
                                <p><a href="#">{{ $best_seller->name }}</a></p>
                                <p class="price">{{ $best_seller->price }} ₼</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="products">
            <div class="panel panel-theme">
                <div class="panel-heading">İndirimli Ürünler</div>
                <div class="panel-body">
                    <div class="row">
                        @foreach ($on_sales as $on_sale)   
                       <div class="col-md-3 product">
                         <a href="{{ route('product.show',$on_sale->slug) }}"><img src="{{ $on_sale->img }}"></a>
                          <p><a href="#">{{ $on_sale->name}}</a></p>
                          <p class="price"> {{ $on_sale->price }} ₼</p>
                       </div>
                       @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
