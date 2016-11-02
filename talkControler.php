<?php
  session_start();
  $message = $_POST['message'];//mesageの内容
  $fromId = $_SESSION['id'];//messageを送る側のid
  $toId = 1;//messageを送る相手のid
  include('sql/query.php');
  message_send_to_db($message, $fromId, $toId);
?>