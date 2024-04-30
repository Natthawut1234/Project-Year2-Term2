
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

  {{-- perm layout --}}
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="x-icon" href="{{ asset('finexo-html/images/smartphone.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Repair Mo Mo Shop</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  {{-- END perm layout --}}


<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Repair Mo Mo Shop </title>

    <!-- bootstrap core css -->
  {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> --}}
  <link href="{{ asset('finexo-html/css/bootstrap.css') }}" rel="stylesheet"> 

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  {{-- <link href="css/font-awesome.min.css" rel="stylesheet" /> --}}
  <link href="{{ asset('finexo-html/css/font-awesome.min.css') }}" rel="stylesheet"> 
  <!-- Custom styles for this template -->
  {{-- <link href="css/style.css" rel="stylesheet" /> --}}
  <link href="{{ asset('finexo-html/css/style.css') }}" rel="stylesheet"> 
  <!-- responsive style -->
  {{-- <link href="css/responsive.css" rel="stylesheet" /> --}}
  <link href="{{ asset('finexo-html/css/responsive.css') }}" rel="stylesheet"> 
    <!-- icon Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    
    
  <style>
    .scroll-to-top {
  position:fixed;
  right:1rem;
  bottom:1rem;
  display:none;
  width:2.75rem;
  height:2.75rem;
  text-align:center;
  color:#fff;
  background:rgba(90,92,105,.5);
  line-height:46px
}
.scroll-to-top:focus,
.scroll-to-top:hover {
  color:#fff
}
.scroll-to-top:hover {
  background:#5a5c69;
}
.scroll-to-top i {
  font-weight:800;
}
  </style>

</head>

<body class="sub_page">

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="images/hero-bg.png" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Repair Mo Mo Shop
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item">
                <a class="nav-link" href="/">หน้าแรก <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="/about"> เกี่ยวกับ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/service">การบริการ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/why">ทำไมต้องเป็นร้านนี้</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/team">นักการช่าง</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="/comment">ความคิดเห็น</a>
              </li>
              {{-- <li class="nav-item">
                <a class="nav-link" href="/login"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
              </li> --}}

              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav me-auto">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> {{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          <a  class="dropdown-item" href="/profile_data">โปรไฟล์</a>
                            <!-- เพิ่มเงื่อนไขเพื่อตรวจสอบค่า is_admin -->
                            @if (Auth::user()->is_admin != 1)
                            <!-- แสดงเมนู "Dashboard" เมื่อ is_admin เป็น 0 หรือ NULL -->
                            <a class="dropdown-item" href="dashboard">ข้อมูล</a>
                            @endif

                            <!-- เงื่อนไขเมื่อ is_admin เป็น 1 จะไม่แสดงเมนู "Dashboard" -->
                            @if (Auth::user()->is_admin == 1)
                            <!-- แสดง dropdown เมื่อ is_admin เท่ากับ 1 -->
                            <a class="dropdown-item" href="{{ route('admin.home') }}">
                                ไปหน้า Admin
                            </a>
                            @endif
                          
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('ออกจากระบบ') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>

              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
  </div>

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
           ทางร้านเรา  <span>มีสาขาอยู่ไหนใกล้คุณบ้าง?</span>
        </h2>
        <p style="font-size: 10px;">
          Repair Mo Mo shop ตอนนี้มีทั้งหมด 100 สาขา ทั่วประเทศไทย
        </p>
      </div>
      <div class="row">
        <!-- <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/about-img.png')}}" alt="">
          </div>
        </div> -->
        <div class="col-md-6">
            <iframe
            width="600"
            height="450"
            frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3937659.589692479!2d99.7299424!3d15.4644803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313c8e2437c0a1d9%3A0x498c64aea0a7f267!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiB4Lip4LiV4Lij4Lio4Liy4Liq4LiV4Lij4LmMIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC5gOC4ieC4peC4tOC4oeC4nuC4o-C4sOC5gOC4geC4teC4ouC4o-C4leC4tCDguIjguLHguIfguKvguKfguLHguJTguKrguIHguKXguJnguITguKM!5e0!3m2!1sth!2sth!4v1711473110902!5m2!1sth!2sth" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
