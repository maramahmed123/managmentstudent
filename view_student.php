<?php
error_reporting(0);
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
$sql ="SELECT * FROM `user` WHERE `usertype`='student'";
$result = mysqli_query($data, $sql);
$row =mysqli_fetch_array($result);
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
<?php
include 'admin_sidebar.php';
?>
    <section id="page-header" class="about-header">

        <h2>#View_Student</h2>

    </section>
    <section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Password</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>
            </thead>
<?php
while ($info=$result->fetch_assoc()) {
    

?>
            <tbody>
                <tr>
                    <td>
                        <?php echo $info['username'];?>
                    </td>
                    <td>
                        <?php echo $info['email'];?>
                    </td>
                    <td>
                        <?php echo $info['phone'];?>
                    </td>
                    <td>
                        <?php echo $info['password'];?>
                    </td>
                    <td>
                        <?php echo "<a class='btn btn-danger' onClick=\"javascript:return confirm('Are you sure you want to delete this comment?')\" href='delete.php?student_id={$info['id']}'>Delete</a>";?>
                    </td>

                    <td>
                        <?php echo "<a class='btn btn-primary'  href='update_student.php?student_id={$info['id']}'>Update</a>";?>
                    </td>
                   
                </tr>
            </tbody>
            <?php } ?>
        </table>
    </section>




</body>
</html>