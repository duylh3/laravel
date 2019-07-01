@extends('outside::layouts.master')
@section('content')
		<!-- contact area start -->
		<section class="ptb-80" id="email-us">
			<div class="container">
				<div class="row">
				    <div class="col-lg-6">
				        <div class="contact-form">
                            <h4>Thông tin liên hệ</h4>
				            <form action="#">
				                <input type="text" placeholder="Tên">
				                <input type="email" placeholder="Email">
				                <textarea placeholder="Nội dung"></textarea>
				                <button class="krishok-btn">Gửi</button>
				            </form>
				        </div>
				    </div>
				    <div class="col-lg-6">
				        <div class="contact-form">
                            <h4>Địa chỉ</h4>
				            <div class="contact-area">
				                <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum is simply dummy text psum has been standard dummy text ever</p>
				                <p>We are open from 9am — 5pm week days.</p>
				                <p>652 Main Road, Apt 12 <br> New York, USA 10033</p>
				                <p>Email: example@mail.com <br> Phone: 0123 4567 8913</p>
				            </div>
				        </div>
				    </div>
				</div>
			</div>
		</section><!-- contact gallery area end -->
@endsection