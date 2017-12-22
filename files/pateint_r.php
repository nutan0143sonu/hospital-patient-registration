<html>
<head>
<title>Patient registeration</title>
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
  width:1350px;
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
.P_page
{
     width:360px;
	 height:940px;
	 margin:0 auto;
	 margin-top:70px;
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
.P_page  input[type="text"]{
    width:330px;
	height:30px;
   border:0;
   border-radius:5px;
   margin-left:10px;
}
.P_page  input[type="submit"]{
    width:70px;
   height:40px;
    border:0;
   border-radius:5px;
   background-color:skyblue;
   margin-left:15px;
}
.P_page textarea{
    width:330px;
   height:70px;
   border:0;
   border-radius:5px;
   margin-left:10px;
   
}
.P_page input[type="radio"]
{
   width:30px;
   height:15px;
   
}
.P_page input[type="password"]
{
    width:330px;
	height:30px;
	border:0;
	border-radius:5px;
	margin-left:10px;
}

select{
width:100px;
height:30px;
border-radius:5px;
margin-left:10px;
}

.middle{
    width:1350px;
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
	   <li><a href="#">Dr. Detail</a></li>
	   <li><a href="C:\xampp\htdocs\project\recepnist.php">Patient Detail</a></li>
	   <li><a href="#">Wordboy Detail</a></li>
	   <li><a href="#">Nurse Detail</a><li>
	   
   </ul>
</div>

<div class="middle">
  <?php
     $con=mysql_connect("localhost","root","");
		mysql_select_db("hospital");
		$id=$_GET['id'];
		$sl="select * from reception where user_id='$id'";
		$qu=mysql_query($sl);
		$r=mysql_fetch_array($qu);
		$fname=$r[2];
		$mname=$r[3];
		$lname=$r[4];
		$name=$fname.$mname.$lname;
       echo "<font color='white' size='7'>Welcome $name</font>";
	   echo "<img src='IMG-20170417-WA0048.jpg' width='200px' height='150px' align='right' style='border-radius:50%'>";
  ?>
</div>
<div class="P_page"> 	
            <form action="pateint_r.php" align="left" method="post">
	 
	       <center><font size="7" align="center" color="white">Patient Register </font></center>
		   
		      
		  <br><br><br> <input type="text" name=" name" placeholder="Enter Full Name" size="20px"  required />

		   <br><br><input type="text" name="mobileno" placeholder="Mobile No."  required/>
		   <br><br><input type="text" name="age" placeholder="Enter The Age" size="20px" required/>
		   <br><br><input type="text" name="pateint_gaurdian" placeholder="Pateint Gaurdian" size="20px" />
		   <br><br><input type="text" name="bloodgroup" placeholder="Enter The Blood Group " size="20px" />
		   <br><br><input type="text" name="weight" placeholder="Enter The Weight " size="20px" />
		   <br><br><input type="text" name="disease" placeholder="To Consult For" size="20px" />
		   <br><br><input type="text" name="consult_with_doctor" placeholder="To Consult with Dr.For" size="20px" required/>
		   <br><br><input type="text" name="consult_date" placeholder="date OF consult" size="20px" required/>

					<br><br><textarea  type="textarea" name="address" placeholder="Full Address"rows="5" cols="25" required></textarea>	
		  <br><br><font color="white" size="5"><input type="radio" name="gender" value="Male"  required/>Male                         
			  <input type="radio" name="gender" value="Female"  />Female</font>
			  <br><br><font color="white" size="5"><input type="radio" name="marital_status" value="Married" size="100px" required />Married                        
			  <input type="radio" name="marital_status" value="Unmarried"  />Unmarried</font>
			   
			  <br><br>
			  
			  <select name="date">
								      <option>Date</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option>
									  <option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option>
									  <option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option>
									  <option value="31">31</option>
								</select>
			  <select name="month">
			  
			  
				                      <option>Month</option>
						              <option value="Jan">Jan</option>
									  <option value="Feb">Feb</option>
									  <option value="March">March</option>
									  <option value="April">April</option>
									  <option value="May">May</option>
									  <option value="June">June</option>
									  <option value="July">July</option>
									  <option value="Aug">Aug</option>
									  <option value="Sep">Sep</option>
									  <option value="Oct">Oct</option>
									  <option value="Nov">Nov</option>
									  <option value="Dec">Dec</option>
								</select>
                 
				 <select name="year">
								       <option>Year</option><option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option>
									   <option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option>
									   <option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option>
								</select>
								
			     
			  
			  
			 
					    
			
				 <br><br><input type="text" name="pateintid" placeholder="Enter Pateint Id" " required/>
				 <br><br><input type="password" name="password" placeholder="Enter the password" " required/>
				 
		<center><br><br><input type="submit" name="submit" value="Submit" size="300px" />
	
	 </form>
<?php
   
   if($_POST["submit"]=="Submit")
   {
        $name=$_POST["name"];
		$mobileno=$_POST["mobileno"];
		$age=$_POST["age"];
		$pg=$_POST["pateint_gaurdian"];
		$bloodgroup=$_POST["bloodgroup"];
		$weight=$_POST["weight"];
		$disease=$_POST["disease"];
		$doctor=$_POST["consult_with_doctor"];
		$address=$_POST["address"];
		$gender=$_POST["gender"];
		$ms=$_POST["marital_status"];
	    $date=$_POST["date"];
	    $month=$_POST["month"];
        $year=$_POST["year"];
	    $dob=$date.$month.$year;
		$pid=$_POST["pateintid"];
		$pass=$_POST["password"];
		$cs=$_POST["consult_date"];
		
		
		
		
		$p="insert into pateint_registration(name,pateintid,password,mobileno,age,pateint_gaurdian,bloodgroup,weight,disease,consult_with_doctor,consult_date,address,gender,marital_status,dob)values
		('".$name."','".$pid."','".$pass."','".$mobileno."','".$age."','".$pg."','".$bloodgroup."','".$weight."','".$disease."','".$doctor."','".$cs."','".$address."','".$gender."','".$ms."','".$dob."')";
		
          if(mysql_query($p))
		  {
		  echo'<script type="text/javascript">'; 
           echo 'alert("The Record Of Patient Is Inserted")'; 
           echo '</script>';
          }		   
		  else
		  echo mysql_error(); 
   }
?>			  

</div>

</body>
</html>