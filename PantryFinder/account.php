<?php
  session_start();
 include("includes/connection.php");
?>
<!DOCTYPE html>
<html>
<head>
   

    <style type="text/css">
        body {
                margin:0 auto;
                height: 100%;
                width: 100%;
                background: url(pictures/ForBackground.jpg) no-repeat fixed;
                background-size: cover;
         }

         .PANTRY {
text-indent: -99px;
margin-top: 15px;
font-size: 35px;
font-family: "Yu Gothic UI";
color: #06e387;
text-align: center;
position: absolute;
left: 20px;
top: -10px;
width: 215px;
height: 35px;
z-index: 19;
}

.FINDER {
text-indent: 120px;
margin-top: 15px;
font-size: 35px;
font-family: "Yu Gothic UI";
color: #06e390;
text-align: center;
position: absolute;
left: 25px;
top: -10px;
width: 215px;
height: 35px;
z-index: 19;

}
        .image{
            position: absolute;
            top: -1px;
            right: 5px;
            width: 80px;
            height: 80px;
        }

        .ul {

          background-color: #239f58;
          box-shadow: 1px 1.732px 2px 0px rgb( 55, 52, 52 );
          position: absolute;
          left: -45px;
          top: -15px;
          width: 1268px;
          height: 65px;
          z-index: 2;
        }

        .li {
          float: left;
          overflow: auto;
          padding: 10px ;
          
        }

        .li .a2 {
          display: block;
          color: white;
          font-size: 14px;
          font-family: "Yu Gothic UI Light";
          margin:10px 16px 10px 6px;
          text-decoration: none;
          
         }

        .li .a2:hover:not(.logo) {
          border-bottom: 1.5px solid #3bd52d;
        }

        
         /*Username Clickable Dropdown*/
        .dropbtn {
          border-radius: 10px;
          background-color: #036313;
          color: white;
          padding: 8px;
          font-size: 16px;
          border: none;
          cursor: pointer;
        }

        .dropbtn:hover, .dropbtn:focus {
          background-color:#7cfd92;;
        }
        .dropdown {
          position: absolute;
          top: 16px;
          left: 1050px;
          display: inline-block;
          z-index: 30;
        }

         .dropdown-content {
           display: none;
           position: absolute;
           background-color: #f9f9f9;
           font-size: 13px;
           min-width: 160px;
          overflow: auto;
           box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
         }
        .dropdown-content a {
           color: black;
           padding: 10px 10px;
           text-decoration: none;
           display: block;
        }
         .dropdown a:hover {
          background-color: #3bd52d;

        }
         .show {
          display:block;
        }

      /*Explore Hover Dropdown*/
        .dpbtn {
    border-radius: 10px;
    background-color: #3bd52d;
    color: white;
    padding: 8px;
    font-size: 13px;
    border: none;
    cursor: pointer;
}

.dpdown {
    position: absolute;
      top: 16px;
      left: 240px;
    display: inline-block;
    z-index: 30;
}

.dpdown-content {
    display: none;
    position: absolute;
    right: 0;
    background-color: #f9f9f9;
    font-size: 13px;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dpdown-content a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}

.dpdown-content a:hover {background-color: #f1f1f1}

.dpdown:hover .dpdown-content {
    display: block;
}

.dpdown:hover .dpbtn {
    background-color: grey;
}

/*Explore Hover Dropdown-My Artworks*/

.dpdown3 {
    position: inherit;

      left: 675px;
      font-family: "Yu Gothic UI Light";
      color: #f2f2f2;
      font-size: 14.5px;
    display: inline-block;
    z-index: 100;
}

.dpdown-content3 {
    display: none;
    position: absolute;
    right: 720px;
    background-color: #f9f9f9;
    font-size: 13px;
    min-width: 160px;
    z-index: 100;
}

.dpdown-content3 a {
    color: black;
    padding: 10px 10px;
    text-decoration: none;
    display: block;
}

.dpdown-content3 a:hover {background-color: #f1f1f1}

.dpdown3:hover .dpdown-content3 {
    display: block;
}

.dpdown3:hover{
   border-bottom: 1.5px solid #2d70d5;
}
    </style>
</head>
<body>

    <?php
$id = $_SESSION['USER_ID'];
      $query_category="SELECT user_fname,user_mname,user_lname FROM user WHERE user_id = '$id'";
        $result_category = mysqli_query($conn,$query_category);

        while($row=mysqli_fetch_array($result_category)){
//<a href= "pictures/arts/'.$row[0].'">
            echo
                 '<div class="dropdown">'.
                    '<button onclick="myFunction()" class="dropbtn">' .$row['user_fname'].' '.$row['user_lname']. ''.''. '&#9660;'. '</button>'.'
                       <div id="myDropdown" class="dropdown-content">
                       <a href="home.php">Home</a>
                       <a href="pantry.php">Commuity Pantry</a>
                         <a href="logout.php">Log Out</a>

                       </div>
                  </div>';
} ?>

      <script>
        function myFunction() {
           document.getElementById("myDropdown") .classList.toggle("show");
        }
         window.onclick = function(event) {

           if(!event.target.matches('.dropbtn')){

             var dropdowns = document .getElementsByClassName ("dropdown-content");
             var i; for(i=0; i < dropdowns.length; i++) {

               var openDropdown = dropdowns[i];
                 if (openDropdown.classList.contains ('show')) {

                  openDropdown.classList.remove('show');
                 }
             }
           }
         }

      </script>\
                  
  

  <ul class="ul" >
  
  
  <p class="li">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <li class="li"><a class="a2" href="pantry_post.php"><b>CREATE POST</b></a></li>
              <li class="li"><a class="a2" href="mypantry.php"><b>MY COMMUNITY PANTRY</b></a></li>
              <li class="li"><a class="a2" href="donation_list.php"><b>DONATION LIST</b></a></li>
             
              </p>
         </ul>

         <h1 class="PANTRY">PANTRY</h1>
  <h1 class="FINDER">FINDER</h1>
</body>
</html>