<html>
<head>
<title>recepnist page</title>
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
.middle
{
     width:300px;
	 height:300px;
	   background-color:rgba(0,0,0,0.5);
	   margin:0 auto;
	 margin-top:120px;
	 margin-left:500px;
	 margin-right:200px;
	 padding-top:10px;
	 padding-left:5px;
	 border-radius:15px;
	 color:white;
	 font-weight:bolder;
	 box-shadow:-6px -6px rgba(0,0,0,0.5);
}
.middle input[type="text"]
{
   width:250px;
   height:30px;
   border:0;
   border-radius:5px;
   margin-left:10px;
}
.middle input[type="submit"]{
    width:70px;
   height:35px;
    border:0;
   border-radius:5px;
   background-color:skyblue;
   margin-right:20px;
   
}
</style>
</head>
<body  width="100%" height="100%">
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

<div class="middle">
   <form align="center" method="post" action="recepnist.php">
	    
		      <font color="white" align="center" size='7' >Patient ID</font><br><br><br>
			  <input type="text" name="pateintid" placeholder="User Id Of Pateint" required/><br><br><br>
			 <input type='submit' name='submit' value='SUBMIT' />
       
		 </form>
		 <?php
		 if(isset($_POST["submit"]))
         {	
             $user=$_POST['pateintid'];		 
		     mysql_connect("localhost","root");     
			 mysql_select_db("hospital");    

			 $sq="select * from pateint_registration where pateintid='$user'";
			 $q=mysql_query($sq);
			 $res=mysql_fetch_array($q);

			 
			 if($res['pateintid']==$user)
			 {
			      header("location: r_pateint.php?id=$user");
			 }
			 else
			 {
                 mysql_error();
			 }
	     }		 
		?>
</div>
</body>
</html>