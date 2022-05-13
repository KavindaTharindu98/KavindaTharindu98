<?php
// configure your server
// 1=> server name
// 2=> username
// 3=> password
// 4=> database name

$conn = mysqli_connect("remotemysql.com","IiK9cRjmk5","GcL0d2ak7o","IiK9cRjmk5");

if(!$conn){
    echo "Connection Failed";
}
?>
