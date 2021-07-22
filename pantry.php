<?php include("includes/head.php"); ?>

<!DOCTYPE html>
 <html>
 <head>
 <title>Pantry Finder | Pantry</title>
    <link rel="stylesheet" href="css/pantry.css">
</head>
<body>

<form action="action_search.php" method="POST">
<select id='barangay' name='barangay'>
    <option>Barangay</option>
        <?php
            $sqli = "SELECT * FROM community_pantry";
            $result = mysqli_query($conn, $sqli);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<option>'.$row['barangay'].'</option>';
                }
        ?>
</select>
</div>
     <input type="submit" name="submit" value="SEARCH">
</form>

<?php

$query_category1="SELECT community_pantry.image, community_pantry.pantry_id, community_pantry.pantry_name,  user.user_fname, user.user_lname
                  FROM community_pantry,user
                  where community_pantry.user_id = user.user_id";
$result_category1 = mysqli_query($conn,$query_category1);
if(mysqli_num_rows($result_category1) <=0)
{
echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align="center">No Artworks Available </h1>';
}
else{
while($row1 = mysqli_fetch_array($result_category1))
{
      echo ' <div class="space" >
                <table  class="pic-table">
                    <tr>
                        <td>
                            <img class="photo" src="pictures/arts/'.$row1['image'].'" > <br>'.
                            '<a  href=info_pantry.php?pantry_id='.$row1['pantry_id'].' class="desc-title"> '.$row1['pantry_name'].' </a>
                             <p class="desc-content2"> '.$row1['user_fname'].' '.$row1['user_lname'].'</p>
                        </td>
                    </tr>
                </table>
            </div>';
    }
}
echo "<br><br>";

?>
</div>
</body>
</html>

<?php mysqli_close($conn); ?>