<?php session_start();

    include("functions.php");
    if(!isset($_SESSION['USER_ID'])){
      redirect_to("login_form.php");
    }
    $user_id = $_SESSION['USER_ID'];
    $pantry_id = $_SESSION['pantry_id'];
include("includes/head.php");
include("includes/connection.php");
$query_category11="SELECT community_pantry.user_id
                   FROM community_pantry,user
                   where community_pantry.user_id = user.user_id AND pantry_id = '$pantry_id'";
$result_category11 = mysqli_query($conn,$query_category11);

      while($row11=mysqli_fetch_array($result_category11)){
          if($user_id == $row11['user_id']){
            echo "<script type=\"text/javascript\">window.alert('You cant donate on your own Community Pantry');window.location.href = 'info_pantry.php?pantry_id=$pantry_id';</script>";
          }
          else{
          }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Pantry Finder | Donate</title>
    <link rel="stylesheet" href="css/donate.css">
</head>
<body>
     <div id="content">
        <form action = "action_donation.php" method="POST" ><br><br><br><br>
              <p>
                 <h2 class="head-shipping">Donation </h2>
                 <h2 class="head-address">Form</h2><br> <hr class="hr" style="border-bottom: 2px solid #2d70d5;">
              </p>
    <!--Values from Database -->

          <p class="fsize">Full Name: <input class="textbox" type="text" id ="" name="full_name"> <br></p>
          <p class="fsize" >Address: &nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="" required name="address"> <br></p>
          <p class="fsize" >Email: <input class="textbox" type="text" id="" name="email"> <br></p>
          <p class="fsize" >Phone Number: <input class="textbox" type="text" id="" required name="phone_number"> <br></p>
          <p class="fsize" >Date of Donation: <input class="textbox" type="text" id="" required name="date_of_donation"> <br></p>
          <p class="fsize" >Transaction:
              <select id="" required name="transaction" class="textbox">
                    <option value="GCash">GCash</option>
                    <option value="Face to Face">Face to Face</option>
              </select> <br></p>
          <input class = "inputbar"type="submit" name="next" value="Submit">
  </form>
    </div>
</body>
</html>