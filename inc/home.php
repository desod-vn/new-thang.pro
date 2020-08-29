<?php
class Home{
	public function __construct(){}
	public function __destruct(){}

	public function title($namePage){
		if($namePage == '/signup.php')
			return 'Đăng ký';
		elseif($namePage == '/signin.php')
			return 'Đăng nhập';
		elseif($namePage == '/done.php')
			return 'Xác nhận';
		else
			return $_SERVER['HTTP_HOST'];
	}
}
$home = new Home();
?>