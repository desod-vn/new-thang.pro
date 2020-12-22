<?php include 'inc/head.php'; ?>
<header class="container">
  <div class="space-wrap">
    <div class="call-12">
 <?php include 'inc/menu.php'; ?>
</div>

<?php
    $home = 'http://'.$_SERVER["SERVER_NAME"];

	$finder = strstr($_SERVER['REQUEST_URI'], 'return=');
	$query = ltrim($finder, 'retrurn=');
	$author = '';
	$show = "SELECT * FROM `short` WHERE query = '$query'";
	$select = mysqli_query($connect, $show);
	$exist = mysqli_num_rows($select);
    while ($data = mysqli_fetch_array($select)){
		if($data['query'] == $query)
				$home .= '/'.$query;
		$author = $data['author'];
	}
	if(($exist) && ($author == $_SESSION['username'])){
?>
    <div class="call-12">
		<div id="link-form">
			<div class="size-text-20 mar-5">
			- Chúc mừng! URL của bạn đã được rút gọn thành công. Bạn có thể chia sẻ nó trên Facebook hoặc Twitter bằng cách nhấp vào các liên kết bên dưới.
			</div>
				<a class="button color-indigo" href="http://www.facebook.com/share.php?u=<?php echo $home; ?>" target="_blank">
				Chia sẻ lên Facebook
				</a>
				<a class="button color-blue" href="https://twitter.com/share?url=<?php echo $home; ?>" target="_blank">
				Chia sẻ lên Twitter
				</a>
		</div>
		<div class="panel color-light-green color-border-green pad-10 mar-tb-10 color-text-white">
			URL đã được rút gọn thành công. Nhấp vào Sao chép hoặc CTRL + C để Sao chép.<br />
			Để dễ dàng quản lý và thống kê bạn có thể vào danh sách liên kết của bạn.
		</div>
		<div id="link-form">
			<form>
				<input type="text" id="link-out" value="<?php echo $home; ?>" autocomplete="off">
			    <input type="button" id="link-copy" name="submit" value="SAO CHÉP">
			</form>
			<a class="button color-brown size-text-20 pad-15 panel-round-xxl" href="<?php echo $home; ?>">ĐI ĐẾN TRANG LIÊN KẾT</a>
	    </div>
	</div>

<?php }else header('Location: ./'); ?>
				