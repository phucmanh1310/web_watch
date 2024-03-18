<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      rel="stylesheet"
      href="./bootstrap-5.3.2-dist/css/bootstrap.min.css"
    />
    <link
    rel="icon"
    type="image/x-icon"
    href="./asset/favicon/icondongho (2).png"
  />
    <link rel="stylesheet" href="./lib/slick.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="./css/manh.css" />
    <link rel="stylesheet" href="./asset/khang.css" />
    <link rel="stylesheet" href="./fontawesome-free-6.2.0-web/css/all.css"/>
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
                  <a href="./index.php" class="nav-link active" aria-current="page" style="font-size: 18px;
                  font-weight: 600;">TRANG CHỦ</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="" 
                     class="nav-link dropdown-toggle" 
                     id="navbarAdvancedDropdown" 
                     data-bs-toggle="dropdown" 
                     role="button" 
                     aria-expanded="false"
                     aria-haspopup="true" style="    font-size: 18px;
                     font-weight: 600;">sản phẩm</a>
                  <ul class="dropdown-menu header-dr" aria-labelledby="navbarAdvancedDropdown">
                    <li>
                      <a href="./dongHoNam.php" class="dropdown-item" style="color: #ffad33;text-align: left;">Đồng hồ nam</a>
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
                  <a href="./about.php" class="nav-link" style="    font-size: 18px;
                  font-weight: 600;">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                  <a href="./contact.php" class="nav-link" style="    font-size: 18px;
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
              </form>
            </div>
        </nav>
      </section>
     </header>
    <!-- section 1 -->
    <div class="container section-1-pdsn" style="margin-top: 66px;">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="slider-for-pd-single">
            <div>
              <img
                src="./image_manh/MTP-1302D-1A1VDF-1-.webp"
                style="width: 500px; height: 500px"
                alt=""
              />
            </div>
            <div>
              <img
                src="./image_manh/CASIO-MTP-1381D-1AVDF-2-1.avif"
                style="width: 500px; height: 500px"
                alt=""
              />
            </div>
            <div>
              <img
                src="./image_manh/CASIO-MTP-1381D-1AVDF-1-1.avif"
                style="width: 500px; height: 500px"
                alt=""
              />
            </div>
            <div>
              <img
                src="./image_manh/CASIO-MTP-1381D-1AVDF-3-1.avif"
                style="width: 500px; height: 500px"
                alt=""
              />
            </div>
            <div>
              <img
                src="./image_manh/CASIO-MTP-1381D-1AVDF-4.avif"
                style="width: 500px; height: 500px"
                alt=""
              />
            </div>
            <div>
              <img
                src="./image_manh/casio-box.avif"
                style="width: 500px; height: 500px"
                alt=""
              />
            </div>
          </div>
          <div class="row slider-nav-pd-single">
            <div class="col-2">
              <img
                src="./image_manh/MTP-1302D-1A1VDF-1-.webp"
                style="width: 100px; height: 100px"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./image_manh/CASIO-MTP-1381D-1AVDF-2-1.avif"
                style="width: 100px; height: 100px"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./image_manh/CASIO-MTP-1381D-1AVDF-1-1.avif"
                style="width: 100px; height: 100px"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./image_manh/CASIO-MTP-1381D-1AVDF-3-1.avif"
                style="width: 100px; height: 100px"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./image_manh/CASIO-MTP-1381D-1AVDF-4.avif"
                alt=""
                style="width: 100px; height: 100px"
              />
            </div>
            <div class="col-2">
              <img
                src="./image_manh/casio-box.avif"
                style="width: 100px; height: 100px"
                alt=""
              />
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 item-right">
          <div>
            <h1 class="title" style="font-size: 30px;">
              Casio MTP-1381D-1AVDF – Nam – Quartz (Pin)  Mặt Số 39.9 mm, Lịch Ngày Thứ, Chống Nước 5 ATM
            </h1>
            <p class="pd-code">Mã Số Sản Phẩm:  MTP-1381D-1AVDF</p>
            <p class="price">1.710.000 ₫</p>
            <p class="content">
              Đồng hồ Casio MTP-1381D-1AVDF có vỏ và dây đeo kim loại phủ bạc sáng bóng,
              nền số màu đen mạnh mẽ với kim chỉ và vạch số được phủ phản quang nổi bật,
              lịch thứ vị trí 12h và lịch ngày vị trí 6h.
            </p>
          </div>

          <div class="dropdown" style="margin-bottom: 10px;">
            <button type="button" class="btn btn-secondary dropdown-toggle pdsn-btn-showroom " id="dropdownMedium" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%;">Xem Showroom còn hàng</button>
            <div class="dropdown-menu pdsn-btn-showroom-dropdown-menu" aria-labelledby="dropdownMedium" style="width: 100%;">
              <a href="https://www.google.com/maps" class="dropdown-item">160 Âu Cơ, P.9, Q.Tân Bình – TP.HCM - Xem bản đồ</a>
              <a href="https://www.google.com/maps" class="dropdown-item">239 Đường 30/4, P.Thanh Bình – TP.Biên Hòa - Xem bản đồ</a>
              <a href="https://www.google.com/maps" class="dropdown-item">85B Lý Tự Trọng, Q.Ninh Kiều – TP.Cần Thơ - Xem bản đồ</a>
              <a href="https://www.google.com/maps" class="dropdown-item">560 Tỉnh Lộ 10, Q.Bình Tân – TPHCM - Xem bản đồ</a>
              <a href="https://www.google.com/maps" class="dropdown-item">676 Lê Trọng Tấn, Q.Bình Tân – TPHCM - Xem bản đồ</a>
              <a href="https://www.google.com/maps" class="dropdown-item">38 Cách Mạng Tháng Tám, Lái thiêu, Bình Dương - Xem bản đồ</a>
              <a href="https://www.google.com/maps" class="dropdown-item">199 Âu Cơ, P.5, Q.11 – TPHCM - Xem bản đồ</a>
              <a href="https://www.google.com/maps" class="dropdown-item dropdown-item-last">12B Nguyễn Thị Định, Q.2 – TPHCM - Xem bản đồ </a>
            </div>
          </div>
          <div>
            <a href="./cart.php"><button
              type="button"
              class="btn btn-danger"
              style="
                width: 100%;
                margin-bottom: 20px;
                background-color: #993333;
              "
            >
              Thêm vào giỏ hàng
            </button></a>
          </div>
          <div>
            <p style="font-size: 18px">
              Có thanh toán: <strong style="color: #676767">Trả góp</strong> khi
              mua Online (Qua thẻ tín dụng)
            </p>
            <p style="font-size: 18px">
              Gọi đặt mua:
              <strong style="color: #676767">1900.6777 (8:00-1:30)</strong>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!--  -->
    <!-- section 2 -->
    <!-- <div class="container pdsn-2-section mt-3">
      <div class="row">
        <div
          class="col-sm-6 col-md-3 col-lg-2"
          style="
            display: flex;
            padding: 10px;
            border: 1px solid #ededed;
            border-radius: 10px;
          "
        >
          <div
            style="
              width: 40px;

              height: 48px;
              color: rgb(159, 29, 37);
            "
          >
            <svg
              id="Layer_2"
              data-name="Layer 2"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24.15 23.65"
              style="fill: currentColor; width: 100%; height: 100%"
            >
              <g id="Layer_1-2" data-name="Layer 1">
                <g>
                  <g>
                    <path
                      d="M3.96,19.95c-.29-.23-.34-.66-.1-.95,.23-.29,.66-.34,.95-.1l4.27,3.45c.29,.23,.34,.66,.1,.95-.23,.29-.66,.34-.95,.1l-4.27-3.45Zm4.19-3.31c-.3-.23-.35-.65-.12-.95,.23-.3,.65-.35,.95-.12l6.66,5.16c1.18-.94,2.49-2.05,3.58-2.98,.73-.62,1.36-1.15,1.8-1.51h0s0,0,0,0c.16-.13,.25-.31,.26-.49,.02-.19-.03-.39-.16-.55h0s0,0,0,0c-.13-.16-.31-.25-.5-.27-.19-.02-.39,.03-.55,.16l-3.95,3.21c-.24,.2-.58,.2-.83,.02h0s-7.89-5.78-7.89-5.78c-.3-.22-.37-.64-.15-.95,.03-.05,.07-.08,.11-.12,2.28-1.94,2.78-3.87,2.54-5.18-.07-.4-.21-.74-.39-.98-.14-.19-.29-.32-.42-.35-.04-.01-.09,0-.14,.03-.16,1.49-1.16,2.76-2.5,3.75-1.52,1.12-3.5,1.89-5.09,2.17v4.93c0,.37-.3,.68-.68,.68s-.68-.3-.68-.68v-5.51H0c0-.34,.26-.64,.61-.67,1.48-.15,3.51-.88,5.03-2,1.11-.82,1.93-1.84,1.97-2.96,0-.14,.05-.27,.13-.39,.46-.62,1.07-.8,1.69-.64,.04,.01,.09,.03,.13,.04V.68c0-.37,.3-.68,.68-.68h13.23c.37,0,.68,.3,.68,.68V13.91c0,.37-.3,.68-.68,.68h-1.15c.24,.4,.34,.86,.3,1.31-.05,.53-.31,1.05-.75,1.41h0s-.01,0-.01,0c-.41,.33-1.04,.87-1.77,1.49-1.24,1.06-2.77,2.35-4.03,3.34-.26,.2-.63,.18-.87-.03l-7.03-5.46Zm5.53-1.16l1.16-.9h-.54c-.37,0-.68-.3-.68-.68s.3-.68,.68-.68h8.49V1.36H10.92v3.73c.13,.29,.24,.62,.31,.99,.28,1.55-.18,3.74-2.37,5.88l4.82,3.53Zm3.34-.9s-.06,.07-.1,.09l-2.11,1.64,.84,.62,2.89-2.35h-1.53ZM1.86,18.12c-.28-.25-.31-.68-.06-.96,.25-.28,.68-.31,.96-.06l.15,.13s.03,.02,.04,.04l.16,.14c.28,.25,.31,.67,.06,.95-.25,.28-.67,.31-.95,.06-.08-.07-.11-.09-.17-.15-.01,0-.03-.02-.04-.03l-.15-.13Z"
                    ></path>
                    <path
                      d="M7.87,19.87c-.3-.23-.35-.66-.12-.95,.23-.3,.66-.35,.95-.12l4.67,3.63c.3,.23,.35,.66,.12,.95-.23,.3-.66,.35-.95,.12l-4.67-3.63Z"
                    ></path>
                  </g>
                  <path
                    d="M14.24,9.48v-.07s1.25,0,1.25,0v.04c.11,.63,.69,1.11,1.47,1.11,.89,0,1.51-.61,1.51-1.49h0c0-.87-.63-1.48-1.51-1.48-.43,0-.79,.13-1.08,.37-.14,.11-.26,.26-.35,.43h-1.17l.36-4.36h4.6v1.1h-3.53l-.21,2.26h.03c.33-.5,.95-.8,1.7-.8,1.43,0,2.46,1.03,2.46,2.46h0c0,1.55-1.16,2.61-2.81,2.61-1.56,0-2.62-.93-2.72-2.17Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
          <div
            style="display: flex; align-items: center; justify-content: center"
          >
            <h5
              style="
                font-size: 16px;
                padding-left: 6px;
                color: #676767;
                padding-top: 3px;
              "
            >
              Tăng thời gian bảo hành lên 5 năm
            </h5>
          </div>
        </div>

        <div
          class="col-sm-6 col-md-3 col-lg-2"
          style="
            display: flex;
            padding: 10px;
            border: 1px solid #ededed;
            border-radius: 10px;
          "
        >
          <div
            style="
              width: 40px;

              height: 48px;
              color: rgb(159, 29, 37);
            "
          >
            <svg
              id="Layer_2"
              data-name="Layer 2"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24.15 23.65"
              style="fill: currentColor; width: 100%; height: 100%"
            >
              <g id="Layer_1-2" data-name="Layer 1">
                <g>
                  <g>
                    <path
                      d="M3.96,19.95c-.29-.23-.34-.66-.1-.95,.23-.29,.66-.34,.95-.1l4.27,3.45c.29,.23,.34,.66,.1,.95-.23,.29-.66,.34-.95,.1l-4.27-3.45Zm4.19-3.31c-.3-.23-.35-.65-.12-.95,.23-.3,.65-.35,.95-.12l6.66,5.16c1.18-.94,2.49-2.05,3.58-2.98,.73-.62,1.36-1.15,1.8-1.51h0s0,0,0,0c.16-.13,.25-.31,.26-.49,.02-.19-.03-.39-.16-.55h0s0,0,0,0c-.13-.16-.31-.25-.5-.27-.19-.02-.39,.03-.55,.16l-3.95,3.21c-.24,.2-.58,.2-.83,.02h0s-7.89-5.78-7.89-5.78c-.3-.22-.37-.64-.15-.95,.03-.05,.07-.08,.11-.12,2.28-1.94,2.78-3.87,2.54-5.18-.07-.4-.21-.74-.39-.98-.14-.19-.29-.32-.42-.35-.04-.01-.09,0-.14,.03-.16,1.49-1.16,2.76-2.5,3.75-1.52,1.12-3.5,1.89-5.09,2.17v4.93c0,.37-.3,.68-.68,.68s-.68-.3-.68-.68v-5.51H0c0-.34,.26-.64,.61-.67,1.48-.15,3.51-.88,5.03-2,1.11-.82,1.93-1.84,1.97-2.96,0-.14,.05-.27,.13-.39,.46-.62,1.07-.8,1.69-.64,.04,.01,.09,.03,.13,.04V.68c0-.37,.3-.68,.68-.68h13.23c.37,0,.68,.3,.68,.68V13.91c0,.37-.3,.68-.68,.68h-1.15c.24,.4,.34,.86,.3,1.31-.05,.53-.31,1.05-.75,1.41h0s-.01,0-.01,0c-.41,.33-1.04,.87-1.77,1.49-1.24,1.06-2.77,2.35-4.03,3.34-.26,.2-.63,.18-.87-.03l-7.03-5.46Zm5.53-1.16l1.16-.9h-.54c-.37,0-.68-.3-.68-.68s.3-.68,.68-.68h8.49V1.36H10.92v3.73c.13,.29,.24,.62,.31,.99,.28,1.55-.18,3.74-2.37,5.88l4.82,3.53Zm3.34-.9s-.06,.07-.1,.09l-2.11,1.64,.84,.62,2.89-2.35h-1.53ZM1.86,18.12c-.28-.25-.31-.68-.06-.96,.25-.28,.68-.31,.96-.06l.15,.13s.03,.02,.04,.04l.16,.14c.28,.25,.31,.67,.06,.95-.25,.28-.67,.31-.95,.06-.08-.07-.11-.09-.17-.15-.01,0-.03-.02-.04-.03l-.15-.13Z"
                    ></path>
                    <path
                      d="M7.87,19.87c-.3-.23-.35-.66-.12-.95,.23-.3,.66-.35,.95-.12l4.67,3.63c.3,.23,.35,.66,.12,.95-.23,.3-.66,.35-.95,.12l-4.67-3.63Z"
                    ></path>
                  </g>
                  <path
                    d="M14.24,9.48v-.07s1.25,0,1.25,0v.04c.11,.63,.69,1.11,1.47,1.11,.89,0,1.51-.61,1.51-1.49h0c0-.87-.63-1.48-1.51-1.48-.43,0-.79,.13-1.08,.37-.14,.11-.26,.26-.35,.43h-1.17l.36-4.36h4.6v1.1h-3.53l-.21,2.26h.03c.33-.5,.95-.8,1.7-.8,1.43,0,2.46,1.03,2.46,2.46h0c0,1.55-1.16,2.61-2.81,2.61-1.56,0-2.62-.93-2.72-2.17Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
          <div
            style="display: flex; align-items: center; justify-content: center"
          >
            <h5
              style="
                font-size: 16px;
                padding-left: 6px;
                color: #676767;
                padding-top: 3px;
              "
            >
              Tăng thời gian bảo hành lên 5 năm
            </h5>
          </div>
        </div>

        <div
          class="col-sm-6 col-md-3 col-lg-2"
          style="
            display: flex;
            padding: 10px;
            border: 1px solid #ededed;
            border-radius: 10px;
          "
        >
          <div
            style="
              width: 40px;

              height: 48px;
              color: rgb(159, 29, 37);
            "
          >
            <svg
              id="Layer_2"
              data-name="Layer 2"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24.15 23.65"
              style="fill: currentColor; width: 100%; height: 100%"
            >
              <g id="Layer_1-2" data-name="Layer 1">
                <g>
                  <g>
                    <path
                      d="M3.96,19.95c-.29-.23-.34-.66-.1-.95,.23-.29,.66-.34,.95-.1l4.27,3.45c.29,.23,.34,.66,.1,.95-.23,.29-.66,.34-.95,.1l-4.27-3.45Zm4.19-3.31c-.3-.23-.35-.65-.12-.95,.23-.3,.65-.35,.95-.12l6.66,5.16c1.18-.94,2.49-2.05,3.58-2.98,.73-.62,1.36-1.15,1.8-1.51h0s0,0,0,0c.16-.13,.25-.31,.26-.49,.02-.19-.03-.39-.16-.55h0s0,0,0,0c-.13-.16-.31-.25-.5-.27-.19-.02-.39,.03-.55,.16l-3.95,3.21c-.24,.2-.58,.2-.83,.02h0s-7.89-5.78-7.89-5.78c-.3-.22-.37-.64-.15-.95,.03-.05,.07-.08,.11-.12,2.28-1.94,2.78-3.87,2.54-5.18-.07-.4-.21-.74-.39-.98-.14-.19-.29-.32-.42-.35-.04-.01-.09,0-.14,.03-.16,1.49-1.16,2.76-2.5,3.75-1.52,1.12-3.5,1.89-5.09,2.17v4.93c0,.37-.3,.68-.68,.68s-.68-.3-.68-.68v-5.51H0c0-.34,.26-.64,.61-.67,1.48-.15,3.51-.88,5.03-2,1.11-.82,1.93-1.84,1.97-2.96,0-.14,.05-.27,.13-.39,.46-.62,1.07-.8,1.69-.64,.04,.01,.09,.03,.13,.04V.68c0-.37,.3-.68,.68-.68h13.23c.37,0,.68,.3,.68,.68V13.91c0,.37-.3,.68-.68,.68h-1.15c.24,.4,.34,.86,.3,1.31-.05,.53-.31,1.05-.75,1.41h0s-.01,0-.01,0c-.41,.33-1.04,.87-1.77,1.49-1.24,1.06-2.77,2.35-4.03,3.34-.26,.2-.63,.18-.87-.03l-7.03-5.46Zm5.53-1.16l1.16-.9h-.54c-.37,0-.68-.3-.68-.68s.3-.68,.68-.68h8.49V1.36H10.92v3.73c.13,.29,.24,.62,.31,.99,.28,1.55-.18,3.74-2.37,5.88l4.82,3.53Zm3.34-.9s-.06,.07-.1,.09l-2.11,1.64,.84,.62,2.89-2.35h-1.53ZM1.86,18.12c-.28-.25-.31-.68-.06-.96,.25-.28,.68-.31,.96-.06l.15,.13s.03,.02,.04,.04l.16,.14c.28,.25,.31,.67,.06,.95-.25,.28-.67,.31-.95,.06-.08-.07-.11-.09-.17-.15-.01,0-.03-.02-.04-.03l-.15-.13Z"
                    ></path>
                    <path
                      d="M7.87,19.87c-.3-.23-.35-.66-.12-.95,.23-.3,.66-.35,.95-.12l4.67,3.63c.3,.23,.35,.66,.12,.95-.23,.3-.66,.35-.95,.12l-4.67-3.63Z"
                    ></path>
                  </g>
                  <path
                    d="M14.24,9.48v-.07s1.25,0,1.25,0v.04c.11,.63,.69,1.11,1.47,1.11,.89,0,1.51-.61,1.51-1.49h0c0-.87-.63-1.48-1.51-1.48-.43,0-.79,.13-1.08,.37-.14,.11-.26,.26-.35,.43h-1.17l.36-4.36h4.6v1.1h-3.53l-.21,2.26h.03c.33-.5,.95-.8,1.7-.8,1.43,0,2.46,1.03,2.46,2.46h0c0,1.55-1.16,2.61-2.81,2.61-1.56,0-2.62-.93-2.72-2.17Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
          <div
            style="display: flex; align-items: center; justify-content: center"
          >
            <h5
              style="
                font-size: 16px;
                padding-left: 6px;
                color: #676767;
                padding-top: 3px;
              "
            >
              Tăng thời gian bảo hành lên 5 năm
            </h5>
          </div>
        </div>

        <div
          class="col-sm-6 col-md-3 col-lg-2"
          style="
            display: flex;
            padding: 10px;
            border: 1px solid #ededed;
            border-radius: 10px;
          "
        >
          <div
            style="
              width: 40px;

              height: 48px;
              color: rgb(159, 29, 37);
            "
          >
            <svg
              id="Layer_2"
              data-name="Layer 2"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24.15 23.65"
              style="fill: currentColor; width: 100%; height: 100%"
            >
              <g id="Layer_1-2" data-name="Layer 1">
                <g>
                  <g>
                    <path
                      d="M3.96,19.95c-.29-.23-.34-.66-.1-.95,.23-.29,.66-.34,.95-.1l4.27,3.45c.29,.23,.34,.66,.1,.95-.23,.29-.66,.34-.95,.1l-4.27-3.45Zm4.19-3.31c-.3-.23-.35-.65-.12-.95,.23-.3,.65-.35,.95-.12l6.66,5.16c1.18-.94,2.49-2.05,3.58-2.98,.73-.62,1.36-1.15,1.8-1.51h0s0,0,0,0c.16-.13,.25-.31,.26-.49,.02-.19-.03-.39-.16-.55h0s0,0,0,0c-.13-.16-.31-.25-.5-.27-.19-.02-.39,.03-.55,.16l-3.95,3.21c-.24,.2-.58,.2-.83,.02h0s-7.89-5.78-7.89-5.78c-.3-.22-.37-.64-.15-.95,.03-.05,.07-.08,.11-.12,2.28-1.94,2.78-3.87,2.54-5.18-.07-.4-.21-.74-.39-.98-.14-.19-.29-.32-.42-.35-.04-.01-.09,0-.14,.03-.16,1.49-1.16,2.76-2.5,3.75-1.52,1.12-3.5,1.89-5.09,2.17v4.93c0,.37-.3,.68-.68,.68s-.68-.3-.68-.68v-5.51H0c0-.34,.26-.64,.61-.67,1.48-.15,3.51-.88,5.03-2,1.11-.82,1.93-1.84,1.97-2.96,0-.14,.05-.27,.13-.39,.46-.62,1.07-.8,1.69-.64,.04,.01,.09,.03,.13,.04V.68c0-.37,.3-.68,.68-.68h13.23c.37,0,.68,.3,.68,.68V13.91c0,.37-.3,.68-.68,.68h-1.15c.24,.4,.34,.86,.3,1.31-.05,.53-.31,1.05-.75,1.41h0s-.01,0-.01,0c-.41,.33-1.04,.87-1.77,1.49-1.24,1.06-2.77,2.35-4.03,3.34-.26,.2-.63,.18-.87-.03l-7.03-5.46Zm5.53-1.16l1.16-.9h-.54c-.37,0-.68-.3-.68-.68s.3-.68,.68-.68h8.49V1.36H10.92v3.73c.13,.29,.24,.62,.31,.99,.28,1.55-.18,3.74-2.37,5.88l4.82,3.53Zm3.34-.9s-.06,.07-.1,.09l-2.11,1.64,.84,.62,2.89-2.35h-1.53ZM1.86,18.12c-.28-.25-.31-.68-.06-.96,.25-.28,.68-.31,.96-.06l.15,.13s.03,.02,.04,.04l.16,.14c.28,.25,.31,.67,.06,.95-.25,.28-.67,.31-.95,.06-.08-.07-.11-.09-.17-.15-.01,0-.03-.02-.04-.03l-.15-.13Z"
                    ></path>
                    <path
                      d="M7.87,19.87c-.3-.23-.35-.66-.12-.95,.23-.3,.66-.35,.95-.12l4.67,3.63c.3,.23,.35,.66,.12,.95-.23,.3-.66,.35-.95,.12l-4.67-3.63Z"
                    ></path>
                  </g>
                  <path
                    d="M14.24,9.48v-.07s1.25,0,1.25,0v.04c.11,.63,.69,1.11,1.47,1.11,.89,0,1.51-.61,1.51-1.49h0c0-.87-.63-1.48-1.51-1.48-.43,0-.79,.13-1.08,.37-.14,.11-.26,.26-.35,.43h-1.17l.36-4.36h4.6v1.1h-3.53l-.21,2.26h.03c.33-.5,.95-.8,1.7-.8,1.43,0,2.46,1.03,2.46,2.46h0c0,1.55-1.16,2.61-2.81,2.61-1.56,0-2.62-.93-2.72-2.17Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
          <div
            style="display: flex; align-items: center; justify-content: center"
          >
            <h5
              style="
                font-size: 16px;
                padding-left: 6px;
                color: #676767;
                padding-top: 3px;
              "
            >
              Tăng thời gian bảo hành lên 5 năm
            </h5>
          </div>
        </div>

        <div
          class="col-sm-6 col-md-3 col-lg-2"
          style="
            display: flex;
            padding: 10px;
            border: 1px solid #ededed;
            border-radius: 10px;
          "
        >
          <div
            style="
              width: 40px;

              height: 48px;
              color: rgb(159, 29, 37);
            "
          >
            <svg
              id="Layer_2"
              data-name="Layer 2"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24.15 23.65"
              style="fill: currentColor; width: 100%; height: 100%"
            >
              <g id="Layer_1-2" data-name="Layer 1">
                <g>
                  <g>
                    <path
                      d="M3.96,19.95c-.29-.23-.34-.66-.1-.95,.23-.29,.66-.34,.95-.1l4.27,3.45c.29,.23,.34,.66,.1,.95-.23,.29-.66,.34-.95,.1l-4.27-3.45Zm4.19-3.31c-.3-.23-.35-.65-.12-.95,.23-.3,.65-.35,.95-.12l6.66,5.16c1.18-.94,2.49-2.05,3.58-2.98,.73-.62,1.36-1.15,1.8-1.51h0s0,0,0,0c.16-.13,.25-.31,.26-.49,.02-.19-.03-.39-.16-.55h0s0,0,0,0c-.13-.16-.31-.25-.5-.27-.19-.02-.39,.03-.55,.16l-3.95,3.21c-.24,.2-.58,.2-.83,.02h0s-7.89-5.78-7.89-5.78c-.3-.22-.37-.64-.15-.95,.03-.05,.07-.08,.11-.12,2.28-1.94,2.78-3.87,2.54-5.18-.07-.4-.21-.74-.39-.98-.14-.19-.29-.32-.42-.35-.04-.01-.09,0-.14,.03-.16,1.49-1.16,2.76-2.5,3.75-1.52,1.12-3.5,1.89-5.09,2.17v4.93c0,.37-.3,.68-.68,.68s-.68-.3-.68-.68v-5.51H0c0-.34,.26-.64,.61-.67,1.48-.15,3.51-.88,5.03-2,1.11-.82,1.93-1.84,1.97-2.96,0-.14,.05-.27,.13-.39,.46-.62,1.07-.8,1.69-.64,.04,.01,.09,.03,.13,.04V.68c0-.37,.3-.68,.68-.68h13.23c.37,0,.68,.3,.68,.68V13.91c0,.37-.3,.68-.68,.68h-1.15c.24,.4,.34,.86,.3,1.31-.05,.53-.31,1.05-.75,1.41h0s-.01,0-.01,0c-.41,.33-1.04,.87-1.77,1.49-1.24,1.06-2.77,2.35-4.03,3.34-.26,.2-.63,.18-.87-.03l-7.03-5.46Zm5.53-1.16l1.16-.9h-.54c-.37,0-.68-.3-.68-.68s.3-.68,.68-.68h8.49V1.36H10.92v3.73c.13,.29,.24,.62,.31,.99,.28,1.55-.18,3.74-2.37,5.88l4.82,3.53Zm3.34-.9s-.06,.07-.1,.09l-2.11,1.64,.84,.62,2.89-2.35h-1.53ZM1.86,18.12c-.28-.25-.31-.68-.06-.96,.25-.28,.68-.31,.96-.06l.15,.13s.03,.02,.04,.04l.16,.14c.28,.25,.31,.67,.06,.95-.25,.28-.67,.31-.95,.06-.08-.07-.11-.09-.17-.15-.01,0-.03-.02-.04-.03l-.15-.13Z"
                    ></path>
                    <path
                      d="M7.87,19.87c-.3-.23-.35-.66-.12-.95,.23-.3,.66-.35,.95-.12l4.67,3.63c.3,.23,.35,.66,.12,.95-.23,.3-.66,.35-.95,.12l-4.67-3.63Z"
                    ></path>
                  </g>
                  <path
                    d="M14.24,9.48v-.07s1.25,0,1.25,0v.04c.11,.63,.69,1.11,1.47,1.11,.89,0,1.51-.61,1.51-1.49h0c0-.87-.63-1.48-1.51-1.48-.43,0-.79,.13-1.08,.37-.14,.11-.26,.26-.35,.43h-1.17l.36-4.36h4.6v1.1h-3.53l-.21,2.26h.03c.33-.5,.95-.8,1.7-.8,1.43,0,2.46,1.03,2.46,2.46h0c0,1.55-1.16,2.61-2.81,2.61-1.56,0-2.62-.93-2.72-2.17Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
          <div
            style="display: flex; align-items: center; justify-content: center"
          >
            <h5
              style="
                font-size: 16px;
                padding-left: 6px;
                color: #676767;
                padding-top: 3px;
              "
            >
              Tăng thời gian bảo hành lên 5 năm
            </h5>
          </div>
        </div>

        <div
          class="col-sm-6 col-md-3 col-lg-2"
          style="
            display: flex;
            padding: 10px;
            border: 1px solid #ededed;
            border-radius: 10px;
          "
        >
          <div
            style="
              width: 40px;

              height: 48px;
              color: rgb(159, 29, 37);
            "
          >
            <svg
              id="Layer_2"
              data-name="Layer 2"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24.15 23.65"
              style="fill: currentColor; width: 100%; height: 100%"
            >
              <g id="Layer_1-2" data-name="Layer 1">
                <g>
                  <g>
                    <path
                      d="M3.96,19.95c-.29-.23-.34-.66-.1-.95,.23-.29,.66-.34,.95-.1l4.27,3.45c.29,.23,.34,.66,.1,.95-.23,.29-.66,.34-.95,.1l-4.27-3.45Zm4.19-3.31c-.3-.23-.35-.65-.12-.95,.23-.3,.65-.35,.95-.12l6.66,5.16c1.18-.94,2.49-2.05,3.58-2.98,.73-.62,1.36-1.15,1.8-1.51h0s0,0,0,0c.16-.13,.25-.31,.26-.49,.02-.19-.03-.39-.16-.55h0s0,0,0,0c-.13-.16-.31-.25-.5-.27-.19-.02-.39,.03-.55,.16l-3.95,3.21c-.24,.2-.58,.2-.83,.02h0s-7.89-5.78-7.89-5.78c-.3-.22-.37-.64-.15-.95,.03-.05,.07-.08,.11-.12,2.28-1.94,2.78-3.87,2.54-5.18-.07-.4-.21-.74-.39-.98-.14-.19-.29-.32-.42-.35-.04-.01-.09,0-.14,.03-.16,1.49-1.16,2.76-2.5,3.75-1.52,1.12-3.5,1.89-5.09,2.17v4.93c0,.37-.3,.68-.68,.68s-.68-.3-.68-.68v-5.51H0c0-.34,.26-.64,.61-.67,1.48-.15,3.51-.88,5.03-2,1.11-.82,1.93-1.84,1.97-2.96,0-.14,.05-.27,.13-.39,.46-.62,1.07-.8,1.69-.64,.04,.01,.09,.03,.13,.04V.68c0-.37,.3-.68,.68-.68h13.23c.37,0,.68,.3,.68,.68V13.91c0,.37-.3,.68-.68,.68h-1.15c.24,.4,.34,.86,.3,1.31-.05,.53-.31,1.05-.75,1.41h0s-.01,0-.01,0c-.41,.33-1.04,.87-1.77,1.49-1.24,1.06-2.77,2.35-4.03,3.34-.26,.2-.63,.18-.87-.03l-7.03-5.46Zm5.53-1.16l1.16-.9h-.54c-.37,0-.68-.3-.68-.68s.3-.68,.68-.68h8.49V1.36H10.92v3.73c.13,.29,.24,.62,.31,.99,.28,1.55-.18,3.74-2.37,5.88l4.82,3.53Zm3.34-.9s-.06,.07-.1,.09l-2.11,1.64,.84,.62,2.89-2.35h-1.53ZM1.86,18.12c-.28-.25-.31-.68-.06-.96,.25-.28,.68-.31,.96-.06l.15,.13s.03,.02,.04,.04l.16,.14c.28,.25,.31,.67,.06,.95-.25,.28-.67,.31-.95,.06-.08-.07-.11-.09-.17-.15-.01,0-.03-.02-.04-.03l-.15-.13Z"
                    ></path>
                    <path
                      d="M7.87,19.87c-.3-.23-.35-.66-.12-.95,.23-.3,.66-.35,.95-.12l4.67,3.63c.3,.23,.35,.66,.12,.95-.23,.3-.66,.35-.95,.12l-4.67-3.63Z"
                    ></path>
                  </g>
                  <path
                    d="M14.24,9.48v-.07s1.25,0,1.25,0v.04c.11,.63,.69,1.11,1.47,1.11,.89,0,1.51-.61,1.51-1.49h0c0-.87-.63-1.48-1.51-1.48-.43,0-.79,.13-1.08,.37-.14,.11-.26,.26-.35,.43h-1.17l.36-4.36h4.6v1.1h-3.53l-.21,2.26h.03c.33-.5,.95-.8,1.7-.8,1.43,0,2.46,1.03,2.46,2.46h0c0,1.55-1.16,2.61-2.81,2.61-1.56,0-2.62-.93-2.72-2.17Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
          <div
            style="display: flex; align-items: center; justify-content: center"
          >
            <h5
              style="
                font-size: 16px;
                padding-left: 6px;
                color: #676767;
                padding-top: 3px;
              "
            >
              Tăng thời gian bảo hành lên 5 năm
            </h5>
          </div>
        </div>

        <div
          class="col-sm-6 col-md-3 col-lg-2"
          style="
            display: flex;
            padding: 10px;
            border: 1px solid #ededed;
            border-radius: 10px;
          "
        >
          <div
            style="
              width: 40px;

              height: 48px;
              color: rgb(159, 29, 37);
            "
          >
            <svg
              id="Layer_2"
              data-name="Layer 2"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 24.15 23.65"
              style="fill: currentColor; width: 100%; height: 100%"
            >
              <g id="Layer_1-2" data-name="Layer 1">
                <g>
                  <g>
                    <path
                      d="M3.96,19.95c-.29-.23-.34-.66-.1-.95,.23-.29,.66-.34,.95-.1l4.27,3.45c.29,.23,.34,.66,.1,.95-.23,.29-.66,.34-.95,.1l-4.27-3.45Zm4.19-3.31c-.3-.23-.35-.65-.12-.95,.23-.3,.65-.35,.95-.12l6.66,5.16c1.18-.94,2.49-2.05,3.58-2.98,.73-.62,1.36-1.15,1.8-1.51h0s0,0,0,0c.16-.13,.25-.31,.26-.49,.02-.19-.03-.39-.16-.55h0s0,0,0,0c-.13-.16-.31-.25-.5-.27-.19-.02-.39,.03-.55,.16l-3.95,3.21c-.24,.2-.58,.2-.83,.02h0s-7.89-5.78-7.89-5.78c-.3-.22-.37-.64-.15-.95,.03-.05,.07-.08,.11-.12,2.28-1.94,2.78-3.87,2.54-5.18-.07-.4-.21-.74-.39-.98-.14-.19-.29-.32-.42-.35-.04-.01-.09,0-.14,.03-.16,1.49-1.16,2.76-2.5,3.75-1.52,1.12-3.5,1.89-5.09,2.17v4.93c0,.37-.3,.68-.68,.68s-.68-.3-.68-.68v-5.51H0c0-.34,.26-.64,.61-.67,1.48-.15,3.51-.88,5.03-2,1.11-.82,1.93-1.84,1.97-2.96,0-.14,.05-.27,.13-.39,.46-.62,1.07-.8,1.69-.64,.04,.01,.09,.03,.13,.04V.68c0-.37,.3-.68,.68-.68h13.23c.37,0,.68,.3,.68,.68V13.91c0,.37-.3,.68-.68,.68h-1.15c.24,.4,.34,.86,.3,1.31-.05,.53-.31,1.05-.75,1.41h0s-.01,0-.01,0c-.41,.33-1.04,.87-1.77,1.49-1.24,1.06-2.77,2.35-4.03,3.34-.26,.2-.63,.18-.87-.03l-7.03-5.46Zm5.53-1.16l1.16-.9h-.54c-.37,0-.68-.3-.68-.68s.3-.68,.68-.68h8.49V1.36H10.92v3.73c.13,.29,.24,.62,.31,.99,.28,1.55-.18,3.74-2.37,5.88l4.82,3.53Zm3.34-.9s-.06,.07-.1,.09l-2.11,1.64,.84,.62,2.89-2.35h-1.53ZM1.86,18.12c-.28-.25-.31-.68-.06-.96,.25-.28,.68-.31,.96-.06l.15,.13s.03,.02,.04,.04l.16,.14c.28,.25,.31,.67,.06,.95-.25,.28-.67,.31-.95,.06-.08-.07-.11-.09-.17-.15-.01,0-.03-.02-.04-.03l-.15-.13Z"
                    ></path>
                    <path
                      d="M7.87,19.87c-.3-.23-.35-.66-.12-.95,.23-.3,.66-.35,.95-.12l4.67,3.63c.3,.23,.35,.66,.12,.95-.23,.3-.66,.35-.95,.12l-4.67-3.63Z"
                    ></path>
                  </g>
                  <path
                    d="M14.24,9.48v-.07s1.25,0,1.25,0v.04c.11,.63,.69,1.11,1.47,1.11,.89,0,1.51-.61,1.51-1.49h0c0-.87-.63-1.48-1.51-1.48-.43,0-.79,.13-1.08,.37-.14,.11-.26,.26-.35,.43h-1.17l.36-4.36h4.6v1.1h-3.53l-.21,2.26h.03c.33-.5,.95-.8,1.7-.8,1.43,0,2.46,1.03,2.46,2.46h0c0,1.55-1.16,2.61-2.81,2.61-1.56,0-2.62-.93-2.72-2.17Z"
                  ></path>
                </g>
              </g>
            </svg>
          </div>
          <div
            style="display: flex; align-items: center; justify-content: center"
          >
            <h5
              style="
                font-size: 16px;
                padding-left: 6px;
                color: #676767;
                padding-top: 3px;
              "
            >
              Tăng thời gian bảo hành lên 5 năm
            </h5>
          </div>
        </div>
      </div>
    </div> -->
    <!--  -->
    <!-- section 3 -->
    <div class="container" style="margin-top: 30px;">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6"> <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button
                class="accordion-button"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseOne"
                aria-expanded="true"
                aria-controls="collapseOne"
              >
                <svg
                  id="Layer_2"
                  data-name="Layer 2"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 23.3 22.95"
                  style="width: 30px"
                >
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #666;
                      }
                    </style>
                  </defs>
                  <g id="Layer_1-2" data-name="Layer 1">
                    <g>
                      <path
                        class="cls-1"
                        d="M22.95,0L4.03,.06c-.2,0-.36,.16-.35,.36,0,.2,.16,.36,.36,.35l18.56-.06-.06,21.52H.71V3.97H19.45v15.42c0,.2,.16,.36,.36,.36s.36-.16,.36-.36V3.96c0-.39-.31-.7-.7-.7H.64c-.35,0-.64,.29-.64,.64V22.24c0,.39,.32,.71,.71,.71H22.54c.39,0,.71-.32,.71-.71l.06-21.89c0-.2-.16-.36-.36-.36Z"
                      ></path>
                      <path
                        class="cls-1"
                        d="M10.67,12.67V6.9c0-.29-.24-.53-.53-.53H3.31c-.29,.01-.52,.25-.51,.54l.05,5.77c0,.29,.24,.52,.53,.52h6.77c.29,0,.53-.24,.53-.53Zm-.71-.18H3.56V7.08h6.4v5.4Z"
                      ></path>
                      <path
                        class="cls-1"
                        d="M17.58,6.42h-5.38c-.2,0-.36,.16-.36,.36s.16,.36,.36,.36h5.38c.2,0,.36-.16,.36-.36s-.16-.36-.36-.36Z"
                      ></path>
                      <path
                        class="cls-1"
                        d="M4.11,16.74h13.7c.2,0,.36-.16,.36-.36s-.16-.36-.36-.36H4.11c-.2,0-.36,.16-.36,.36s.16,.36,.36,.36Z"
                      ></path>
                      <path
                        class="cls-1"
                        d="M4.15,19.94h13.88c.2,0,.36-.16,.36-.36s-.16-.36-.36-.36H4.15c-.2,0-.36,.16-.36,.36s.16,.36,.36,.36Z"
                      ></path>
                      <path
                        class="cls-1"
                        d="M12.24,9.71c-.2,0-.36,.16-.36,.36s.16,.36,.36,.36h5.38c.2,0,.36-.16,.36-.36s-.16-.36-.36-.36h-5.38Z"
                      ></path>
                      <path
                        class="cls-1"
                        d="M12.11,13.58h5.38c.2,0,.36-.16,.36-.36s-.16-.36-.36-.36h-5.38c-.2,0-.36,.16-.36,.36s.16,.36,.36,.36Z"
                      ></path>
                    </g>
                  </g>
                </svg>
                <strong style="padding-left: 5px">Thông tin sản phẩm</strong>
              </button>
            </h2>
            <div
              id="collapseOne"
              class="accordion-collapse collapse show"
              aria-labelledby="headingOne"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <ul>
                  <li>Thương hiệu: Casio</li>
                  <li>Số hiệu sản phẩm: AE-1200WHD-1AVDF</li>
                  <li>Xuất xứ: Nhật Bản</li>
                  <li>Kính: Resin Glass (Kính nhựa)</li>
                  <li>Máy: Quartz (Pin)</li>
                  <li>Bảo hành quốc tế: 1 năm</li>
                  <li>Bề dày mặt số: 12.5 mm</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseTwo"
                aria-expanded="false"
                aria-controls="collapseTwo"
              >
                <svg
                  version="1.1"
                  id="Layer_1"
                  xmlns="http://www.w3.org/2000/svg"
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  x="0px"
                  y="0px"
                  viewBox="0 0 94.6 100.9"
                  style="enable-background: new 0 0 94.6 100.9; width: 30px"
                  xml:space="preserve"
                >
                  <g>
                    <g>
                      <g>
                        <g>
                          <path
                            d="M63.4,21.5c-0.4,0-0.9-0.2-1.1-0.6L54.2,6.1c-0.2-0.4-0.2-0.8,0-1.1c0.2-0.4,0.5-0.6,0.9-0.7l16.5-3.3
                          c0.7-0.1,1.3,0.3,1.5,1c0.1,0.7-0.3,1.3-1,1.5l-14.9,3l7.3,13.3c0.3,0.6,0.1,1.4-0.5,1.7C63.9,21.5,63.6,21.5,63.4,21.5z"
                          ></path>
                          <path
                            d="M63.4,21.9c-0.6,0-1.2-0.3-1.5-0.9L53.8,6.3c-0.3-0.5-0.3-1-0.1-1.5c0.2-0.5,0.7-0.8,1.2-1l16.5-3.3
                          c0.4-0.1,0.9,0,1.3,0.3c0.4,0.3,0.6,0.6,0.7,1.1s0,0.9-0.3,1.3s-0.6,0.6-1.1,0.7L57.9,6.7l7,12.7c0.2,0.4,0.3,0.9,0.1,1.3
                          s-0.4,0.8-0.8,1C64,21.9,63.7,21.9,63.4,21.9z M71.8,1.4c-0.1,0-0.1,0-0.2,0L55.1,4.7c-0.3,0.1-0.5,0.2-0.6,0.5
                          c-0.1,0.2-0.1,0.5,0,0.7l8.2,14.8c0.2,0.4,0.7,0.5,1.1,0.3c0.2-0.1,0.3-0.3,0.4-0.5c0.1-0.2,0-0.4-0.1-0.6L56.5,6.1L72,3
                          c0.2,0,0.4-0.2,0.5-0.3c0.1-0.2,0.2-0.4,0.1-0.6c0-0.2-0.2-0.4-0.3-0.5C72.1,1.4,72,1.4,71.8,1.4z"
                          ></path>
                        </g>
                        <g>
                          <path
                            d="M63.4,22c-0.6,0-1.2-0.3-1.5-0.9L53.7,6.3c-0.3-0.5-0.3-1.1-0.1-1.6c0.2-0.5,0.7-0.9,1.2-1l16.5-3.3
                          c0.5-0.1,0.9,0,1.3,0.3c0.4,0.3,0.6,0.6,0.7,1.1c0.2,0.9-0.4,1.8-1.4,2L57.9,6.7l7,12.7c0.2,0.4,0.3,0.9,0.1,1.3
                          c-0.1,0.4-0.4,0.8-0.8,1C64,21.9,63.7,22,63.4,22z M71.8,1.4c-0.1,0-0.1,0-0.2,0L55.1,4.7c-0.2,0-0.5,0.2-0.6,0.4
                          c-0.1,0.2-0.1,0.5,0,0.7l8.2,14.8c0.2,0.4,0.7,0.5,1.1,0.3c0.2-0.1,0.3-0.3,0.4-0.5c0.1-0.2,0-0.4-0.1-0.6L56.8,6.6
                          c-0.1-0.1-0.1-0.3,0-0.4C56.8,6,57,5.9,57.1,5.9l14.9-3c0.4-0.1,0.7-0.5,0.6-0.9c0-0.2-0.2-0.4-0.3-0.5
                          C72.1,1.4,72,1.4,71.8,1.4z"
                          ></path>
                          <path
                            d="M63.4,22.4c-0.8,0-1.5-0.4-1.9-1.1L53.4,6.5c-0.3-0.6-0.4-1.3-0.1-2c0.3-0.6,0.9-1.1,1.5-1.2L71.4,0
                          C72-0.1,72.5,0,73,0.4c0.5,0.3,0.8,0.8,0.9,1.4c0.2,1.2-0.5,2.3-1.7,2.6L58.6,7l6.7,12.2c0.3,0.5,0.3,1.1,0.2,1.7
                          c-0.2,0.6-0.5,1-1,1.3C64.2,22.3,63.8,22.4,63.4,22.4z M71.8,0.9c-0.1,0-0.2,0-0.3,0L55,4.2c-0.4,0.1-0.7,0.4-0.9,0.7
                          c-0.2,0.4-0.2,0.8,0,1.2l8.2,14.8c0.3,0.6,1.2,0.8,1.8,0.5c0.3-0.2,0.5-0.4,0.6-0.8c0.1-0.3,0.1-0.7-0.1-1L57.2,6.4l14.8-3
                          c0.7-0.1,1.2-0.8,1-1.5c-0.1-0.3-0.3-0.6-0.5-0.8C72.3,1,72.1,0.9,71.8,0.9z M63.5,21.5c-0.4,0-0.9-0.2-1.1-0.6L54.2,6.1
                          C54,5.7,54,5.3,54.2,5c0.2-0.4,0.5-0.6,0.9-0.7L71.6,1c0.3-0.1,0.7,0,0.9,0.2C72.8,1.3,73,1.6,73,1.9c0.1,0.3,0,0.6-0.2,0.9
                          c-0.2,0.3-0.5,0.5-0.8,0.5l-14.9,3l7.3,13.3c0.2,0.3,0.2,0.6,0.1,0.9c-0.1,0.3-0.3,0.6-0.6,0.7C63.9,21.4,63.7,21.5,63.5,21.5z
                           M71.8,1.8C71.8,1.8,71.8,1.8,71.8,1.8L55.2,5.1c-0.1,0-0.2,0.1-0.2,0.2s0,0.2,0,0.3l8.2,14.8c0.1,0.2,0.3,0.2,0.5,0.1
                          c0.1,0,0.1-0.1,0.2-0.2c0-0.1,0-0.2,0-0.3L56.4,6.8c-0.1-0.3-0.2-0.6,0-0.8c0.1-0.3,0.4-0.5,0.6-0.5l14.9-3
                          c0.1,0,0.2-0.1,0.2-0.1c0.1-0.1,0.1-0.2,0.1-0.3c0-0.1-0.1-0.2-0.1-0.2C71.9,1.8,71.9,1.8,71.8,1.8z"
                          ></path>
                        </g>
                      </g>
                      <g>
                        <g>
                          <path
                            d="M23.3,100c-0.6,0-1.1-0.4-1.2-1c-0.1-0.7,0.3-1.3,1-1.5l14.9-3l-7.3-13.3c-0.3-0.6-0.1-1.4,0.5-1.7
                          c0.6-0.3,1.4-0.1,1.7,0.5L41,94.8c0.2,0.4,0.2,0.8,0,1.1c-0.2,0.4-0.5,0.6-0.9,0.7l-16.5,3.3C23.5,100,23.4,100,23.3,100z"
                          ></path>
                          <path
                            d="M23.3,100.4c-0.8,0-1.5-0.6-1.7-1.4c-0.2-0.9,0.4-1.8,1.3-2l14.3-2.9l-7-12.7c-0.2-0.4-0.3-0.9-0.1-1.3s0.4-0.8,0.8-1
                          c0.8-0.5,1.9-0.2,2.3,0.7l8.2,14.8c0.3,0.5,0.3,1,0.1,1.5c-0.2,0.5-0.7,0.8-1.2,1l-16.5,3.3C23.6,100.4,23.4,100.4,23.3,100.4z
                           M31.7,79.8c-0.1,0-0.3,0-0.4,0.1c-0.2,0.1-0.3,0.3-0.4,0.5c-0.1,0.2,0,0.4,0.1,0.6l7.6,13.8l-15.4,3.1c-0.4,0.1-0.7,0.5-0.6,1
                          c0.1,0.4,0.5,0.7,1,0.6l16.5-3.3c0.3-0.1,0.5-0.2,0.6-0.5c0.1-0.2,0.1-0.5,0-0.7l-8.2-14.8C32.3,80,32,79.8,31.7,79.8z"
                          ></path>
                        </g>
                        <g>
                          <path
                            d="M23.3,100.4c-0.8,0-1.5-0.6-1.7-1.4c-0.1-0.5,0-0.9,0.3-1.3c0.3-0.4,0.6-0.6,1.1-0.7l14.2-2.8l-7-12.7
                          c-0.2-0.4-0.3-0.9-0.1-1.3c0.1-0.4,0.4-0.8,0.8-1c0.8-0.5,1.9-0.2,2.4,0.7l8.2,14.8c0.3,0.5,0.3,1.1,0.1,1.6
                          c-0.2,0.5-0.7,0.9-1.2,1l-16.5,3.3C23.6,100.4,23.5,100.4,23.3,100.4z M31.7,79.9c-0.1,0-0.3,0-0.4,0.1
                          c-0.2,0.1-0.3,0.3-0.4,0.5c-0.1,0.2,0,0.4,0.1,0.6l7.3,13.3c0.1,0.1,0.1,0.3,0,0.4c-0.1,0.1-0.2,0.2-0.3,0.3l-14.9,3
                          c-0.2,0-0.4,0.2-0.5,0.3c-0.1,0.2-0.2,0.4-0.1,0.6c0.1,0.4,0.5,0.7,0.9,0.6L40,96.2c0.2,0,0.5-0.2,0.6-0.4
                          c0.1-0.2,0.1-0.5,0-0.7l-8.2-14.8C32.3,80,32,79.9,31.7,79.9z"
                          ></path>
                          <path
                            d="M23.3,100.9c-1,0-1.9-0.7-2.1-1.7c-0.1-0.6,0-1.1,0.3-1.6c0.3-0.5,0.8-0.8,1.4-0.9l13.6-2.7l-6.7-12.2
                          c-0.3-0.5-0.3-1.1-0.2-1.7c0.2-0.6,0.5-1,1-1.3c0.5-0.3,1.1-0.3,1.6-0.2c0.6,0.2,1,0.5,1.3,1l8.2,14.8c0.3,0.6,0.4,1.3,0.1,2
                          c-0.3,0.6-0.9,1.1-1.5,1.2l-16.5,3.3C23.6,100.9,23.5,100.9,23.3,100.9z M31.7,79.3c-0.2,0-0.4,0.1-0.6,0.2
                          c-0.3,0.2-0.5,0.4-0.6,0.8c-0.1,0.3-0.1,0.7,0.1,1l7.3,13.2l-14.8,3c-0.3,0.1-0.6,0.3-0.8,0.5s-0.3,0.6-0.2,1
                          c0.1,0.7,0.8,1.2,1.5,1l16.5-3.3c0.4-0.1,0.7-0.4,0.9-0.7c0.2-0.4,0.2-0.8,0-1.2L32.8,80c-0.2-0.3-0.4-0.5-0.8-0.6
                          C32,79.4,31.8,79.3,31.7,79.3z M23.3,99.9c-0.6,0-1.1-0.4-1.2-1c-0.1-0.3,0-0.6,0.2-0.9c0.2-0.3,0.5-0.5,0.8-0.5l14.9-3
                          l-7.3-13.3c-0.2-0.3-0.2-0.6-0.1-0.9c0.1-0.3,0.3-0.6,0.6-0.7c0.6-0.3,1.4-0.1,1.7,0.5L41,94.8c0.2,0.3,0.2,0.8,0,1.1
                          c-0.2,0.4-0.5,0.6-0.9,0.7l-16.5,3.3C23.5,99.9,23.4,99.9,23.3,99.9z M31.7,80.3c-0.1,0-0.1,0-0.2,0c-0.1,0-0.1,0.1-0.2,0.2
                          c0,0.1,0,0.2,0,0.3l7.3,13.3c0.1,0.3,0.2,0.6,0,0.8c-0.1,0.3-0.4,0.5-0.6,0.5l-14.9,3c-0.1,0-0.2,0.1-0.2,0.1
                          C23,98.6,23,98.7,23,98.8c0,0.2,0.2,0.3,0.4,0.3L40,95.7c0.1,0,0.2-0.1,0.2-0.2c0-0.1,0-0.2,0-0.3L32,80.5
                          C32,80.4,31.8,80.3,31.7,80.3z"
                          ></path>
                        </g>
                      </g>
                      <g>
                        <g>
                          <path
                            d="M39.3,96.1c-0.1,0-0.1,0-0.2,0c-9.1-1.6-17.4-5.9-24-12.3C-3.3,66-3.9,36.6,13.9,18.2c6.8-7.1,15.5-11.7,25.2-13.4
                          c0.7-0.1,1.3,0.3,1.5,1s-0.3,1.3-1,1.5c-9.1,1.6-17.4,6-23.8,12.7C-1.1,37.4-0.6,65.2,16.8,82c6.3,6.1,14.1,10.1,22.7,11.6
                          c0.7,0.1,1.1,0.8,1,1.5C40.4,95.7,39.9,96.1,39.3,96.1z"
                          ></path>
                          <path
                            d="M39.3,96.6c-0.1,0-0.2,0-0.3,0c-9.2-1.6-17.5-5.9-24.3-12.4C-3.8,66.2-4.3,36.5,13.6,17.9C20.5,10.8,29.3,6.1,39,4.3
                          c0.9-0.2,1.8,0.4,2,1.4c0.1,0.4,0,0.9-0.3,1.3c-0.3,0.4-0.6,0.6-1.1,0.7c-9,1.6-17.2,6-23.6,12.6C-0.6,37.5-0.1,65,17.1,81.7
                          c6.2,6,14,10,22.5,11.5c0.9,0.2,1.5,1.1,1.4,2C40.8,96,40.1,96.6,39.3,96.6z M39.3,5.2c0,0-0.1,0-0.1,0
                          C29.6,6.9,21,11.5,14.2,18.5c-17.6,18.2-17.1,47.4,1.1,65c6.6,6.4,14.8,10.6,23.8,12.2c0.5,0.1,0.9-0.2,1-0.7
                          c0.1-0.4-0.2-0.9-0.7-1c-8.7-1.5-16.6-5.6-22.9-11.7c-17.6-17-18.1-45.1-1.1-62.7c6.5-6.7,14.8-11.2,24-12.8
                          c0.2,0,0.4-0.2,0.5-0.3c0.1-0.2,0.2-0.4,0.1-0.6C40,5.5,39.7,5.2,39.3,5.2z"
                          ></path>
                        </g>
                        <g>
                          <path
                            d="M39.3,96.6c-0.1,0-0.2,0-0.3,0c-9.2-1.6-17.6-5.9-24.3-12.4C-3.9,66.2-4.4,36.5,13.6,17.9C20.5,10.7,29.3,6,39,4.3
                          c1-0.2,1.8,0.5,2,1.4c0.1,0.5,0,0.9-0.3,1.3c-0.3,0.4-0.7,0.6-1.1,0.7c-9,1.6-17.2,6-23.6,12.6C-0.6,37.5-0.1,65,17.1,81.7
                          c6.2,6,14,10,22.5,11.5c0.9,0.2,1.6,1.1,1.4,2C40.9,96,40.1,96.6,39.3,96.6z M39.3,5.2c0,0-0.1,0-0.1,0
                          C29.6,6.9,21,11.5,14.2,18.5C-3.3,36.7-2.8,65.9,15.4,83.5C22,89.8,30.2,94,39.2,95.6c0.4,0.1,0.8-0.2,0.9-0.6
                          c0.1-0.4-0.2-0.8-0.6-0.9c-8.7-1.5-16.6-5.6-23-11.7c-17.6-17-18.1-45.1-1.1-62.7c6.5-6.7,14.8-11.2,24.1-12.8
                          c0.2,0,0.4-0.2,0.5-0.3c0.1-0.2,0.2-0.4,0.1-0.6C40,5.5,39.7,5.2,39.3,5.2z"
                          ></path>
                          <path
                            d="M39.3,97c-0.1,0-0.3,0-0.4,0c-9.2-1.7-17.7-6-24.5-12.5C-4.3,66.3-4.9,36.3,13.3,17.6c7-7.2,15.8-11.9,25.7-13.7
                          c1.2-0.2,2.3,0.6,2.5,1.8c0.1,0.6,0,1.2-0.4,1.6c-0.3,0.5-0.8,0.8-1.4,0.9c-8.9,1.6-17,5.9-23.3,12.4c-16.5,17-16,44.3,1.1,60.8
                          c6.2,5.9,13.8,9.9,22.2,11.4c1.2,0.2,2,1.3,1.8,2.5C41.3,96.3,40.4,97,39.3,97z M39.3,4.7c-0.1,0-0.2,0-0.2,0
                          c-9.7,1.7-18.4,6.4-25.2,13.4C-3.9,36.6-3.4,66,15,83.8c6.7,6.4,15,10.7,24,12.3c0.7,0.1,1.4-0.4,1.5-1c0.1-0.7-0.3-1.4-1-1.5
                          C31,92.1,23.1,88,16.8,82C-0.6,65.2-1,37.4,15.7,20c6.4-6.7,14.7-11.1,23.8-12.7c0.3-0.1,0.6-0.2,0.8-0.5c0.2-0.3,0.3-0.6,0.2-1
                          C40.5,5.1,39.9,4.7,39.3,4.7z M39.3,96.1c-0.1,0-0.1,0-0.2,0c-9.1-1.6-17.4-5.9-24-12.3C-3.3,66-3.8,36.6,13.9,18.2
                          c6.8-7.1,15.5-11.7,25.2-13.4c0.6-0.1,1.3,0.3,1.4,1c0.1,0.3,0,0.6-0.2,0.9c-0.2,0.3-0.5,0.5-0.8,0.5c-9.1,1.6-17.4,6-23.8,12.7
                          C-1.1,37.3-0.6,65.2,16.8,82c6.3,6.1,14.2,10.1,22.7,11.6c0.3,0.1,0.6,0.2,0.8,0.5s0.3,0.6,0.2,0.9
                          C40.4,95.7,39.9,96.1,39.3,96.1z M39.3,5.7C39.3,5.7,39.3,5.7,39.3,5.7c-9.5,1.7-18.1,6.2-24.7,13.2
                          c-17.4,18-16.9,46.9,1.1,64.3c6.5,6.3,14.7,10.5,23.6,12c0.2,0,0.4-0.1,0.4-0.3c0-0.1,0-0.2-0.1-0.3c-0.1-0.1-0.1-0.1-0.2-0.1
                          c-8.8-1.6-16.8-5.7-23.2-11.9C-1.6,65.5-2.1,37.1,15.1,19.3c6.6-6.8,15-11.3,24.3-13c0.1,0,0.2-0.1,0.2-0.1
                          c0.1-0.1,0.1-0.2,0.1-0.3C39.6,5.8,39.5,5.7,39.3,5.7z"
                          ></path>
                        </g>
                      </g>
                      <g>
                        <g>
                          <path
                            d="M55.3,96.1c-0.6,0-1.1-0.4-1.2-1c-0.1-0.7,0.3-1.3,1-1.5c9.1-1.6,17.4-6,23.8-12.7c8.1-8.4,12.5-19.5,12.3-31.2
                          C91,37.9,86.2,27,77.8,18.9C71.5,12.8,63.6,8.8,55,7.2c-0.7-0.1-1.1-0.8-1-1.5c0.1-0.7,0.8-1.1,1.5-1c9.1,1.6,17.4,5.9,24,12.3
                          c8.9,8.6,13.9,20.2,14.2,32.6c0.2,12.4-4.4,24.1-13,33c-6.8,7.1-15.5,11.7-25.2,13.4C55.4,96.1,55.3,96.1,55.3,96.1z"
                          ></path>
                          <path
                            d="M55.3,96.5c-0.8,0-1.5-0.6-1.7-1.4c-0.1-0.4,0-0.9,0.3-1.3s0.6-0.6,1.1-0.7c9-1.6,17.2-6,23.6-12.6
                          c8.1-8.3,12.4-19.3,12.2-30.9c-0.2-11.6-4.9-22.4-13.3-30.5c-6.2-6-14-10-22.5-11.5c-0.4-0.1-0.8-0.3-1.1-0.7
                          c-0.3-0.4-0.4-0.8-0.3-1.3c0.1-0.4,0.3-0.8,0.7-1.1c0.4-0.3,0.8-0.4,1.3-0.3c9.2,1.6,17.5,5.9,24.3,12.4
                          c9,8.7,14.1,20.4,14.3,32.9C94.3,62.1,89.7,74,81,83c-6.9,7.1-15.7,11.8-25.4,13.6C55.5,96.5,55.4,96.5,55.3,96.5z M55.3,5.2
                          c-0.2,0-0.3,0-0.5,0.1c-0.2,0.1-0.3,0.3-0.3,0.5c0,0.2,0,0.4,0.1,0.6c0.1,0.2,0.3,0.3,0.5,0.3c8.7,1.5,16.6,5.6,22.9,11.7
                          c8.5,8.2,13.3,19.3,13.5,31.1c0.2,11.8-4.2,23-12.4,31.6C72.7,88,64.3,92.4,55.1,94c-0.2,0-0.4,0.2-0.5,0.3s-0.2,0.4-0.1,0.6
                          c0.1,0.4,0.5,0.7,0.9,0.7c9.6-1.7,18.2-6.3,24.9-13.3c8.5-8.8,13.1-20.5,12.9-32.7C93,37.3,88,25.9,79.2,17.4
                          C72.6,11,64.4,6.8,55.4,5.2C55.4,5.2,55.3,5.2,55.3,5.2z"
                          ></path>
                        </g>
                        <g>
                          <path
                            d="M55.3,96.6c-0.8,0-1.6-0.6-1.7-1.4c-0.1-0.5,0-0.9,0.3-1.3c0.3-0.4,0.7-0.6,1.1-0.7c9-1.6,17.2-6,23.6-12.6
                          c8.1-8.3,12.4-19.3,12.2-30.9c-0.2-11.6-4.9-22.4-13.3-30.5c-6.2-6-14-10-22.5-11.5c-0.9-0.2-1.6-1.1-1.4-2
                          c0.1-0.5,0.3-0.9,0.7-1.1c0.4-0.3,0.8-0.4,1.3-0.3c9.2,1.6,17.6,5.9,24.3,12.4c9,8.7,14.1,20.4,14.3,32.9
                          C94.4,62.1,89.7,74,81,83c-6.9,7.1-15.7,11.8-25.4,13.6C55.5,96.6,55.4,96.6,55.3,96.6z M55.3,5.2c-0.2,0-0.3,0-0.4,0.1
                          c-0.2,0.1-0.3,0.3-0.3,0.5c0,0.2,0,0.4,0.1,0.6c0.1,0.2,0.3,0.3,0.5,0.3c8.7,1.5,16.6,5.6,23,11.7c8.5,8.2,13.3,19.3,13.5,31.1
                          c0.2,11.8-4.2,23.1-12.4,31.6C72.7,88,64.4,92.4,55.1,94.1c-0.2,0-0.4,0.2-0.5,0.3c-0.1,0.2-0.2,0.4-0.1,0.6
                          c0.1,0.4,0.5,0.7,0.9,0.6c9.6-1.7,18.2-6.3,24.9-13.3c8.5-8.8,13.1-20.4,12.9-32.7C93,37.4,88,25.9,79.2,17.4
                          C72.6,11,64.4,6.8,55.4,5.2C55.4,5.2,55.3,5.2,55.3,5.2z"
                          ></path>
                          <path
                            d="M55.3,97c-1.1,0-2-0.8-2.1-1.8c-0.1-0.6,0-1.2,0.4-1.6c0.3-0.5,0.8-0.8,1.4-0.9c8.9-1.6,17-5.9,23.3-12.4
                          c8-8.3,12.2-19.1,12-30.6C90,38.2,85.4,27.5,77.1,19.5C71,13.6,63.3,9.6,54.9,8.1c-1.2-0.2-2-1.3-1.8-2.5
                          C53.2,5,53.5,4.5,54,4.2c0.5-0.3,1-0.5,1.6-0.4c9.3,1.7,17.7,6,24.5,12.5c9.1,8.8,14.2,20.6,14.4,33.2
                          c0.2,12.6-4.5,24.6-13.3,33.7c-7,7.2-15.8,11.9-25.7,13.7C55.5,97,55.4,97,55.3,97z M55.3,4.7c-0.3,0-0.5,0.1-0.7,0.2
                          c-0.3,0.2-0.5,0.5-0.5,0.8c-0.1,0.7,0.3,1.4,1,1.5c8.6,1.5,16.4,5.5,22.7,11.6c8.4,8.1,13.2,19.1,13.4,30.8
                          c0.2,11.7-4.2,22.8-12.3,31.2C72.4,87.6,64.2,91.9,55,93.6c-0.3,0.1-0.6,0.2-0.8,0.5c-0.2,0.3-0.3,0.6-0.2,1
                          c0.1,0.7,0.8,1.2,1.5,1c9.7-1.7,18.4-6.4,25.2-13.4c8.6-8.9,13.2-20.7,13-33.1c-0.2-12.4-5.3-24-14.2-32.6
                          c-6.7-6.4-15-10.7-24-12.3C55.4,4.7,55.3,4.7,55.3,4.7z M55.3,96.1c-0.2,0-0.5-0.1-0.7-0.2c-0.3-0.2-0.5-0.5-0.5-0.8
                          c-0.1-0.3,0-0.7,0.2-0.9c0.2-0.3,0.5-0.4,0.8-0.5c9.1-1.6,17.4-6,23.8-12.7c8.1-8.4,12.5-19.5,12.3-31.3
                          C91,37.9,86.2,27,77.8,18.8C71.5,12.8,63.6,8.7,55,7.2c-0.3-0.1-0.6-0.2-0.8-0.5c-0.2-0.3-0.3-0.6-0.2-0.9
                          c0.1-0.3,0.2-0.6,0.5-0.8c0.3-0.2,0.6-0.3,0.9-0.2c9.1,1.6,17.4,5.9,24,12.3c8.9,8.6,13.9,20.2,14.2,32.5
                          c0.2,12.4-4.4,24.1-13,33c-6.8,7.1-15.5,11.7-25.2,13.4C55.4,96.1,55.3,96.1,55.3,96.1z M55.3,5.6c-0.1,0-0.1,0-0.2,0.1
                          c-0.1,0.1-0.1,0.1-0.1,0.2c0,0.1,0,0.2,0.1,0.3c0.1,0.1,0.1,0.1,0.2,0.1C64,7.9,72,12,78.4,18.2c8.6,8.3,13.5,19.5,13.7,31.4
                          c0.2,12-4.3,23.3-12.6,31.9c-6.6,6.8-15,11.3-24.3,13c-0.1,0-0.2,0.1-0.2,0.1c-0.1,0.1-0.1,0.2-0.1,0.3c0,0.1,0.1,0.2,0.1,0.2
                          c0.1,0,0.1,0.1,0.2,0c9.5-1.7,18-6.2,24.7-13.2c8.4-8.7,13-20.2,12.8-32.4c-0.2-12.1-5.1-23.5-13.9-31.9
                          C72.4,11.4,64.2,7.2,55.3,5.6L55.3,5.6z"
                          ></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
                <strong style="padding-left: 5px">Chính sách vẫn chuyển</strong>
              </button>
            </h2>
            <div
              id="collapseTwo"
              class="accordion-collapse collapse"
              aria-labelledby="headingTwo"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <ul>
                  <li>Giao hàng toàn quốc nhanh chóng.</li>
                  <li>
                    Giao siêu tốc trong vòng 2 giờ tại: Hồ Chí Minh, Hà Nội, Biên
                    Hòa, Vũng Tàu, Bình Dương, Đà Nẵng.
                  </li>
                  <li>
                    Giao hàng ngoại thành: 2-3 ngày (có thể lên đến 7 ngày tùy khu
                    vực).
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#collapseThree"
                aria-expanded="false"
                aria-controls="collapseThree"
              >
                <svg
                  id="Layer_2"
                  data-name="Layer 2"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 22.59 15.11"
                  style="width: 30px"
                >
                  <defs>
                    <style>
                      .cls-1 {
                        fill: #666;
                      }
                    </style>
                  </defs>
                  <g id="Layer_1-2" data-name="Layer 1">
                    <g>
                      <path
                        class="cls-1"
                        d="M18.26,4.7c.34,0,.61,.3,.61,.68s-.27,.68-.61,.68h-2.4c-.34,0-.61-.3-.61-.68s.27-.68,.61-.68h2.4Z"
                      ></path>
                      <path
                        class="cls-1"
                        d="M16.35,12.69h-1.8s0,.05,0,.07c0,.28,.1,.53,.26,.71s.39,.29,.64,.29,.47-.11,.64-.29c.16-.18,.26-.43,.26-.71,0-.02,0-.05,0-.07m-5.41,0h-1.8s0,.05,0,.07c0,.28,.1,.53,.26,.71,.16,.18,.39,.29,.64,.29s.47-.11,.64-.29c.16-.18,.26-.43,.26-.71,0-.02,0-.05,0-.07ZM7.53,4.48c.34,0,.61,.3,.61,.68s-.27,.68-.61,.68H.61c-.34,0-.61-.3-.61-.68s.27-.68,.61-.68h-.08V.68c0-.37,.27-.68,.61-.68H12.09c.63,0,1.2,.29,1.61,.75,.41,.46,.67,1.09,.67,1.79V11.34h6.99v-3.33c0-1.21-.45-2.31-1.16-3.11-.72-.8-1.71-1.29-2.8-1.29h-1.68c-.34,0-.61-.3-.61-.68s.27-.68,.61-.68h1.68c1.42,0,2.72,.65,3.66,1.69,.94,1.04,1.52,2.48,1.52,4.06v4.01c0,.37-.27,.68-.61,.68h-4.41s0,.05,0,.07c0,.65-.24,1.24-.62,1.66-.38,.43-.91,.69-1.5,.69-1.52,0-2.29-1.56-2.29-3.1V2.54c0-.32-.12-.62-.31-.84s-.46-.35-.75-.35H1.75v3.12H7.53Zm4.03,2.71c.34,0,.61,.3,.61,.68s-.27,.68-.61,.68H1.75v2.8H11.56c.34,0,.61,.3,.61,.68,0,.78-.07,1.49-.36,2.04-.65,1.25-2.34,1.38-3.26,.37-.38-.43-.62-1.01-.62-1.66,0-.02,0-.05,0-.07h-1.54s0,.05,0,.07c0,.65-.24,1.24-.62,1.66-.38,.43-.91,.69-1.5,.69s-1.11-.26-1.5-.69c-.38-.43-.62-1.01-.62-1.66,0-.02,0-.05,0-.07H1.14c-.34,0-.61-.3-.61-.68V7.89h0s0-.03,0-.03c0-.37,.27-.68,.61-.68H11.56Zm-6.38,5.58s0-.05,0-.07h-1.8s0,.05,0,.07c0,.28,.1,.53,.26,.71s.39,.29,.64,.29,.47-.11,.64-.29c.16-.18,.26-.43,.26-.71Z"
                      ></path>
                    </g>
                  </g>
                </svg>
                <strong style="padding-left: 5px">Chính sách bảo hành</strong>
              </button>
            </h2>
            <div
              id="collapseThree"
              class="accordion-collapse collapse"
              aria-labelledby="headingThree"
              data-bs-parent="#accordionExample"
            >
              <div class="accordion-body">
                <ul>
                  <li>Thay Pin miễn phí suốt đời.</li>
                  <li>Bảo hành máy lên đến 5 năm.</li>
                </ul>
              </div>
            </div>
          </div>
        </div></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div><svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24.11 23.69" style="width: 30px;">
            <defs>
            <style>
                  .cls-1 {
                    fill: #666;
                  }
                </style>
            </defs>
            <g id="Layer_1-2" data-name="Layer 1">
            <g>
            <path class="cls-1" d="M12.05,12.05c-.05,0-.1-.01-.15-.04L.18,6.12C.07,6.06,0,5.94,0,5.82c0-.13,.07-.24,.19-.29L11.91,.03c.09-.04,.19-.04,.28,0l11.72,5.49c.11,.05,.19,.17,.19,.29,0,.13-.07,.24-.18,.3l-11.72,5.9s-.1,.04-.15,.04ZM1.08,5.83l10.97,5.52,10.97-5.52L12.05,.69,1.08,5.83Z"></path>
            <path class="cls-1" d="M12.05,15.82c-.05,0-.1-.01-.15-.04L.18,9.88C.07,9.83,0,9.71,0,9.59c0-.13,.07-.24,.19-.29l2.51-1.18c.16-.08,.36,0,.44,.16,.08,.16,0,.36-.16,.44l-1.9,.89,10.97,5.52,10.97-5.52-1.94-.91c-.16-.08-.24-.27-.16-.44,.08-.16,.27-.24,.44-.16l2.55,1.19c.11,.05,.19,.17,.19,.29,0,.13-.07,.24-.18,.3l-11.72,5.9s-.1,.04-.15,.04Z"></path>
            <path class="cls-1" d="M12.05,19.55c-.05,0-.1-.01-.15-.03L.18,13.62C.07,13.56,0,13.44,0,13.32c0-.13,.08-.24,.19-.29l2.51-1.18c.16-.08,.36,0,.44,.16s0,.36-.16,.44l-1.9,.89,10.97,5.52,10.97-5.52-1.94-.91c-.16-.08-.24-.27-.16-.44,.08-.16,.27-.24,.44-.16l2.55,1.19c.11,.05,.19,.17,.19,.29,0,.13-.07,.24-.18,.3l-11.72,5.9s-.1,.03-.15,.03Z"></path>
            <path class="cls-1" d="M12.05,23.69c-.05,0-.1-.01-.15-.04L.18,17.76c-.11-.06-.18-.17-.18-.3,0-.13,.07-.24,.19-.29l2.51-1.18c.16-.08,.36,0,.44,.16,.08,.16,0,.36-.16,.44l-1.9,.89,10.97,5.52,10.97-5.52-1.94-.91c-.16-.08-.24-.27-.16-.44,.08-.16,.27-.24,.44-.16l2.55,1.19c.11,.05,.19,.17,.19,.29,0,.13-.07,.24-.18,.3l-11.72,5.9s-.1,.04-.15,.04Z"></path>
            </g>
            </g>
            </svg><strong style="padding-left: 5px;">Chi tiết sản phẩm</strong>
          </div>
          <div style="margin-bottom: 10px;">
            Casio AE-1200WHD-1AVDF là chiếc đồng hồ Casio bán chạy nhất tại Việt Nam. Do đó, sản phẩm này đang bị làm giả rất nhiều tại Việt Nam và hàng loạt khách của Hải Triều phản ánh sau khi mua đồng hồ xong không biết đâu hàng thật, hàng giả. Để tránh trường hợp này, khách hàng lưu ý những điều sau.
          </div>
          <div style="display: flex;justify-content: center;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/54Bki5HcAUI?si=lkoGUhFGOUXMm0t6" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

          </div>
        </div>
      </div>
     
    </div>

    <!--  -->
