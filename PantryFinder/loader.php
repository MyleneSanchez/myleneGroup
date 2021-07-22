<!DOCTYPE html>
<html>
<title>Pantry Finder | Home</title>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="includes/loader.css">    

</head>
<body onload="myFunction()" style="margin:0;">

<div id="loader">  </div>

<div style="display:none;" id="myDiv" class="animate-bottom">
  <?php include('home.php');?>
</div>

<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 3000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}
</script>
</body>
</html>