<?php session_start();
include("includes/connection.php");
include("account.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Table with database</title>
        <!-- <link rel="stylesheet" href="style.css"> -->
        <style>
            * {
    font-family: "Yu Gothic UI Light"; /* Change your font family */
  }
  
  .content-table {
    border-collapse: collapse;
    margin: 100px 50px;
    font-size: 0.9em;
    min-width: 1100px;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
  }
  
  .content-table thead tr {
    background-color: #239f58;
    color: #ffffff;
    text-align: left;
    font-weight: bold;
  }
  
  .content-table th,
  .content-table td {
    padding: 12px 15px;
  }
  
  .content-table tbody tr {
    border-bottom: 1px solid #dddddd;
  }
  
  .content-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
  }
  
  .content-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
  }
  
  .content-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
  }
  

        </style>
    </head>
    <body>
        <table class="content-table">
            <thead>
            <tr>
                <th>Pantry ID Number</th>
                <th>Name of Pantry</th>
                <th>Name of Donor</th>
                <th>Address</th>
                <th>Email of Donor</th>
                <th>Phone Number</th>
                <th>Date of Donation</th>
                <th>Transaction</th>
               
            </tr>
        </thead>
            <?php
               $id = $_SESSION['USER_ID'];
                $sql = "SELECT community_pantry.pantry_id, community_pantry.pantry_name,
                donation_information.full_name, donation_information.address,
                donation_information.email, donation_information.phone_number, 
                donation_information.date_of_donation, donation_information.transaction 
                FROM community_pantry, donation_information
                WHERE community_pantry.pantry_id = donation_information.pantry_id AND community_pantry.user_id = $id;";
                $result = $conn-> query($sql);

                if ($result -> num_rows > 0) {
                    while ($row = $result-> fetch_assoc()) {
                        echo "<tr><td>". $row["pantry_id"] . "</td><td>".
                        $row["pantry_name"] ."</td><td>".
                        $row["full_name"] . "</td><td>".
                        $row["address"] . "</td><td>".
                        $row["email"] . "</td><td>".
                        $row["phone_number"] . "</td><td>".
                        $row["date_of_donation"] . "</td><td>".
                        $row["transaction"] ."</td></tr>";
                    }
                    echo "</table>";
                }
                else {
                    echo "0 result";
                }

                $conn->close();
            ?> 
        </table>
    </body>
</html>