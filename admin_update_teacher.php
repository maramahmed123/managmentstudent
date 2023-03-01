
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
$t_id = $_GET['teacher_id'];
$sql ="SELECT * FROM `teacher` WHERE `id`='$t_id'";
$result = mysqli_query($data, $sql);
$info=$result->fetch_assoc();

if (isset($_POST["update"])) {
    $name = $_POST["name"];
    $description = $_POST["description"];
    $file =$_FILES['image']['name'];
    $dst ='./image/'.$file;
    $dst_db ='image/'.$file;
    move_uploaded_file($_FILES['image']['tmp_name'], $dst);
    
    $query ="UPDATE `teacher` SET `name`='$name',`description`='$description',`image`='$dst' WHERE `id`='$t_id'";
    $result2 = mysqli_query($data, $query);
    if ($result2) {
        echo "<script type='text/javascript'>
        alert('Updated Successfully'); 
        </script>";
        header('location:admin_view_teacher.php');
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
    <form action="" method="POST" enctype='multipart/form-data'>
        <table width="100%">
            <tbody>
                <tr>
                    <td><label>Teacher name:</label></td>
                    <td><input value="<?php echo $info['name'];?>" type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label>About Teacher</label></td>
                    <td><input value="<?php echo $info['description'];?>" type="text" name="description"></td>
                </tr>
                <tr>
                    <td><label>Teacher Old Image</label></td>
                    <td><img src="<?php echo $info['image'];?>" alt=""></td>
                </tr>
                <tr>
                    <td><label>Teacher New Image</label></td>
                    <td><input type="file" value="" name="image"></td>
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