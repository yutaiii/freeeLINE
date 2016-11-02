<?php
  session_start();
  include('head.php');
?>

<div class="talkroom_main">

  <div class="talkroom_talkarea">
  </div>
<form action="talkControler.php" method="post">
  <div class="talkroom_message">
    <input class="talkroom_input" name="message">
    <input class="talkroom_submitBtn" type="submit">
  </div>
</form>
</div>