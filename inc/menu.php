<div class="panel mar-25">
  <a class="logo" href="./" alt="Trang chủ">
    <font class="first">LUOC</font><font class="second">.GA</font>
  </a>
  <span class="menu on-right mar-6 size-text-20">
          
  
<?php
if(isset($_SESSION['username'])){
  ?>
<b class="button mar-r-10">
  Xin chào, <span class="color-text-red"><?php echo $_SESSION['username']; ?> !!!</span>
</b>
<a class="button panel-round-xxl color-blue mar-r-10" href="/user/board.php">Danh sách URL</a>
<a class="button panel-round-xxl color-red" href="/user/signout.php">Đăng xuất</a>
</span>
<div class="menu-icon on-right mar-6 size-text-18">
  <button class="button color-hover-dark-gray color-dark-gray">
       <?php echo $_SESSION['username']; ?>
      <ul>
        <li class="">Xin chào, <span class="color-text-red"><?php echo $_SESSION['username']; ?> !!!</span></li>
        <li class="button panel-round-xxl color-blue"><a href="/user/board.php">Danh sách URL</a></li>
        <li class="button panel-round-xxl color-red"><a href="/user/signout.php">Đăng xuất</a></li>
      </ul>
  </button>
        </div>

  <?php
}
else{
?>
<a class="button panel-round-xxl mar-r-10" href="/user/signup.php">Đăng ký</a>
<a class="button color-border-indigo panel-round-xxl color-indigo" href="/user/signin.php">Đăng nhập</a>


</span>
<div class="menu-icon on-right mar-6 size-text-18">
  <button class="button color-hover-dark-gray color-dark-gray">
      &#9776;
      <ul>
        <li class="button panel-round-xxl"><a href="/user/signup.php">Đăng ký</a></li>
        <li class="button panel-round-xxl color-indigo"><a href="/user/signin.php">Đăng nhập</a></li>
      </ul>
  </button>
        </div>

      <?php } ?>
</div>
