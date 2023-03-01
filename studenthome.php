<?php
session_start();

if(!isset($_SESSION['username'])){
    header('location:login.php');
}
elseif($_SESSION['usertype']=='admin'){
    header('location:login.php');
}
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
<!-- <h1 class="animate__rubberBand animate__animated animate__bounce animate__infinite	infinite">An animated element</h1> -->

    <?php require 'student_sidebar.php';?>
      <div class="section1">
     
        <div class="blog content">
            <div class="blog-box">
               
                <div class="blog-details">
                    <h4>Welcome to School </h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Animi accusamus modi id inventore libero earum quibusdam eos eveniet
                    , rerum alias voluptas ratione. Deserunt ad non sapiente dolorum? Voluptate, aperiam quasi?
                    Id aperiam sunt rem consequatur ab dolorum, quisquam     Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis aliquid ab aliquam eum! Quos nihil ipsum deserunt, corporis veritatis at optio. Facere consectetur delectus beatae et alias tenetur vero fugit.
    Incidunt corrupti temporibus error expedita aperiam impedit voluptatibus sed ratione iure perferendis rerum obcaecati molestiae, quam dolorem architecto aut asperiores natus amet! Asperiores, earum corrupti pariatur assumenda consectetur et minus.
    Vel sunt cumque similique accusantium ipsam, tempora et, non odit saepe voluptatum dolor, fuga quas voluptatibus amet ea? Exercitationem, aspernatur aperiam non labore corporis architecto repudiandae quidem et eum pariatur?
    Voluptas neque, aliquid nemo ea at nulla, mollitia eius repellat, molestiae necessitatibus earum quo porro libero dignissimos. Mollitia expedita temporibus, optio nulla provident delectus veniam dolore sit. Corrupti, earum impedit!
    caecati earum deserunt aperiam! Quos reprehenderit praesentium dolorum mollitia repellat earum dignissimos sequi. Assumenda nesciunt vitae, mollitia reprehenderit minus deleniti iure delectus?
    Itaque unde dolore voluptatem provident ratione repellendus ipsa maxime ex voluptate placeat, nulla tenetur maiores sequi necessitatibus quisquam enim odio eum nobis fugit voluptatibus, cupiditate sint non incidunt possimus? Natus?
    Voluptat Officia odio et veritatis aut. Autem itaque corrupti commodi, provident quae officiis illo molestiae aliquid impedit iste harum tempore?</p>
         <input type="text">       
</div>


            </div>
        </div>







      
     

</body>
</html>