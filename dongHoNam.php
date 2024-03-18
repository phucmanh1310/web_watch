<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link
      rel="icon"
      type="image/x-icon"
      href="./asset/favicon/icondongho (2).png"
    />
     <link rel="stylesheet" href="./bootstrap-5.3.2-dist/css/bootstrap.min.css">
     <link rel="stylesheet" href="./css/manh.css">
     <link rel="stylesheet" href="./asset/khang.css">
     <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css" />
     <title>Đồng Hồ Nam</title>
     </head>
 <body>
  <header>
    <section class="myheader">
      <nav class="navbar bg-light navbar-expand-lg ftco_navbar ftco-navbar-light"  id="ftco-navbar">
        <div class="container">
          <a class="navbar-brand-manh" href="./index.php" >
            KVM Watches
          </a>
      
          <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mb-2 mb-lg-0 me-auto">
              <li class="nav-item">
                <a href="./index.php" class="nav-link active" 
                aria-current="page" 
                style="font-size: 15px;
                font-weight: 600;">TRANG CHỦ</a>
              </li>
              <li class="nav-item dropdown">
                <a href="" 
                   class="nav-link dropdown-toggle" 
                   id="navbarAdvancedDropdown" 
                   data-bs-toggle="dropdown" 
                   role="button" 
                   aria-expanded="false"
                   aria-haspopup="true" 
                   style="font-size: 15px;
                   font-weight: 600;">sản phẩm</a>
                <ul class="dropdown-menu header-dr" aria-labelledby="navbarAdvancedDropdown">
                  <li>
                    <a href="./dongHoNam.php" class="dropdown-item" style="color: #ffad33;text-align: left">Đồng hồ nam</a>
                  </li>
                  <li>
                    <a href="./dongHoNu.php" class="dropdown-item" style="color: #ffad33;text-align: left;">Đồng hồ nữ</a>
                  </li>
                  <li>
                    <a href="#" class="dropdown-item" style="color: #ffad33;text-align: left;">Bộ sưu tập mới</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="./about.php" class="nav-link" 
                style="font-size: 15px;
                font-weight: 600;">Về chúng tôi</a>
              </li>
              <li class="nav-item">
                <a href="./contact.php" class="nav-link" 
                style="font-size: 15px;
                font-weight: 600;">Liên hệ</a>
              </li>
             
            </ul>
            </div>
            <form >
              <div id="right">
                <form class="example" action="dongHoNam.php" >
                  <input type="text" placeholder="Search.." name="search2">
                  <button type="submit" style="background-color: #ffad33;"><i class="fa fa-search"></i></button>
                  </form>
              </div>
            </form >
              <div class="collapse navbar-collapse ftco-nav-right" id="ftco-nav" style="margin-left: -65px;">
                <ul class="navbar-nav ml-auto header-right">
                  <li class="nav-item">
                    <a href="cart.php" class="nav-link"
                      ><i class="fa-solid fa-cart-shopping"></i
                    ></a>
                  </li>
                  <li class="nav-item islogined" id="logined">
                    <a href="./manhlogin.php" class="nav-link" 
                    style="font-size: 13px !important; 
                    padding-left: 0px;
                    padding-right: 0px;
                    padding-bottom: 0px;
                    padding-top: 20px;width: 107px;font-weight: 600;" 
                      >Đăng nhập</a>
                  </li>
                  <li class="nav-item" style="height: 2px;width: 1px; color: #010409;">
                  
                  </li>
                  <li class="nav-item islogined" id="logouted" onclick="dangxuat()">
                    <a href="#" class="nav-link" onclick="dangxuat()"
                      ><i class="fa-solid fa-right-from-bracket"></i></a>
                  </li>
                    <li class="nav-item" id="register">
                      <a href="./manhregister.php" class="nav-link"
                      style="font-size: 13px !important; padding-left: 0px;
                      padding-right: 0px;
                      padding-bottom: 0px;
                      padding-top: 20px;width: 107px;font-weight: 600;"  >Đăng ký</a>
                    </li>
                  
                </ul>
                <div id="loggedInUserInfo" style="font-size: 20px;"></div>
              </div>
            </form>
          </div>
      </nav>
    </section>
   </header>
