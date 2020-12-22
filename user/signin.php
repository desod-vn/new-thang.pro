<?php
    ob_start();
    include_once 'user.php';
    include_once '../inc/head.php'; 
?>
	<div class="text-center">
		<div class="size-text-35 pad-10 mar-b-10 color-red color-text-white">
			<b>ĐĂNG NHẬP</b>
		</div>
	</div>


	<div class="container">
		<div class="center-wrap">
<?php
	if(isset($_SESSION['username']))
        header("Location: /");
    
	$username = $password = '';
	if(isset($_POST['login']) && ($_SERVER['REQUEST_METHOD'] == 'POST')){
		$username = $_POST['lg-username'];
		$password = $_POST['lg-password'];

		$username = $user->checkInfo($username);
		$password = $user->checkInfo($password);
	

		if(($username != '') && ($password != '')){
			$login = $user->login($username, $password);
			if($login)
			    	header("Location: /");
			else
				echo '<div class="color-pale-red mar-5 pad-10 size-text-20"><span class="color-text-red">*</span> Tài khoản hoặc mật khẩu không chính xác !</div>';
		}
	}
	
	ob_end_flush();	
?>		
                    <div id="hide"></div>
                    </div>
                    <div class="center-wrap">
                <form method="POST" action="" autocomplete="off">
					<label for="lg-username">Tên người dùng: </label>
					<input type="text" name="lg-username" id="lg-username" placeholder="Nhập tên người dùng" />

					<label for="lg-password">Mật khẩu: </label>
					<input type="password" name="lg-password" id="lg-password" placeholder="Nhập mật khẩu" />
					
					<label>
	                    <input type="checkbox" name="lg-remember" id="lg-remember" />
	                    Nhớ tài khoản ?
                    </label>
                    <div style="visibility: hidden;">
                    <label for="in-number">Mã bảo vệ: </label>
				        <span class="color-dark-gray color-border-dark-gray pad-7 color-text-white" id="out-number">0000</span>
				        <input type="text" name="in-number" id="in-number" maxlength="4"/>
					</div>
					<input type="submit" id="login" name="login" class="button color-teal panel-round-xxl pad-15" value="Đăng nhập" />
				</form>
				
		</div>
	</div>
	<script type="text/javascript" src="ctrl/user-login.js"></script>
</body>
</html>