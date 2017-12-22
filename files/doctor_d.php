<html>
<head>
<title>Doctor Detail</title>
<style type="text/css">
*
{
  margin:0px;
  padding:0px;
}
body{
   background-image:url(IMG-20170417-WA0048.jpg);
   background-size:cover;
   background-attachment:fixed;
}
.menu{
  width:1370px;
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
.upper{
    width:1370px;
	height:200px;
	margin-top:5px;
	background-color:rgba(0,0,0,0.5);
}

.middle
{
   width:250px;
   height:170px;
   margin-top:70px;
   background-color:rgba(0,0,0,0.5);
   margin-left:550px;
   margin-right:200px;
   padding-top:10px;
   padding-left:5px;
   box-shadow:-6px -6px rgba(0,0,0,0.5);
   border-radius:15px;
}
.middle input[type="text"]
{
      width:230px;
	height:30px;
   border:0;
   border-radius:5px;
}
.middle inpu[type="submit"]
{
    width:100px;
	height:30px;
	border:0;
	border-radius:5px;
	background-color:skyblue;
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
   </ul>
 </div>
<?php
   $con=mysql_connect("localhost","root");
   mysql_select_db("hospital");
   $id=$_GET['id'];
   $sql="select * from doctor_registration where doctor_id='$id'";
   $query=mysql_query($sql);
   $result=mysql_fetch_array($query);
   
   $name=$result['name'];
?>
    <div class="upper">
	     <?php
		      echo "<font color='blue'  face='verdana' size='15' style='padding-top:10px '>Welcome  $name</font>";
			  echo "<img src='IMG-20170417-WA0048.jpg' width='200px' height='150px' align='right' style='border-radius:50%'>";
		 ?>
	</div>
	<div class="middle">
	   <form align="center" method="post" action="doctor_d.php">
	    <?php
		      echo "<font color='white' align='center' size='6.5' >Patient Detail</font>.<br><br>" 	;
			  echo "<input type='text' name='pateintid' placeholder='User Id Of Pateint' required/>.<br>.<br><br>";
			 echo "<input type='submit' name='submit' value='SUBMIT' />";
        ?>
		 </form>
		 <?php
		 if(isset($_POST["submit"]))
         {		 
						 $user=$_POST['pateintid'];
			 $sq="select * from pateint_registration where pateintid='$user'";
			 $q=mysql_query($sq);
			 $res=mysql_fetch_array($q);

			 
			 if($res[1]==$user)
			 {
			      header("location: patient_d.php?id=$user");
			 }
			 else
			 {
			     echo '<script>';
				 echo 'alert("patient id is incorrect")';
				 echo '</script>';
			 }
	     }		 
		?>
	</div>
 

</body>
</html>