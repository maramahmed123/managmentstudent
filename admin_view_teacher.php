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


$data = new mysqli($host, $user, $password,$db);
if ($data===false) {
    die("connection error");
  }
$sql ="SELECT * FROM `teacher`";
$result = mysqli_query($data, $sql);


if ($_GET['teacher_id']) {
    $t_id = $_GET['teacher_id'];
    $sql2 = "DELETE FROM `teacher` WHERE `id` = '$t_id' "; 
    $result2 = mysqli_query($data, $sql2);
    if ($result2) {
       echo 'success Delete';
      }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require 'admin_css.php';?>
    <title>admin Management System</title>
</head>
<body>
<?php require 'admin_sidebar.php';?>


<section id="page-header" class="about-header">

    <h2>#admin_view_teacher</h2>

</section>
<section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Teacher name</td>
                    <td>About Teacher</td>
                    <td>Image</td>
                    <td>Delete</td>
                    <td>Update</td>
                </tr>
            </thead>
            <tbody>
            <?php while ($info=$result->fetch_assoc()) {?>
                <tr>

                    <td><?php echo $info['name'];?></td>
                    <td><?php echo $info['description'];?></td>
                    <td><img src="<?php echo $info['image'];?>" alt=""></td>
                    <td>
                        <?php echo "<a class='btn btn-danger' onClick=\"javascript:return confirm('Are you sure you want to delete this comment?')\" href='admin_view_teacher.php?teacher_id={$info['id']}'>Delete</a>";?>
                    </td>
                    <td>
                        <?php echo "<a class='btn btn-primary'  href='admin_update_teacher.php?teacher_id={$info['id']}'>Update</a>";?>
                    </td>
                
             
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>






      
     

</body>
</html>