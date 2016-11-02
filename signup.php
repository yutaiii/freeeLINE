<?php include('head.php'); ?>

<div class="signup_main">
  <div class="signup_title">
    Signup
  </div>
<form action="signupsuccess.php" method="post">
  <div class="signup_inputHelp">
    ユーザーネーム
  </div>

  <div class="clearfix">
    <input id="signup_username" class="signup_input" type="text" placeholder="ユーザーネーム" name="uname">
  </div>

  <div class="signup_errorUsername signup_error">
  </div>

  <div class="signup_inputHelp">
    メールアドレス
  </div>

  <div class="clearfix">
    <input id="signup_email" class="signup_input" type="text" placeholder="メールアドレス" name="uemail">
  </div>

  <div class="signup_errorEmail signup_error">
  </div>

  <div class="signup_inputHelp">
    パスワード
  </div>

  <div class="clearfix">
    <input id="signup_password" class="signup_input" type="password" placeholder="パスワード" name="upassword">
  </div>

  <div class="signup_errorPassword signup_error">
  </div>


  <div class="signup_inputHelp">
    パスワード確認
  </div>

  <div class="clearfix">
    <input id="signup_confirmPassword" class="signup_input" type="password" placeholder="パスワード">
  </div>

  <div class="signup_errorConfirmPassword signup_error">
  </div>

  <center><input id="signup_submitInfoBtn" type="submit" value="送信"></center>
</form>
</div>