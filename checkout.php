<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KVM WATCH | About</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
    rel="icon"
    type="image/x-icon"
    href="./asset/favicon/icondongho (2).png"
  />
  
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
      rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
  
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
  
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
  
    <link rel="stylesheet" href="css/aos.css">
  
    <link rel="stylesheet" href="css/ionicons.min.css">
  
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
  
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
  
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/mystyle.css"> -->
    <link rel="stylesheet" href="css/manh.css">
    <link rel="stylesheet" href="./asset/khang.css">
  </head>

  <body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">KVM WATCH</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
          aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>
  
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
  
        <div id="right">
          <form class="example" action="dongHoNam.php" >
            <input type="text" placeholder="Search.." name="search2">
            <button type="submit" style="background-color: #ffad33;"><i class="fa fa-search"></i></button>
            </form>
        </div>
  
        <div class="collapse navbar-collapse ftco-nav-right" id="ftco-nav" style="margin-left: -65px;">
          <ul class="navbar-nav ml-auto header-right">
            <li class="nav-item" style="display: none;" id="lsmh">
              <a href="orderHistory.php" class="nav-link" style="font-size: 15px !important; padding-left: 0px;
              padding-right: 0px;
              padding-bottom: 0px;
              padding-top: 9px;width: 107px;font-weight: 600;" 
                >Lịch Sử Mua Hàng</a>
            </li>
            <li class="nav-item">
              <a href="cart.php" class="nav-link"
                ><i class="fa-solid fa-cart-shopping"></i
              ></a>
            </li>
            <li class="nav-item islogined" id="logined">
              <a href="./manhlogin.php" class="nav-link" style="font-size: 15px !important; padding-left: 0px;
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
                style="font-size: 15px !important; padding-left: 0px;
                padding-right: 0px;
                padding-bottom: 0px;
                padding-top: 20px;width: 107px;font-weight: 600;"  >Đăng ký</a>
              </li>
            
          </ul>
          <div id="loggedInUserInfo" style="font-size: 20px;"></div>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <div
      class="hero-wrap hero-bread"
      style="background-image: url('images/bg_1.jpeg')"
    >
      <div class="container">
        <div
          class="row no-gutters slider-text align-items-center justify-content-center"
        >
          <div class="col-md-9 ftco-animate text-center">
            <p class="breadcrumbs">
              <span class="mr-2"><a href="index.php">Trang chủ</a></span>
              <span>Thanh toán</span>
            </p>
            <h1 class="mb-0 bread">Thanh Toán</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-xl-7 ftco-animate">
            <form action="#" class="billing-form">
              <h3 class="mb-4 billing-heading">Thông tin nhận hàng</h3>
              <div class="row align-items-end">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="firstname"
                      >Họ và tên<span class="important"> *</span></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Nguyễn Văn A" required
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="shippingAddress">Địa chỉ<span class="important"> *</span></label>
                    <select id="shippingAddress" class="form-control" onchange="changeAddress()">
                      <option value="registered">Địa chỉ đã đăng ký</option>
                      <option value="new">Nhập địa chỉ mới</option>
                    </select>
                    <input
                      type="text"
                      id="addressInput"
                      class="form-control"
                      placeholder=""
                      value="152 đường số 3"
                      style="display: none;"
                    >
                  </div>
                </div>
                
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="lastname"
                      >Số điện thoại<span class="important"> *</span></label
                    >
                    <input
                      type="text"
                      class="form-control"
                      placeholder="0988322869"
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="lastname">Email</label>
                    <input
                      type="text"
                      class="form-control"
                      placeholder="nguyenminhkhang234@gmail.com"
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="lastname">Ghi chú giao hàng</label>
                    <textarea
                      class="form-control note"
                      placeholder="Để hàng ở dưới nhà"
                    ></textarea>
                  </div>
                </div>
                <div class="w-100"></div>
                <div class="col-md-12">
                  <a href="manhlogin.php">Tạo tài khoản</a>
                </div>
              </div>
            </form>
            <!-- END -->
          </div>
          <div class="col-xl-5">
            <div class="row mt-5 pt-3">
              <div class="col-md-12 d-flex mb-5">
                <div class="cart-detail cart-total p-3 p-md-4" style="font-size: 20px">
                  <p class="d-flex">
                    <span>Giá sản phẩm</span>
                    <span>2.710.000 VNĐ</span>
                  </p>
                  <p class="d-flex">
                    <span>Ship</span>
                    <span>30.000 VNĐ</span>
                  </p>
                  <p class="d-flex">
                    <span>Giảm giá</span>
                    <span>200.000 VNĐ</span>
                  </p>
                  <hr />
                  <div class="button-container" style="border-radius: 100px;">
                    <form >
                      <p>Hình thức thanh toán</p>
                      <input type="radio" id="html" name="fav_language" value="HTML">
                      <label for="html">Tiền mặt</label><br>
                      <input type="radio" id="css" name="fav_language" value="CSS">
                      <label for="css">Thẻ ngân hàng</label><br>                         
                    </form>
                    
                  </div>
                  <p class="d-flex total-price">
                    <span>Tổng tiền</span>
                    <span>2.510.000 VNĐ</span>
                  </p>
                  
                  <p>
                    <a href="#" class="btn btn-primary py-3 px-4" id="btn-dh">Đặt hàng</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <!-- .col-md-8 -->
        </div>
      </div>
    </section>
    <!-- .section -->

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
    <div class="footer-end">
      <p>Copyright by KVM WATCHES®</p>
    </div>
    <!--      -->

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen">
      <svg class="circular" width="48px" height="48px">
        <circle
          class="path-bg"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke="#eeeeee"
        />
        <circle
          class="path"
          cx="24"
          cy="24"
          r="22"
          fill="none"
          stroke-width="4"
          stroke-miterlimit="10"
          stroke="#F96D00"
        />
      </svg>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>
   <!-- <script src="asset/khang.js"></script> -->
