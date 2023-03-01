<?php
error_reporting(0);
session_start();
session_destroy();

if ($_SESSION['message']) {
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
        alert('$message'); 
    </script>";
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
    <title>Student Management System</title>
</head>
<body>
<!-- <h1 class="animate__rubberBand animate__animated animate__bounce animate__infinite	infinite">An animated element</h1> -->

    <nav>
        <label class="logo">W-School</label>
        <ul>
            <li>
                <a href="#">Home</a>
            </li>
            <li>
                <a href="#">Contact</a>
            </li>
            <li>
                <a  href="#">Admission</a>
            </li>
            <li>
                <a  href="login.php" class="btn color">Login</a>
            </li>
        </ul>
      </nav>
      <div class="section1">
        <div class="hero">
                <h1>We Teach Students With Care</h1>
        </div>
        <div class="blog">
            <div class="blog-box">
                <div class="blog-img">
                    <img src="project_Image/school.jpg" alt="">
                </div>
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
                </div>

            </div>
        </div>
        
        <center>
                    <h1>Our Teachers</h1>
                </center>


        <div class="pro-container">
            <!-- 1 -->
<?php while ($info=$result->fetch_assoc()) {?>
            <div class="pro">
                <img src="<?php echo $info['image'];?>" alt="">
                <div class="des">
                    <h3><?php echo $info['name'];?></h3>
                    <h5><?php echo $info['description'];?></h5>
                </div>
            </div>
            <?php } ?>
        </div>


        <center  class="wow slideInLeft" data-wow-duration="2s" data-wow-delay="5s">
                    <h1>Our Cources</h1>
                </center>


        <div class="pro-container">
            <!-- 1 -->
            <div class="pro">
                <img src="project_Image/web.jpg" alt="">
                <div class="des">
                    <h5>Web development</h5>
                </div>
            </div>

            <div class="pro">
                <img src="project_Image/graphic.jpg" alt="">
                <div class="des">
                    <h5>Graphic</h5>
                </div>
            </div>

            <div class="pro">
                <img src="project_Image/marketing.png" alt="">
                <div class="des">
                    <h5>Marketing</h5>
                </div>
            </div>
        </div>

        <!-- <form action="">
            <div>
                <label for="">Name</label>
                <input type="text">
            </div>
            <div>
                <label for="">Email</label>
                <input type="text">
            </div>
            <div>
                <label for=""></label>
                <input type="text">
            </div>
            <div>
                <label for=""></label>
                <input type="text">
            </div>
        </form> -->






    <section id="about-head" class="section-p1">
        <img src="project_Image/study2.png" alt="" class="animate__rubberBand animate__animated animate__repeat-3 animate__delay-2s">
        <div class="form-details">
            <form action="data_check.php" method="POST">
                    <input type="text" name="name" placeholder="Your Name">
                    <input type="Email" name="email" placeholder="E-mail">
                    <input type="number" name="phone" placeholder="Phone">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Your message"></textarea>
                    <button class="normal" type="submit" name="apply">Submit</button>
                </form>

            <br><br>

        </div>
    </section>

        
      </div>
      <footer>
        <div class="copyright">
                <p> © 2022 , HTML CSS JS PHP Student Template </p>
            </div>
      </footer>

      
     

</body>
</html>