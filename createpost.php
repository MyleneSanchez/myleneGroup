<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Create Post</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
   
    if (isset($_REQUEST['username'])) {
        
        $username = stripslashes($_REQUEST['username']);
       
        $username = mysqli_real_escape_string($con, $username);

        $fullname    = stripslashes($_REQUEST['fullname']);
        $fullname    = mysqli_real_escape_string($con, $fullname);

        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, fullname, password, email, create_datetime)
                     VALUES ('$username', '$fullname','" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Create Post</h1>
        <input type="text" class="login-input" name="fullname" placeholder="Full Name" required />
        <input type="text" class="login-input" name="username" placeholder="Name of Community Pantry" required />
        <input type="text" class="login-input" name="email" placeholder="Email Address">
        <input type="text" class="login-input" name="fullname" placeholder="Street Address" required />
        <input type="text" class="login-input" name="fullname" placeholder="Barangay" required />
        <input type="text" class="login-input" name="fullname" placeholder="Municipality/City" required />
        <input type="text" class="login-input" name="fullname" placeholder="Phone Number" required />
        <input type="text" class="login-input" name="fullname" placeholder="GCash Number" required />
        <input type="text" class="login-input" name="fullname" placeholder="Schedule" required />
        <input type="text" class="login-input" name="fullname" placeholder="More Information"/>

        <input type="submit" name="submit" value="Submit" class="login-button">
        
    </form>
<?php
    }
?>
</body>
</html>
