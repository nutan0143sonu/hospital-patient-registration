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
   background-image:url(image28.jpg);
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
.left{
    width:420px;
	height:550px;
	  background-color:rgba(0,0,0,0.5);
	  margin-top:5px;
      float:left;	
	  
}
.right{
   width:490px;
   height:550px;
     background-color:rgba(0,0,0,0.5);
	 float:right;	
	 margin-top:5px;	 
}
.center{
     width:420px;
	 height:550px;
	 background-color:rgba(0,0,0,0.5);
	 margin-left:430px;
	 margin-top:5px;
}
.center input[type="text"]
{
   width:250px;
   height:30px;
   border:0;
   border-radius:5px;
   margin-left:10px;
}
.center textarea{
    width:250px;
   height:70px;
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

   </ul>
</div>
<div class="container">
<div class="header">
<?php
session_start();
 $doctor_id=$_GET['doctor_id'];
?>
<h2  align="right" style="padding-right:5px"><a href="<?php echo "doctor_page.php?id=$doctor_id"?>"> BACK PAGE</a></h2>
     <?php
	  
	      mysql_connect("localhost","root");
		  mysql_select_db("hospital");
		  if($_SESSION['pateint']==true)
		  {
		  $id=$_GET['id'];
         
         	 
		 $name=$_GET['doctor_name'];
		 
		  
		  $date=$_GET['date'];
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
        $a=$res['address'];
        $ms=$res['marital_status'];
        $mn=$res['mobileno'];
        $consult="select * from pateint_consult where pateintid='$id' AND date='$date'";
        $qe=mysql_query($consult);
       $n=mysql_fetch_array($qe);
	   }
	   else{
	      header("location:doctor_page.php?id=$doctor_id");
	   }
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
	echo "<th ><font color='white' size='5'>Pateint Gaurdian</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$n[5]</font></td>";
	
echo "</tr>";
echo "<tr>";
	echo "<th><font color='white' size='5'>Disease</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$n[2]</font></td>";
echo "</tr>";
echo "<tr>";
	echo "<th><font color='white' size='5'>Doctor Consult</font></th>";
	echo "<td><font color='white' size='5'>:</font></td>";
	echo "<td><font color='white' size='5'>$n[3]</font></td>";
	
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
      $data="select * from next_meet where pateintid='$id' AND doctor_id='$doctor_id'";
	  $query1=mysql_query($data);
?>
    <table  width="480px"  height="auto" align="center"style='padding-left:7px;padding-top:5px'>
	     <?php
		 
		      echo "<tr >";
		            echo "<th colspan='4'><h1><font color='white' size='7'>Old Detail's Of Pateint</font><h1></th>";
			  echo "</tr>";
			  echo "<tr>";
			        echo "<center><th><font color='white' size='4'>Last Date</font></th>";
					echo "<th><font color='white' size='4'>Disease</font></th>";
					echo "<th><font color='white' size='4'>Medicine Nmae</font></th>";
					echo "<th><font color='white' size='4'>Dr. Name</font></th></center>";
			  echo "</tr>";
			        while($resu=mysql_fetch_array($query1))
	                 {		
					   echo "<tr>";
					          echo "<td align='center'><font color='white' size='3'>$resu[4]</font></td>";
							  echo "<td align='center'><font color='white' size='3'>$resu[6]</font></td>";
							  echo "<td align='center'><font color='white' size='3'>$resu[2]</font></td>";
							  echo "<td align='center'><font color='white' size='3'>$resu[3]</font></td>";
						echo "</tr>";
					}
			  
		 ?>
	</table>
</div>
<div class="center">
<form align="center" style="padding-top:40px" action="<?php echo "doctor_pateint.php?id=$id&doctor_name=$name&doctor_id=$doctor_id&date=$date"?>" method="post">
   
   
    <h1><font color="white" size="7" >Doctor's View</font></h1><br><br><br>
	 <font color="white" size="5" align="left">Next Date</font><br>
	 
	 <input type="text" name="next_meet_date" placeholder="Enter The Date Of Meeting"  required/><br><br><br><br>
	 
	 <font color="white" size="5" >Madicine Name</font><br>
     <textarea type="textarea" name="medicine" placeholder="Enter The Medicine Name Of Disease" required></textarea><br><br><br><br>
     	 
     <input type="submit" name="submit" value="submit">
</form>
<?php
    if($_POST["submit"]=="submit")
	{
	      $nd=$_POST['next_meet_date'];
		  $m=$_POST['medicine'];
		  $d=$resu[6];
		  $sq="insert into next_meet(pateintid,next_meet_date,medicine,doctor,date,doctor_id,disease)values('".$id."','".$nd."','".$m."','".$name."','".$date."','".$doctor_id."','".$d."')";
	      if(mysql_query($sq))
		  {
		      echo '<script>alert("record inserted")</script>';
		  }
		  else
		  echo mysql_error();
	}
?> 
</div>
</div>
</body>
</html>
