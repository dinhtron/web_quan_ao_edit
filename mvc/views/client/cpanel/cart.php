<style>
</style>
<?php require_once "./mvc/views/client/include/head.php"; ?>
<body>
	<header id="header">
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

							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="" style="background-color: #F0F0E9;"></i>Trang Chủ</a></li>
								<li><a href="<?=base?>cart/showcart" style="background-color: #F0F0E9;"> Giỏ Hàng</a></li>
								<li><a href="<?=base?>contact/contact" style="background-color: #F0F0E9;">Liên Hệ</a></li>
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
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<input type="checkbox" id="check"></input>
							<label for="check">
								<i style="font-size: 20px;" class="fas fa-bars" trung="open"></i>
								<i style="font-size: 25px;" class="fas fa-times" trung="close"></i>
							</label>
							<ul class="sub_nav">

								<li class="sub_nav__title"></li>
								<li>
									<a href="javascrip:void(0)" class="home">Menu</a>
								</li>
								<?php if(isset($_SESSION["info"])){?>
									<li>
										<p>Xin chào, <?=$_SESSION["info"]["name"]?></p>
									</li>
								<?php }?>
								<li>
									<a href="<?=base?>"><i class="fas fa-home"></i>Trang Chủ</a>
								</li>
								<li>
									<a href="<?=base?>contact/contact"><i class="fas fa-phone-square"></i>Liên Hệ</a>
								</li>
								<?php if(isset($_SESSION["info"])){?>
									<li>
										<a href="<?=base?>infouser/index"><i class="fas fa-user i_subnav"></i>Thông tin cá nhân</a>
									</li>
									<li>
										<a href="<?=base?>home/history"><i class="fas fa-history i_subnav"></i>Lịch sử đơn hàng</a>
									</li>
								<?php }?>
								<li>
									<a href="<?=base?>cart/showcart"><i class="fa fa-shopping-cart i_subnav"></i>Giỏ hàng</a>
								</li>
								<li>
									<?php if(isset($_SESSION["info"]["name"])) echo '<a href="logout/logout"><i class="fas fa-sign-out-alt i_subnav"></i>Đăng Xuất</a>'; else echo '<a href="login/login"><i class="fa fa-lock i_subnav"></i>Đăng Nhập</a>'; ?>
									<a style="margin-left: 40px; padding-left: 30px; padding-right: 30px;" class="btn btn-primary" href="sigin/sigin">Đăng Kí</a>
								    
								</li>
							</ul>
						</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<script>
		var content;
		var current_page;
		$(document).on('click','.btnn',function(){
			content = $("#search").val()
			current_page = 1;
			$.post("ajax/search",{content:content,page:current_page},function(data){
            	$("#listproduct").html(data);
        	});
			$.post("ajax/pagingsearch",{content:content},function(data){
                $("#getpage").html(data);
           });
    	});
		$(document).on('click','.nextpagesearch',function(){
			content = $("#search").val()
			current_page = $(this).attr('numPage');
			//xử lý khi người dùng click chuyển trang
			$.post("ajax/pagingsearch",{content:content,page:current_page},function(data){
            	$("#getpage").html(data);
        	});
			$.post("ajax/search",{content:content,page:current_page},function(data){
                $("#listproduct").html(data);
           });
    	});
		//xử lý khi người dùng bấm vào nút btn không bị sub mit
		document.querySelector('#btn-search').addEventListener('click',(e)=>{
			e.preventDefault()
		})
    </script>
	<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li class="active" style="color: #000; font-weight: bold; font-size: 20px;">Giỏ Hàng Của Bạn </li>
				</ol>
			</div>
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Hình Ảnh</td>
							<td class="description">Tên Sản Phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số Lượng</td>
							<td class="total">Tổng Tiền</td>
							<td class="total">Chức Năng</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<?php if(isset($_SESSION["cart"])){ ?>
							<?php foreach($_SESSION["cart"] as $key=>$values){?>
								<form method="post">
								<tr>
									<td class="cart_product">
										<img class="img-cart"src="public/images/img_product/<?=$values["img"]?>">
									</td>
									<td class="cart_description">
										<h4 style="margin-bottom: 10px;"><?=$values["name"]?></h4>
									</td>
									<td class="cart_price" >
										<p style="margin-top: 10px;"><?=number_format ($values["price"] , $decimals = 0 , $dec_point = "," , $thousands_sep = "." )?></p>
									</td>
										<td class="cart_quantity">
											<div class="cart_quantity_button" style="display: flex;">
												<a class="cart_quantity_down" href="<?=base?>ajax/downquantity&id=<?=$values["id"]?>"> - </a>
												<input id="quantity" class="cart_quantity_input" type="text" name="quantity" value="<?=$values["quantity"]?>" autocomplete="off" size="2">
												<input type="text" value="<?=$values["id"]?>" name="idproduct" hidden>
												<a class="cart_quantity_up" href="<?=base?>ajax/upquantity&id=<?=$values["id"]?>"> + </a>
											</div>
										</td>
										<td class="cart_total" id = "'<?=$values["id"]?>'">
											<p class="cart_total_price"><?=number_format ($values["total"] , $decimals = 0 , $dec_point = "," , $thousands_sep = "." )?>đ</p>
										</td>
										<td class="cart_delete">
											<button style="margin-bottom: 18px;" class="btn btn-primary btn-update_quantity" name="updatequantity">Cập Nhật</button>
											<a style="background: #999;" class="cart_quantity_delete" href="<?=base?>ajax/deleteproductcart&id=<?=$values["id"]?>"><i class="fa fa-times"></i></a>
										</td>
									</form>
								</tr>
							<?php }?>
						<?php }?>
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->
    <form method="POST">
		<section id="do_action">
			<div class="container">
				<div class="heading">
					<h3 style="color: #000;">Thanh Toán Đơn Hàng</h3>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="info-order">
							<input name="order[name]" value="<?php if(isset($_SESSION["info"]["name"])) echo $_SESSION["info"]["name"]; ?>" class="order full-name" type="text" placeholder="Họ Tên" required>
							<input name="order[phone]" value="<?php if(isset($_SESSION["info"]["phone"])) echo $_SESSION["info"]["phone"]; ?>" class="order phone-number" type="text" placeholder="Số Điện Thoại" required>
							<input name="order[address]" value="<?php if(isset($_SESSION["info"]["address"])) echo $_SESSION["info"]["address"]; ?>" class="order add-ress" type="text" placeholder="Địa Chỉ" required>
							<input name="order[total]" type="text" value="<?=$data['total']+35000?>" hidden>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="total_area">
							<ul>
								<li>Tổng Số Tiền Sản Phẩm <span><?=number_format ($data["total"] , $decimals = 0 , $dec_point = "," , $thousands_sep = "." )?> đ</span></li>
								<li>Phí Vận Chuyển <span>35.000đ</span></li>
								<li>Tổng Số Tiền Thanh Toán <span><?=number_format (($data["total"]+35000) , $decimals = 0 , $dec_point = "," , $thousands_sep = "." )?> đ</span></li>
							</ul>
								<button style="margin-left: unset;" name="submit" class="btn btn-default update">Thanh Toán</button>
						</div>
					</div>
				</div>
			</div>
		</section><!--/#do_action-->
	</form>

	<?php require_once "./mvc/views/client/include/footer.php"; ?>
</body>
</html>
<script>
	 $(document).on('click','.updatequantity',function(){
		quantity = $("#quantity").val()
        id = $(this).attr('idproduct')
		$.post("ajax/updatequantity",{id:id,quantity:quantity},function(data){
       });
    });
</script>