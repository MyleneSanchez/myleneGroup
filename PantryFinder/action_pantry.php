<?php session_start();
include("functions.php");

$servername = "localhost";
$uname = "root";
$password = "";
$dbname = "pantryfinder";

// Create connection
 $conn = mysqli_connect($servername, $uname, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// In an application, this could be moved to a config file
$upload_errors = array(
  UPLOAD_ERR_OK         => "No errors.",
  UPLOAD_ERR_INI_SIZE   => "Larger than upload_max_filesize.",
  UPLOAD_ERR_FORM_SIZE  => "Larger than form MAX_FILE_SIZE.",
  UPLOAD_ERR_PARTIAL    => "Partial upload.",
  UPLOAD_ERR_NO_FILE    => "No file.",
  UPLOAD_ERR_NO_TMP_DIR => "No temporary directory.",
  UPLOAD_ERR_CANT_WRITE => "Can't write to disk.",
  UPLOAD_ERR_EXTENSION  => "File upload stopped by extension."
);

if(isset($_POST['submit'])) {
    // process the form data
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $target_file = basename($_FILES['file_upload']['name']);
    $upload_dir = "pictures/arts";

    // You will probably want to first use file_exists() to make sure
    // there isn't already a file by the same name.

    // move_uploaded_file will return false if $tmp_file is not a valid upload file
    // or if it cannot be moved for any other reason
    if(move_uploaded_file($tmp_file, $upload_dir."/".$target_file)) {
        $message = "File uploaded successfully.";
    } else {
        $error = $_FILES['file_upload']['error'];
        $message = $upload_errors[$error];
    }

}

$id = $_SESSION['USER_ID'];
$pantry_name = $_POST['pantry_name'];
$phone_number = $_POST['phone_number'];
$list_of_items = $_POST['list_of_items'];
$street_adddress = $_POST['street_address'];
$barangay = $_POST['barangay'];
$municipality = $_POST['municipality'];
$province = $_POST['province'];
$region = $_POST['region'];
$email = $_POST['email'];
$gcash_number = $_POST['gcash_number'];
$category_id = $_POST['category_id'];
$status = $_POST['status'];

$sql="INSERT INTO `community_pantry` (`USER_ID`,`pantry_name`, `phone_number`, `list_of_items`, `street_address`, `barangay`, `municipality`, `province`, `region`, `email`, `gcash_number`, `category_id`, `status`,`image`) VALUES ('$id','$pantry_name', '$phone_number', '$list_of_items', '$street_adddress', '$barangay', '$municipality', '$province', '$region', '$email', '$gcash_number', '$category_id', '$status','$target_file')";

if (mysqli_query($conn, $sql)) {
    echo "<script type=\"text/javascript\">window.alert('You have successfully create a post!');window.location.href = 'mypantry.php';</script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>