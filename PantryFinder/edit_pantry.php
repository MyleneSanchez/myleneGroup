<?php include("account.php");
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<title>Pantry Finder | Pantry</title>
</head>
<body>
  <link rel="stylesheet" href="css/edit_pantry.css">
<p>

   <h1 class="headt2">Edit Pantry </h1> <hr class="hr">
</p>
   <div class="body">
<?php
$pantry_id = $_GET['pantry_id'];

$sql = "SELECT pantry_name, phone_number, list_of_items, street_address, barangay, municipality, province, region, email, gcash_number, category_id, status FROM community_pantry WHERE pantry_id = '$pantry_id'";
$result = mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($result)){
    $pantry_name = $row['pantry_name'];
    $phone_number = $row['phone_number'];
    $list_of_items = $row['list_of_items'];
    $street_address = $row['street_address'];
    $barangay = $row['barangay'];
    $municipality = $row['municipality'];
    $province = $row['province'];
    $region = $row['region'];
    $email  = $row['email'];
    $gcash_number = $row['gcash_number'];
    $category_id = $row['category_id'];
    $status = $row['status'];
}
?>

<p class="fsize-title"><br>
<?php if(!empty($message)) { echo "<p>{$message}</p>";}
echo '<form action="action_editpantry.php?pantry_id='.$pantry_id.'" enctype="multipart/form-data" method="post">'; ?>
<br><br>
<p class="fsize-text">

Pantry Name: &nbsp; <input class="textbox" type="text" id="pantry_name" required name="pantry_name" value="<?php echo $pantry_name; ?>"> <br><br>
Phone Number:<input class="textbox" type="text" id="phone_number" required name="phone_number" value="<?php echo $phone_number; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
List Of Items:<input class="textbox2" type="text" id="list_of_items" required name="list_of_items" value="<?php echo $list_of_items; ?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Street Address:<input class="textbox2" type="text" id="street_address" required name="street_address" value="<?php echo $street_address; ?>"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br><br>
Barangay:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox3" type="text" id="barangay" required name="barangay" value="<?php echo $barangay; ?>"><br><br>
Municipality:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox3" type="text" id="municipality" required name="municipality" value="<?php echo $municipality; ?>"><br><br>
Province:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox3" type="text" id="province" required name="province" value="<?php echo $province; ?>"><br><br>
Region:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select class="Category" name="category_id" value="<?php echo $category_id; ?>">
                 <option value="Region I">Region I</option>
                 <option value="Region II">Region II</option>
                 <option value="Region III">Region III</option>
              </select><br><br>
Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox3" type="text" id="email" required name="email" value="<?php echo $email; ?>"><br><br>
Gcash Number:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox3" type="text" id="gcash_number" required name="gcash_number" value="<?php echo $gcash_number; ?>"><br><br>
Category:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select class="Category" name="category_id" value="<?php echo $category_id; ?>">
                 <option value="Foods">Foods</option>
                 <option value="Hygiene Kits">Hygiene Kits</option>
                 <option value="Clothes">Clothes</option>
              </select><br><br>
Status: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="dropdownbox" name="status">
                 <option value="Open">Open</option>
                 <option value="Closed">Closed</option>
              </select><br><br>
              <input class="inputbar" type="submit" name="submit" value="&#10004; Save">
                </form>
        </form>
    </p>
</body>
</html>