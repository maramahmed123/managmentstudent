<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    <style>
        body{
            background-image: linear-gradient(to right, #DECBA4, #3E5151);
            display: flex;
            align-items: center;
            justify-content: center;
            height: 95vh;
        }
    </style>
</head>
<body>
    <section id="about-head" class="section-p1">
            <img src="project_Image/study2.png" alt="" class="animate__rubberBand animate__animated animate__repeat-3 animate__delay-2s">
            <div class="form-details">
                <center>
                    <?php
                    error_reporting(0);
                    echo $_SESSION['loginMessege'];
                    session_start();?>
                </center>
                <form action="login_check.php" method="post">
                        <input type="text" name="username" placeholder="Your Name">
                        <input type="password" name="password" placeholder="Password">
                        <button class="normal" type="submit">Submit</button>
                    </form>

                <br><br>

            </div>
        </section>
</body>
</html>