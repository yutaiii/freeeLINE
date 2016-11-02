<?php include('head.php');
  $uname = $_POST['uname'];
  $uemail = $_POST['uemail'];
  $upassword = $_POST['upassword'];

  include('sql/query.php');
  signup($uname, $uemail, $upassword);

?>

<div class="sinsuc_main">

<div class="sinsuc_message">
  登録完了
</div>

<a href="login.php"><center><input class="sinsuc_backbtn" type="button" value="ログイン画面へ"></center></a>

</div>