<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
elseif($_SESSION['usertype']=='student'){
    header('location:login.php');
}

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";


$data = mysqli_connect($host, $user, $password,$db);

if ($_GET['student_id']) {
    $user_id = $_GET['student_id'];
    $sql = "DELETE FROM `user` WHERE `id` = '$user_id' "; 
    $result = mysqli_query($data, $sql);
    if ($result) {
        $_SESSION['message']='Your applcation sent successful';
        header('location:view_student.php');
      }
}
?>