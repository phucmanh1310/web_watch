<!doctype html>
<html lang="en">
  <head>
  	<title>KVM WATCHES® | Register</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link
	rel="icon"
	type="image/x-icon"
	href="./asset/favicon/icondongho (2).png"
  />
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="./signup-form-18/css/singup_style.css">
	<link rel="stylesheet" href="./signup-form-18/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="./css/manh.css" />
	<link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css"/>
	<link rel="stylesheet" href="./asset/khang.css" />
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
						<a href="./about.php" class="nav-link" style="font-size: 18px;
						font-weight: 600;">Về chúng tôi</a>
					  </li>
					  <li class="nav-item">
						<a href="./contact.php" class="nav-link" style="font-size: 18px;
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
						  <li class="nav-item islogined" id="logined">
							<a href="./manhlogin.php" class="nav-link" style="font-size: 15px !important; padding-left: 0px;
							padding-right: 0px;
							padding-bottom: 0px;
							padding-top: 20px;width: 107px;font-weight: 600;" 
							  >Đăng nhập</a>
						  </li>
						  
						  
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
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="login-wrap">
		      	<div class="img" style="background-image: url(signup-form-18/images/bg.jpg);"></div>
		      	<h3 class="text-center mb-4">TẠO TÀI KHOẢN</h3>
						<form action="#" class="signup-form">
		      		<div class="form-group mb-3">
		      			<input type="text" class="form-control" placeholder="Tên người dùng" id="myInput">
		      		</div>
		      		<div class="form-group mb-3">
		      			<input type="text" class="form-control" placeholder="Email" id="myInput1">
		      		</div>
					  <div class="form-group mb-3">
						<input type="text" class="form-control" placeholder="Số điện thoại " id="myInput2">
					</div>
					<div class="form-group mb-3">
						<input type="text" class="form-control" placeholder="Địa chỉ" id="myInput3">
					</div>
	            <div class="form-group mb-3">
	              <input id="password-field" type="password" class="form-control" placeholder="Mật khẩu" >	              
	            </div>
				<div class="form-group mb-3">
					<input id="password-field" type="password" class="form-control password-field1" placeholder="Nhập lại mật khẩu" >
				  </div>
				  <div class="form-group">
					<button type="submit" class="form-control btn btn-primary submit px-3" id="myButton">Đăng ký</button>
				</div>
				
	          </form>
	          <p>Bạn đã là thành viên! Hãy <a  href="./manhlogin.php" >Đăng nhập</a></p>
				  <a href="./index.php" style="font-size: 0.8em; margin-top: 0px;"><i class="bi bi-arrow-left">Quay lại trang chủ</i></a>
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
	<script>
		var reset = document.getElementsByClassName('login_btn');
		reset[0].addEventListener('click', () => {
			var info = document.getElementsByTagName('input');
			for (let i = 0; i < 5; i++) 
				info[i].value = "";
		})
		
	</script>
	<script>
			document.getElementById("myButton").addEventListener("click", function(e) {
  alert("Đăng ký thành công");

  // Xóa giá trị của các input
  document.getElementById("myInput").value = "";
  document.getElementById("myInput1").value = "";
  document.getElementById("myInput2").value = "";
  document.getElementById("myInput3").value = "";
  document.getElementById("password-field").value = "";		
  document.getElementsByClassName('password-field1')[0].value = "";

  // Chờ 500ms trước khi chuyển hướng trang
  setTimeout(function() {
    window.location.href = "manhlogin.php";
  }, 500);
});

	</script>
<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

