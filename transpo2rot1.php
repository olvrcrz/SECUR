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
<form method = post action = "transpo2rot1.php">
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
<td colspan = 10><br>
<tr>
<td colspan = 3>Encryption type : TRANPOSITION 2 + ROT 1
<tr>
<td colspan =3><input type = "text" size = 15px name = "plain" required>&nbsp;&nbsp;&nbsp;<input type = "submit" name ="encrypt" width = 100>
<tr>
<td colspan =3><?php
if(isset($_POST['encrypt'])){

$a=$_POST['plain'];
$rev = strrev($a);

function str_rot($s, $n = 1) {
    static $letters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $n = (int)$n % 26;
    if (!$n) return $s;
    if ($n == 13) return str_rot13($s);
    for ($i = 0, $l = strlen($s); $i < $l; $i++) {
        $c = $s[$i];
        if ($c >= 'a' && $c <= 'z') {
            $s[$i] = $letters[(ord($c) - 71 + $n) % 26];
        } else if ($c >= 'A' && $c <= 'Z') {
            $s[$i] = $letters[(ord($c) - 39 + $n) % 26 + 26];
        }
    }
    return $s;
}
print "Your plain text is : ".$a;
print "<br>Your cipher text is : ".str_rot($rev);

$insert = "insert into login(username,password) values('$a','$b')";
mysql_query($insert);

print"</table>";
}

?>
</div>
</body>
</html>
