<!Doctype html >
<html lang="hi">
<head>
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
        <div id="nav"><ul><li> <b class="button"><a href="index.php">Expenses</a></b></li><li ><b class="button">
        	<a href="expenditure.html">Expenditure</a></b>
       </div>
       </div>
 </div>
</br></br>
<center><pre style="margin-top:30px;width:700px;font-family:Dejavu Serif;font-size:20px;background-color: rgba(67, 182, 66, 0.2);color:white" >
	<b> Calculate Expenditure with respect To Date </b>  </pre ></center>
</br ></br >






	<div  style="padding:30px;padding-left:450px" >
<div class="row">
  <div class="col-sm-8">
<form class="form-inline" role="form" method="post" action=""  >
    
    

    <div class="form-group">
      <label for="surname"><pre style="font-family:Dejavu Serif;font-size:20px;background-color: rgba(67, 182, 66, 0.2);color:white">
     From:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="date" class="form-control"  size="60"  name="from"   required></pre>
    </div>&nbsp;&nbsp;&nbsp;&nbsp; <div class="form-group">
      <label for="surname"><pre style="font-family:Dejavu Serif;font-size:20px;background-color: rgba(67, 182, 66, 0.2);color:white">
     To:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <input type="date" class="form-control"  size="60"  name="to"   required></pre>
    </div>

    </br></br>
   
 
    
</br></br>
    <button type="submit" class="btn btn-Default"  name="submit"  style="margin-left:220px;background-color: rgba(252, 130, 51, 0.5);"><b style="color:white;font-size: 20px;font-family:Dejavu Serif">
     Calculate</b></button>
  </form></center>
</div>
</div>
</div>
</div>





</body>
<html>

<?php  
$type="";
$rs="";
$from="";
$to="";
 $sum="";
if(isset($_POST['submit']))
{
	$from = $_POST['from'];
	$to = $_POST['to'];

     $con=mysqli_connect("localhost","root","");
mysqli_select_db($con,"golaberij");


$sql = "SELECT  *
FROM    expensive
WHERE   date >= '$from' AND  date <= 'to';";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	echo "<center><pre style='font-weight: bold;width:500px;padding:10px;font-family:Dejavu Serif;font-size:20px;background-color: rgba(67, 182, 66, 0.2);color:white' >";
    while($row = $result->fetch_assoc()) {
        echo   "<center> <table class='table'><thead><tr><th>" .$row["type"]."</th>:<th><center>" .$row["rs"]."</center> </th></tr></thead></table></br></center>";
    }
    echo "</pre></center>";
  }
  else {
 echo "<center><pre  style='font-weight: bold;width:500px;padding:10px;font-family:Dejavu Serif;font-size:20px;background-color: rgba(255, 0, 0, 0.5);color:white'> No records were Found ☻ </pre></center>";
}

$sql = "SELECT  rs
FROM    expensive
WHERE   date >= '$from' AND  date <= 'to';";
$result = $con->query($sql);
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {

         $sum +=$row['rs'];
       }

echo "<pre style='margin-left:300px;font-weight: bold;width:900px;padding:10px;font-family:Dejavu Serif;font-size:20px;background-color: rgba(67, 182, 66, 0.2);color:white' ><center>Your Total Expenditure  for this period Is :$sum</center></pre> ";

}

  else {
 //secho "0 results";
}






}
?>


<html>
<body>
<div id="footer"><center><b>&copy;GolaBerij &trade;  Designed By Shubham Vilasrao Vyawahare With ♥ on</br>27-June-2016  #Whole Night Work</b></center>
</div>
</body>
</html>