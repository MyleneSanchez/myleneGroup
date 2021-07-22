<?php include("includes/connection.php");

include("functions.php");

$pantry_id = $_GET['delete'];
$pic = $_GET['pic'];
    $delete ="DELETE FROM community_pantry WHERE pantry_id = '$pantry_id' ";
if (mysqli_query($conn, $delete)) {
    echo "Record updated successfully";
    unlink('pictures/arts/'.$pic.'');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
redirect_to("mypantry.php");
?>