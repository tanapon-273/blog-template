<?php 
    error_reporting(E_ALL);
    $conn = new mysqli('localhost','root','','blog');
    $conn->set_charset('utf8');
    if($conn->connect_errno){
        echo "Connect Success".$conn->connect_error;
        exit();
    }
    $base_path_blog = 'assets/image/blog/';
    date_default_timezone_set('Asia/Bangkok');

?>