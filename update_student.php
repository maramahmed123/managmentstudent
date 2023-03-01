
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
$id = $_GET['student_id'];
$sql ="SELECT * FROM `user` WHERE `id`='$id'";
$result = mysqli_query($data, $sql);
$info=$result->fetch_assoc();

if (isset($_POST["update"])) {
    $name = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    
    $query ="UPDATE `user` SET `username`='$name',`email`='$email',`phone`='$phone',`password`='$password' WHERE `id`='$id'";
    $result2 = mysqli_query($data, $query);
    if ($result2) {
        echo "<script type='text/javascript'>
        alert('Updated Successfully'); 
        </script>";
        header('location:view_student.php');
    }else{
            echo 'Uploaded Failed';
    }

}




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  include 'admin_css.php';?>
    <title>admin Management System</title>
</head>
<body>

<?php  include 'admin_sidebar.php';?>
      <section id="page-header" class="about-header">

        <h2>#Update_Student</h2>

</section>
  
<section id="cart" class="section-p1">
    <form action="" method="POST">
        <table width="100%">
            <tbody>
                <tr>
                    <td><label>Name</label></td>
                    <td><input value="<?php echo $info['username'];?>" type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label>Email</label></td>
                    <td><input value="<?php echo $info['email'];?>" type="text" name="email"></td>
                </tr>
                <tr>
                    <td><label>Phone</label></td>
                    <td><input value="<?php echo $info['phone'];?>" type="number" name="phone"></td>
                </tr>
                <tr>
                    <td><label>Password</label></td>
                    <td><input value="<?php echo $info['password'];?>"  type="text" name="password"></td>
                </tr>
                <tr>
                    <td><button  class="btn btn-outline-secondary" type="submit" name="update">Update</button></td>
                </tr>
            </tbody>
        </table>
    </form>
    </section>






      
     

</body>
</html>