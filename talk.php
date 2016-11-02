<?php 
  session_start();
  include('head.php');
  include('sql/query.php');
  $email = $_POST['email'];
  $upassword = $_POST['upassword'];
  $result = login($email, $upassword);
  $_SESSION['id'] = $result['id'];
  $_SESSION['username'] = $result['username'];
  if(isset($_SESSION['id'])){
 ?>
  <body>
    <header class="line_header">
      <div class="line_logo">
        LINE
        <img class="line_config" src="pic/config.png">
      </div>
      <div class="line_functionChangeButton">
        <img class="line_functionBtn1" src="pic/personLogo.png">
        <img class="line_functionBtn2" src="pic/talkLogo.png">
        <img class="line_functionBtn3" src="pic/presonAddLogo.png">
        <img class="line_functionBtn4" src="pic/timelineLogo.png">
      </div>
    </header>

    <div class="line_talkMain">
      
      <div class="line_searchBox">
        <!-- <img class="line_searchLogo" src="searchLogo.png"> -->
        <input class="line_searchInput" type="text" placeholder="トークルームとメッセージ検索">
      </div>

      <div class="line_talkBox">
        <img class="line_picPreson" src="pic/pic1.jpg">
        <p class="line_showUserName">AAA</p>
        <p class="line_message">BBB</p>

        <p class="line_sentTime">uuu</p>
      </div>
    </div>

  </body>
</html>
<?php
}
else{
  echo '<script type="text/javascript"> window.location = "login.php" </script>';
}
?>