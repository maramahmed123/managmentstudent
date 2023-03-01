<?php
error_reporting(0);
session_start();
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";


$data = new mysqli($host, $user, $password,$db);

// Check connection
if ($data===false) {
  die("connection error");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["username"];
    $pass=$_POST["password"];
    $sql ="SELECT * FROM `user` WHERE `username`='".$name."' AND `password`='".$pass."' ";
    $result = mysqli_query($data, $sql);
    $row =mysqli_fetch_array($result);
}

    
    if($row['usertype']=='student'){
        
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = 'student';
        header('location:studenthome.php');
    }
    elseif($row['usertype']=='admin'){
        $_SESSION['username'] = $name;
        $_SESSION['usertype'] = 'admin';
        header('location:adminhome.php');
    }else{
        
        $messege="username or password donot match";
        $_SESSION['loginMessege']=$messege;
        header('location:login.php');
    }


?>