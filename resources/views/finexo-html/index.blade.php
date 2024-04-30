<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link rel="shortcut icon" type="x-icon" href="{{ asset('finexo-html/images/smartphone.png') }}">

<head>

  {{-- perm layout --}}
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Repair Mo Mo Shop</title>
    {{-- {{ config('app.name', 'Laravel') }} --}}
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
  {{-- END perm layout --}}


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

  <title>  Repair Mo Mo Shop</title>

  <!-- bootstrap core css -->
  {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" /> --}}
  <link href="{{ asset('finexo-html/css/bootstrap.css') }}" rel="stylesheet"> 

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
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

  <div class="hero_area">

    <div class="hero_bg_box">
      <div class="bg_img_box">
        <img src="{{ asset('finexo-html/images/hero-bg.png') }}" alt="">
      </div>
    </div>

    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <span>
             Repair Mo Mo Shop
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="/">หน้าแรก <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
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
    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      ปัญหาที่เจอ <br>
                      เมื่อใช้งานมือถือ
                    </h1>
                    <p>
                      ปัญหาการเชื่อมต่อ ปัญหาในการใช้งานแอปพลิเคชัน ปัญหาด้านการดูแลรักษา ปัญหาด้านความปลอดภัย ปัญหาการใช้งานทั่วไป
                    </p>
                    <div class="btn-box">
                      <a href="/problem" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('finexo-html/images/slider-img.png') }}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      ประเมินราคา <br>
                      ก่อนซ่อม
                    </h1>
                    <p>
                      การตรวจสอบอาการ: หากมือถือมีปัญหาบางอย่าง เช่น หน้าจอแตก, ไม่สามารถเปิดเครื่องได้, ปัญหาในการชาร์จ, ฯลฯ ให้ทดสอบและบันทึกอาการทั้งหมดที่เกิดขึ้นเป็นละเอียดมากที่สุด
                      การประเมินความเสียหาย: ความเสียหายที่เกิดขึ้นต้องการการตรวจสอบเพิ่มเติมโดยช่าง การตรวจสอบนี้มักจะรวมถึงการตรวจสอบฮาร์ดแวร์และซอฟต์แวร์ของเครื่อง
                    </p>
                    <div class="btn-box">
                      <a href="/EstimatePrice" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('finexo-html/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6 ">
                  <div class="detail-box">
                    <h1>
                      การส่งซ่อม
                    </h1>
                    <p>
                      การส่งซ่อมที่ศูนย์บริการมือถือเป็นกระบวนการที่ลูกค้าส่งมือถือที่มีปัญหามายังทางร้านของเรา เพื่อให้ช่างที่มีความชำนาญด้านซ่อมแซมมือถือมาช่วยแก้ไขปัญหาตามที่กำหนดไว้ กระบวนการส่งซ่อมที่ศูนย์บริการมือถือจะมีลักษณะดังนี้
                    </p>
                    <div class="btn-box">
                      <a href="/repair" class="btn1">
                        Read More
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{ asset('finexo-html/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>


  <!-- service section -->


  <style>
    .contene-item p {
      margin: 0;
      font-size: 1.2vw; /* ปรับขนาดของข้อความ Product Name */
    }
  
    .contene-item p:last-child {
      font-size: 1vw; /* ปรับขนาดของข้อความ 500 บาท */
    }
  
    .contene {
      width: 100%;
      padding: 10px;
      display: grid;
      grid-template-columns: repeat(5, 1fr);
      gap: 20px;
    }
  
    .contene-item {
      padding: 20px;
      border-radius: 10px;
      color: #000000;
      text-align: center;
      cursor: pointer;
      transition: transform 0.3s ease; /* เอา transform ออกจากนี้ จะใส่ไว้ใน hover ด้านล่าง */
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
  
    .contene-item:hover {
      transform: scale(1.1);
    }
  
    .contene-item img {
      max-width: 105%;
      height: auto;
      object-fit: cover;
      border-radius: 10px;
      margin-bottom: 10px;
      margin: 0; /* เพิ่มคุณสมบัตินี้เพื่อลบขอบโดยอัตโนมัติ */
    }
  
    .categoryY-buttons {
      display: flex;
      justify-content: space-between;
      margin-bottom: 20px;
    }
  
    .categoryY-buttons button {
      padding: 10px 20px;
      background-color: #007bff;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }
  
    .categoryY-buttons button:hover {
      background-color: #0056b3;
    }
    .modalX {
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.7);
    position: fixed;
    top: 0;
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 9999; /* ให้ modal อยู่ด้านบนของเนื้อหา */
  }

  .modalX-page {
    min-width: 30vw;
    max-width: 55vw;
    max-height: 30vw;
    overflow: scroll;
    background: #ffffff;
    border-radius: 15px;
    padding: 15px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* เพิ่มเงาให้ modal */

  }
  .modalXdesc-content{
   
    width: 100%;
    display: flex;
  }
  .modalXdesc-detail{
    
    margin-left: 20px;
  }
  .modalXdesc-img{
    width: 20vw;
    height: 20vw;
    object-fit: cover;
    border-radius: 10px;
  }
  .btnX-control{

    display: flex;
    justify-content: flex-end;
  }
  .btnX{
    padding:  10px;
    cursor: pointer;
    border: none;
    border-radius: 5px;
    font-size: 1.2vw;
    transition: 0.3s;
    background: linear-gradient(#e61b36, #9c1032);
    color: #ffffff

  }

    
  </style>
 <script>
  $(document).ready(() => {
    var productX = [
      {
          id: 20,
          img: 'https://media-cdn.bnn.in.th/332466/iPhone_15_Pro_Max_Black_Titanium_1-square_medium.jpg',
          name: 'Iphone 15 pro max',
          description: 'จอแสดงผล LTPO Super Retina XDR OLED 24-bit (16 ล้านสี) หน้าจอกระจก Ceramic Shield glass ด้านหลังเครื่อง กระจก Corning made glass กรอบไทเทเนียม (grade 5) มาตรฐาน IP68 ',
          type: 'Apple'
      },
      {
          id: 21,
          img: 'https://media-cdn.bnn.in.th/363360/Samsung--Galaxy-S24-ULTRA-BLACK-5G-8-square_medium.jpg',
          name: 'Samsung Galaxy S24 Ultra',
          description: 'จอแสดงผล Dynamic AMOLED 2X 24-bit (16 ล้านสี) กล้องหน้าฝังบนจอ (Infinity O) ปากกา Stylus สำหรับวาด, เขียน, ระบาย และรีทัชรูปภาพ หน้าจอกระจก Corning Gorilla Glass Armor ด้านหลังเครื่อง กระจก Gorilla กรอบไทเทเนียม มาตรฐาน IP68',
          type: 'Samsung'
      },
      {
          id: 22,
          img: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv8nW2IPEte3p0EkIBHhF-x4Ffv_0L8Iw3bw&usqp=CAU',
          name: 'Oppo Find X7 Ultra',
          description: 'จอแสดงผล LTPO AMOLED 10-bit (1.07 พันล้านสี) จอแสดงผลมีรูสำหรับกล้องหน้า (Punch-Hole Display) หน้าจอกระจก Gorilla Glass Victus 2 กรอบอะลูมิเนียม ด้านหลังเครื่อง กระจก Gorilla Glass ด้านหลังเครื่อง หนัง Eco มาตรฐาน IP68',
          type: 'Oppo'
      },
      {
          id: 23,
          img: 'https://media-cdn.bnn.in.th/368671/vivo-X100-Pro-Asteroid-Black-5G---1-thumbnail.jpg',
          name: 'Vivo X100',
          description: 'จอแสดงผล LTPO AMOLED 10-bit (1.07 พันล้านสี) จอแสดงผลมีรูสำหรับกล้องหน้า (Punch-Hole Display) หน้าจอกระจก Gorilla Glass Victus กรอบอะลูมิเนียม มาตรฐาน IP68',
          type: 'Vivo'
      },
      {
          id: 24,
          img: 'https://media-cdn.bnn.in.th/278581/Xiaomi-13-Pro-Black-1-square_medium.jpg',
          name: 'Xiaomi 13 Pro',
          description: 'จอแสดงผล AMOLED 10-bit (1.07 พันล้านสี) จอแสดงผลมีรูสำหรับกล้องหน้า (Punch-Hole Display) หน้าจอกระจก Gorilla Glass Victus กรอบอะลูมิเนียม ด้านหลังเครื่อง เซรามิค มาตรฐาน IP68',
          type: 'Xiaomi'
      },
      {
          id: 25,
          img: 'https://media-cdn.bnn.in.th/384042/Realme-Smartphone-12-Pro--Submarine-Blue-1-square_medium.jpg',
          name: 'Realme 12 Pro Plus 5G',
          description: 'จอแสดงผล AMOLED 10-bit (1.07 พันล้านสี) จอแสดงผลมีรูสำหรับกล้องหน้า (Punch-Hole Display) หน้าจอกระจก,กรอบอะลูมิเนียม,มาตรฐาน IP65',
          type: 'Realme'
      },
      {
          id: 26,
          img: 'https://media-cdn.bnn.in.th/251184/Huawei-Smartphone-Mate-50-Pro-Black-(HMS)-1-square_medium.jpg',
          name: 'Huawei Mate 50 Pro ',
          description: 'จอแสดงผล OLED 10-bit (1.07 พันล้านสี) หน้าจอ Notch Display หน้าจอกระจก Huawei Kunlun Glass ด้านหลังเครื่อง หนัง Vegan มาตรฐาน IP68',
          type: 'Huawei'
      },
      {
          id: 27,
          img: 'https://media-cdn.bnn.in.th/366600/Infinix-Hot40-Pro-Starlit-Black--1-square_medium.jpg',
          name: 'Infinix Hot 40 Pro',
          description: 'จอแสดงผล LCD 24-bit (16 ล้านสี) จอแสดงผลมีรูสำหรับกล้องหน้า (Punch-Hole Display) หน้าจอกระจก,กรอบพลาสติก',
          type: 'Infinix'
      },
      {
          id: 28,
          img: 'https://s.isanook.com/hi/0/ui/319/1595659/m6_4.jpg',
          name: 'POCO M6 Pro 4G',
          description: 'จอแสดงผล AMOLED 24-bit (16 ล้านสี) จอแสดงผลมีรูสำหรับกล้องหน้า (Punch-Hole Display) หน้าจอกระจก Corning Gorilla Glass 5 กรอบพลาสติก มาตรฐาน IP54',
          type: 'Poco'
      },
      {
          id: 29,
          img: 'https://media-cdn.bnn.in.th/363501/Xiaomi-Smartphone-Redmi-Note-13-Pro--Midnight-Black-5G---1-square_medium.jpg',
          name: 'Redmi Note 13 Pro Plus',
          description: 'จอแสดงผล OLED 12bit (68 ล้านสี) จอแสดงผลมีรูสำหรับกล้องหน้า (Punch-Hole Display) หน้าจอกระจก Gorilla Glass Victus กรอบอะลูมิเนียม มาตรฐาน IP68',
          type: 'Redmi'
      },
    ];

    // ฟังก์ชันแสดงสินค้าตามประเภท
    function showProductsByType(productType) {
      var filteredProducts;
      if (productType === 'All') {
          filteredProducts = productX;
      } else {
          filteredProducts = productX.filter(product => product.type === productType);
      }
      var html = '';
      for (let i = 0; i < filteredProducts.length; i++) {
          html += `<div class="contene-item ${filteredProducts[i].type}" >
                      <img class="cotene-img" src="${filteredProducts[i].img}" alt="">
                      <p style="font-size: 1.2vw;">${filteredProducts[i].name}</p><br>
                      
                  </div>`;
      }
      $("#productXY").html(html);
    }

    // คลิกปุ่ม "All" เพื่อแสดงสินค้าทุกประเภท
    $('#btn-all').click(function() {
      showProductsByType('All');
    });

    // คลิกปุ่ม "Oppo" เพื่อแสดงสินค้าประเภท Oppo
    $('.btn-phone').click(function() {
      var phoneType = $(this).data('type');
      showProductsByType(phoneType);
    });

    // แสดงสินค้าทั้งหมดเมื่อเปิดหน้าเว็บ
    showProductsByType('All');

    function openProduct(indexY) {
  var productindexY = indexY;
  console.log(productindexY);
  $("#modelDesc").css('display', 'flex');
  $("#mdd-name").text(productX[productindexY].name);
  $("#mdd-desc").text(productX[productindexY].description);
  $("#mdd-img").attr("src", productX[productindexY].img);
}

// ปิดโมเดลแสดงรายละเอียดสินค้า
function closeproduct() {
  $("#modelDesc").css('display', 'none');
}
});
</script>

  
</head>
<body>
  <!-- service section -->
  <section class="service_section layout_padding">
    <div class="service_container">
      <div class="container">
        <div class="heading_container heading_center">
          <h2>Repair MoMo Shop <span>"ร้านเราซ่อมรุ่นไหนได้บ้าง"</span></h2>
        </div>
        <br>

        <!-- เพิ่มส่วนปุ่มแบรนด์มือถือ -->
        <div class="categoryY-buttons">
          <button id="btn-all"><img src="" alt=""> All</button>
          <button class="btn-phone" data-type="Apple"><img src="" alt=""> Apple</button>
          <button class="btn-phone" data-type="Samsung"><img src="" alt=""> Samsung</button>
          <button class="btn-phone" data-type="Oppo"><img src="" alt=""> Oppo</button>
          <button class="btn-phone" data-type="Vivo"><img src="" alt=""> Vivo</button>
          <button class="btn-phone" data-type="Xiaomi"><img src="" alt=""> Xiaomi</button>
          <button class="btn-phone" data-type="Realme"><img src="" alt=""> Realme</button>
          <button class="btn-phone" data-type="Huawei"><img src="" alt=""> Huawei</button>
          <button class="btn-phone" data-type="Infinix"><img src="" alt=""> Infinix</button>
          <button class="btn-phone" data-type="Poco"><img src="" alt=""> Poco</button>
          <button class="btn-phone" data-type="Redmi"><img src="" alt=""> Redmi</button>
        </div>
        <!-- เพิ่มส่วนแสดงรายการสินค้า -->
        
        <div id="productXY" class="contene">
          
        </div>
      </div>
    </div>
  </section>
  
  <div id="modelDesc"  class="modalX" style="display: none;">
    <div class="modalX-page">
      <!-- เนื้อหาที่ต้องการแสดงใน Modal อยู่นี่ -->
      <h2>รายละเอียด</h2>
      <br>
      <div class="modalXdesc-content">
        <img id="mdd-img" class="modalXdesc-img" src="imgs/1.jpg" alt="">
        <div class="modalXdesc-detail">
          <p2 style="font-size: 1.5vw;" id="mdd-name">product name</p2>
          <br>
          <p2 style="font-size: 1.2vw;" id="mdd-desc">Product description...</p2>
          <br> <br>
          <div class="btnX-control">
            <!-- ปรับแก้ onclick เป็นส่งค่า index ที่ต้องการเปิด -->
            <button class="btnX" onclick="closeproduct()">
              ปิดรายละเอียด
            </button>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  
  
  
  
</body>


  <!-- end service section -->


  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>ทางร้านเรา <span>มีสาขาอยู่ไหนบ้าง?</span></h2>
        <p style="font-size: 10px;">
          Repair Mo Mo shop ตอนนี้มีทั้งหมด 100 สาขา ทั่วประเทศไทย
        </p>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="map-container">
            <iframe
              width="100%"
              height="450"
              frameborder="0"
              style="border: 0"
              src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3937659.589692479!2d99.7299424!3d15.4644803!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x313c8e2437c0a1d9%3A0x498c64aea0a7f267!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4LmA4LiB4Lip4LiV4Lij4Lio4Liy4Liq4LiV4Lij4LmMIOC4p-C4tOC4l-C4ouC4suC5gOC4guC4leC5gOC4ieC4peC4tOC4oeC4nuC4o-C4sOC5gOC4geC4teC4ouC4o-C4leC4tCDguIjguLHguIfguKvguKfguLHguJTguKrguIHguKXguJnguITguKM!5e0!3m2!1sth!2sth!4v1711473110902!5m2!1sth!2sth"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            >
            </iframe>
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <h3>Repair Mo Mo shop</h3>
            <br />
            <div class="branchesX">
              <div class="branchX vertical">
                <i class="fa fa-map-marker red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 1
              </div>
              <!-- เพิ่มสาขาอื่นๆ ตามต้องการ -->
              <div class="branchX vertical">
                <i class="fa fa-map-marker red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 2
              </div>
              <div class="branchX vertical">
                <i class="fa fa-map-marker red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 3
              </div>
              <div class="branchX vertical">
                <i class="fa fa-map-marker red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 4
              </div>
              <div class="branchX vertical">
                <i class="fa fa-map-marker red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 5
              </div>
              <div class="branchX vertical">
                <i class="fa fa-map-marker red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 6
              </div>
              <div class="branchX vertical">
                <i class="fa fa-map-marker red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 7
              </div>
              <div class="branchX vertical">
                <i class="fa fa-map-marker red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 8
              </div>
              <div class="branchX vertical">
                <i class="fa fa-map-marker red-marker" aria-hidden="true"></i> สาขาสกลนครเขต 9
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <style>
      .map-container {
        position: relative;
        padding-bottom: 75%;
        /* อัตราส่วนความสูงต่อความกว้าง (450/600 = 0.75) */
        overflow: hidden;
        max-width: 100%;
      }
  
      .map-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
      }
  
      .detail-box h3 {
        margin-top: 20px;
        /* เลื่อนข้อความลงมาเล็กน้อย */
      }
  
      .branchesX {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
      }
  
      .branchX {
        margin: 0 20px;
        text-align: center;
      }
  
      .red-marker {
        color: red;
      }
      .detail-box {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
      }
    </style>
  </section>
  
  <!-- end about section -->

<!-- about section -->


 <!-- why section -->

 <section class="why_section layout_padding">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        <!--เปลี่ยนจาก why Us เป็น ทำไมต้องเป็นร้านนี้ -->
      ทำไมต้องเป็น <span>ร้านนี้?</span>
      </h2>
    </div>
    <div class="why_container">
      <div class="box">
        <div class="img-box">
          <img src="{{ asset('images/mechanic.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
          1.มีช่างที่มีคุณภาพ ชำนาญการ ประสบการณ์ในการซ่อม 10 ปีเต็ม ผ่านมาหลายสนามแล้ว
          </h5>
          <p>
               <!--ลบข้อความออก -->
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{ asset('images/best-price.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
          2.ราคาอะไหล่ในการซ่อมจะถูกกว่าร้านอื่นๆ
          </h5>
          <p>
           <!--ลบข้อความออก -->
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{ asset('images/fast-time.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
          3.รวดเร็ว ทันใจ บริการดุจดั่งญาติมิตร
          </h5>
          <p>
           <!--ลบข้อความออก -->
          </p>
        </div>
      </div>
      <div class="box">
        <div class="img-box">
          <img src="{{ asset('images/tracking.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
          4.หลังนำเครื่องมาซ่อมกับทางร้านเรา สามารถติดตามการซ่อมได้ตลอดเวลา ทางร้านเราจะอัพเดทให้ตลอดเวลา
          </h5>
          <p>
            <!--ลบข้อความออก -->
          </p>
          <div class="box">
        <div class="img-box">
          <img src="{{ asset('images/help-desk.png')}}" alt="">
        </div>
        <div class="detail-box">
          <h5>
          5. มีบริการประกันหลังซ่อมอายุ2ปี
          </h5>
          <p>
            <!--ลบข้อความออก -->
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end why section -->

<!-- team section -->
<section class="team_section layout_padding">
  <div class="team_container">
    <div class="container-fluid">
  <div class="heading_container heading_center">
    <h2 class="">
      <!-- เปลี่ยนจาก Our Team เป็น แผนก ช่าง -->
      ฝ่ายช่าง<span> "Technical department" </span>
    </h2>
  </div>
  
  <div class="team_container">
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="box ">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/pee.jpg') }}" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Peerapat
            </h5>
            <p>
            ตำแหน่ง ช่าง  UX/UI Design
            </p>
          </div>
          <div class="social_box">
            <a href="https://www.facebook.com/Peeneverdie585.eieikiki">
              <i class="fa fa-facebook" aria-hidden-="true"></i>
            </a>
            <a href="https://www.instagram.com/pee_z__/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="mailto:peerapat.sang@ku.th">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="box ">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/pasin.jpg') }}" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Pasin
            </h5>
            <p>
            ตำแหน่ง ช่าง Front-end
            </p>
          </div>
          <div class="social_box">
            <a href="https://www.facebook.com/wpubase">
              <i class="fa fa-facebook" aria-hidden-="true"></i>
            </a>
            <a href="https://www.instagram.com/wpasin.wtc/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="mailto:pasin.wo@ku.th">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="box">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/poj.jpg') }}" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Pongsapat
            </h5>
            <p>
            ตำแหน่ง ช่าง UX/UI Design
            </p>
          </div>
          <div class="social_box">
            <a href="https://www.facebook.com/profile.php?id=100013711954965">
              <i class="fa fa-facebook" aria-hidden="true"></i>
            </a>
            <a href="https://www.instagram.com/ze_pot__/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="mailto:pongsapat.sa@ku.th">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="box ">
          <div class="img-box">
            <img src="{{ asset('finexo-html/images/poh.jpg') }}" class="img1" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Natthawut
            </h5>
            <p>
            ตำแหน่ง ช่าง  Back-end,Front-end
            </p>
          </div>
          <style>
            .social_box {
              text-align: center;
            }
            .social_box a {
              display: inline-block;
              margin: 0 15px; /* กำหนดช่องว่างระหว่างไอคอน */
            }
          

          </style>
          <div class="social_box">
            <a href="https://www.facebook.com/profile.php?id=100010306355442">
              <i class="fa fa-facebook" aria-hidden-="true"></i>
            </a>
            <a href="https://www.instagram.com/nhatpo_/">
              <i class="fa fa-instagram" aria-hidden="true"></i>
            </a>
            <a href="mailto:natthawut.suw@ku.th">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
<!-- end team section -->
  <!-- end team section -->


  <!-- client section -->
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
          What says our <span>Customers</span>
        </h2>
      </div>
      <div class="carousel-wrap ">
        <div class="owl-carousel client_owl-carousel">
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/abc.jpg')}}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/cat.jpg')}}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/abc.jpg')}}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      LusDen
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
          <div class="item">
            <div class="box">
              <div class="img-box">
                <img src="{{ asset('finexo-html/images/cat.jpg') }}" alt="" class="box-img">
              </div>
              <div class="detail-box">
                <div class="client_id">
                  <div class="client_info">
                    <h6>
                      Zen Court
                    </h6>
                    <p>
                      magna aliqua. Ut
                    </p>
                  </div>
                  <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- end client section -->


  <!-- info section -->

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
          {{-- <div class="col-md-6 col-lg-3 info_col ">
            <h4>
              Subscribe
            </h4>
            <form action="#">
              <input type="text" placeholder="Enter email" />
              <button type="submit">
                Subscribe
              </button>
            </form>
          </div> --}}
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