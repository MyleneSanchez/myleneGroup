<?php include("includes/connection.php");

include("includes/head.php");

?>
<!DOCTYPE html>
<html>
<head>
<title>Pantry Finder | Pnatry Details</title>
<style>
    .border{
  position: absolute;
  top: 130px;
  left: 50px;
  width:1180px;
  height: 900px;

  border-radius: 12px;
  float: left;
  border: 1px solid none;
  background-color: white;
  margin: 0px 50px 100px 0px;

}

  .img{
      position: absolute;
      left: 80px;
      top: 50px;
      width:450px;
      height: 450px;
      box-shadow: 1px 1px 10px 0px rgb( 55, 52, 52 );
  }

  .head-title{
    font-family: "Yu Gothic UI Light";
    font-size: 45px;
    color: #2d70d5;
    position: absolute;
    left: 700px;
    top: 10px;
  }

  .artist{
    font-size: 20px;
    font-family: "Yu Gothic UI Light";
    color: #333333;
    position: absolute;
    left: 700px;
    top: 130px;
    z-index: 3;
  }

  .openbutton{
      font-family: "Yu Gothic UI Light";
     font-weight: bold;
     color: white;
     font-size: 15px;
     margin-bottom: 30px;
     background-color: #43b353;
     position: absolute;
     right: 180px;
     width: 200px;
     height: 50px;
     border-radius:50em;
     top: 800px;


  }
  .closebutton{
    border-radius: 8px;
     font-family: "Yu Gothic UI Light";
     color: white;
     font-size: 15px;
     font-weight: bold;
     text-align: center;
     border: none;
     box-shadow: 1px 1px 5px 0px rgb(0, 0, 1);
     background-color: #aaa;
     padding: 15px;
     position: absolute;
     top: 800px;
     right: 180px;
     width: 200px;
     height: 20px;
     border-radius:50em;
     margin-bottom: 30px;

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
</head>

<!-- <link rel="stylesheet" href="css/info_pantry.css"> -->
        <?php  $user_id = $_SESSION['USER_ID'];
        $pantry_id = $_GET['pantry_id'];
        $_SESSION['pantry_id'] = $pantry_id;
        ?>
<body style="margin-bottom: 20px;">
<script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete this comment?'))
    {
        return true;
    }
    else
        return false;
};
</script>
    <div class="border">
<form action="donate.php" method="POST">
<?php

$query_category1="SELECT image FROM community_pantry WHERE pantry_id = '$pantry_id'";
        $result_category1 = mysqli_query($conn,$query_category1);

        while($row=mysqli_fetch_array($result_category1)){
            echo '<a href= "pictures/arts/'.$row['image'].'"> <img class="img" src="pictures/arts/'.$row['image'].'" ></a><br />';
        }

$query_category="SELECT community_pantry.pantry_id, community_pantry.pantry_name, user.user_fname, user.user_lname, community_pantry.image, community_pantry.status, community_pantry.phone_number,community_pantry.list_of_items,
                    community_pantry.street_address,  community_pantry.barangay, community_pantry.municipality,  community_pantry.province,  community_pantry.region,  community_pantry.email,  community_pantry.gcash_number,
                    community_pantry.status
                 FROM community_pantry,user
                 where community_pantry.user_id = user.user_id AND pantry_id = '$pantry_id'";
        $result_category = mysqli_query($conn,$query_category);

        while($row=mysqli_fetch_array($result_category)){
            echo '<p class="head-title" >'. $row['pantry_name'].'</p>
                  <p class="artist"> Name of Owner: '.$row['user_fname'].' '.$row['user_lname'].' </p> 
                  <p class="artist"> <br>Phone Number: '. $row['phone_number'].'</p>
                  <p class="artist"> <br><br>List of Items: '. $row['list_of_items'].'</p>
                  <p class="artist"> <br><br><br>Street Address: '. $row['street_address'].'</p>
                  <p class="artist"> <br><br><br><br>Barangay: '. $row['barangay'].'</p>
                  <p class="artist"> <br><br><br><br><br>Municipality: '. $row['municipality'].'</p>
                  <p class="artist"> <br><br><br><br><br><br>Province: '. $row['province'].'</p>
                  <p class="artist"> <br><br><br><br><br><br><br>Region: '. $row['region'].'</p>
                  <p class="artist"> <br><br><br><br><br><br><br><br>Email: '. $row['email'].'</p>
                  <p class="artist"> <br><br><br><br><br><br><br><br><br>GCash Number: '. $row['gcash_number'].'</p>
                  <p class="artist"> <br><br><br><br><br><br><br><br><br><br>Status: '. $row['status'].'</p>
                  <p class="artist"><br><br><br><br><br><br><br><br><br><br><br><br><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HITFsz1LzYWhKgMiUtwdILCWj0ZCJ99B" width="400" height="300"></iframe> </p>
                  ';
if($row['status'] == 'Closed'){
    echo '<p class="closebutton"> '.$row['status'].' <br> </form>';
}
else{
       echo '
       <input class="openbutton" type="submit" name="buy" value="Donate for '.$row['pantry_name'].'"></form>';
    }
}
     ?>
            <br>
</body>
</html>