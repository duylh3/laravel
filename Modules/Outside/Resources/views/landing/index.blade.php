@extends('outside::layouts.master')
@section('content')
        <!-- hero area start -->
        <section class="hero-area ptb-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-8 col-sm-10">
                        <div class="hero-area-content ptb-80">
                            <h1>A Place of All Organic Products</h1>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="image-slider">
                <div class="item-content">
                    <div class="item-slider item-slider1"></div>
                    <div class="item-slider item-slider2"></div>
                </div>
            </div>
            <div class="item-thumbnail">
                <a href="#" data-slide-index="0">
                    <div class="list-thumb list-thumb1"></div>
                </a>
                <a href="#" data-slide-index="1">
                    <div class="list-thumb list-thumb2"></div>
                </a>
            </div><!--/Slider thumbnail-->
        </section><!-- hero area end -->

        <!-- -->
        <section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-area-content">
                    <img src="{{asset('outside/img/qt.jpg')}}" class="about-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-area-content">
                    <h2>Giới thiệu</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- product area start -->
        <section class="product ptb-20">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sec-title">
                            <h2>Sản phẩm hữu cơ</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                @foreach($products as $item)
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-product max-width-360">
                            <div class="single-product-img">
                                <div class="product-img">
                                    <?php
                                        $path = '/upload/' . $item['image'];
                                    ?>
                                    <img src="{!! $path !!}" class="product-image">
                                </div>
                        </div>
                    <div class="product-details">
                        <div class="product-info">
                            <a href="/outside/show-detail/{!! $item['product_id'] !!}"><h4>{!! $item['product_name'] !!}</h4></a>
                            <p>{!! $item['product_description'] !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
                </div>
            </div>
        </section><!-- product area end -->
        @endsection
        
