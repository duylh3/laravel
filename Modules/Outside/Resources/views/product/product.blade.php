@extends('outside::layouts.master')
@section('content')
<!-- hero area start -->
<section class="theme2 hero-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="hero-area-content">
                    <h1>A Place of All Organic Products</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                </div>
            </div>
        </div>
    </div>
</section><!-- hero area end -->
<!-- all product area start -->
<section class="all-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title pt-75">
                    <h2>Bưởi Organic</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                </div>
            </div>
        </div>      
        <div class="row">
            @foreach($buoi as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="single-product">
                    <div class="single-product-img ">
                        <div class="product-img">
                            <?php
                                $path = '/upload/' . $item['image'];
                            ?>
                            <img src="{!! $path !!}" alt="">
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="show-detail/{!! $item['product_id'] !!}"><h4>{!! $item['product_name'] !!}</h4></a>
                            <p>{!! $item['product_description'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>      
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title pt-75">
                    <h2>Cam Organic</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($cam as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="single-product max-width-360">
                    <div class="single-product-img">
                        <div class="product-img">
                            <?php
                                $path = '/upload/' . $item['image'];
                            ?>
                            <img src="{!! $path !!}" alt="" height="235" width="270">
                        </div>
                    </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="show-detail/{!! $item['product_id'] !!}"><h4>{!! $item['product_name'] !!}</h4></a>
                            <p>{!! $item['product_description'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section><!-- all product area end -->
@endsection