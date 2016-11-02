<?php include('head.php'); ?>

<div class="line_loginMain">

  <div class="login_logo">
    LINE
  </div>
<form action="talk.php" method="post">
  <div class="line_loginBox">
    <input id="emailaddress" class="line_loginInut borderButtom" type="text" placeholder="メールアドレス" name="email">
    <input id="password" class="line_loginInut borderTopNone" type="text" placeholder="パスワード" name="upassword">
  </div>

    <a href="talk.php"><center><input id="loginBtn" class="line_loginBtn" type="submit" value="ログイン"></center></a>
</form>
    <a href="signup.php"><center><input class="line_loginBtn" type="button" value="新規登録"></center></a>

    <div class="login_showErrorDiv">
    </div>

</div>

