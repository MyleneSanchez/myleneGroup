<?php session_start();
include("includes/connection.php");


if(isset($_POST['delete'])){
  $user_id = $_SESSION['USER_ID'];
  $sql = "DELETE FROM user WHERE user_id = '$user_id'";
  if(mysqli_query($conn,$sql)){
    include("functions.php");
    include("logout.php");
  }
  else{
    echo 'Error deleting account';
  }

}
?>
<?php

$user_type = $_SESSION['user_type'];
if($user_type == 'Owner'){
  include("account.php");

}
else if($user_type == 'Donor'){
  include("donor_account.php");

}
else if($user_type == 'Admin'){
  include("head_admin.php");

}
?>

<div class="border">
<?php
$user_id = $_SESSION['USER_ID'];
 include("includes/connection.php");

 $query_category1="SELECT user_imagepath FROM user WHERE user_id = '$user_id'";
 $result_category1 = mysqli_query($conn,$query_category1);
 while($row=mysqli_fetch_array($result_category1)){
     echo '<a href= "pictures/profile/'.$row['user_imagepath'].'"> <img class="img" src="pictures/profile/'.$row['user_imagepath'].'" ></a><br />';
 }

$query_category="SELECT username,password,user_fname,user_mname,user_lname,user_contact,user_email 
                 FROM user
                 where user_id = $user_id";
        $result_category = mysqli_query($conn,$query_category);

        while($row=mysqli_fetch_array($result_category)){
            echo '<p class="head-title">'.$row['user_fname'].' '.$row['user_mname'].' '.$row['user_lname'].' </p>     
                  <p class="artist"> <br>Phone Number: '. $row['user_contact'].'</p>
                  <p class="artist"> <br><br>Email: '. $row['user_email'].'</p>
                  ';
}
     ?>

<!DOCTYPE html>

 <html>
 <head>
</head>
<style type="text/css">

.border{
    position: absolute;
    top: 100px;
    left: 170px;
    width:1000px;
    height: 600px;
   
    border-radius: 16px;
    float: center;
    border: 1px solid none;
    background-color: white;
}

    .img{
        position: absolute;
        left: 80px;
        top: 50px;
        width:300px;
        height: 300px;
        box-shadow: 1px 1px 10px 0px rgb( 55, 52, 52 );
    }

    .head-title{
      font-family: "Yu Gothic UI Light";
      font-size: 45px;
      color: #2d70d5;
      position: absolute;
      left: 500px;
      top: 10px;
    }

    .artist{
      font-size: 20px;
      font-family: "Yu Gothic UI Light";
      color: #333333;
      position: absolute;
      left: 500px;
      top: 130px;
      z-index: 3;
    }

    
    .contact{
       border-radius: 8px;
       border: none;
       box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
       background-color: #aa1313;
       font-family: "Yu Gothic UI Light";
       color: white;
       text-align: center;
       font-size: 15px;
       font-weight: bold;
       padding: 12px 10px 8px 10px;
       position: absolute;
       top: 233px;
       right: 195px;
       width: 100px;
       height: 50px;
       z-index: 30;
    }

    .hr{
        position: absolute;
        top: 325px;
        left: 700px;
        width: 440px;
        z-index: 40;
    }

    .about{
      font-size: 17px;
      font-family: "Yu Gothic UI Light";
      color: #333333;
      position: absolute;
      left: 700px;
      top: 325px;
      height: 35px;
      z-index: 3;
      font-weight: bold;
    }

    .desc{
      font-size: 14px;
      font-family: "Yu Gothic UI Light";
      text-align: justify;
      text-indent: 50px;
      color: #333333;
      position: absolute;
      left: 700px;
      top: 360px;
      width:450px;
      height: 240px;
      z-index: 1;
      overflow: scroll;
    }
    
 </style>

</body>
</html>