
<?php include("includes/connection.php");
include("includes/head.php");
include("functions.php");
if(isset($_POST['submit'])){
$upload_errors = array(

  UPLOAD_ERR_OK           => "No errors.",
  UPLOAD_ERR_INI_SIZE     => "Larger than upload_max_filesize.",
  UPLOAD_ERR_FORM_SIZE    => "Larger than form MAX_FILE_SIZE.",
  UPLOAD_ERR_PARTIAL      => "Partial upload.",
  UPLOAD_ERR_NO_FILE      => "No file.",
  UPLOAD_ERR_NO_TMP_DIR   => "No temporary directory.",
  UPLOAD_ERR_CANT_WRITE   => "Can't write to disk.",
  UPLOAD_ERR_EXTENSION    => "File upload stopped by extension."
);

if(isset($_POST['submit'])) {
    // process the form data
    $tmp_file = $_FILES['file_upload']['tmp_name'];
    $target_file = basename($_FILES['file_upload']['name']);
    $upload_dir = "pictures/profile";

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

$username = $_POST['username'];
$password = $_POST['password'];
$USER_FNAME= $_POST['Fname'];
$USER_MNAME= $_POST['Mname'];
$USER_LNAME= $_POST['Lname'];
$USER_CONTACT= $_POST['contact'];
$USER_EMAIL= $_POST['email'];
$user_type = $_POST['type'];

$query = mysqli_query($conn, "SELECT * FROM user WHERE username= '" . $username . "' ") or die("Failed to query database ".mysqli_error($conn));
$count = mysqli_fetch_row($query);

if ($count>0) {
  echo "<script type=\"text/javascript\">window.alert('Username Already Exists!');window.location.href = 'create_account.php';</script>";
}
else{
$sql="INSERT INTO user (username,password,USER_FNAME,USER_MNAME,USER_LNAME,USER_CONTACT,USER_IMAGEPATH,USER_TYPE,USER_EMAIL) VALUES ('$username','$password','$USER_FNAME', '$USER_MNAME','$USER_LNAME',
'$USER_CONTACT','$target_file','$user_type','$USER_EMAIL')" ;

if (mysqli_query($conn, $sql)) {
    echo "<script type=\"text/javascript\">window.alert('You have successfully created an account! Click OK to Login now!');window.location.href = 'login_form.php';</script>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
mysqli_close($conn);
}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Pantry Finder | Sign Up</title>
</head>
<link rel="stylesheet" href="css/create_account.css">
<body>

    <form action = "create_account.php"enctype="multipart/form-data" method="POST">
            <h2 class="headspace font infospace"> Account Information <hr class="hr" style="border-bottom: 2px solid #2d70d5;"></h2>
            
            <p class="fsize-title">I'm a/an &nbsp;&nbsp;&nbsp;</p>
            <select class="select" name="type">
                          <option value="Owner" selected>Owner</option>
                          <option value="Donor">Donor</option>
            </select></br></br>
           <p class="fsize-text"> Profile picture:</p>
            <table class="table" style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
              <tbody>
                <tr>
                  <td>
                    <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                    <input type="file" name="file_upload" />
                  </td>
                </tr>
              </tbody>
            </table><br>

           <p class="fsize-text"> 
            Username: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" required name="username" ><br><br>
            Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="password" required name="password" ></p>
            <h2 class="font infospace">Personal Information <hr class="hr" style="border-bottom: 2px solid #2d70d5;"></h2>
            <p class="fsize-text">
            First name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Fname" required name="Fname"><br><br>
            Middle name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Mname" name="Mname" ><br><br>
            Last name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Lname" required name="Lname" ><br><br>
            Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="email" name="email"><br><br>
            Phone Number:&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="contact" required name="contact"><br><br>
            
            <input class="inputbar" type="submit" name="submit" value="Create"><br><br><br><br>
          </p>
          </div>
      </form>
</body>
</html>