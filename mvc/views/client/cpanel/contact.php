<?php require_once "./mvc/views/client/include/head.php"; ?>
<body>
    <header id="header"><!--header-->
		
	<div class="header-middle" style="background-color: #F0F0E9;">
			<div class="container">
				<div class="row">
					<div class="col-md-2 clearfix">
						<div class="logo pull-left">
                            <a href="<?=base?>"><img src="public/images/logo/123.jpg" alt="" height=40px" width="150px"/></a>
						</div>
					</div>
					<div class="col-md-4 clearfix mob-ipa"  style="background-color: #F0F0E9;">
						<div class="shop-menu clearfix pull-left">
							<div class="mainmenu pull-left">
								<ul class="nav navbar-nav collapse navbar-collapse"  >
									<li><a href=""  style="background-color: #F0F0E9;">Trang Chủ</a></li>
									<li><a href="<?=base?>cart/showcart" style="background-color: #F0F0E9;"> Giỏ Hàng</a></li>
									<li><a href="<?=base?>contact/contact"  style="background-color: #F0F0E9;">Liên Hệ</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 clearfix mob-ipa" >
						<div class="shop-menu clearfix pull-right">
						<ul class="nav navbar-nav collapse navbar-collapse" style="position: relative;">
							<?php if(isset($_SESSION["info"]["name"])){?>
								<li class="dropdown menu-info">
									<a class="text-info" href="javascrip:void(0)"> <?php echo '<i class="fa fa-user"></i>Xin chào '.$_SESSION['info']["name"].'<i class="fa fa-angle-down"></i>'; ?></a>
									<ul class="info-user">
											<li><a href="<?=base?>infouser/index">Thông tin cá nhân</a></li>
											<li><a href="<?=base?>home/history">Lịch sử mua hàng</a></li>
									</ul>
								</li>
							<?php }?>
							<li>
								<?php 
								if(isset($_SESSION["info"]["name"])) {
									echo '<a href="logout/logout" style="background-color: #F0F0E9;"><i class="fas fa-sign-out-alt"></i> Đăng Xuất</a>';
								} else {
									echo '<a href="login/login" style="background-color: #F0F0E9;"><i class="fa fa-lock"></i> Đăng Nhập</a>';
								}
								?>
							</li>

							<?php 
							// Ẩn liên kết "Đăng kí" khi đã đăng nhập
							if (!isset($_SESSION["info"]["name"])) {
								echo '<li><a href="'.base.'sigin/sigin" style="background-color: #F0F0E9;"><i class="fas fa-user-plus"></i> Đăng Kí</a></li>';
							}
							?>
	
							
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
    <div id="contact-page" class="container">
        <h3 style="color: #000;">Liên Hệ Với Chúng Tôi</h3>
		<div style="padding: unset;" class="form-group col-md-12">
			<a href="<?=base?>" name="submit" class="btn btn-primary pull-left">Trở Về</a>
		</div>
    	<div class="bg">  	   
    		<div class="row" style="margin-top: 100px;">  	
	    		<div class="col-sm-8">
	    			<div class="contact-form">
	    				<div class="status alert alert-success" style="display: none"></div>
								<div class="contact-info">
									<h2 class="title text-center">Thông Tin Liên Hệ</h2>
									<address>
										<p>QUẦN ÁO THỜI TRANG</p>
										<p>Liên Chiểu, Đà Nẵng</p>
										<p>Số Điện thoại: +84 333666999</p>
										<p>Email: banquanao@gmail.com</p>
										<p>Chúng tôi rất vui mừng khi bạn quan tâm đến sản phẩm của chúng tôi. Đừng ngần ngại liên hệ với chúng tôi nếu bạn có bất kỳ câu hỏi, góp ý hoặc yêu cầu nào. Chúng tôi luôn sẵn lòng hỗ trợ bạn</p>
									</address>
								</div>
							</div>    	
						    <!-- <div class="form-group col-md-6">
				                <input type="text" name="name" class="form-control" required="required" placeholder="Họ Và Tên">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Nội Dung Lời Nhắn"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-center" value="Gửi">
				            </div> -->
	    		</div>  			
	    	</div>  
    	</div>	
    </div>
</body>
    <?php require_once "./mvc/views/client/include/footer.php"; ?>