<html>
<head>
<style type="text/css">
*
{
  margin:0px;
  padding:0px;
}
body{
   background-image:url(image5.jpg);
   background-size:cover;
   background-attachment:fixed;
}
.menu{
  width:1550pxpx;
  height:50px;
  background-color:rgba(0,0,0,0.5);
}
.menu ul{
    list-style:none;
}
.menu ul li{
   width:120px;
   height:20px;
  text-align:center;
   float:left;
   padding-top:20px;
   position:relative;
    
}
.menu ul li a{
    text-decoration:none;
	color:white;
	font-weight:bolder;
	display:block;
}
.menu ul li a:hover
{
   background-color:pink;
}
.menu ul ul{
   position:absolute;
   display:none;
}
.menu ul li:hover>ul{
  display:block;
  background-color:rgba(0,0,0,0.5);
}
.container
{
   width:1550pxpx;
   height:auto;
   margin-top:5px;
  
}
.header{
  width:1550pxpx;
  height:150px;
    background-color:rgba(0,0,0,0.5);
}
.middle{
   width:600px;
   height:550px;
     background-color:rgba(0,0,0,0.5);
	 border-radius:15px;
	 margin-top:5px;
	 margin-right:35px;
	 margin-left:400px;
}
</style>
</head>
<body width="100%" height="100%">
      <div class="menu">
   <ul>
       <li><a href="#">Home</a></li>
	   <li><a href="#">About us</a></li>
	   <li><a href="#">Facility</a><span><img src="down1.png"></span>
	         <ul>
			     <li><a href="#">Laboratory 1</a></li>
				 <li><a href="#">Laboratory 2</a></li>
				 <li><a href="#">Laboratory 5</a></li>
				 <li><a href="#">Laboratory 4</a></li>
			 </ul>
	   </li>
	   <li><a href="#">Team</a></li>
	   <li><a href="#">Service</a></li>
	   <li><a href="#">Contact us</a>
	         <ul>
			      <li><a href="#">Map</a></li>
				  <li><a href="#">Direction</a></li>
			 </ul>
	   </li>
	   <?php
	       $doc=$_GET['id'];
	   ?>
	   <li><a href="<?php echo "recepnist_page.php?id=$doc"?>">Go Back</a></li>
   </ul>
</div>
<div class="container">
<div class="header">
   <?php
   session_start();
       mysql_connect("localhost","root");
	   mysql_select_db("hospital");
	   $id=$_SESSION['doctor'];
	   $sql="select * from doctor_registration where doctor_id='$id' ";
	   $q=mysql_query($sql);
	   $res=mysql_fetch_array($q);
	   $name=$res['name'];
	   $s=$res['specilization'];
	   $wh=$res['working_hour'];
	   $wd=$res['working_day'];
	   $email=$res['email_id'];
	   $drn=$res['dr_room_no'];
	   $gen=$res['gender'];
	   $d=$res['degree'];
	   echo "<img src='IMG-20170417-WA0048.jpg' width='200px' height='150px' align='right' style='border-radius:50%'>";
	   echo "<font color='white' size='7'>$name</font>.<br><br>";
	   echo "<font color='white' size='7'>$id</font>";
	   
   ?>
</div>
<div class="middle">
  <table width="500px"  height="550px" align="center">
<?php
echo "<tr>";
   echo "<th colspan='3' align='center'><font color='white' size='7'>Doctor Detail</font></th>";
echo "</tr>";
echo "<tr >";
    
    echo "<th ><font color='white' size='5'>Gender</font></th>";
	echo "<td ><font color='white' size='5'>:</font></td>";
	echo "<td ><font color='white' size='5'>$gen</font></td>";
	 
echo "</tr>";

echo "<tr>";
    echo "<th ><font color='white' size='5'>Specilization</font></th>";
	echo "<td ><font color='white' size='5'>:</font></td>";
	echo "<td ><font color='white' size='5'>$s</font></td>";
	
echo "</tr>";
echo "<tr>";
	echo "<th ><font color='white' size='5'>Degree</font></th>";
	echo "<td ><font color='white' size='5'>:</font></td>";
	echo "<td ><font color='white' size='5'>$d</font></td>";
	
	
echo "</tr>";
echo "<tr>";
	echo "<th ><font color='white' size='5'>Working Day</font></th>";
	echo "<td ><font color='white' size='5'>:</font></td>";
	echo "<td ><font color='white' size='5'>$wd</font></td>";
	
echo "</tr>";

echo "<tr>";
	echo "<th ><font color='white' size='5'>Working hour</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$wh</font></td>";
	
echo "</tr>";
echo "<tr>";
	echo "<th><font color='white' size='5'>Email Id</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$email</font></td>";
echo "</tr>";
echo "<tr>";
	echo "<th><font color='white' size='5'>Doctor Room No</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$drn</font></td>";
	
?>
</table>

</div>
</div>
</body>
</html>