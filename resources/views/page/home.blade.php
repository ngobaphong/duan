@extends('layout')
@section('content')
{{-- <div class="container">
    <div class="main-banner">
        <img src="{{ asset('img/banner.jpg')}}" alt="iPhone 6 Plus">
        <div class="navigation-bar">
            <a href="#">Iphone 6 Plus được hỗ trợ đổi mới, tặng</a>
            <a href="#">Siêu táo 660 Iphone 6 Plus được bán với</a>
            <a href="#">Nokia 5S siêu phẩm với sức mạnh của</a>
            <a href="#">Nokia 3310 sự kết hợp hoàn hảo cổ</a>
            <a href="#">Mua Asus tặng gói combo quà hấp dẫn</a>
        </div>
    </div>
    <div class="side-banners">
        <div class="side-banner">
            <img src="{{ asset('img/1.jpg')}}" alt="Smart Watch">
     </div>
        <div class="side-banner">
            <img src="{{ asset('img/2.jpg')}}" alt="Nexus">
     </div>
        <div class="side-banner">
            <img src="{{ asset('img/3.jpg')}}" alt="iPad Mini">
     </div>
    </div>
</div> --}}

  <div class="container">
    <div class="main-banner">
        <div id="carouselExampleCaptions" class="carousel slide">

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="{{ asset('img/banner.jpg')}}" class="d-block w-100" alt="...">

              </div>
              <div class="carousel-item">
                <img src="{{ asset('img/banner1.jpg')}}" class="d-block w-100" alt="...">
            </div>
              <div class="carousel-item">
                <img src="{{ asset('img/banner2.jpg')}}" class="d-block w-100" alt="...">
                </div>
            </div>
            </div>
        <div class="navigation-bar">
            <a href="#"data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">Nokia 5S siêu phẩm với sức mạnh của</a>
            <a href="#" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2">Iphone 6 Plus được hỗ trợ đổi mới, tặng</a>
            <a href="#" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3">Mua Asus tặng gói combo quà hấp dẫn</a>
        </div>
    </div>
    <div class="side-banners">
        <div class="side-banner">
            <img src="{{ asset('img/1.jpg')}}" alt="Smart Watch">
     </div>
        <div class="side-banner">
            <img src="{{ asset('img/2.jpg')}}" alt="Nexus">
     </div>
        <div class="side-banner">
            <img src="{{ asset('img/3.jpg')}}" alt="iPad Mini">
     </div>
    </div>
</div>


@stop
