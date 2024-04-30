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
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form> --}}
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
    <div class="container  ">
      <div class="heading_container heading_center">
        <h2>
           send for  <span>repairs</span>
        </h2>
        <p>
          กระบวนการส่งซ่อมที่ศูนย์บริการมือถือ
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 ">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/delivery.png') }}" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>
              การส่งซ่อม
            </h3>
            <p>
              
              สำรวจปัญหา: เมื่อลูกค้านำมือถือที่มีปัญหาไปยังศูนย์บริการ พนักงานจะตรวจสอบปัญหาของมือถือโดยละเอียด เพื่อทราบถึงสาเหตุและความเสียหายที่เกิดขึ้น

              ประเมินและแจ้งราคา: หลังจากที่สำรวจปัญหาแล้ว พนักงานศูนย์บริการจะประเมินความเสียหายและแจ้งราคาซ่อมให้ลูกค้าทราบ เพื่อให้ลูกค้าตัดสินใจว่าต้องการทำการซ่อมหรือไม่
              
              การซ่อมแซม: หากลูกค้าตกลงทำการซ่อม พนักงานศูนย์บริการจะดำเนินการซ่อมแซมโดยใช้ชิ้นส่วนแท้จากผู้ผลิตหรือผู้จำหน่าย และใช้ช่างที่มีความชำนาญในการซ่อม
              
              การทดสอบและประสานงาน: หลังจากการซ่อมเสร็จสมบูรณ์ มือถือจะถูกทดสอบเพื่อให้แน่ใจว่าปัญหาได้รับการแก้ไขอย่างถูกต้อง และศูนย์บริการจะประสานงานกับลูกค้าเพื่อนำมือถือกลับมาให้กับลูกค้าในสภาพที่ดี
              
              การคืนมือถือ: เมื่อการซ่อมเสร็จสมบูรณ์แล้ว ลูกค้าจะได้รับมือถือของตนคืน พร้อมกับรับรองว่าปัญหาได้รับการแก้ไขอย่างเรียบร้อยแล้ว

            </p>
           
            <!-- <a href="">
              Read More
            </a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>

	
	
	
	
	
	
	<link rel="stylesheet" id="elementor-frontend-css" href="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.17.3" media="all">
	
    
	<link rel="stylesheet" id="elementor-post-4053-css" href="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/elementor/css/post-4053.css?ver=1701156227" media="all">
	<style id="rocket-lazyload-inline-css">
	
	</style>
	<link rel="stylesheet" id="google-fonts-1-css" href="https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CPrompt%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=6.4.3" media="all">
	
	
	
	
	<!-- Google Analytics snippet added by Site Kit -->

	
	<!-- End Google Analytics snippet added by Site Kit -->
	
	
	
	<!-- end SI CAPTCHA Anti-Spam - login/register form style -->


	<div class="entry clr" itemprop="text">
	
		
				<div data-elementor-type="wp-page" data-elementor-id="4053" class="elementor elementor-4053" data-elementor-post-type="page">
										<section class="elementor-section elementor-top-section elementor-element elementor-element-0293635 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0293635" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a37feeb" data-id="a37feeb" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-db2a66d elementor-widget elementor-widget-heading" data-id="db2a66d" data-element_type="widget" data-widget_type="heading.default">
					<div class="elementor-widget-container">
				<h2 class="elementor-heading-title elementor-size-default">วิธีส่งซ่อม</h2>		</div>
					</div>
					<div class="elementor-element elementor-element-9c705aa elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="9c705aa" data-element_type="widget" data-widget_type="divider.default">
					<div class="elementor-widget-container">
						<div class="elementor-divider">
				<span class="elementor-divider-separator">
							</span>
			</div>
					</div>
					</div>
					<section class="elementor-section elementor-inner-section elementor-element elementor-element-720c3bc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="720c3bc" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-47789a7" data-id="47789a7" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-dd05d0e elementor-vertical-align-middle elementor-position-left elementor-widget elementor-widget-image-box" data-id="dd05d0e" data-element_type="widget" data-widget_type="image-box.default">
					<div class="elementor-widget-container">
				<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม.png.webp" ><noscript><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม.png"></noscript></figure><div><h4 class="elementor-image-box-title"> 1. โทรเบอร์ติดต่อ </h4><p class="elementor-image-box-description">เล่าอาการเสียของโทรศัพท์<br> ได้ที่เบอร์นี้ได้เลย +66123456789</p></div></div>		</div>
					</div>
						</div>
			</div>
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ed2f4d2" data-id="ed2f4d2" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-e639d64 elementor-vertical-align-middle elementor-position-left elementor-widget elementor-widget-image-box" data-id="e639d64" data-element_type="widget" data-widget_type="image-box.default">
					<div class="elementor-widget-container">
                        <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม-1.png.webp" ><noscript><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม.png"></noscript></figure><div><h4 class="elementor-image-box-title"> 2. ประเมินราคาซ่อม  </h4><p class="elementor-image-box-description">ทางร้านจะแจ้งราคาโดยประมาณ ให้เราทราบเพื่อให้เราตัดสินใจก่อนส่งซ่อม</p></div></div>		</div>
					</div>
						</div>
			</div>
								</div>
			</section>
					<section class="elementor-section elementor-inner-section elementor-element elementor-element-9fbd8e8 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9fbd8e8" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4242d1c" data-id="4242d1c" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-5aaab90 elementor-vertical-align-middle elementor-position-left elementor-widget elementor-widget-image-box" data-id="5aaab90" data-element_type="widget" data-widget_type="image-box.default">
					<div class="elementor-widget-container">
                        <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม-2.png.webp" ><noscript><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม.png"></noscript></figure><div><h4 class="elementor-image-box-title"> 3. ยืนยันการซ่อม </h4><p class="elementor-image-box-description">เมื่อตกลงที่จะส่งซ่อมกันแล้ว ทางร้านจะแจ้งที่อยู่ให้เรา</p></div></div>		</div>
					</div>
						</div>
			</div>
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-efaf9de" data-id="efaf9de" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-9a3c2a5 elementor-vertical-align-middle elementor-position-left elementor-widget elementor-widget-image-box" data-id="9a3c2a5" data-element_type="widget" data-widget_type="image-box.default">
					<div class="elementor-widget-container">
                        <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม-3.png.webp" ><noscript><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม.png"></noscript></figure><div><h4 class="elementor-image-box-title"> 4. ส่งผ่านไรเดอร์ </h4><p class="elementor-image-box-description">เราก็สามารถ ใช้บริการ แอพต่าง ๆ เรียกให้มารับโทรศัพท์ของเราไปซ่อมได้ทันที</p></div></div>		</div>
					</div>
						</div>
			</div>
								</div>
			</section>
					<section class="elementor-section elementor-inner-section elementor-element elementor-element-a94baee elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="a94baee" data-element_type="section">
							<div class="elementor-container elementor-column-gap-default">
						<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-58051c0" data-id="58051c0" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-35b2538 elementor-vertical-align-middle elementor-position-left elementor-widget elementor-widget-image-box" data-id="35b2538" data-element_type="widget" data-widget_type="image-box.default">
					<div class="elementor-widget-container">
                        <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม-4.png.webp" ><noscript><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม.png"></noscript></figure><div><h4 class="elementor-image-box-title"> 5. สรุปค่าใช้จ่าย </h4><p class="elementor-image-box-description">หลังจากซ่อมเสร็จ ทางร้านจะสรุปค่าใช้จ่ายให้ แล้วหลังจากชำระค่าบริการเสร็จ</p></div></div>		</div>
					</div>
						</div>
			</div>
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-9195dc2" data-id="9195dc2" data-element_type="column">
				<div class="elementor-widget-wrap elementor-element-populated">
									<div class="elementor-element elementor-element-d4bed1b elementor-vertical-align-middle elementor-position-left elementor-widget elementor-widget-image-box" data-id="d4bed1b" data-element_type="widget" data-widget_type="image-box.default">
					<div class="elementor-widget-container">
                        <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม-5.png.webp" ><noscript><img decoding="async" width="323" height="323" src="https://www.xn--c3cwcah6atddn3cg5dhb2d4fcw9pxeudl.com/wp-content/uploads/2023/10/วิธีส่งซ่อม.png"></noscript></figure><div><h4 class="elementor-image-box-title"> 6. ส่งเครื่องกับคืนลูกค้า </h4><p class="elementor-image-box-description">ทางร้านจะส่งเครื่องกลับมาให้คุณได้ทันที</p></div></div>		</div>
					</div>
						</div>
			</div>
								</div>
			</section>
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