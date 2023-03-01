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


$data = new mysqli($host, $user, $password,$db);
if ($data===false) {
    die("connection error");
  }


if (isset($_POST["add_teacher"])) {
    $t_name = $_POST["name"];
    $t_description = $_POST["description"];
        $file =$_FILES['image']['name'];
        $dst ='./image/'.$file;
        $dst_db ='image/'.$file;
        move_uploaded_file($_FILES['image']['tmp_name'], $dst);


    $sql ="INSERT INTO `teacher`(`name`, `description`, `image`) VALUES ('$t_name','$t_description','$dst_db')";
    $result = mysqli_query($data, $sql);

    if ($result) {
        header('location:admin_add_teacher.php');
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

        <h2>#Add_Teacher</h2>

</section>
<section id="cart" class="section-p1">
    <form action="" method="POST" enctype='multipart/form-data'>
        <table width="100%">
            <tbody>
                <tr>
                    <td><label>Teacher name</label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label>Description</label></td>
                    <td><input type="text" name="description"></td>
                </tr>
                <tr>
                    <td><label>Image</label></td>
                    <td><input type="file" name="image"></td>
                </tr>
                <tr>
                    <td><button class="btn btn-outline-secondary" type="submit" name="add_teacher">Add Teacher</button></td>
                </tr>
            </tbody>
        </table>
    </form>
    </section>






      
     

</body>
</html>