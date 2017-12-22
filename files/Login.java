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
   background-image:url(IMG-20170417-WA0048.jpg);
   background-size:cover;
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

<form align="center">
         <h1>LOGIN HERE</h1>
	  <input type="text" name="User Id" placeholder="User Id" /><br/><br/>      
     <input type="password" name="password" placeholder="Password"/>
     <br><br><br><input type="submit" value="LOGIN" >
	 
</form>
</div>
</body>
</html>