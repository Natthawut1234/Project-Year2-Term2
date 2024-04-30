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

  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
        <!-- เปลี่ยนจาก our Services เป็นผลงานการซ่อม Repair MoMo Shop  -->  
          การบริการ <span>"Services"  </span>
          </h2>
          <p>
           <!--ลบข้อความออก -->
          </p>
        </div>
        <br>
        <div class="carousel-container">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="slide-container">
                                <img src="{{ asset('images/44.png')}}" alt="img1">
                                <img src="{{ asset('images/55.png')}}" alt="Image 2">
                                <img src="{{ asset('images/33.png')}}" alt="Image 3">
                                <img src="{{ asset('images/22.jpg')}}" alt="Image 4">
                                <img src="{{ asset('images/120.png')}}" alt="Image 5">
                                <img src="{{ asset('images/109.jpg')}}" alt="Image 6">
                                <img src="{{ asset('images/122.jpg')}}" alt="Image 7">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
/* สไตล์เดิมของ slide-container จะไม่เปลี่ยน */
.slide-container {
  width: 100%;
  overflow-x: auto; /* เพื่อให้สามารถเลื่อนภาพได้หากมีขนาดใหญ่เกินกว่า */
  white-space: nowrap; /* เพื่อให้ภาพเรียงต่อกันแนวนอน */
}

.slide-container img {
  max-width: 33.33%; /* ให้ภาพครอบเฉพาะ 1/3 ของ container */
  height: auto; /* ปรับความสูงอัตโนมัติให้พอดีกับความกว้าง */

}

/* เพิ่มสไตล์สำหรับ carousel-container */
.carousel-container {
  margin-top: 20px; /* ให้มีระยะห่างด้านบน */
  width: 100%; /* ให้ความกว้างเต็ม */
  overflow-x: auto; /* ให้มีการเลื่อนแนวนอน */
}

/* เพิ่มสไตล์เมื่อโฮเวอร์ที่รูป */


.slide-container img {
  max-width: 33.33%; /* ให้ภาพครอบเฉพาะ 1/3 ของ container */
  height: auto; /* ปรับความสูงอัตโนมัติให้พอดีกับความกว้าง */
  transition: transform 0.3s ease; /* เพิ่มเอฟเฟกต์ transition */
  object-fit: cover; /* ปรับขนาดภาพให้เท่ากันทุกภาพ */
}

</style>




<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>


 
  <style>
    body {
      background-color: #ffffff; /* Set the background color of the page to navy blue */
    }
  </style>


<section class="about_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-box">
                    <img src="{{ asset('images/666.png')}}" alt="" class="zoomable-image">
                </div>
            </div>
            <div class="col-md-6">
                <div class="detail-box d-flex flex-column justify-content-center align-items-center">
                    <h3>เปลี่ยนแบตเตอรี่โทรศัพท์</h3>
                    <p>"แบตเตอรี่มือถือโดยทั่วไปมีอายุการใช้งานเฉลี่ยอยู่ที่ 2-3 ปี ขึ้นอยู่กับรูปแบบการใช้งานของคุณไม่ว่าจะเป็น ประเภทของแบตเตอรี่ รูปแบบการใช้งาน สภาพแวดล้อม และการดูแลรักษา และมักจะแสดงออกให้เห็นในรูปแบบต่างๆ ไม่ว่าจะเป็น อาการแบตเตอรี่เสื่อมที่จะบอกได้ชัดเจนคือ ชาร์จไฟบ่อยขึ้น เครื่องดับ, แบตเตอรี่บวม"</p>
                    <p class="price-box" style="font-size: 18px; font-weight: bold;">ราคาซ่อม 300 ~ 800 บาท</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .price-box {
        background-color: #e10000; /* กำหนดสีพื้นหลังเป็นสีแดง */
        color: #fff; /* กำหนดสีตัวอักษรเป็นสีขาว */
        padding: 20px; /* เพิ่มช่องว่างรอบขอบของกล่อง */
        border-radius: 5px; /* ทำให้มีเส้นขอบเป็นรูปวงกลม */
        text-align: center; /* จัดการจัดวางข้อความในกล่องให้อยู่ตรงกลาง */
        transition: transform 0.3s; /* เพิ่มการเปลี่ยนรูปร่างเมื่อ hover */
        cursor: pointer; /* เพิ่มเคอร์เซอร์เป็น pointer เมื่อ hover */
    }
    .price-box:hover {
        transform: scale(1.1); /* ขยายขนาดของข้อความเมื่อ hover */
    }
    .img-box {
        overflow: hidden; /* กำหนดให้ภาพซ่อนเมื่อขยาย */
    }
    .zoomable-image {
        transition: transform 0.3s; /* เพิ่มการเปลี่ยนรูปร่างภาพเมื่อ hover */
    }
    .zoomable-image:hover {
        transform: scale(1.1); /* ขยายขนาดของภาพเมื่อ hover */
    }
