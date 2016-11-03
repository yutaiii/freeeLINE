<?php
  session_start();
  include('head.php');
  $timestamp = time();
  echo date("ymdHise");
?>

<div class="talkroom_main">

  <div class="talkroom_talkarea">
    <!-- <div class="talkroom_talk">
    </div> -->
  </div>

  <div class="talkroom_message">
    <textarea id="talkroom_message" class="talkroom_input"></textarea>
    <input id="talkroom_submit" class="talkroom_submitBtn" type="button" value="送信">
  </div>

</div>