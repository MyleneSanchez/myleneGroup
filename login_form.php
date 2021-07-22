<?php 
include("includes/connection.php");
include("includes/head.php");
 ?>

<!DOCTYPE html>

 <html>
 <head>
 <title>Pantry Finder | Log In</title>
</head>
  <!-- <link rel="stylesheet" href="css/login_form.css"> -->
    <link rel="stylesheet" href="css/login_form.css">
  <style>
    .loginbar{
      cursor: pointer;
      border-radius: 8px;
      box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
      background-color: #06e387;
      font-family: "Yu Gothic UI Light";
      color: rgb(255, 255, 255);
      border:3px;
      font-weight: bold;
      font-size: 20px;
      position: absolute;
      left: 430px;
      top: 310px;
      width: 400px;
      height: 35px;
  }
     </style>
 <body>
  <div class="login-background">
   <div class="topmargin">
        <form action = "login.php" method="POST">
            <br><br><br><br><br><br><br><br><br><br>
            <h2 class="sign">Sign </h2>
            <h2 class="in">In </h2>
            <p class="user"><b>User</b> </p>
                        <p class="name"><b> name:</b> <input class="userbar" type="text" id ="username"  placeholder= " Enter Username"  name="username" required name ="username"> <br><br></p>
            <p class="pass" ><b>Pass </b></p>
                        <p class="word"> <b> word: </b><input class="passwdbar" type="password" id="password"  placeholder= " Enter Password" name="password" require name="password"> <br><br></p>
                        <input class="loginbar" type="submit" name="submit" value="Log In">           
                        </form>
             <p class="dont"><b>Don't have an account?</b></p>
             <a class ="create" href="create_account.php"> <b>Click Here!</b></a>
      </div>
  </div>
</body>
</html>