</style>
  
   
<section class="ab_section layout_padding">
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="img-box">
                  <img src="{{ asset('images/22.jpg')}}" alt="" class="zoomable-image"> <!-- เพิ่ม class ให้กับภาพ -->
              </div>
          </div>
          <div class="col-md-6">
              <div class="detail-box d-flex flex-column justify-content-center align-items-center">
                  <h3 style="font-weight: bold;">เปลี่ยนกล้อง หน้า/หลัง โทรศัพท์</h3>
                  <p>"หากกล้องหน้าของคุณมีปัญหา คุณจะไม่สามารถใช้กล้องเพื่อถ่ายภาพเซลฟี่ได้ มีความเป็นไปได้หลายอย่าง อาจเป็นเพราะกล้องหน้าของคุณมีฝุ่นจึงทำให้ภาพเบลอ เนื่องจากการตกกระแทกพื้นทำให้กล้องหน้าไม่สามารถโฟกัสหรือไม่สามารถเปิดเลนส์กล้องได้ คุณไม่จำเป็นต้องกังวล คุณยังมีทางเลือกอื่นๆ ยังสามารถใช้กล้องหลังได้ เช่นเดียวกับกล้องด้านหน้า มีความเป็นไปได้หลายอย่าง อาจเป็นเพราะกล้องหน้าของคุณมีฝุ่นจึงทำให้ภาพเบลอ เนื่องจากการตกกระแทกพื้นทำให้กล้องหน้าไม่สามารถโฟกัสหรือไม่สามารถเปิดเลนส์กล้องได้ สำหรับกล้องหลังหากเกิดความเสียหายมักจะทำให้ผู้ใช้รู้สึกไม่สบายใจเมื่อกล้องหลังไม่สามารถทำงานได้อย่างเหมาะสม เพราะโดยทั่วไปแล้วผู้ใช้จะใช้กล้องหลัง"</p>
                  <p class="price-box" style="font-size: 18px; font-weight: bold;">ราคาซ่อม 300 ~ 1,000 บาท</p>
              </div>
          </div>
      </div>
  </div>
</section>

<style>
  .price-box {
      background-color: #e10000; /* กำหนดสีพื้นหลังเป็นสีแดง */
      color: #fff; /* กำหนดสีตัวอักษรเป็นสีขาว */
      padding: 20px; /* เพิ่มช่องว่างรอบขอบของกล่อง */
      border-radius: 5px; /* ทำให้มีเส้นขอบเป็นรูปวงกลม */
      text-align: center; /* จัดการจัดวางข้อความในกล่องให้อยู่ตรงกลาง */
  }
  .ab_section { /* เปลี่ยนชื่อเป็น ab_section */
      background-color: #002b64; /* กำหนดสีพื้นหลังให้เป็นสีขาว */
      color: #ffffff; /* กำหนดสีตัวอักษรเป็นสีขาว */
  }
  .img-box {
      overflow: hidden; /* กำหนดให้ภาพซ่อนเมื่อขยาย */
  }
  .zoomable-image {
      transition: transform 0.3s; /* เพิ่มการเปลี่ยนรูปร่างภาพเมื่อ hover */
  }
  .zoomable-image:hover {
      transform: scale(1.1); /* ขยายขนาดของภาพเมื่อ hover */
  }
</style>

<section class="about_section layout_padding">
  <div class="container">
   
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="{{ asset('images/99.jpg')}}" alt="" class="zoomable-image"> <!-- เพิ่ม class ให้กับภาพ -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box d-flex flex-column justify-content-center align-items-center"> <!-- เพิ่ม align-items-center เพื่อจัดให้เนื้อหาอยู่ตรงกลางแนวนอน -->
          <h3>
            เปลี่ยนหน้าจอโทรศัพท์
          </h3>
          <p>
            "สิ่งที่พบได้บ่อยที่สุดคือปัญหาการทำมือถือตกโดยไม่ได้ตั้งใจและทำให้หน้าจอแตกหรือแย่เกินไปจนทำให้จอ LCD หรือหน้าจอแสดงผลโทรศัพท์ OLED ดั้งเดิมนั้นมองไม่เห็นเลย"
          </p>
          <p class="price-box" style="font-size: 18px; font-weight: bold;">
            ราคาซ่อม 300 ~ 4,000 บาท
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .price-box {
    background-color: #e10000; /* กำหนดสีพื้นหลังเป็นสีแดง */
    color: #fff; /* กำหนดสีตัวอักษรเป็นสีขาว */
    padding: 20px; /* เพิ่มช่องว่างรอบขอบของกล่อง */
    border-radius: 5px; /* ทำให้มีเส้นขอบเป็นรูปวงกลม */
    text-align: center; /* จัดการจัดวางข้อความในกล่องให้อยู่ตรงกลาง */
  }
  .img-box img {
      max-width: 100%; /* จัดให้รูปภาพมีขนาดไม่เกินขอบเขตของพื้นที่ */
      height: auto; /* รักษาอัตราส่วนของรูปภาพ */
  }
  .img-box {
    overflow: hidden; /* กำหนดให้ภาพซ่อนเมื่อขยาย */
  }
  .zoomable-image {
    transition: transform 0.3s; /* เพิ่มการเปลี่ยนรูปร่างภาพเมื่อ hover */
  }
  .zoomable-image:hover {
    transform: scale(1.1); /* ขยายขนาดของภาพเมื่อ hover */
  }