</iframe></div>
        <div class="col-md-7">
          <div class="detail-box">
            <h3>
              Repair Mo Mo shop
            </h3>
            <br></br>
            <div class="branches">
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker " aria-hidden="true"></i> สาขาสกลนครเขต 1 </div>
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 6 </div>
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 2 </div>
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 7 </div>
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 3 </div>
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 8 </div>
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 4 </div>
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 9 </div>
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 5 </div>
                <div class="branch vertical"> <i class="fa fa-map-marker  red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 10 </div>
            </div>
            <style>
              .detail-box h3 {
                position: absolute; /* กำหนดให้เป็นตำแหน่งอิสระ */
                top: -20px; /* ปรับตำแหน่งด้านบน */
                left: 220px; /* ปรับตำแหน่งด้านซ้าย */
              }
            .branches {
                display: flex;
                flex-direction: row; /* กำหนดให้สาขาจัดตำแหน่งในแนวนอน */
                flex-wrap: wrap; /* กำหนดให้สาขาจัดตำแหน่งในแนวนอน */
            }
            .branch {
                margin: 0 120px;
                text-align: center;
                margin-right: 30px; /* กำหนดระยะห่างในแนวนอนระหว่างสาขา */
                margin-bottom: 20px; /* กำหนดระยะห่างในแนวตั้ง */
            }
            .col-md-7{
              position: absolute;
              left: 780px; /* ปรับตำแหน่งตามต้องการในแกน x */
              top: 360px; /* ปรับตำแหน่งตามต้องการในแกน y */
            }
            .detail-box {
                text-align: center;
              }
            .detail-box a {
                display: inline-block;
                margin: 0 20px;
            }
            .red-marker {
                color: red; /* กำหนดสีเป็นแดง */
            }
            
            </style>
            <!-- <a href="">
              Read More
            </a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
               <!-- เปลี่ยนจาก Addrees เป็นที่อยู่ -->
              ที่อยู่
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                   <!-- เปลี่ยนจาก Location เป็นที่อยู่มหาลัย -->
                   <span>มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร </span>
                   <span><br>59 หมู่ 1 ถ.วปรอ 366 ต.เชียงเครือ อ.เมืองสกลนคร จ.สกลนคร 47000
                </span>
              </a>
              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                   <!--เปลี่ยนจาก Call เป็นเบอร์โทร -->
                  0845624811
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                   <!-- ใส่อีเมล์ลงไปแทน -->
                  repairmomoshop@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <style>
          .info_detail {
            position: absolute;
            left: 70px; /* ปรับตำแหน่งตามต้องการในแกน x */
            top: 85px; /* ปรับตำแหน่งตามต้องการในแกน y */
          }
        </style>
        <div class="col-md-6 col-lg-6 info_col">
          <div class="info_detail">
              <!-- ลบหัวข้อ info ทิ้ง ใส่เป็นข้อความแทน -->
            <p><h4>
              " ซ่อม รวดเร็ว ทันใจ บริการดุจญาติมิตร "
            </h4></p>
          </div>
        </div>
        <div class="col-md-6 col-lg-2 mx-auto info_col">
          <div class="info_link_box">
            <h4>
              เพิ่มเติม
            </h4>
            <div class="info_links">
              <a class="active" href="/">
              หน้าแรก
              </a>
              <a class="" href="/about">
              เกี่ยวกับ
              </a>
              <a class="" href="/service">
              ผลงานการซ่อม
              </a>
              <a class="" href="/why">
              ทำไมต้องเป็นร้านนี้
              </a>
              <a class="" href="/team">
              นักการช่าง
              </a>
              <a class="" href="/comment">
              ความคิดเห็น
              </a>
            </div>
          </div>
        </div>
         <!-- ลบหัวข้อ Comment ทิ้ง -->
      </div>
    </div>
  </section>
  {{-- style="display: inline;" --}}
  <a class="scroll-to-top rounded" href="#page-top" > 
    <i class="bi bi-chevron-up"></i>
</a>

  <!-- end info section -->

  <!-- footer section -->
  <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> Repairmomoshop Grop
        <a href="https://html.design/"></a>
      </p>
    </div>
  </section>
  <!-- footer section -->

<!-- jQery -->
  {{-- <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script> --}}
  <script type="text/javascript" src="{{ asset('finexo-html/js/jquery-3.4.1.min.js')}}"></script>
  
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script type="text/javascript" src="{{ asset('finexo-html/js/bootstrap.js')}}"></script>
  <!-- owl slider -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script type="text/javascript" src="{{ asset('finexo-html/js/custom.js')}}"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script>
    // เลือกปุ่ม scroll-to-top
    var scrollButton = document.querySelector('.scroll-to-top');
  
    // เพิ่มการฟังก์ชันเมื่อคลิกที่ปุ่ม
    scrollButton.addEventListener('click', function() {
      // เลื่อนไปยังด้านบนสุดของหน้า
      window.scrollTo({
        top: 0,
        behavior: 'smooth' // เลื่อนไปด้วยการกระโดดของผู้ใช้
      });
    });
  </script>
</body>

</html>