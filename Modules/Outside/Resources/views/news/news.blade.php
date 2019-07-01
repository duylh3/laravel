@extends('outside::layouts.master')
@section('content')
<section class="blog-area ptb-80">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-md-12">
                         @foreach($news as $item)
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="single-post">
                                    <div class="flexbox-center">
                                        <div class="post-thumbnail">
                                            <?php
                                                $path = '/upload/' . $item['article_image'];
                                            ?>
                                           <img src="{!! $path !!}" alt="" class="img-responsive">
                                        </div>
                                         <div class="post-details">
                                             <h5>
                                                 <a href="cert-detail/{!! $item['article_id'] !!}">{!! $item['article_title'] !!}</a>
                                             </h5>
                                             <div class="post-author">
                                                 <p> 22 January, 2019</p>
                                             </div>
                                            <p>{!! $item['article_description'] !!}</p>
                                            <a href="cert-detail/{!! $item['article_id'] !!}" class="read-more">Read more <i class="fa fa-angle-right"></i></a>
                                         </div>
                                    </div>
                                </div>
                            </div>
						</div>
                        @endforeach
					</div>
					<div class="col-lg-3 offset-lg-0 col-md-6 offset-md-3 col-sm-8 offset-sm-2">
					    <div class="widget">
					        <h4 class="widget-title">Latest Content</h4>
					        <ul>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					            <li><a href="#">The digital revolution in higher education...</a></li>
					        </ul>
					    </div>
					</div>
				</div>
			</div>
</section><!-- blog area end -->
@endsection