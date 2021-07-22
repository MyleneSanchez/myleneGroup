<?php include("includes/connection.php");

include("donor_account.php");

?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
  <link rel="stylesheet" href="css/info_pantry.css">
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
                 
                   
                    ';

}
     ?>
            <br>
</body>
</html>
<!-- <p class="artist"><br><br><br><br><br><br><br><br><br><br><br><br><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1HITFsz1LzYWhKgMiUtwdILCWj0ZCJ99B" width="400" height="300"></iframe> </p> -->