<html>
<head>
<title>Pateint Detail By Doctor</title>
<style type="text/css">
*
{
  margin:0px;
  padding:0px;
}
body{
   background-image:url(image12.jpg);
   background-size:cover;
   background-attachment:fixed;
}
.menu{
  width:1470px;
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
   width:1470px;
   height:auto;
   margin-top:5px;
  
}
.header{
  width:1470px;
  height:150px;
    background-color:rgba(0,0,0,0.5);
}
.left{
    width:430px;
	height:550px;
	  background-color:rgba(0,0,0,0.5);
	  margin-top:5px;
      float:left;	
	  margin-left:5px;
}
.right{
   width:600px;
   height:550px;
     background-color:rgba(0,0,0,0.5);
	 float:right;
	 margin-top:5px;
	
	 
}
.center
{
    width:420px;
   height:550px;
     background-color:rgba(0,0,0,0.5);
	 
	 margin-top:5px;
	 margin-left:440px;
}
.center input[type="text"]
{
   width:200px;
   height:30px;
   border:0;
   border-radius:5px;
   margin-left:10px;
}
.center textarea{
    width:200px;
   height:100px;
   border:0;
   border-radius:5px;
   margin-left:10px;
   
}
.center input[type="submit"]{
    width:70px;
   height:35px;
    border:0;
   border-radius:5px;
   background-color:skyblue;
   margin-right:20px;
   
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
	     $recep=$_GET['recep'];
	   ?>
	   <li><a href="<?php echo "recepnist_page.php?id=$recep"?>">GO BACK</a></li>
   </ul>
</div>
<div class="container">
<div class="header">
     <?php
	      mysql_connect("localhost","root");
		  mysql_select_db("hospital");
		  $id=$_GET['id'];
		  
		  $sql="select * from pateint_registration where pateintid='$id'";
		  $s=mysql_query($sql);
		  $res=mysql_fetch_array($s);
		  $name=$res['name'];
		  echo "<h1 align='center'><font color='white' size='10'> $name</font></h1>.<br>";                                      
	                                     
		  echo "<h1 align='center'><font color='white' size='10'>$id</font></h1>";
		  $gen=$res['gender'];
   $age=$res['age'];
   $w=$res['weight'];
   $bg=$res['bloodgroup'];
   $dob=$res['dob'];
  
   $a=$res['address'];
   $ms=$res['marital_status'];
   $mn=$res['mobileno'];
	?>
</div>
<div class="left">
<table width="400px"  height="550px" align="center">
<?php
echo "<tr>";
   echo "<th colspan='3' align='center'><font color='white' size='7'>Patient Detail</font></th>";
echo "</tr>";
echo "<tr >";
    
    echo "<th ><font color='white' size='5'>Gender</font></th>";
	echo "<td ><font color='white' size='5'>:</font></td>";
	echo "<td ><font color='white' size='5'>$gen</font></td>";
	 
echo "</tr>";

echo "<tr>";
    echo "<th ><font color='white' size='5'>Age</font></th>";
	echo "<td ><font color='white' size='5'>:</font></td>";
	echo "<td ><font color='white' size='5'>$age</font></td>";
	
echo "</tr>";
echo "<tr>";
	echo "<th ><font color='white' size='5'>Weight</font></th>";
	echo "<td ><font color='white' size='5'>:</font></td>";
	echo "<td ><font color='white' size='5'>$w</font></td>";
	
	
echo "</tr>";
echo "<tr>";
	echo "<th ><font color='white' size='5'>Blood Group</font></th>";
	echo "<td ><font color='white' size='5'>:</font></td>";
	echo "<td ><font color='white' size='5'>$bg</font></td>";
	
echo "</tr>";

echo "<tr>";
	echo "<th ><font color='white' size='5'>Date Of Birth</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$dob</font></td>";
	
echo "</tr>";
echo "</tr>";
echo "<tr>";
	echo "<th><font color='white' size='5'>Address</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$a</font></td>";
echo "</tr>";
echo "<tr>";
	echo "<th ><font color='white' size='5'>Marital Status</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$ms</font></td>";
echo "</tr>";
echo "<tr>";
	echo "<th><font color='white' size='5'>Mobile No.</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$mn</font></td>";
echo "</tr>";
?>
</table>

</div>
<div class="right">
<?php
  $sh="select * from next_meet,pateint_consult where next_meet.pateintid=pateint_consult.pateintid and next_meet.pateintid='$id'";
  $quer=mysql_query($sh);
?>
<table border="1px"align="center"  width="600px" height="auto">
   <?php
      echo "<tr>";
	         echo "<th colspan='6'><font color='white' size='7'>Pateint Medical Detail</font></th>";
	  echo "</tr>";
	  echo "<tr>";
	         echo "<th><font color='white' size='5'>Last_Date</font></th>";
			 echo "<th><font color='white' size='5'>Dr. Name</font></th>";
			 echo "<th><font color='white' size='5'>Disease</font></th>";
			 echo "<th><font color='white' size='5'>Medicine Name</font></th>";
			 echo "<th><font color='white' size='5'>Next_Date</font></th>";
			 echo "<th><font color='white' size='5'>Gaurdian</font></th>";
	  echo "</tr>";
	  while($re=mysql_fetch_array($quer))
	  {
	  echo "<tr>";
	         echo "<th><font color='white' size='3'>$re[4]</font></th>";
			 echo "<th><font color='white' size='3'>$re[3]</font></th>";
			 echo "<th><font color='white' size='3'>$re[6]</font></th>";
			 echo "<th><font color='white' size='3'>$re[2]</font></th>";
			 echo "<th><font color='white' size='3'>$re[1]</font></th>";
			 echo "<th><font color='white' size='3'>$re[12]</font></th>";
	  echo "</tr>";
	  }
   ?>
</table>
</div>
<div class="center">
  <form  action="<?php echo "r_pateint.php?id=$id"?>" method="post" align="center">
      <h1><font color="white" size="7">New Registration</font><h1><br><br>
	  <input type="text" name=" disease" placeholder="Another disease name"required/><br><br>
	  <input type="text" name="doctor" placeholder="consult with doctor"required/><br><br>
	  <input type="text" name="date" placeholder="Date of consult"required/><br><br>
	  <input type="text" name="pateint_gaurdian" placeholder="Pateint Gaurdian"><br><br>
	  <input type="submit" name="submit" value="submit">
  </form>


</div>

</div>
</body>
</html>
<?php
    if($_POST['submit']=="submit")
	{
	    
	     $d=$_POST['disease'];
		 $do=$_POST['doctor'];
		 $da=$_POST['date'];
		 $pg=$_POST['pateint_gaurdian'];
		 
		 $con=mysql_connect("localhost","root");
		 mysql_select_db("hospital");
		 $query="insert into pateint_consult(pateintid,disease,doctor,date,pateint_gaurdian)values('".$id."','".$d."','".$do."','".$da."','".$pg."')";
		 if(mysql_query($query))
		 {
		      echo '<script>alert("record inserted")</script>';
		 }
		 else
		 echo mysql_error();
	   
	}
?>