<!-- đường line -->
<div
class="container"
style="width: 100%; height: 3px; background-color: gray; margin-top: 50px;"
></div>
<!--  -->
<!--breadcrumbs fake -->
<div class="container breadcrumbs row mt-3 offset-1 ">
  <div class="col-12" style="word-spacing: 3px;">
  <a href="index.php"><span class="fw-light" style="word-spacing: normal;"> Trang chủ </span></a> 
  <span style="font-weight: 400;">/</span>
  <strong  style="font-weight: 500;word-spacing: normal;">Đồng hồ nam / Trang 1</strong>
</div>
</div>
<!--  -->
<!--single banner-->
<div class="container">
  <div class="text-center row">
 <h2
    class=" mt-3 mb-3 col-sm-12 col-lg-12 col-md-12"
    style="color: grey; font-size: 1.2rem; font-weight: 700"
  >
  Đồng hồ nam đẹp, chính hãng 100%
 </h2>
 <p class="col-sm-12 col-lg-12 col-md-12">
  <img decoding="async" 
       class="banner-top" 
       style="object-fit: fill"
       src="./image_manh/banner-danh-muc-dong-ho-nam.webp" 
       alt="Đồng hồ nam đẹp, chính hãng 100%, BH 5 năm, góp 0%" 
       width="1050" 
       height="500" 
       fetchpriority="high">
       <br>
 </p>
  <div  class="col-sm-12 col-lg-12 col-md-12 offset-1">
  <p class="caption-top">Một chiếc đồng hồ nam cao cấp chính hãng khắc họa một giá trị đích thực khi nói đến phụ kiện xa xỉ dành cho phái mạnh. Hiện nay, đồng hồ là phụ kiện<br>
     thời trang thiết yếu đối với những người đàn ông hiện đại. Trên cổ tay của những người đàn ông thành đạt luôn dành vị trí cho một chiếc đồng hồ nam đẹp <br>
      cao cấp đa dạng về phong cách, kiểu dáng, màu sắc, kích cỡ…</p>
  </div>
  <div
class="container"
style="width: 1103px; height: 1px; background-color: gray;"
></div>
</div>
</div>
<!--     -->

<!--filter-->
<div class="container">
  <form class="filter">
      <div class="item">
          <label>Phân loại</label>
          <select name="category">
              <option value="">---</option>
              <option value="G-SHOCK">CASIO G-SHOCK</option>
              <option value="EDIFICE">CASIO EDIFICE</option>
              <option value="MTP">CASIO MTP</option>
          </select>
      </div>
      <div class="item">
          <label>Kích thước</label>
          <select name="size">
              <option value="">---</option>
              <option value="38">38mm</option>
              <option value="38.5">38.5mm</option>
              <option value="39.9">39.9mm</option>
              <option value="40">40mm</option>
              <option value="42">42mm</option>
              <option value="44">44mm</option>
              <option value="47">47mm</option>
              <option value="48.7">48.7mm</option>
              <option value="50">50mm</option>
          </select>
      </div>
      <div class="item">
          <label>Tên sản phẩm</label>
          <input name="name" type="text">
      </div>
      <div class="item">
          <label>Giá tối thiểu</label>
          <input name="minPrice" type="number">
      </div>
      <div class="item">
          <label>Giá tối đa</label>
          <input name="maxPrice" type="number">
      </div>
      <div class="item submit">
          <button>Tìm kiếm</button>
      </div>
  </form>
  <div class="countResults">
      Tìm thấy <b id="count"></b> kết quả
  </div>
  <div id="list">
      
  </div>
</div>
<!--      -->

 <!--pagination-->
 <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item ">
      <a class="page-link" href="dongHoNam.php" tabindex="-1" aria-disabled="true">Trang đầu</a>
    </li>
    <li class="page-item"><a class="page-link" href="dongHoNam.php">1</a></li>
    <li class="page-item"><a class="page-link" href="dongHoNam1.php">2</a></li>
    <li class="page-item"><a class="page-link" href="dongHoNam2.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="dongHoNam2.php">Trang cuối</a>
    </li>
  </ul>
</nav>
<!--  -->

<!-- đường line -->
  <div
  class="container"
  style="width: 1100px; height:1.5px; background-color: gray"
