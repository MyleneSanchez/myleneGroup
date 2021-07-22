<?php session_start();
include("includes/connection.php");
include("donor_account.php");
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/mypantry.css">

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
echo 
                '<h1 class="headpantry">MY  DONATIONS<hr class="hr"></p>';
 
            $query_category="SELECT donation_information.donation_id,donation_information.pantry_id, community_pantry.pantry_name, community_pantry.image 
                FROM community_pantry,user,donation_information
                 where community_pantry.pantry_id = donation_information.pantry_id AND user.user_id = $id AND donation_information.user_id = $id";
            $result_category = mysqli_query($conn,$query_category);
            
 if(mysqli_num_rows($result_category) <=0)
        {
            echo '<br><br><br><br><br><br><h1 align="center"> <br><br><br><br><br><br>No List of Donations </h1>';
        }
        else{
            while($row = mysqli_fetch_array($result_category)){
                echo '
                    <div class="space" >
                            <table  class="pic-table">
                                <tr>
                                    <td>
                                        <a><img class="photo" src="pictures/arts/'.$row['image'].'" ></a><br>'.
                                        '<a  href=donation_info.php?pantry_id='.$row['pantry_id'].' class="desc-title"> '.$row['pantry_name'].' </a> <br> <br>
                                       
                                        
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
<!--  <p class="desc-content2">'.$row['user_fname'].' '.$row['user_lname'].'</p> -->