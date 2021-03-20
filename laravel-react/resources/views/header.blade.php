<div id="header">
<div class="container">
            <div class="pull-left auto-width-left mt-2">
					<ul class="top-menu menu-beta l-inline">
						<li><a href="#"><i class="fa fa-home"></i> K448/67 Trưng Nữ Vương-Đà Nẵng</a></li>
						<li><a href="#"><i class="fa fa-phone"></i> 0905 463 037</a></li>
					</ul>
				</div>
                <div class="pull-right auto-width-right mt-2">
					<ul class="top-details menu-beta l-inline">
                    <li><a href="#">Chào bạn</a></li>
                    <li><a href="{{route('users.logout')}}">Đăng xuất</a></li>
                    <li><a href="{{route('users.signup')}}">Đăng kí</a></li>
						<li><a href="{{route('users.login')}}">Đăng nhập</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
                </div>
<div class="Header1 container-fluid d-flex d-none d-xl-block align-items-center bg-light">
        <div class="row">
            <div class="col-2">
                <img src="source\assets\dest\images\tải xuống.jpg" height="50px" class="w-50" >

            </div>
            <div class="col-4 d-flex justify-content-start">
            <nav class="main-menu">
                <ul class="nav mt-2">
                <li><a href="{{route('users.index')}}">Trang chủ</a></li>
                <li><a href="#">Loại Sản phẩm</a>
							<ul class="sub-menu">
								<li><a href="{{route('users.category')}}"></a></li>
							</ul>
						</li>
                        <li><a href="#">Liên hệ</a></li>
                </ul>
            </nav>
            </div>
            <div class="col-4 d-flex justify-content-end">
            <form role="search" method="get" id="searchform" action="{{route('users.search')}}">
					        <input type="text" value="" name="search" id="s" placeholder="Nhập từ khóa..." class="mt-2" />
					        <button class="fas fa-search mb-1" type="submit" id="searchsubmit"></button>
						</form>
			</div>
			<div class="col-2 d-flex justify-content-center mt-3">
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng<i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								<div class="cart-item">
								<a class="cart-item-delete" href="{{route('users.delcart')}}"><i class="fa fa-times"></i></a>
									<div class="media">
										<a class="pull-left" href="#"><img src="source/image/product/" alt=""></a>
										<div class="media-body">
										<span class="cart-item-title"></span>
										<span class="cart-item-amount"><span></span></span>
										</div>
									</div>
								</div>

								<div class="cart-caption">
								<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value"></span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="{{route('dathang')}}" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
        </div>
    </div>
    </div>