</style>

<section class="ab_section layout_padding"> <!-- เปลี่ยนชื่อเป็น ab_section -->
  <div class="container">
   
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="{{ asset('images/108.jpg')}}" alt="" class="zoomable-image"> <!-- เพิ่ม class ให้กับภาพ -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box d-flex flex-column justify-content-center align-items-center"> <!-- เพิ่ม align-items-center เพื่อจัดให้เนื้อหาอยู่ตรงกลางแนวนอน -->
          <h3 style="font-weight: bold;">
            ติดฟิล์มกันรอยโทรศัพท์
          </h3>
          <p>
            "ในยุคเริ่มต้นของสมาร์ตโฟนและฟิล์มกันรอยนั้น ฟิล์มใสและฟิล์มด้าน ถือเป็นฟิล์มที่ได้รับความนิยมมากที่สุด เพราะยังมีตัวเลือกฟิล์มกันรอยไม่มากนัก แต่ในปัจจุบันมีการผลิตฟิล์มกระจกมือถือออกมาให้เลือกใช้กันแล้ว โดยฟิล์มประเภทนี้ มีลักษณะใส ไม่ขุ่น เช่นเดียวกันกับฟิล์มใส แต่เอาชนะฟิล์มใสแบบปกติได้ที่ความแข็งแรงทนทาน และประสิทธิภาพในการกันรอยขีดข่วนและการตกกระแทก เนื่องจากฟิล์มกระจกติดมือถือ จะมีความหนาของกระจกใสช่วยปกป้องหน้าจอของคุณ ราวกับว่ามีหน้าจอโทรศัพท์เพิ่มขึ้นอีกชั้นหนึ่ง
            อีกหนึ่งคุณสมบัติที่ทำให้ฟิล์มกระจกมือถือเป็นที่นิยมมากทั้งในหมู่ผู้ใช้และผู้ให้บริการรับติดฟิล์มมือถือก็คือ ฟิล์มกระจกเหล่านี้ติดง่ายกว่าฟิล์มอ่อนและฟิล์มแข็งทั่วไปนั่นเอง ด้วยวัสดุที่หนากว่า และไม่โค้งงอและไม่พับลงขณะกำลังติดฟิล์ม ทำให้โอกาสที่จะเกิดฟองอากาศน้อยมาก และสามารถติดให้เรียบร้อย ตรงขอบ ไม่เบี้ยวได้อย่างง่ายดาย จึงใช้เวลาในการติดน้อยกว่าฟิล์มแบบธรรมดา"
          </p>
          <p class="price-box" style="font-size: 18px; font-weight: bold;">
            ราคาซ่อม 100 ~ 300 บาท
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .price-box {
    background-color: #e10000; /* กำหนดสีพื้นหลังเป็นสีแดง */
    color: #fff; /* กำหนดสีตัวอักษรเป็นสีขาว */
    padding: 20px; /* เพิ่มช่องว่างรอบขอบของกล่อง */
    border-radius: 5px; /* ทำให้มีเส้นขอบเป็นรูปวงกลม */
    text-align: center; /* จัดการจัดวางข้อความในกล่องให้อยู่ตรงกลาง */
  }
  .ab_section { /* เปลี่ยนชื่อเป็น ab_section */
    background-color: #002b64; /* กำหนดสีพื้นหลังให้เป็นสีน้ำเงินเข้ม */
    color: #ffffff; /* กำหนดสีตัวอักษรเป็นสีขาว */
  }
  .img-box {
    overflow: hidden; /* กำหนดให้ภาพซ่อนเมื่อขยาย */
  }
  .zoomable-image {
    transition: transform 0.3s; /* เพิ่มการเปลี่ยนรูป*/
  }
