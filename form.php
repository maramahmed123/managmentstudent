

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
    <h1>Update Profile</h1>
    <p>Please fill out this form with the required information</p>
    <form method="post" action=''>
      <fieldset>
        <label>Enter Your First Name: <input value="<?php echo $info['username'];?>"  name="username" type="text"  /></label>
        <label>Enter Your Phone Number: <input value="<?php echo $info['phone'];?>" name="phone" type="text"  /></label>
        <label>Enter Your Email: <input value="<?php echo $info['email'];?>" name="email" type="email"  /></label>
        <label>Create a New Password: <input value="<?php echo $info['password'];?>" name="password" type="password"   /></label>
      </fieldset>
     
      <input type="submit" value="Update" name="update_profile" />
    </form>
  </body>
</html>