<?php include("includes/connection.php");
include("includes/head.php");?>

<!DOCTYPE html>
<html>
<head>
<title>Pantry Finder | Search</title>
   <link rel="stylesheet" href="css/action_search.css">
</head>
<body>

<form action="action_search.php" method="POST">
<select>
    <option>Barangay</option>
    <?php
        $sqli = "SELECT * FROM community_pantry";
        $result = mysqli_query($conn, $sqli);
         while ($row = mysqli_fetch_array($result)) {
            echo '<option>'.$row['barangay'].'</option>';
            }
     ?>
</select>
    
    <input type="submit" name="submit" value="SEARCH">
</form>

<br>
<a class ="back" href="pantry.php">Go Back </a>

<?php
$barangay = $_POST['barangay'];

$query_category="SELECT community_pantry.image,community_pantry.pantry_id, community_pantry.pantry_name, user.user_fname,user.user_lname, community_pantry.image, community_pantry.barangay
                 FROM community_pantry,user
                 where community_pantry.user_id = user.user_id AND community_pantry.barangay = '$barangay'";
            $result_category = mysqli_query($conn,$query_category);
 if(mysqli_num_rows($result_category) <=0)
        {
            echo '<br><br><br><br><br><br><br><br><br><h1 align="Center">No Results found </h1>';
        }
        else{
            while($row = mysqli_fetch_array($result_category))
{
    echo ' <div class="space" >
                <table  class="pic-table">
                        <tr>
                            <td>
                                 <img class="photo" src="pictures/arts/'.$row['image'].'" > <br>'.
                                    '<a  href=info_pantry.php?pantry_id='.$row['pantry_id'].' class="desc-title"> '.$row['pantry_name'].' </a>
                                    <p class="desc-content2">'.$row['user_fname'].' '.$row['user_lname'].'</p>
                                    </td>
                                </tr>
                </table>
            </div>';
        }
    }
?>
</div>
</body>
</html>

<?php mysqli_close($conn); ?>