<script>
  function changeAddress() {
  var select = document.getElementById("shippingAddress");
  var addressInput = document.getElementById("addressInput");

  if (select.value === "registered") {
    // Nếu người dùng chọn địa chỉ đã đăng ký
    addressInput.value = "152 đường số 3"; // Đặt giá trị mặc định
    addressInput.style.display = "block"; // Hiển thị trường nhập liệu
    addressInput.disabled = true; // Vô hiệu hóa trường nhập liệu
  } else if (select.value === "new") {
    // Nếu người dùng chọn nhập địa chỉ mới
    addressInput.value = ""; // Xóa giá trị mặc định
    addressInput.style.display = "block"; // Hiển thị trường nhập liệu
    addressInput.disabled = false; // Kích hoạt trường nhập liệu
  }
}

</script>

    <script>
      $(document).ready(function () {
        var quantitiy = 0;
        $(".quantity-right-plus").click(function (e) {
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($("#quantity").val());

          // If is not undefined

          $("#quantity").val(quantity + 1);

          // Increment
        });

        $(".quantity-left-minus").click(function (e) {
          // Stop acting like a button
          e.preventDefault();
          // Get the field name
          var quantity = parseInt($("#quantity").val());

          // If is not undefined

          // Increment
          if (quantity > 0) {
            $("#quantity").val(quantity - 1);
          }
        });
      });
    </script>
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
     let lsmh=document.getElementById("lsmh")
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
        lsmh.style.display="inline"
       
    } else {
        // Nếu không có thông tin đăng nhập thì hiển thị nút đăng nhập và ẩn thông tin người dùng
        let loggedInUserInfo = document.getElementById("loggedInUserInfo");
        loggedInUserInfo.style.display = "none";
        logoutedNavItem.style.display="none";
    }
    
      
        </script>
    <script>
      // Lấy phần tử button theo id
      var btnDH = document.getElementById('btn-dh');
      
      // Thêm sự kiện click cho button
      btnDH.addEventListener('click', function(event) {
        // Ngăn chặn hành động mặc định của nút (tránh chuyển hướng)
        event.preventDefault();
      
        // Hiển thị hộp thoại xác nhận
        var confirmed = confirm('Bạn có muốn đặt hàng không?');
      
        // Nếu người dùng xác nhận (nhấn OK), thông báo đặt hàng thành công
        if (confirmed) {
          alert('Đặt hàng thành công!');
          window.location.href = 'index.php'
          // Thực hiện hành động đặt hàng ở đây (ví dụ: gửi yêu cầu đặt hàng đến máy chủ)
          // ...
        } else {
          // Nếu người dùng không xác nhận (nhấn Cancel), không làm gì cả hoặc có thể xử lý khác tùy theo yêu cầu của bạn
          // ...
        }
      });
      </script>
  </body>
</html>
