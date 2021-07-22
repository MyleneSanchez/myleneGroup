<?php include("account.php"); ?>
<!DOCTYPE html>
 <html>
 <head>
 <title>Pantry Finder | Create Post</title>
</head>

<link rel="stylesheet" href="css/pantry_post.css">
<body>
         <p>
            <h1 class="headt2"> Create Community Pantry </h1> <hr class="hr">
         </p>

        <div class="body">
          <p class="fsize-title">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Community Pantry Image:<br><br>
              <?php
                if(!empty($message)) {
                echo "<p>{$message}</p>";
                }
              ?>
          </p>

          <p class="fsize-img">
              <form class="table" action="action_pantry.php" enctype="multipart/form-data" method="post" onclick="return valid();">
                    <table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
                      <tbody>
                        <tr>
                          <td>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                            <input type="file" required name="file_upload" />
                          </td>
                        </tr>
                      </tbody>
                   </table>  <br><br>
          </p>

          <p class="fsize-text">

            Pantry Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="pantry_name" required name="pantry_name"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Phone Number:&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="phone_number" required name="phone_number"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            List of Items:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="list_of_items" required name="list_of_items"> <br> <br>
            Street Address: &nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="street_address" required name="street_address"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Barangay:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox"  type="text" id="barangay" required name="barangay"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Municipality:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox"  type="text" id="municipality" required name="municipality"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> <br>
            Province: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="province" required name="province"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Region: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="dropdownbox" name="region">
                 <option value="Region I">Region I</option>
                 <option value="Region II">Region II</option>
                 <option value="Region III">Region III</option>
                 <option value="Region IV - A">Region IV - A</option>
                 <option value="Region IV - B">Region IV - B</option>
            </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox"  type="text" id="email" required name="email"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <br> <br>
            GCash Number: &nbsp;&nbsp;<input class="textbox" type="text" id="gcash_number" required name="gcash_number"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Status:  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <select class="dropdownbox" name="status">
                 <option value="Open">Open</option>
                 <option value="Closed">Closed</option>
              </select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            Category:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <select class="dropdownbox" name="category_id">
                 <option value="Foods">Foods</option>
                 <option value="Hygiene Kits">Hygiene Kits</option>
                 <option value="Clothes">Clothes</option>
              </select><br><br>
           <?php  
?>

<input class="inputbar" type="submit" name="submit" value="Post">
        </form>
</p>
</body>
</html>