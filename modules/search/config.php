<?php

$con = mysqli_connect("localhost","root","","twitter");

if(!$con){
    echo "Connection Failed" . mysqli_connect_error();
}
?>