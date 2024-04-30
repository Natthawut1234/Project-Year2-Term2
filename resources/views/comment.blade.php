<!DOCTYPE html>
<html>

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
  <!-- Basic -->
  <meta charset="utf-8" />
  <link rel="shortcut icon" type="x-icon" href="{{ asset('images/smartphone.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title>Repair Mo Mo Shop</title>


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
              <li class="nav-item ">
                <a class="nav-link" href="/">หน้าแรก <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="/about">เกี่ยวกับ</a>
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
              <li class="nav-item active">
                <a class="nav-link" href="/comment">ความคิดเห็น</a>
              </li>
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav me-auto">

              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user" aria-hidden="true"></i> {{ __('ล็อคอิน') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('สมัคร') }}</a>
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
              {{-- <form class="form-inline">
              
              </form> --}}
            </ul>
          </div>
        </nav>
      </div>
    </header>
     <!-- end header section -->
  </div>

   <!-- comment section -->
<section class="client_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center psudo_white_primary mb_45">
            <h2>ความคิดเห็น <span>ทั้งหมด</span></h2>
        </div>
        <div class="carousel-wrap ">
          
            <div class="owl-carousel client_owl-carousel">
                @foreach ($list as $comment)
                <div class="item">
                  <div class="box">
                     <div class="img-box">
                      <img src="{{ asset(Storage::url($comment->img_user)) }}" alt="" class="box-img">
                      {{-- <img src="{{ asset(Storage::url($comment->users->img_user)) }}" alt="" class="box-img"> --}}
                      </div> 
                        <div class="detail-box">
                          <div class="client_id">
                          <div class="client_info">
                                    <h6>{{ $comment->name }}</h6>
                                    <p>{{ $comment->email }}</p>
                                </div>
                                <i class="fa fa-quote-left" aria-hidden="true"></i>
                            </div>
                            <p>{{ $comment->com_list }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

   
  {{-- <section class="client_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center psudo_white_primary mb_45">
        <h2>
          ความคิดเห็น <span>ทั้งหมด</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <!-- <div class="img-box">
                <img src="{{ asset('finexo-html/images/abc.jpg')}}" alt="" class="box-img">
              </div> -->
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      คุณ สะมอแอ
                    </h6>
                    <p>
                      London,England
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  รวดเร็ว ทันใจ สะดวกสบายไม่ต้องนั่งวินมอเตอร์ไซต์มาเลยค่ะ <br>เอาใจไปเลยย </br></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <!-- <div class="img-box">
                <img src="{{ asset('finexo-html/images/cat.jpg')}}" alt="" class="box-img">
              </div> -->
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      คุณ กุนมะบอ
                    </h6>
                    <p>
                    Pattaya,Thailand 
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  ใช้งานก็ง่าย ประหยัดเวลาไปอีกตั้งเยอะแนะ<br>ดีจริงงงงงง</br></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <!-- <div class="img-box">
                <img src="{{ asset('finexo-html/images/abc.jpg')}}" alt="" class="box-img">
              </div> -->
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      คุณ คำอึ
                    </h6>
                    <p>
                    Pyongyang,North Korea
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  นั่งอยู่บ้านก็สามารถซ่อมได้ มีเวลาไปทำอะไรเยอะมากกก<br>รักเลยยยย </br></p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <!-- <div class="img-box">
                <img src="{{ asset('finexo-html/images/cat.jpg') }}" alt="" class="box-img">
              </div> -->
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      คุณ อดัม
                    </h6>
                    <p>
                    New York,U.S.A
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  บริการที่เป็นมิตรภาพ รับลูกค้าที่รวดเร็วทันใจ ไม่รอนาน<br>ที่สุดดดดด</br></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <style>
    /* สไตล์ของโค้ด HTML */
    .comment-box {
        width: 400px; /* ปรับความกว้างให้ใหญ่ขึ้น */
        padding: 30px; /* ปรับการเพิ่ม padding */
        border: 1px solid #ccc;
        border-radius: 10px; /* ปรับความโค้งของขอบ */
        margin: 20px auto;
        background-color: #f9f9f9;
        text-align: center; /* จัดเนื้อหาในกล่องตรงกลาง */
        transition: box-shadow 0.3s; /* เพิ่มเอฟเฟกต์เรืองแสงด้วยการใช้ transition */
    }

    .comment-box h3 {
        margin-top: 0;
    }

    .comment-box textarea {
        width: 100%;
        height: 150px; /* ปรับความสูงของ textarea */
        margin-top: 20px; /* ปรับการเพิ่ม margin-top */
    }

    .comment-box input[type="text"],
    .comment-box input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .comment-box input[type="submit"] {
        padding: 12px 25px; /* ปรับขนาด padding */
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 20px;
    }

    .comment-box input[type="submit"]:hover {
        background-color: #0056b3;
    }

    /* เพิ่มเอฟเฟกต์เรืองแสงเมื่อมีการชี้ที่กล่อง */
    .comment-box:hover {
        box-shadow: 0 0 20px rgba(68, 172, 251, 0.3); /* กำหนดค่าเรืองแสง */
    }
</style>

@auth <!-- ตรวจสอบว่าผู้ใช้ล็อกอินหรือไม่ -->
<section class="client_section layout_padding3">
  <div class="comment-box">
      <h3>ใส่ความคิดเห็น</h3>
      <form id="comment" method="POST" action="/insertcomment">
        @csrf <!-- เพิ่ม CSRF token ที่นี่ -->
        <input type="text" name="name" placeholder="ชื่อ" value="{{ Auth::user()->name }}" required><br>
        <input type="email" name="email" placeholder="อีเมล" value="{{ Auth::user()->email }}" required><br>
        <textarea name="com_list" placeholder="กรุณาใส่ข้อความแสดงความคิดเห็น" required></textarea><br>
        <input type="submit" value="ยืนยัน">
    </form>
  </div>
</section>
@endauth <!-- สิ้นสุดการตรวจสอบ -->




<br>
<br>
<br>

  <!-- info section -->

  <section class="info_section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-3 info_col">
          <div class="info_contact">
            <h4>
            ที่อยู่
            </h4>
            <div class="contact_link_box">
              <a href="">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  <!-- เปลี่ยนจาก Location เป็นที่อยู่มหาลัย -->
                  มหาวิทยาลัยเกษตรศาสตร์ วิทยาเขตเฉลิมพระเกียรติ จังหวัดสกลนคร 
                   <br>59 หมู่ 1 ถ.วปรอ 366 ต.เชียงเครือ อ.เมืองสกลนคร จ.สกลนคร 47000
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
          <!-- ลบหัวข้อ Subscribe ทิ้ง -->
      </div>
    </div>
  </section>

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