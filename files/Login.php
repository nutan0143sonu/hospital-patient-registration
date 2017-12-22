<!document html>
<html>
<head>
<title>reception management</title>
<style type="text/css">
*
{
  margin:0px;
  padding:0px;
}
body{
   background-image:url(image32.jpg);
   background-size:cover;
}
.menu{
  width:1517px;
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
.login{
   width:300px;
   height:300px;
   background-color:rgba(0,0,0,0.5);
   margin:0 auto;
   margin-top:150px;
   padding-top:10px;
   padding-left:10px;
   border-radius:15px;
   color:white;
   font-weight:bolder;
   box-shadow:-6px -6px rgba(0,0,0,0.5);
   
}
.login input[type="text"]
{
   width:200px;
   height:35px;
   border:0;
   border-radius:5px;
}
.login input[type="password"]
{
   width:200px;
   height:35px;
   border:0;
   border-radius:5px;
}
.login input[type="submit"]
{
   width:100px;
   height:35px;
   border:0;
   border-radius:5px;
   background-color:skyblue;
}

</style>
</head>
<body >
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
   </ul>
</div>
<div class="login">

<form align="center" method="post" action="login.php">
         <h1>LOGIN HERE</h1>
	  <br><br><input type="text" name="user_id" placeholder="User Id" required /><br/><br/>      
     <input type="password" name="password" placeholder="Password" required />
     <br><br><br><input type="submit" name="login" value="login" >
	 
</form>
</div>
</body>
</html>
<?php
    session_start();
    $con=mysql_connect("localhost","root","") or die(mysql_error());
			  mysql_select_db('hospital') or die(mysql_error());
   if(isset($_POST["login"]))
   {
      
		      $user=$_POST['user_id'];
			  $pass=$_POST['password'];
			  $doctorname=$_GET['doctor_name'];
			  
			  
			  $sql=("select * from doctor_registration where doctor_id='$user' ");
			 
			  $query=mysql_query($sql);
			  $result=mysql_fetch_array($query);
			  
               
			   if($result[1]==$user && $result[2]==$pass)
			   {
			       $_SESSION["doctor"]=$user;
			      header("location: doctor_page.php?id='$user'");
			   }
			   else
			   {
                   $sp="select * from reception where user_id='$user'";
				   $q=mysql_query($sp);
				   $res=mysql_fetch_array($q);
				   $user=$res[0];
				   if($res[0]==$user && $res[1]==$pass)
				   { 
				      $_SESSION["recepnist"]=$user;
				       header("location: recepnist_page.php?id=$user");
				   }
				   else
				   {
				        echo '<script>';
				   echo 'alert("the user id and password is incorrect")';
				   echo '</script>';
	
				   }
            	 }
			 
			  
	
   }

?>