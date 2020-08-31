<?php include 'inc/head.php'; ?>
<header class="color-black">
	<a href="" alt="Trang chủ">
		<img src="img/logo.png" /></a>
		<span class="on-right mar-6 size-text-18">
			<?php 
			if(!isset($_SESSION['username'])){
				echo '<a class="button color-border-white color-white mar-r-10" href="/signin.php">Đăng nhập</a>';
				echo '<a class="button color-border-white" href="/signup.php">Đăng ký</a>';
			}else {
				echo '<a class="button color-border-white" href="/signout.php">Đăng xuất</a>';
			}
			?>
	</span>
</header>
<section class="container">
	<?php 
			if(!isset($_SESSION['username'])){
				?>
	<section class="space-wrap color-light-blue">
		<div class="call-6">
			<div class="pad-25">
				<div class="size-text-40"><b>Chất lượng là trên hết</b></div> 
				<div class="size-text-20">Luôn cung cấp các dịch vụ mang đến cho người dùng những trải nghiệm tốt nhất, hài lòng nhất, nội dung phát triển vô cùng phong phú và liên tục được cập nhật.</div>
				<div class="size-text-20"><span class="color-text-red">*</span> Xin vui lòng bấm vào <a class="white" href="/signup.php">đăng ký tài khoản mới</a>, nếu bạn chưa có tài khoản.</div>
            </div>
		</div>
		<div class="call-6">
		<form method="POST" action="/signin.php">
					<label for="lg-username">Tên người dùng: </label>
					<input type="text" name="lg-username" id="lg-username" placeholder="Nhập tên người dùng" />

					<label for="lg-password">Mật khẩu: </label>
					<input type="password" name="lg-password" id="lg-password" placeholder="Nhập mật khẩu" />

					<br />
					<input type="submit" id="login" name="login" class="button color-teal panel-round-xxl pad-15" value="Đăng nhập" />
		</form>
		</div>
	</section>
<?php } ?>
	<article class="space-wrap">
		<div class="call-12 mar-10">
			<h2>Giới thiệu</h2>
		</div>
	</article>
	<section class="space-wrap">
		<div class="call-8">
			<div class="change-img">
	            <span id="prev">&#10094;</span>
	            <img id="project-img" src="1.png"/>
	            <span id="next">&#10095;</span>
            </div>
	        <div class="foot-pro">
                <span id="pro-0" class="dot-pro active-pro"></span>
                <span id="pro-1" class="dot-pro"></span>
                <span id="pro-2" class="dot-pro"></span>
	        </div>
        </div>
        <div class="call-4">
	        <div class="port-pro">
	            <div class="name">Thông tin</div>
	                <div class="one">
	                   Bạn vui lòng đăng ký tài khoản để sử dụng các dịch vụ có khả năng lưu trữ và đồng bộ trên các thiết bị khác nhau của chúng tôi.
	                </div>
            </div>
        </div>
    </section>
	<article class="space-wrap">
		<div class="call-12 mar-10">
			<h2>Dịch vụ miễn phí</h2>
		</div>
	</article>
	<section id="items-list" class="space-wrap">
		
	</section>
</section>

<script src="m/slider.js"></script>
<script src="m/provider.js"></script>