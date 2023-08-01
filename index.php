<!Doctype html >
<html lang="hi">
<head>
  <meta http-equiv="refresh" content="20; url=#" />
  <link rel="icon" href="imges/fav.jpg" type="logo/png">
	<meta http-equiv="content-language" content="hi">
	<meta http-equiv="content-Type" content="text/html; charset=UTF-8">
<title>GolaBerij</title>
<link rel="icon" href="images/favi.png" type="logo/png">
<link rel="stylesheet" type="text/css" href="css/getstart.css">
<meta name="viewport" content="width=device-width,intial-scale-1">
<link rel="stylesheet" href="css/bootstrap.min.css" >
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" type="text/css" href="css/logo.css">



<style type="text/css">
body
{
  background-image: url("images/back.png");
}
</style>
</head>
<body >
<div>
<div>
	<div id="first"><div id="logo" ><img src="images/banner.jpg"  style="height:7em ; width:15em"></div></div></br>
	   <div id="Second" >
        <div id="nav"><ul><li> <b class="button"><a href="index.php">Expenses</a></b></li><li ><b class="button"><a href="expenditure.php">Expenditure</a></b>
       </div>
       </div>
 </div>



	<pre style='height:410px;margin-left:160px;overflow: hidden;padding-left:100px;margin-top:20px;width:1200px;font-weight: bold;font-family:Dejavu Serif;font-size:20px;background-color: rgba(67, 182, 66, 0.2);color:white'> 

<form class="form-inline" role="form" method="post" action=""  >
    
    <div class="form-group" style="margin-top:-150px;margin-left:200px">
    Type:<select class="form-control" id="sel1" style="width:430px" name="type"    required >
  
   <option class="active">Select</option>
   <option>Food</option>
   <option>Mobile Reacharge</option>
   <option>Light Bill</option>
<option>Educational Purpose</option>
<option>Internet Bill</option>
  <option>Helth</option>
  <option>Petrol</option>
  <option>Travelling</option>
    <option>Entertainment</option>
    <option>Others</option>
  </select>
</div
    </div>
    
<div style="margin-left:250px;margin-top:-70px"> 
 Date:<input type="date" class="form-control"  size="60"  name="date"   required></div>
   <div style="margin-left:260px"> Rs:<input type="text" class="form-control"  placeholder="Enter rs here"size="60" name="rs" required>
    </div>
   
 

    <button type="submit" class="btn btn-warning"  name="submit"  style=";margin-top:-100px;margin-left:420px"><b style="color:white;font-size: 20px;font-family:Dejavu Serif">
      Save It</b></button>
  </form></center>

    </pre>




</body>
<html>

<?php 

      $type = "";
	$date = "";
      $rs = "";
  if(isset($_POST['submit']))
  {
  	$type = $_POST['type'];
	$date = $_POST['date'];
      $rs = $_POST['rs'];
      $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"golaberij");
mysqli_query($con,"INSERT INTO expensive(type,date,rs) 
VALUES ('$type','$date','$rs')");
echo "<center><pre  style='font-weight: bold;width:500px;padding:10px;font-family:Dejavu Serif;font-size:20px;background-color: rgba(255, 0, 0, 0.5);color:white'> succesfully Inserted ☻ <span><img src='images/right.gif' style='height:40px'>  </span>     </pre></center>";

}

?>


<html>
<body>
<div id="footer"><center><b>&copy;GolaBerij &trade;  Designed By Shubham Vilasrao Vyawahare With ♥ on</br>27-June-2016 #Whole Night Work</b></center>
</div>
</body>
</html>




