@extends('outside::layouts.master')
@section('content')
<section class="product pt-75">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <div class="carousel-inner">
                        <div class="item active carousel-item">
                            <div class="item-carousel-wrap">
                                <?php
                                    $path = '/upload/' . $object['image'];
                                ?>
                                <img src="{!! $path !!}" alt="product-details" height="290" width="505">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">
                <div class="product-details-content pb-75">
                    <div class="product-details-left">
                        <div class="product-details-title">
                            <h3>{!! $object['product_name'] !!}</h3>
                        </div>
                        <div class="product-details-category">
                            <p>In Stock</p>
                        </div>
                    </div>
                    <div class="product-details-descrip">
                        <h3>Description</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- product detail area end -->
<!-- sell area start -->
<section class="ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="sec-title mb-30">
                    <h2>Sản phẩm cùng loại</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing eiusmod tempor incididunt ut labore et  consectetur adipisicing eiusmod dolore magna aliqua. </p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($types as $item)
            <div class="col-lg-3 col-sm-6">
                <div class="sell-item max-width-360 mt-30">
                    <div class="product-img">
                        <?php
                            $path = '/upload/' . $item['image'];
                        ?>   

                        <img src="{!!$path!!}" alt="" height="235" width="270">
                    </div>
                    <p><a href="{!! $item['product_id'] !!}">{!!$item['product_name']!!}</a></p>
                    <h5>{!!$item['product_description']!!}</h5>
                </div>
            </div>
            @endforeach
        </div>      
    </div>
</section><!-- sell area end -->
@endsection

