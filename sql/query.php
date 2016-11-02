<?php

function database_connection(){
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'freeeline';

  $con = mysqli_connect($server, $username, $password);

  $db = mysqli_select_db($con, $database);

  return $dbinfo = array($con, $db);

}

function signup($uname, $uemail, $upassword){
  $dbinfo = database_connection();
  $con = $dbinfo[0];
  $db = $dbinfo[1];

  $query = "insert into userinfo values('', '".$uname."', '".$uemail."', '".$upassword."')";

  $result = mysqli_query($con, $query);
}

function login($email, $password){
  $dbinfo = database_connection();
  $con = $dbinfo[0];
  $db = $dbinfo[1];

  $query = "select * from userinfo where email = '".$email."'and password = '".$password."'";

  $result = mysqli_query($con, $query);

  $arr = mysqli_fetch_array($result);

  return $arr;
}

function message_send_to_db($message, $fromId, $toId)
{
  $dbinfo = database_connection();
  $con = $dbinfo[0];
  $db = $dbinfo[1];

  $query = "insert into message values('".$fromId."', '".$toId."', '".$message."')";

  $result = mysqli_query($con, $query);
}

?>