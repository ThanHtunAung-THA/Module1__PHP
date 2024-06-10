<?php

$username="admin";
$password="12345";

if($username != "admin" && $password =="12345" ){
  echo "Username is wrong";
}else if($username == "admin" && $password !="12345" ){
    echo "Password is wrong";
}else if($username == "admin" && $password =="12345"){
    echo "can Login";
}else{
    echo "cannot Login";
}
?>
