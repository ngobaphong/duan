<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <title>Laravel</title>



    </head>
    <body >
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Example</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="header">
        <div class="grid-item"></div> <!-- Empty space for grid alignment -->
        <div class="grid-item support">
            <a href="tel:19006750">HỖ TRỢ: 1900 6750</a>
        </div>
        <div class="grid-item">
            <span>08h00 - 21h00 tất cả các ngày trong tuần</span>
        </div>
        <div class="grid-item"></div> <!-- Empty space for grid alignment -->
        <div class="grid-item"></div> <!-- Empty space for grid alignment -->
        <div class="grid-item favorite">
            <span class="heart-icon">♡</span>
            <span>(0)</span>
        </div>
        <div class="grid-item login">
            <a href="#"> @if (Route::has('login'))
                <nav >
                   @auth
                       <a
                           href="{{ url('/dashboard') }}"
                           {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" --}}
                       >
                           Dashboard
                       </a>
                   @else
                       <a
                           href="{{ route('login') }}"
                           {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" --}}
                       >
                           Log in /
                       </a>

                       @if (Route::has('register'))
                           <a
                               href="{{ route('register') }}"
                               {{-- class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white" --}}
                           >
                               Register
                           </a>
                       @endif
                   @endauth
               @endif</a>
        </div>
        <div class="grid-item cart">
            <span class="cart-icon">🛒</span>
            <span class="cart-count">0</span>
        </div>
    </div>

    <div class="nav-header">
        <div class="logo">
           <a href="http://127.0.0.1:8000/"> <img src="{{ asset('img/logo.webp')}}" alt="Logo"></a>
        </div>
        <nav class="nav-menu">
            <a href="#">ĐIỆN THOẠI</a>
            <a href="#">LAPTOP</a>
            <a href="#">TABLET</a>
            <a href="#">SẢN PHẨM</a>
            <a href="#">TIN TỨC</a>
            <a href="#">GIỚI THIỆU</a>
            <a href="#">LIÊN HỆ</a>
            <a href=""><i class="fas fa-search"></i></a>
        </nav>
    </div>
    @yield('content')
    <footer>
        <div class="footer-container">
            <div class="footer-section">
                <h5>Hỗ Trợ Khách Hàng</h5>
                <ul>
                    <li>Điện thoại</li>
                    <li>Laptop</li>
                    <li>Tablet</li>
                    <li>Sản phẩm</li>
                    <li>Tin tức</li>
                    <li>Giới thiệu</li>
                    <li>Liên hệ</li>
                </ul>
            </div>
            <div class="footer-section">
                <h5>Về Chúng Tôi</h4>
                <ul>
                    <li>Điện thoại</li>
                    <li>Laptop</li>
                    <li>Tablet</li>
                    <li>Sản phẩm</li>
                    <li>Tin tức</li>
                    <li>Giới thiệu</li>
                    <li>Liên hệ</li>
                </ul>
            </div>
            <div class="footer-section">
                <h5>Có Thắc Mắc?</h4>
                <ul>
                    <li>Bán hàng (7:30 - 22:00)<br>1900 6750</li>
                    <li>Góp ý, khiếu nại (8:00 - 21:30)<br>1900 6750</li>
                    <li>Bảo hành sản phẩm (8:00 - 21:00)<br>1900 6750</li>
                </ul>
            </div>
            <div class="footer-section">
                <h5>Thanh Toán Qua Thẻ</h4>
                <ul>
                    <li>Trụ sở chính: Tầng 6, 266 Đội Cấn, Hà Nội, Vietnam</li>
                    <li>Địa chỉ: Tầng 6, 266 Đội Cấn, Hà Nội, Vietnam</li>
                    <li>Hotline: 1900 6750</li>
                </ul>
            </div>
            <div class="footer-section">
                <h5>Gửi Email Để Nhận Khuyến Mãi</h4>
                <form >
                    <input class="btn1" type="text" name="" id="" placeholder="Nhập Email">
                    <button class="btn2">Gửi</button>
                </form>

            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2014. Công ty cổ phần Thế Giới Di Động. Chính sách sử dụng web</p>
            <p>Văn phòng: Lầu 5 Etown 2, 364 Cộng Hòa, Q.Tân Bình, TP.Hồ Chí Minh.</p>
            <p>GP số 22/GP-ICP-STTTT do Sở TTTT TP HCM cấp ngày 20/03/2012</p>
            <p>Bản quyền thuộc về <a href="#">Awesome Team</a> | Cung cấp bởi <a href="#">Sapo</a></p>
        </div>
    </footer>

    </body>
</html>
