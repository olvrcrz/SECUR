<html>
<head>
<style>

::-webkit-input-placeholder {
   font-style: italic;
}
:-moz-placeholder {
   font-style: italic;  
}
::-moz-placeholder {
   font-style: italic;  
}
:-ms-input-placeholder {  
   font-style: italic; 
}

#txt{
border-style:groove; 
font-size:14px; 
text-shadow:0px 0px 0px rgba(42,42,42,.75); 
font-family:sans-serif;
padding:3px; 
border-width:2px; 
border-color:#b5b5b5; 
box-shadow: 0px 0px 0px 0px rgba(15,14,15,.0); 
color:#4d4d4d; 
border-radius:4px;
}
#arial{
font-family:arial;
font-size:14px;
}
#btn {
  background: #3498db;
  background-image: -webkit-linear-gradient(top, #3498db, #145b87);
  background-image: -moz-linear-gradient(top, #3498db, #145b87);
  background-image: -ms-linear-gradient(top, #3498db, #145b87);
  background-image: -o-linear-gradient(top, #3498db, #145b87);
  background-image: linear-gradient(to bottom, #3498db, #145b87);
  -webkit-border-radius: 6;
  -moz-border-radius: 6;
  border-radius: 6px;
  font-family: Arial;
  color: #ffffff;
  font-size: 15px;
  padding: 5px 15px 5px 15px;
  text-decoration: none;
  width:100%;
}

#btn:hover {
  background: #2d89c2;
  background-image: -webkit-linear-gradient(top, #2d89c2, #4cb7ff);
  background-image: -moz-linear-gradient(top, #2d89c2, #4cb7ff);
  background-image: -ms-linear-gradient(top, #2d89c2, #4cb7ff);
  background-image: -o-linear-gradient(top, #2d89c2, #4cb7ff);
  background-image: linear-gradient(to bottom, #2d89c2, #4cb7ff);
  text-decoration: none;
}

#midcontainer{
	margin: auto;
    width:300px;
	margin-top:5%;
	padding: 10px;
	border-width:10x; 
    border-color:#b5b5b5; 
	border-style:groove; 
	border-radius:5px;
	background: #FFFFCC;
	background-image: -webkit-linear-gradient(top, #FFFFCC, #FFFFFF);
	background-image: -moz-linear-gradient(top, #FFFFCC, #FFFFFF);
	background-image: -ms-linear-gradient(top, #FFFFCC, #FFFFFF);
	background-image: -o-linear-gradient(top, #FFFFCC, #FFFFFF);
	background-image: linear-gradient(to bottom, #FFFFCC, #FFFFFF);
	text-decoration: none;
	}
#font{
font-family:'Open Sans',sans-serif;
font-size:14px;
font-weight:600;
color:#464646;
}
    
</style>
</head>
<body>
<form method = post action = register.php>


<div id = midcontainer>
<center>
<table width = 250>
<tr>
<td colspan = 2><center><img src = "reg.png" width = 100% height = 50px/><br><br>
<tr>
<td><p id = font>Username:</p>
<td><input id="txt" type="text" name = "uname" placeholder = "Enter your username" size = 20/>
<tr>
<td height = 10>
<tr>
<td><p id = font>Password:</p>
<td><input id="txt" type="password" name = "pass" placeholder = "Enter your password" size = 20/>
<tr>
<td height = 10>
<tr>
<td colspan = 2><input type = submit name = login id = btn value = "Register"/>
</table>
</div>
<?php
if(isset($_POST['login'])){

	$host="sql209.0fees.us";
	$uname="0fe_16713395";
	$pwd="09096235614";
	$db="0fe_16713395_login";

	$con = mysql_connect("$host","$uname","$pwd") or die("connection failed");
	mysql_select_db("$db") or die("db selection failed");
	
	
$a=$_POST['uname'];
$b=$_POST['pass'];

$k = "select * from login where username = '$a'";
	
	$res = mysql_query($k);
	$bilang = mysql_num_rows($res);
	

	
	if ($bilang == 0){	
	$insert = "insert into login(username,password) values('$a','$b')";
	mysql_query($insert);
	echo "<script type='text/javascript'>alert('Save successful!');</script>";
	echo "<script type='text/javascript'>window.location='index.php'</script>";
	}else{
	echo "<script type='text/javascript'>alert('Account Already Exist!');</script>";
	}
}
?>		
</center>
</body>
</html>
