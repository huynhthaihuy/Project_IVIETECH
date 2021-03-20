@extends('master')
@section('content')
<div class="Body1--Style container-fluid d-flex px-0 py-0 ">
        <div id="carouselExampleIndicators" class="Body1--Style carousel slide w-100 h-100" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="Body1--Style carousel-inner header2 d-flex h-100">
                <div class="Body1--Style carousel-item active">
                    <img class="d-block w-100 h-100" src="{{asset('source/image/slide/new.png')}}" alt="First slide" height="100%">
                    <div class="carousel-caption h-50 text-center">
                        <form action="{{route('users.contact')}}" method="GET">
                        <button type="submit" class="btn btn-primary mt-4">Liên Hệ</button>
						</form>
                        <form action="#" method="GET">
                        <button type="button" class="btn btn-success mt-4">Xem Chi Tiết</button>
                        </form>
                    </div>
                </div>
                <div class="Body1--Style carousel-item ">
                    <img class="d-block w-100 h-100" src="{{asset('source/image/slide/reno.png')}}" alt="Second slide">
                    <div class="carousel-caption h-50 text-center">
                        <form action="{{route('users.contact')}}" method="GET">
                        <button type="submit" class="btn btn-primary mt-4">Liên Hệ</button>
						</form>
                        <button type="button" class="btn btn-success mt-4">Xem Chi Tiết</button>
                    </div>
                </div>
                <div class="Body1--Style carousel-item">
                    <img class="d-block w-100 h-100" src="{{asset('source/image/slide/issac.jpg')}}" alt="Third slide" height="600px">
                    <div class="carousel-caption h-50 text-center">
                        <form action="{{route('users.contact')}}" method="GET">
                        <button type="submit" class="btn btn-primary mt-4">Liên Hệ</button>
						</form>
                        <button type="button" class="btn btn-success mt-4">Xem Chi Tiết</button>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="container mt-3">
            <h4>Sản Phẩm Mới</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy sản phẩm</p>
								<div class="clearfix"></div>
							</div>
        <div class="row">
								<div class="col-sm-3">
									<div class="single-item">

                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										<div class="single-item-header">
											<a href="{{route('users.detail')}}"><img src="source/image/product/" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"></p>
											<p class="single-item-price">
                                            <span class="flash-sale"></span>
                                            <span class="flash-del"></span>
                                            <span class="flash-sale"></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('users.add')}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('users.detail')}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('users.detail')}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
                                </div>
                            </div>
                            <div class="row"></div>
    </div>
    <div class="container">
    <div class="beta-products-list">
							<h4>Sản Phẩm Khuyến Mãi</h4>
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy  sản phẩm</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
								<div class="col-sm-3">
									<div class="single-item">
                                    <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
										<div class="single-item-header">
											<a href="{{route('users.detail')}}"><img src="source/image/product/" alt="" height="250px"></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"></p>
											<p class="single-item-price">
                                            <span class="flash-del"></span>
                                                <span class="flash-sale"></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('users.add')}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('users.detail')}}">Details <i class="fa fa-chevron-right"></i></a>
                                        <a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('users.detail')}}">Details <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
                                </div>
                            </div>
                            <div class="row"></div>
						</div> <!-- .beta-products-list -->
                        </div>
@endsection