<?php
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
$name = $_SESSION["username"];
$sql ="SELECT * FROM `user` WHERE `username`='$name'";
$result = mysqli_query($data, $sql);
$info =mysqli_fetch_array($result);
if (isset($_POST["update_profile"])) {
    $s_email = $_POST["email"];
    $s_phone = $_POST["phone"];
    $s_password = $_POST["password"];

    $sql2 ="UPDATE `user` SET `phone`='$s_phone',`email`='$s_email',`password`='$s_password' WHERE `username`='$name'";
    $result2 =mysqli_query($data, $sql2);
    if ($result2) {
        header('location:student_profile.php');
    }
}



// if(!isset($_SESSION['username'])){
//     header('location:login.php');
// }
// elseif($_SESSION['usertype']=='admin'){
//     header('location:login.php');
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'student_css.php';?>
    <title>Student Management System</title>
</head>
<body>
<nav>
        <label><a class="logo" href="">Admin Dashboard</a></label>
        <ul>
            <li>
                <a  href="logout.php" class="btn profile">logout</a>
            </li>
        </ul>
      </nav>
      <aside  id="left">
            <ul>
                <li>
                    <a  href="student_profile.php">My Profile</a>
                </li>
                <li>
                    <a  href="#">My Courses</a>
                </li>
                <li>
                    <a  href="#">My Result</a>
                </li>
            </ul>
        </aside>

<section class="hero">
        <h4>Welcome to School </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Animi accusamus modi id inventore libero earum quibusdam eos eveniet
        , rerum alias voluptas ratione. Deserunt ad non sapiente dolorum? Voluptate, aperiam quasi?
        Id illo molestiae aliquid impedit iste harum tempore?</p>
         
</section>
<section class="form">
<?php require 'form.php';?>
</section>
</body>
</html>