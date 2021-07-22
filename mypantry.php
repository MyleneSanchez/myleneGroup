<?php session_start();
include("includes/connection.php");
include("account.php");
?>

<!DOCTYPE html>
<html>
<head>
<title>Pantry Finder | My Pantry</title>
<style>
.head-available {
  font-size: 30px;
   font-family: "Yu Gothic UI Light";
   color: rgb( 45, 112, 213 );
   position: relative;
   left: 70px;
   top: 100;
   z-index: 19;
   }

 .headpantry{
  font-size: 30px;
  font-family: "Yu Gothic UI Light";
 color: rgb( 00, 00, 00 );
 position: absolute;
    left:100px;
   top: 90px;
   z-index: 19;

 }

 .hr{
     position:relative;
     border: 1px solid #036313;
     top:-5px;
     width: 1160px;
     left: 0px;
    
 }

 .head-sold {
  font-size: 30px;
   font-family: "Yu Gothic UI Light";
   color: rgb( 45, 112, 213 );
   position: relative;
   left: -290px;
   top: 550;
   z-index: 1;
   }
 
  .hr2{
     position:relative;
     border: 1px solid #2d70d5;
     top:-385px;
     width: 1090px;
     left: 200px;
 }

.photo {
     position: relative ;
     width: 300px;
    height : 250px;
 }

.desc-title{
 color:#2d70d5;
 
 font-family: "Yu Gothic UI Light";
 font-size: 40px;
 position: relative;
 top: 0px;
 left: 5px;
 text-decoration: none;
}
.desc-content{
 position: relative;
 font-size: 17px;
 font-family:  "Yu Gothic UI Light";
 top: -7px;

}
.desc-content2{
 position: relative;
 font-size: 18px;
 font-family:  "Yu Gothic UI Light";
 top: -30px;
 left: 10px;
}

.pic-table{
     border: 3px solid white;
     box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
     background-color: #fafafa;
     border-collapse: collapse;
     float: left;
     overflow: auto;
     margin: 0px 50px 50px 0px;
     position: relative;
     top: 0px;
     z-index: 80;
 }

 .space{
   position: relative;
   left: 0px;
   top: -20px;
   margin-right: 100px;

 }

  .desc-content3{
     position: relative;
     font-size: 16px;
     font-family:  "Yu Gothic UI Light";
     top: -40px;
 }

 .pic-table2{
     border: 3px solid white;
     box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
     background-color: #fafafa;
     border-collapse: collapse;
     float: left;
     margin: 0px 50px 50px 0px;
 }

 .space2{
   position: relative;
   left:100px;
   top: 120px;
   margin-right: 100px;
 }

 .addbtn{
   cursor: pointer;
   text-decoration:none;
   padding: 10px;
   border-radius: 15em;
    font-family: "Yu Gothic UI Light";
    font-weight: bold;
    border: 1px solid;
    color: white;
    font-size: 20px;
    background-color: #43b353;
    position: absolute;
    top: -18px;
    left:1020px;
    width: 100px;
    height: 30px;
    z-index: 100;
 }

  .modifybtn{
     cursor: pointer;
     text-decoration:none;
     color:white;
     padding: 10px;
     border-radius: 15em;
    font-family: "Yu Gothic UI Light";
    font-weight: bold;
    border: 1px solid;
    color: white;
    font-size: 20px;
    background-color: #234;
    position: relative;
    top: -20px;
    left: 30px;
    width: 170px;
    height: 30px;
    z-index: 100;
 }

 .deletebtn{
   border-radius: 15em;
    font-family: "Yu Gothic UI Light";
    font-weight: bold;
    color: white;
    font-size: 20px;
    background-color: #FF0017;

    position: relative;
    top: -20px;
    padding: 10px;
    left: 40px;
    width: 100px;
    height: 35px;
    text-decoration: none;
 }
  .body{
 margin: 0 0 100px -50px;
}
</style>
<!--<link rel="stylesheet" href="css/mypantry.css">-->
</head>
<body>
<script>
function YNconfirm() {
    if (window.confirm('Are you sure you want to delete this artwork?'))
    {
        return true;
    }
    else
        return false;
};
</script>

    <div class="img">

<?php
$id = $_SESSION['USER_ID'];
echo '<h1 class="headpantry">MY COMMUNINTY PANTRY<hr class="hr"></p>';
echo '<a class="addbtn" href="pantry_post.php" style="">   Create Post</a>';
    
    $query_category="SELECT community_pantry.pantry_id, community_pantry.pantry_name, user.user_fname, user.user_lname, community_pantry.image
                     FROM community_pantry,user
                     where community_pantry.user_id = user.user_id AND user.user_id = $id";
    $result_category = mysqli_query($conn,$query_category);

 if(mysqli_num_rows($result_category) <=0)
    {
        echo '<br><br><br><h1 align="Center"> No Available Pantry </h1>';
    }
    else{
        while($row = mysqli_fetch_array($result_category)){
            echo ' <div class="space" >
                        <table  class="pic-table">
                            <tr>
                               <td>
                                    <a><img class="photo" src="pictures/arts/'.$row['image'].'" ></a><br>'.
                                    '<a href=info_pantry.php?pantry_id='.$row['pantry_id'].' class="desc-title"> '.$row['pantry_name'].' </a> <br> <br>
                                     <p class="desc-content2">'.$row['user_fname'].' '.$row['user_lname'].'</p>
                                     <p>
                                        <a class="modifybtn" href="edit_pantry.php?pantry_id='.$row['pantry_id'].'"> &#128393; Modify </a>
                                        <a class="deletebtn" href =action_deletepantry.php?delete='.$row['pantry_id'].'&pic='.$row['image'].' onclick="return(YNconfirm());"> &#10006; Delete</a>
                                     </p>
                                    </td>
                                </tr>
                            </table>
                        </div>';
        }
    }
'</div>';
?>
</body>
</html>
