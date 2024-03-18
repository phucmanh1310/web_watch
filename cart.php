<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KVM WATCH | Cart</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="icon"
      type="image/x-icon"
      href="./asset/favicon/icondongho (2).png"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css" />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />

    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- <link rel="stylesheet" href="css/mystyle.css" /> -->
    <link rel="stylesheet" href="./css/manh.css" />
    <link rel="stylesheet" href="./asset/khang.css" />
  </head>
  <body>
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

    <section class="h-100 gradient-custom" style="margin-top: 30px;">
      <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
          <div class="col-md-8">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0">Giỏ hàng </h5>
              </div>
              <div class="card-body">
                <!-- Single item -->
                <div class="row">
                  <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <!-- Image -->
                    <div
                      class="bg-image hover-overlay hover-zoom ripple rounded"
                      data-mdb-ripple-color="light"
                    >
                      <img
                        src="./image_manh/MTP-1302D-1A1VDF-1-.webp"
                        class="w-100"
                        alt="Blue Jeans Jacket"
                      />
                      <a href="#!">
                        <div
                          class="mask"
                          style="background-color: rgba(251, 251, 251, 0.2)"
                        ></div>
                      </a>
                    </div>
                    <!-- Image -->
                  </div>

                  <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p><strong>Casio MTP-1375D-1AVDF </strong></p>
                    <p>Màu: silver</p>
                    <p>Mặt Số: 42mm</p>

                    <button
                    type="button"
                    class="btn btn-primary btn-sm me-1 mb-2"
                    data-mdb-toggle="tooltip"
                    title="Remove item"
                    id="openModalBtn"
                >
                    <i class="fas fa-trash"></i>
                </button>
                
                <div class="modal fade" id="modalHeaderFooter" tabindex="-1" aria-labelledby="modalHeaderFooterTitle" aria-hidden="true">
                  <!-- Modal content -->
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="modalHeaderFooterTitle">Xóa sản phẩm</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" 
                              id="closeModal" >x</button>
                          </div>
                          <div class="modal-body">
                              <p>Bạn có chắc muốn xóa sản phẩm ra khỏi giỏ hàng không ?</p>
                          </div>
                          <div class="modal-footer">
                              <!-- Thêm id cho nút Action -->
                              <button type="button" class="btn btn-primary" id="actionBtn">Đồng ý</button>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnClose">Hủy</button>
                          </div>
                      </div>
                  </div>
              </div>
                    <button
                      type="button"
                      class="btn btn-danger btn-sm mb-2"
                      data-mdb-toggle="tooltip"
                      title="Move to the wish list"
                      id="favourite"
                      onclick="handlefavourite()"
                    >
                      <i class="fas fa-heart"></i>
                    </button>
                    <!-- Data -->
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- Quantity -->
                    <div class="d-flex mb-4" style="max-width: 300px">
                      <button class="btn btn-primary px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" style="
                      width: 20px;
                      height: 31px;
                      border: none !important;
                      border-radius: 3px;                      
                      margin-top: 11px;">
                    <i class="fas fa-minus" style="
                      margin-right: 0px !important;
                      position: absolute;
                      top: 19px;
                      left: 23px;
                  "></i>
                    </button>

                      <div class="form-outline" style="margin: 0 20px;">
                        <input
                          id="form1"
                          min="0"
                          name="quantity"
                          value="1"
                          type="number"
                          class="form-control"
                        />
                        <label class="form-label" for="form1">Số lượng</label>
                      </div>

                      <button
                        class="btn btn-primary px-3 ms-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                        style=" width: 20px;
                        height: 31px;
                        border: none !important;
                        border-radius: 3px;                      
                        margin-top: 11px;"
                      >
                        <i class="fas fa-plus" 
                        style="margin-right: 0px !important;
                        position: absolute;
                        top: 19px;
                        right: 23px;">
                      </i>
                      </button>
                    </div>
                    <!-- Quantity -->

                    <!-- Price -->
                    <p class="text-start text-md-center">
                      <strong>1.710.000 đ</strong>
                    </p>
                    <!-- Price -->
                  </div>
                </div>
                <!-- Single item -->

                <hr class="my-4" />

                <!-- Single item -->
                
                <!-- Single item -->
              </div>
              <div class="card-body">
                <!-- Single item -->
                <div class="row">
                  <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                    <!-- Image -->
                    <div
                      class="bg-image hover-overlay hover-zoom ripple rounded"
                      data-mdb-ripple-color="light"
                    >
                      <img
                        src="./image_manh/MTP-1183E-7ADF-1-.webp"
                        class="w-100"
                        alt="Blue Jeans Jacket"
                      />
                      <a href="#!">
                        <div
                          class="mask"
                          style="background-color: rgba(251, 251, 251, 0.2)"
                        ></div>
                      </a>
                    </div>
                    <!-- Image -->
                  </div>

                  <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                    <!-- Data -->
                    <p><strong>Casio MTP-1183E-7ADF </strong></p>
                    <p>Màu: Black</p>
                    <p>Mặt Số: 38mm</p>

                    <button
                    type="button"
                    class="btn btn-primary btn-sm me-1 mb-2"
                    data-mdb-toggle="tooltip"
                    title="Remove item"
                    id="openModalBtn"
                >
                    <i class="fas fa-trash"></i>
                </button>
                
                <div class="modal fade" id="modalHeaderFooter" tabindex="-1" aria-labelledby="modalHeaderFooterTitle" aria-hidden="true">
                  <!-- Modal content -->
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="modalHeaderFooterTitle">Xóa sản phẩm</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" 
                              id="closeModal" >x</button>
                          </div>
                          <div class="modal-body">
                              <p>Bạn có chắc muốn xóa sản phẩm ra khỏi giỏ hàng không ?</p>
                          </div>
                          <div class="modal-footer">
                              <!-- Thêm id cho nút Action -->
                              <button type="button" class="btn btn-primary" id="actionBtn">Đồng ý</button>
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btnClose">Hủy</button>
                          </div>
                      </div>
                  </div>
              </div>
                    <button
                      type="button"
                      class="btn btn-danger btn-sm mb-2"
                      data-mdb-toggle="tooltip"
                      title="Move to the wish list"
                      id="favourite"
                      onclick="handlefavourite()"
                    >
                      <i class="fas fa-heart"></i>
                    </button>
                    <!-- Data -->
                  </div>

                  <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <!-- Quantity -->
                    <div class="d-flex mb-4" style="max-width: 300px">
                      <button class="btn btn-primary px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()" style="
                      width: 20px;
                      height: 31px;
                      border: none !important;
                      border-radius: 3px;                      
                      margin-top: 11px;">
                    <i class="fas fa-minus" style="
                      margin-right: 0px !important;
                      position: absolute;
                      top: 19px;
                      left: 23px;
                  "></i>
                    </button>

                      <div class="form-outline" style="margin: 0 20px;">
                        <input
                          id="form1"
                          min="0"
                          name="quantity"
                          value="1"
                          type="number"
                          class="form-control"
                        />
                        <label class="form-label" for="form1">Số lượng</label>
                      </div>

                      <button
                        class="btn btn-primary px-3 ms-2"
                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                        style=" width: 20px;
                        height: 31px;
                        border: none !important;
                        border-radius: 3px;                      
                        margin-top: 11px;"
                      >
                        <i class="fas fa-plus" 
                        style="margin-right: 0px !important;
                        position: absolute;
                        top: 19px;
                        right: 23px;">
                      </i>
                      </button>
                    </div>
                    <!-- Quantity -->

                    <!-- Price -->
                    <p class="text-start text-md-center">
                      <strong>1.000.000 đ</strong>
                    </p>
                    <!-- Price -->
                  </div>
                </div>
                <!-- Single item -->

                <hr class="my-4" />

                <!-- Single item -->
                
                <!-- Single item -->
              </div>
            </div>
            
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0">Hóa đơn</h5>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0"
                  >
                    Giá sản phẩm
                    <span>2.710.000 đ</span>
                  </li>
                  <li
                    class="list-group-item d-flex justify-content-between align-items-center px-0"
                  >
                    Phí giao hàng
                    <span>30.000đ</span>
                  </li>
                  <li
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3"
                  >
                    <div>
                      <strong>Tổng tiền</strong>
                      <strong>
                        <p class="mb-0">(Đã bao gồm VAT)</p>
                      </strong>
                    </div>
                    <span><strong>2.723.000 đ</strong></span>
                  </li>
                </ul>
                <a href="checkout.php" >
                <button type="button" class="btn btn-primary btn-lg btn-block">
                Thanh toán 
                </button>
              </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
  </body>

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
  <script src="js/cart.js"></script>
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
    </div>
  </nav>
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
    function totalcost(product) {
      let cartcost = localStorage.getItem("totalcost");
      if (cartcost != null) {
        cartcost = parseInt(cartcost);
        localStorage.setItem("totalcost", cartcost + product.price);
      } else {
        localStorage.setItem("totalcost", product.price);
      }
    }
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
  <script src="./asset/khang.js"></script>
</html>
