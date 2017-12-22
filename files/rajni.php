<html>
<head>
<title>database connectvity by php</title>
</head>
<body>
<form method="post">
    <input type="text" name="name"  placeholder="user name"><br><br>
	<input type="password" name="password"  placeholder="password"><br><br>
	<input type="radio" name="gender" value="male">male
	<input type="radio" name="gender"  value="female">female<br><br>
	<select name="opp">
	   <option value="insert">insert</option>
	   <option value="del">del</option>
	   <option value="reset">reset</option>
	</select><br><br>
	
	<input type="submit" name="submit" value="save">
</form>
</body>
</html>
<?php
    if($_POST["submit"]=="save")
	{
	    $name=$_POST["name"];
		$password=$_POST["password"];
		$gender=$_POST["gender"];
		$opp=$_POST["opp"];
		
		mysql_connect("localhost","root");
		mysql_select_db("test");
		
		$s="insert into demo(name,password,gender,opp) values('".$name."','".$password."','".$gender."','".$opp."')";
		 
		 if(mysql_query($s))
		 echo"record inserted";
		 else
		 echo mysql_error();
	}
    
?>