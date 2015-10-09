<?php
session_start();
if(!isset($_SESSION['username']))
header("location: index.php");
?>
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
<table width = 600>
<tr>
<td colspan = 3><img src = "head.png" height = 50 width = 200/><br>
<td>Welcome <?php echo $_SESSION['username']."!"; ?>
<tr>
<td colspan = 10><br>
<tr>
<td><div id = nav><a href = home.php><img src = home.png width = 100 height = 25><font face = arial size = 3></a></div>
<td><div id = nav><a href = records.php><img src = records.png width = 100 height = 25><font face = arial size = 3></a></div>
<td><div id = nav><a href = logout.php><img src = logout.png width = 100 height = 25><font face = arial size = 3></a></div>
<tr>
<td colspan = 4><br>
<tr>
<td colspan = 3><br><br><font face = arial size = 3><b><img src = select.png>
<tr>
<td colspan =3>&nbsp;&nbsp;-<a href = "rot1.php"><font face = arial size = 3>Rot 1</a>
<tr>
<td colspan =3>&nbsp;&nbsp;-<a href = "caesar.php"><font face = arial size = 3>Caesar Cipher</a>
<tr>
<td colspan = 3>&nbsp;&nbsp;-<a href = "transpo2.php"><font face = arial size = 3>Transposition v2</a>
<tr>
<td colspan = 3>&nbsp;&nbsp;-<a href = "transpo2rot1.php"><font face = arial size = 3>Transposition v2 + Rot 1</a>
<tr>
<td>

</table>
</div>
</body>
</html>