<!-- section 4 -->
<div class="container section-4 section-9 section-4-pdsn" style="margin-top: 30px;">
  <div class="row">
    <h2 class="text-center mt-3 mb-3" 
    style="color: grey; font-size: 1.5em; font-weight: 700">CÁC SẢN PHẨM LIÊN QUAN</h2>
    <div class="slider-bstm">
      <div class="col-sm-12 col-md-6 col-lg-3" style="padding: 0 30px">
        <div class="box-img">
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF.webp"
              alt=""
              class="img-1"
          /></a>
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
              alt=""
              class="img-2"
          /></a>
        </div>
        <div class="content">
          <div class="title">
            <a href="#" style="text-decoration: none">
              <p
                class="text-center"
                style="color: #606060; margin-bottom: 0.5rem"
              >
                Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
              </p>
            </a>
            <p
              class="price text-center"
              style="color: #606060; font-size: 17px; font-weight: 500"
            >
              1.373.000 ₫
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3" style="padding: 0 30px">
        <div class="box-img">
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF.webp"
              alt=""
              class="img-1"
          /></a>
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
              alt=""
              class="img-2"
          /></a>
        </div>
        <div class="content">
          <div class="title">
            <a href="#" style="text-decoration: none">
              <p
                class="text-center"
                style="color: #606060; margin-bottom: 0.5rem"
              >
                Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
              </p>
            </a>
            <p
              class="price text-center"
              style="color: #606060; font-size: 17px; font-weight: 500"
            >
              1.373.000 ₫
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3" style="padding: 0 30px">
        <div class="box-img">
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF.webp"
              alt=""
              class="img-1"
          /></a>
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
              alt=""
              class="img-2"
          /></a>
        </div>
        <div class="content">
          <div class="title">
            <a href="#" style="text-decoration: none">
              <p
                class="text-center"
                style="color: #606060; margin-bottom: 0.5rem"
              >
                Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
              </p>
            </a>
            <p
              class="price text-center"
              style="color: #606060; font-size: 17px; font-weight: 500"
            >
              1.373.000 ₫
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3" style="padding: 0 30px">
        <div class="box-img">
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF.webp"
              alt=""
              class="img-1"
          /></a>
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
              alt=""
              class="img-2"
          /></a>
        </div>
        <div class="content">
          <div class="title">
            <a href="#" style="text-decoration: none">
              <p
                class="text-center"
                style="color: #606060; margin-bottom: 0.5rem"
              >
                Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
              </p>
            </a>
            <p
              class="price text-center"
              style="color: #606060; font-size: 17px; font-weight: 500"
            >
              1.373.000 ₫
            </p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-6 col-lg-3 products-section-4" style="padding: 0 30px">
        <div class="box-img">
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF.webp"
              alt=""
              class="img-1"
          /></a>
          <a href="#"
            ><img
              src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
              alt=""
              class="img-2"
          /></a>
        </div>
        <div class="content">
          <div class="title">
            <a href="#" style="text-decoration: none">
              <p
                class="text-center"
                style="color: #606060; margin-bottom: 0.5rem"
              >
                Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
              </p>
            </a>
            <p
              class="price text-center"
              style="color: #606060; font-size: 17px; font-weight: 500"
            >
              1.373.000 ₫
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--  -->
<!-- section 5 -->
<div class="section-pdsn-5 container">
  <div class="row">
    <div class="social-icon">
    <div><i class="fab fa-facebook icon-fb"></i></div>
    <div class="px-2"><i class="fab fa-instagram-square icon-ins"></i></div>
    <div><i class="fab fa-youtube icon-ytb"></i></div>
    <div class="px-2"><i class="fab fa-tiktok icon-tik"></i></div>
    <div><i class="fab fa-twitter icon-tw"></i></div>
  </div>
  </div>
</div>
<!--  -->
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
    <script src="./bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/jquery-2.0.0.min.js"></script>
    <script src="lib/script.js"></script>
    <script src="./lib/slick.js"></script>
    <script src="./lib/slider-home.js"></script>
    <script src="./asset/khang.js"></script>
  </body>
</html>
