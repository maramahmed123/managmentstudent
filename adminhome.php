<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
elseif($_SESSION['usertype']=='student'){
    header('location:login.php');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">  
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="style.css">
    <title>admin Management System</title>
</head>
<body>
<!-- <h1 class="animate__rubberBand animate__animated animate__bounce animate__infinite	infinite">An animated element</h1> -->

    <nav>
        <label><a class="logo" href="">Admin Dashboard</a></label>
        <ul>
            <li>
            <a  href="logout.php" class="btn color">logout</a>
            </li>
        </ul>
      </nav>
      <section id="page-header" class="about-header">

        <h2>#Admin_Home</h2>

</section>
      <aside  id="left">
            <ul>
     
                <li>
                    <a  href="admission.php">Admission</a>
                </li>
                <li>
                    <a  href="add_student.php">Add Student</a>
                </li>
                <li>
                    <a  href="view_student.php">View Student</a>
                </li>
                <li>
                    <a  href="admin_add_teacher.php">Add Teacher</a>
                </li>
                <li>
                    <a  href="admin_view_teacher.php">View Teacher</a>
                </li>
                <li>
                    <a  href="#">Add Courses</a>
                </li>
                <li>
                    <a  href="#">View Courses</a>
                </li>
            </ul>
        </aside>
  
<section id="cart" class="section-p1">
        <table width="100%">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Phone</td>
                    <td>Message</td>
                    
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                 
                </tr>
            </tbody>
        </table>
    </section>






      
     

</body>
</html>