></div>
  <!--fotter-->
  <div class="container-fluid footer">
    <div class="row" style="margin-left: 100px">
      <div class="col-sm-12 col-md-6 col-lg-3 footer-col-1 mt-4">
        <p class="footer-image">
          <a href="index.php"
            ><img
              style="height: 150px; width: auto"
              src="./image_manh/pngegg.png"
              alt=""
          /></a>
        </p>
        <p style="font-weight: 500">
          Chúng tôi là một công ty chuyên kinh doanh và phân phối đồng hồ với
          hơn 30 năm kinh nghiệm trong ngành. Sứ mệnh của chúng tôi là mang
          đến cho khách hàng những sản phẩm đồng hồ chất lượng, đa dạng về mẫu
          mã và giá trị.
        </p>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 footer-col-2 mt-4">
        <strong class="footer-title">HỆ THỐNG CỬA HÀNG</strong>
        <div class="mt-4 info-text-Manh">
          <p class="p1">TP. Hồ Chí Minh</p>
          <p class="p2">Hà Nội</p>
          <p class="p3">Biên Hòa - Bình Dương</p>
          <p class="p4">Long An</p>
          <p class="p5">Đà Nẵng</p>
          <p class="p6">Bà Rịa - Vũng Tàu</p>
          <p class="p7">Trung Tâm Bảo Hành</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 footer-col-3 mt-4">
        <strong class="footer-title">HỖ TRỢ KHÁCH HÀNG</strong>
        <div class="mt-4 info-text-Manh">
          <p class="p1">TP. Hồ Chí Minh</p>
          <p class="p2">Hà Nội</p>
          <p class="p3">Biên Hòa - Bình Dương</p>
          <p class="p4">Long An</p>
          <p class="p5">Đà Nẵng</p>
          <p class="p6">Bà Rịa - Vũng Tàu</p>
          <p class="p7">Trung Tâm Bảo Hành</p>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3">
        <div class="footer-image">
          <img
            style="height: 150px; width: auto"
            src="./image_manh/pngegg.png"
            alt=""
          />
        </div>
      </div>
    </div>
    <!--chua viet-->
  
  </div>
  <div class="footer-end" >
   <p>Copyright by KVM WATCHES® </p> 
  </div>
  <!--      --> 
  <!--      -->
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction();
    };

    function scrollFunction() {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }


function dangxuat() {
  localStorage.clear(); // Xóa toàn bộ dữ liệu trong localStorage
  let logoutedNavItem = document.getElementById("logouted");
  let registerNavItem = document.getElementById("register");
  let loginedNavItem = document.getElementById("logined");
  let loggedInUserInfo = document.getElementById("loggedInUserInfo");
  logoutedNavItem.style.display="none";
  loggedInUserInfo.style.display="none";
  registerNavItem.style.display="inline";
  loginedNavItem.style.display="inline";
  alert("Bạn đã đăng xuất");
  console.log("đã clear ");
}

// Lấy thông tin đã lưu
// Kiểm tra nếu có thông tin đăng nhập lưu trong localStorage thì hiển thị thông tin đó
let loggedInUser = localStorage.getItem("loggedInUser");
let logoutedNavItem = document.getElementById("logouted");
let registerNavItem = document.getElementById("register");

let headerRight = document.querySelector('.header-right');

if (loggedInUser) {
 let loggedInUserInfo = document.getElementById("loggedInUserInfo");
  loggedInUserInfo.textContent = "Chào " + loggedInUser + "!";

  // Ẩn nút đăng nhập và hiển thị thông tin người dùng đã đăng nhập
  let loginedNavItem = document.getElementById("logined");
  logoutedNavItem.style.display="inline";
  loginedNavItem.style.display = "none";
  registerNavItem.style.display="none";
  headerRight.classList.add('loggedin');
 
} else {
  // Nếu không có thông tin đăng nhập thì hiển thị nút đăng nhập và ẩn thông tin người dùng
  let loggedInUserInfo = document.getElementById("loggedInUserInfo");
  loggedInUserInfo.style.display = "none";
  logoutedNavItem.style.display="none";
}


  </script>
<script src="./js/filter.js"></script>
 <script src="lib/jquery-2.0.0.min.js"></script>
 <script src="./bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
 </body>
 </html>
