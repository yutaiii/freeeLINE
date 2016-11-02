<?php

function signup($uname, $uemail, $upassword){
  $dbinfo = database_connection();
  $con = $dbinfo[0];
  $db = $dbinfo[1];

  $query = "insert into userinfo values('', '".$uname."', '".$uemail."', '".$upassword."')";

  $result = mysqli_query($con, $query);


}

function database_connection(){
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'freeeline';

  $con = mysqli_connect($server, $username, $password);

  $db = mysqli_select_db($con, $database);

  return $dbinfo = array($con, $db);

}
?>