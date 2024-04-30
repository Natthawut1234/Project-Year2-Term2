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
  <link rel="shortcut icon" href="../images/favicon.png" type="">

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
              <li class="nav-item ">
                <a class="nav-link" href="/about"> เกี่ยวกับ</a>
              </li>
              <li class="nav-item active">
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


  <!-- service section -->

 

  <!-- end service section -->


  <!-- about section -->

  
  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          ประเมิน <span>ราคา</span>
        </h2>
        <p>
          การประเมินราคาก่อนการซ่อมมือถือเป็นขั้นตอนที่สำคัญเพื่อให้ทราบถึงค่าใช้จ่ายที่คาดว่าจะเกิดขึ้นก่อนที่การซ่อมจะเริ่มขึ้น
        </p>
      </div>
      <div class="row"style="margin-bottom: 40px; margin-left: 75px;">
        <div class="col-md-2">
          <div class="detail-box">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('images/repair-services.png')}}" alt="" style="max-width: 90px; max-height: 70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10"style="margin-left: -66px;"> <!-- เพิ่ม class="col-md-10" เพื่อให้เนื้อหาเต็มแถว -->
          <div class="content"> <!-- สร้าง div ใหม่เพื่อรองรับเนื้อหา -->
            <h3>จอแตก</h3>
              <p><!-- ลบข้อความออก --></p> 
            <h6>จอที่แตกละเอียด สภาพ 50-80 % หรือจะเป็น<br>จอที่แตกนิดหน่อย ก็สามารถนำมาซ่อมได้ <br>ราคา : 2,000-5,000 บาท</br></h6>
            <p style="font-size: 15px;"></p>
            <p style="font-size: 15px;"></p>
            <!-- <a href="#">Read More</a> -->
          </div>
        </div>
      </div>
      <div class="row"style="margin-bottom: 40px; margin-left: 75px;">
        <div class="col-md-2">
          <div class="detail-box">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('images/mobile.png')}}" alt="" style="max-width: 90px; max-height: 70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10"style="margin-left: -70px;"> <!-- เพิ่ม class="col-md-10" เพื่อให้เนื้อหาเต็มแถว -->
          <div class="content"> <!-- สร้าง div ใหม่เพื่อรองรับเนื้อหา -->
            <h3>แบตเสื่อม</h3>
              <p><!-- ลบข้อความออก --></p> 
            <h6>แบตเตอร์รี่จะเป็นประเภทไหน ทางร้าน<br>รับเปลี่ยนแบตทุกสภาพ ไม่ว่าจะเป็น <br>แบตเตอรี่หมดเร็วกว่าปกติ เครื่องร้อนง่าย <br>เครื่องดับหรือรีสตาร์ทเอง แบตเตอรี่บวม<br> ราคา : 200-1,000 บาท</br></h6>
            <p style="font-size: 15px;"></p>
            <p style="font-size: 15px;"></p>
            <!-- <a href="#">Read More</a> -->
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 40px; margin-left: 75px;">
        <div class="col-md-2">
          <div class="detail-box">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('images/volume.png')}}" alt="" style="max-width: 90px; max-height: 70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10"style="margin-left: -70px;"> <!-- เพิ่ม class="col-md-10" เพื่อให้เนื้อหาเต็มแถว -->
          <div class="content"> <!-- สร้าง div ใหม่เพื่อรองรับเนื้อหา -->
            <h3>ปุ่มลดเสียง เพิ่มเสียงเสีย</h3>
              <p><!-- ลบข้อความออก --></p> 
            <h6>ปุ่มที่มีการหลุด หาย ชำรุด ใช้งานไม่ได้กดปุ่ม<br>แล้วมีอาการปุ่มแข็งเกินไป <br>ราคา : 9,000 บาท</br></h6>
            <p style="font-size: 15px;"></p>
            <p style="font-size: 15px;"></p>
            <!-- <a href="#">Read More</a> -->
          </div>
        </div>
      </div>
      <div class="row"style="margin-bottom: 40px; margin-left: 75px;">
        <div class="col-md-2">
          <div class="detail-box">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('images/switch-off.png')}}" alt="" style="max-width: 90px; max-height: 70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10"style="margin-left: -70px;"> <!-- เพิ่ม class="col-md-10" เพื่อให้เนื้อหาเต็มแถว -->
          <div class="content"> <!-- สร้าง div ใหม่เพื่อรองรับเนื้อหา -->
            <h3>ปุ่มปิด เปิดเครื่องเสีย</h3>
              <p><!-- ลบข้อความออก --></p> 
            <h6>ไม่ว่าจะเป็นปุ่มหาย ปุ่มพังกดเท่าไหร่ก็กดไม่ติด <br>แผ่นรองยางใต้ปุ่มเสียจนไม่สามารถกดไปได้ <br>ราคา : 800 บาท</h6>
            <p style="font-size: 15px;"></p>
            <p style="font-size: 15px;"></p>
            <!-- <a href="#">Read More</a> -->
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 40px; margin-left: 650px; margin-top: -697px;">
        <div class="col-md-2">
          <div class="detail-box">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('images/smartphone1.png')}}" alt="" style="max-width: 90px; max-height: 70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10"style="margin-left: 0px;"> <!-- เพิ่ม class="col-md-10" เพื่อให้เนื้อหาเต็มแถว -->
          <div class="content"> <!-- สร้าง div ใหม่เพื่อรองรับเนื้อหา -->
            <h3>เครื่องล็อก</h3>
              <p><!-- ลบข้อความออก --></p> 
            <h6>ลืมรหัสผ่านแล้วไม่สามารถใช้งานได้<br> เครื่องได้ทำการรักษาความปลอดภัย<br>ราคา : 5,000 บาท</br></h6>
            <p style="font-size: 15px;"></p>
            <p style="font-size: 15px;"></p>
            <!-- <a href="#">Read More</a> -->
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 40px; margin-left: 650px; margin-top: 30px;">
        <div class="col-md-2">
          <div class="detail-box">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('images/mobile1.png')}}" alt="" style="max-width: 90px; max-height: 70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10"style="margin-left: 0px;"> <!-- เพิ่ม class="col-md-10" เพื่อให้เนื้อหาเต็มแถว -->
          <div class="content"> <!-- สร้าง div ใหม่เพื่อรองรับเนื้อหา -->
            <h3>ลำโพงเสีย</h3>
              <p><!-- ลบข้อความออก --></p> 
            <h6>ลำโพงที่ไม่มีเสียงออกมา น้ำเข้าเครื่องทำให้<br>ลำโพงเสีย เปิดดังสุดแล้วเสียงแตก<br>ราคา : 500 บาท</br></h6>
            <p style="font-size: 15px;"></p>
            <p style="font-size: 15px;"></p>
            <!-- <a href="#">Read More</a> -->
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 40px; margin-left: 650px; margin-top: 77px;">
        <div class="col-md-2">
          <div class="detail-box">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('images/phone.png')}}" alt="" style="max-width: 90px; max-height: 70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10"style="margin-left: 0px;"> <!-- เพิ่ม class="col-md-10" เพื่อให้เนื้อหาเต็มแถว -->
          <div class="content"> <!-- สร้าง div ใหม่เพื่อรองรับเนื้อหา -->
            <h3>ช่องชาร์จเสียบไม่ค่อยติด</h3>
              <p><!-- ลบข้อความออก --></p> 
            <h6>มีหลายสาเหตุที่ช่องชาร์จเสีย เสียบชาร์จไม่ติด <br>ขยับอยู่สักพักหนึ่ง หรืออาจใช้ชาร์จไม่ได้เลย<br>ราคา : 500 บาท</br></h6>
            <p style="font-size: 15px;"></p>
            <p style="font-size: 15px;"></p>
            <!-- <a href="#">Read More</a> -->
          </div>
        </div>
      </div>
      <div class="row" style="margin-bottom: 40px; margin-left: 650px; margin-top: 45px; ">
        <div class="col-md-2">
          <div class="detail-box">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('images/cell-phone.png')}}" alt="" style="max-width: 90px; max-height: 70px;">
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10"style="margin-left: 0px; > <!-- เพิ่ม class="col-md-10" เพื่อให้เนื้อหาเต็มแถว -->
          <div class="content"> <!-- สร้าง div ใหม่เพื่อรองรับเนื้อหา -->
            <h3>กล้องเสีย</h3>
              <p><!-- ลบข้อความออก --></p> 
            <h6>ปัญหาเลนส์กล้องแตก มีรอยร้าว จนทำให้<br>กล้องใช้งานไม่ได้<br>ราคา : 5,000-10,000 บาท</br></h6>
            <p style="font-size: 15px; "></p>
            <p style="font-size: 15px;"></p>
            <!-- <a href="#">Read More</a> -->
          </div>
          <style>
            .row {
              display: flex;
              flex-wrap: wrap;
               
            }
            
          </style>
        </div>
      </div>
    </div>
  </section>
  
  
    <!-- end about section -->
  
    <!-- why section -->
  
  
    <!-- end why section -->
  
    <!-- team section -->
    
    <!-- end team section -->
  
  
    <!-- client section -->
  
    
  
    <!-- end client section -->
  
  
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
              </p></h4>
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
  
  </body>
  
  </html>