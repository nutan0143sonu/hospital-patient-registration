<html>
<head>
<title>Recepnist_Page</title>
<style type="text/css">
*
{
  margin:0px;
  padding:0px;
}
body{
   background-image:url(image3.png)	;
   background-size:cover;
   background-attachment:fixed;
}
.menu{
  width:1500px;
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
.container{
    width:1500px;
	height:auto;
   margin-top:5px;
}
.right{
     width:500;
	 height:600;
	 margin:0 auto;
	 margin-top:10px;
	 margin-left:400px;
	 margin-right:200px;
	 background-color:rgba(0,0,0,0.5);
	 padding-top:10px;
	 padding-left:5px;
	 border-radius:15px;
	 color:white;
	 font-weight:bolder;
	 box-shadow:-6px -6px rgba(0,0,0,0.5);
}
	input[type="text"]{
    width:330px;
	height:30px;
   border:0;
   border-radius:5px;
   margin-left:65px;
}
  input[type="submit"]{
    width:70px;
   height:50px;
    border:0;
   border-radius:5px;
   background-color:skyblue;
   margin-left:15px;
}

.header{
    width:1500px;
  height:150px;
  background-color:rgba(0,0,0,0.5);
  margin-top:5px;
}
</style>

</head>
<body width="100%" height="100%">
<div class="menu">

   <ul>
       <li><a href="#">Home</a></li>
	   <li><a href="#">About us</a></li>
	   <li><a href="#">Facility</a>
	         <ul>
			     <li><a href="#">Laboratory 1</a></li>
				 <li><a href="#">Laboratory 2</a></li>
				 <li><a href="#">Laboratory 3</a></li>
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
          $rece=$_GET['id'];
	  ?>
	 <li><a href="<?php echo "recepnist_pateint.php?id=$rece"?>">Pateint Registration</a></li>
	   
	   <li><h4 align="right"><a href="logout.php">LOG OUT ME </a></h4><li>
   </ul>
</div>
<div class="container">
<div class="header">
  <?php
  session_start();
     $con=mysql_connect("localhost","root","");
		mysql_select_db("hospital");
	    $recep=$_SESSION['recepnist'];		
		if($_SESSION['recepnist']==true)
		{
		
		$sl="select * from reception where user_id='$recep'";
		$qu=mysql_query($sl);
		$r=mysql_fetch_array($qu);
		$fname=$r[2];
		$mname=$r[3];
		$lname=$r[4];
		$id=$r[0];
		$name=$fname;
       echo "<font color='white' size='7'>Welcome $name</font>";
	   echo "<img src='$id.jpg' width='200px' height='150px' align='right' style='border-radius:50%'>";
       }
       else
	   {
	      header("location: login.php");
	   }
  ?>
</div>

<div class="right">
<form method="post" style="padding-top:80px">
    	       <center><font size="7" align="center" color="white">Patient DETAIL'S</font></center>
			   <br><br><input type="text" name="id" placeholder="Enter the Id of Patient">
			   <br><br><br><center><input type="submit" name="go" value="GO"></center>
 </form>
<form method="post" style="padding-top:80px">
    	       <center><font size="7" align="center" color="white">Doctor DETAIL'S</font></center>
			   <br><br><input type="text" name="id1" placeholder="Enter the Id of  Doctor">
			   <br><br><br><center><input type="submit" name="go1" value="GO"></center>
 </form>
 
</div>
</div>
</body>
</html>
<?php

   if(isset($_POST['go']))
   {
             $value=$_POST['id'];
		 $sq="select* from pateint_registration where pateintid='$value'";
		 $q=mysql_query($sq);
		 $result=mysql_fetch_array($q);
		 if($result[1]==$value)
		 {
		     header("location: r_pateint.php?id=$value&recep=$recep");
		 }
		 else{
		    echo '<script>alert("id is incorrect")</script>';
		 }
   }
  
?>
<?php
    if(isset($_POST['go1']))
   {
       $val=$_POST['id1'];
      $sql="select* from doctor_registration where doctor_id='$val' ";
			$query=mysql_query($sql);
			$res=mysql_fetch_array($query);
			if($res[1]==$val)
			{ 
			   $_SESSION['doctor']=$val;
			   
			   header("location:r_doctor.php?id=$recep");
			}
			else
			{ 
			   		    echo '<script>alert("id is incorrect")</script>';
			    
			}
   }
?>