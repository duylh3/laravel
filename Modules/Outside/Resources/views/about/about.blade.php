@extends('outside::layouts.master')
@section('content')
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
<!-- about area start -->
<section class="ptb-80">
    <div class="container">
        @foreach($about as $row)
        <div class="row ptb-30">
            <div class="col-lg-6">
                <div class="about-area-content">
                    <?php
                    $path = '/upload/' . $row['article_image'];
                    ?>
                    <img src="{!!$path!!}" class="about-image">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-area-content">
                    <h2>{!! $row['article_title'] !!}</h2>
                    <p>{!! $row['article_description']!!}</p>
                    <a href="about-detail/{!! $row['article_id'] !!}" class="krishok-btn">Xem thông tin</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<!-- testimonial area start -->
@endsection
