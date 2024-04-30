<!DOCTYPE html>
<html>

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

  <title> Finexo </title>

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

<body>

        <!-- end slider section -->
     
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
                    Mobile Repair Shop
                  </span>
                </a>
      
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class=""> </span>
                </button>
      
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav  ">
                    <li class="nav-item ">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a class="nav-link" href="/about"> About</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/service">Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/why">Why Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/team">Team</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/login"> <i class="fa fa-user" aria-hidden="true"></i> Login</a>
                    </li>
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
    



    @yield('content')
 

<a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
  <i class="bi bi-chevron-up"></i>
</a>

<!-- end info section -->

<!-- footer section -->
<section class="footer_section">
  <div class="container">
    <p>
      &copy; <span id="displayYear"></span> All Rights Reserved By
      <a href="https://html.design/">Free Html Templates</a>
    </p>
  </div>
</section>

  <!-- footer section -->
  {{-- <section class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="https://html.design/">Free Html Templates</a>
      </p>
    </div>
  </section> --}}
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

<script>
$(document).ready(function(){
  // เมื่อคลิกที่ลิงก์ใน Navbar
  $('.navbar-nav .nav-item').on("click", function(){
    // ลบคลาส 'active' ออกจากทุกลิงก์ใน Navbar
    $('.navbar-nav .nav-item').removeClass("active");

    // เพิ่มคลาส 'active' ให้กับลิงก์ที่คลิก
    $(this).addClass("active");
  });

  // ตรวจสอบ URL และเพิ่มคลาส 'active' ให้กับลิงก์ที่ตรงกับ URL ปัจจุบัน
  var currentUrl = window.location.href; // URL ปัจจุบัน
  $('.navbar-nav .nav-item').each(function(){
    var linkUrl = $(this).children(".nav-link").attr("href"); // URL ของลิงก์
    if (currentUrl.includes(linkUrl)) {
      $(this).addClass("active"); // เพิ่มคลาส 'active' ถ้า URL ปัจจุบันมีส่วนที่ตรงกับลิงก์
    }
  });
});



</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>





</body>

</html>