</style>
<section class="about_section layout_padding">
  <div class="container">
   
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="{{ asset('images/109.jpg')}}" alt="" class="zoomable-image"> <!-- เพิ่ม class ให้กับภาพ -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box d-flex flex-column justify-content-center align-items-center"> <!-- เพิ่ม align-items-center เพื่อจัดให้เนื้อหาอยู่ตรงกลางแนวนอน -->
          <h3>
            เปลี่ยนปุ่มเปิดปิดโทรศัพท์มือถือ
          </h3>
          <p>
            "หากปุ่มเปิด/ปิดของคุณไม่ทำงาน จากนั้นโทรศัพท์มือถือของคุณจะไม่สามารถเปิดปิดหรือโหมดสลีปได้ ความต้องการไม่สะดวกสำหรับผู้ใช้"
          </p>
          <p class="price-box" style="font-size: 18px; font-weight: bold;">
            ราคาซ่อม 150 ~ 300 บาท
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .price-box {
    background-color: #e10000; /* กำหนดสีพื้นหลังเป็นสีแดง */
    color: #fff; /* กำหนดสีตัวอักษรเป็นสีขาว */
    padding: 20px; /* เพิ่มช่องว่างรอบขอบของกล่อง */
    border-radius: 5px; /* ทำให้มีเส้นขอบเป็นรูปวงกลม */
    text-align: center; /* จัดการจัดวางข้อความในกล่องให้อยู่ตรงกลาง */
  }
  .img-box img {
    max-width: 100%; /* จัดให้รูปภาพมีขนาดไม่เกินขอบเขตของพื้นที่ */
    height: auto; /* รักษาอัตราส่วนของรูปภาพ */
  }
  .img-box {
    overflow: hidden; /* กำหนดให้ภาพซ่อนเมื่อขยาย */
  }
  .zoomable-image {
    transition: transform 0.3s; /* เพิ่มการเปลี่ยนรูปร่างภาพเมื่อ hover */
  }
  .zoomable-image:hover {
    transform: scale(1.1); /* ขยายขนาดของภาพเมื่อ hover */
  }
</style>

<section class="ab_section layout_padding" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0);"> <!-- เพิ่มเงา -->
  <div class="container">
   
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="{{ asset('images/113.png')}}" alt="" class="zoomable-image"> <!-- เพิ่ม class ให้กับภาพ -->
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box d-flex flex-column justify-content-center align-items-center"> <!-- เพิ่ม align-items-center เพื่อจัดให้เนื้อหาอยู่ตรงกลางแนวนอน -->
          <h3 style="font-weight: bold;">
            พอร์ตชาร์จโทรศัพท์มือถือ
          </h3>
          <p>
            "พอร์ตชาร์จเสียหายเกิดจากหลายสาเหตุ นี่คือสาเหตุบางประการ แรงดันไฟที่เกิดจากไดชาร์จไม่แท้ ฝุ่นอุดตัน น้ำกระเซ็น ฯลฯ"
          </p>
          <p class="price-box" style="font-size: 18px; font-weight: bold;">
            ราคาซ่อม 200 ~ 400 บาท
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
  .price-box {
    background-color: #e10000; /* กำหนดสีพื้นหลังเป็นสีแดง */
    color: #fff; /* กำหนดสีตัวอักษรเป็นสีขาว */
    padding: 20px; /* เพิ่มช่องว่างรอบขอบของกล่อง */
    border-radius: 5px; /* ทำให้มีเส้นขอบเป็นรูปวงกลม */
    text-align: center; /* จัดการจัดวางข้อความในกล่องให้อยู่ตรงกลาง */
  }
  .ab_section { /* เปลี่ยนชื่อเป็น ab_section */
    background-color: #002b64; /* กำหนดสีพื้นหลังให้เป็นสีขาว */
    color: #ffffff; /* กำหนดสีตัวอักษรเป็นสีขาว */
    padding: 60px 0; /* เพิ่มช่องว่างด้านบนและด้านล่างของเนื้อหา */
  }
  .about_section .container {
    display: flex;
    justify-content: center; /* จัดให้เนื้อหาอยู่ตรงกลางแนวนอน */
  }
  .about_section h3,
  .about_section p,
  .about_section .price-box {
    text-align: center; /* จัดให้เนื้อหาอยู่ตรงกลางแนวนอน */
  }
  .detail-box {
    display: flex;
    justify-content: center; /* จัดให้เนื้อหาอยู่ตรงกลางแนวนอน */
    align-items: center; /* จัดให้เนื้อหาอยู่ตรงกลางแนวตั้ง */
  }
  .img-box {
    overflow: hidden; /* กำหนดให้ภาพซ่อนเมื่อขยาย */
  }
  .zoomable-image {
    transition: transform 0.3s; /* เพิ่มการเปลี่ยนรูปร่างภาพเมื่อ hover */
  }
  .zoomable-image:hover {
    transform: scale(1.1); /* ขยายขนาดของภาพเมื่อ hover */
  }
</style>

        

  <!-- end service section -->

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
              การบริการ
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