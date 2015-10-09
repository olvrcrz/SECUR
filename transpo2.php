<html>
<head>
<style>
#nav img:hover { 
-webkit-transform: rotate(-7deg); -moz-transform: rotate(-7deg); -o-transform: rotate(-7deg);
 }

#midcontainer{
	margin: auto;
    width:700px;
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
#logout {
	position:absolute;
	left:97%;
	top: 19%;
	padding: 0px;	
	}


</style>
</head>




<body>
<div id = midcontainer>
<center>
<form method = post action = "transpo2.php">
<table width = 600>
<tr>
<td colspan = 3><img src = "head.png" height = 50 width = 200/><br>
<td>Welcome <username>
<tr>
<td colspan = 10><br>
<tr>
<td><div id = nav><a href = home.php><img src = home.png width = 100 height = 25><font face = arial size = 3></a></div>
<td><div id = nav><a href = records.php><img src = records.png width = 100 height = 25><font face = arial size = 3></a></div>
<td><div id = nav><a href = logout.php><img src = logout.png width = 100 height = 25><font face = arial size = 3></a></div>
<tr>
<td colspan = 10><br>
<tr>
<td colspan = 3>Encryption type : TRANPOSITION 2
<tr>
<td colspan =3><input type = "text" size = 15px name = "plain" required>&nbsp;&nbsp;&nbsp;<input type = "submit" name ="encrypt" width = 100>
<tr>
<td colspan =3><?php
if(isset($_POST['encrypt'])){

$a=$_POST['plain'];
print "Your plain text is : ".$a;
print "<br>Your cipher text is : ".strrev($a);
}

?>
</table>
</div>
</body>
</html>
