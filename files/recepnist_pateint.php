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
.middle
{
     width:600px;
	 height:700px;
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
   width:330px;
   height:30px;
   border:0;
   border-radius:5px;
   margin-left:105px;
}
.middle input[type="submit"]{
    width:70px;
   height:35px;
    border:0;
   border-radius:5px;
   background-color:skyblue;
   margin-right:20px;
   
}
.middle textarea{
    width:330px;
   height:70px;
   border:0;
   border-radius:5px;
   margin-left:105px;
   
}
.middle input[type="radio"]
{
   width:30px;
   height:15px;
   margin-left:105px;
   
}
.middle input[type="password"]
{
    width:330px;
	height:30px;
	border:0;
	border-radius:5px;
	margin-left:105px;
}

select{
width:80px;
height:30px;
border-radius:5px;
margin-left:70px;
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
	   <?php
	       session_start();
     $con=mysql_connect("localhost","root","");
		mysql_select_db("hospital"); 
	   ?>
	   <?php
	     $recep=$_GET['id'];
	   ?>
	   <li><a href="<?php echo "recepnist_page.php?id=$recep"?>">Go Back</a></li>
   </ul>
</div>

<div class="middle">
   <form action="<? echo "recepnist_pateint.php?id=$recep"?>" align="left" method="post">
	 
	       <center><font size="7" align="center" color="white">Patient Register </font></center>
		   
		      
		  <br><br> Full_Name:<input type="text" name=" name" placeholder="Enter Full Name" size="20px"  style="margin-left:85px;"required />

		   <br><br>Mobile NO.:<input type="text" name="mobileno" placeholder="Mobile No." style="margin-left:82px;" required/>
		   <br><br> patient Age:         <input type="text" name="age" placeholder="Enter The Age" size="20px"style="margin-left:80px;" required/>
		   
		   <br><br>Blood Group:<input type="text" name="bloodgroup" placeholder="Enter The Blood Group " size="20px" style="margin-left:73px;"/>
		   <br><br>Pateint Weight:<input type="text" name="weight" placeholder="Enter The Weight " size="20px" style="margin-left:60px;" />
		  
			 <br><br>Full address:<textarea  type="textarea" name="address" placeholder="Full Address"rows="5" cols="25" style="margin-left:75px;" required></textarea>	
		      <br><br>Gender:<font color="white" size="5"><input type="radio" name="gender" value="Male"  required/>Male                         
			  <input type="radio" name="gender" value="Female"  />Female</font>
			  <br><br>Marital_status:<font color="white" size="5"><input type="radio" name="marital_status" value="Married" size="100px" style="margin-left:55px;"required />Married                        
			  <input type="radio" name="marital_status" value="Unmarried"  />Unmarried</font>
			   
			  <br><br>Date_of_birth
			  
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
								       <option>Year</option>
									   <option value="1970">1970</option><option value="1971">1971</option><option value="1972">1972</option>
									   <option value="1973">1973</option><option value="1974">1974</option><option value="1975">1975</option><option value="1976">1976</option><option value="1977">1977</option><option value="1978">1978</option><option value="1979">1979</option>
									   <option value="1981">1981</option><option value="1982">1982</option><option value="1983">1983</option><option value="1984">1984</option><option value="1985">1985</option><option value="1986">1986</option><option value="1987">1987</option><option value="1988">1988</option><option value="1989">1989</option>
									   <option value="1990">1990</option><option value="1991">1991</option><option value="1992">1992</option><option value="1993">1993</option><option value="1994">1994</option><option value="1995">1995</option><option value="1996">1996</option><option value="1997">1997</option><option value="1998">1998</option><option value="1999">1999</option><option value="2000">2000</option>
									   <option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option><option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option><option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option>
									   <option value="2013">2013</option><option value="2014">2014</option><option value="2015">2015</option><option value="2016">2016</option><option value="2017">2017</option>
								</select>
								
			     
			  
			  
			 
					    
			
				 <br><br>Patient_id<input type="text" name="pateintid" placeholder="Enter Pateint Id" style="margin-left:90px;"  required/>
				 <br><br>password:<input type="password" name="password" placeholder="Enter the password" style="margin-left:90px;" required/>
				 
		<center><br><input type="submit" name="submit" value="Submit" size="300px" />
	
	 </form>
<?php
   
   if($_POST["submit"]=="Submit")
   {
        
        $name=$_POST["name"];
		$mobileno=$_POST["mobileno"];
		$age=$_POST["age"];
		$bloodgroup=$_POST["bloodgroup"];
		$weight=$_POST["weight"];
		$address=$_POST["address"];
		$gender=$_POST["gender"];
		$ms=$_POST["marital_status"];
	    $date=$_POST["date"];
	    $month=$_POST["month"];
        $year=$_POST["year"];
	    $dob=$date.$month.$year;
		$pid=$_POST["pateintid"];
		$pass=$_POST["password"];
		
		/*function test_input($data)
		{
		   $data=trim($data);
		   $data=stripcslashes($data);
		   $data=htmlspecialchars($data);
		   return $data;
		}*/
		
		
		
		$p="insert into pateint_registration(name,pateintid,password,mobileno,age,bloodgroup,weight,address,gender,marital_status,dob)values
		('".$name."','".$pid."','".$pass."','".$mobileno."','".$age."','".$bloodgroup."','".$weight."','".$address."','".$gender."','".$ms."','".$dob."')";
		
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