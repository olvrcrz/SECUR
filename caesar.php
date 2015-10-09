<?php
session_start();
if(!isset($_SESSION['username']))
header("location: index.php");
?>
<html>
<head>

<span id="error" style="color: Red; display: none"> </span>

<script>


var specialKeys = new Array();
			specialKeys.push(8); //Backspace
			specialKeys.push(9); //Tab
			specialKeys.push(46); //Delete
			specialKeys.push(36); //Home
			specialKeys.push(35); //End
			specialKeys.push(37); //Left
			specialKeys.push(39); //Right
			function IsAlphaNumeric(e) {
				var keyCode = e.keyCode == 0 ? e.charCode : e.keyCode;
				var ret = ((keyCode >= 48 && keyCode <= 57) || (specialKeys.indexOf(e.keyCode) != -1 && e.charCode != e.keyCode));
				document.getElementById("error").style.display = ret ? "none" : "inline";
				return ret;
			}
		

</script>

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
<form method = post action = "caesar.php">
<table width = 600>
<tr>
<td colspan = 3><img src = "head.png" height = 50 width = 200/><br>
<td>Welcome <?php echo $_SESSION['username']."!"; ?>
<tr>
<td colspan = 10><br>
<tr>
<td><div id = nav><a href = home.php><img src = home.png width = 100 height = 25><font face = arial size = 3></a></div>
<td><div id = nav><a href = logout.php><img src = logout.png width = 100 height = 25><font face = arial size = 3></a></div>
<tr>
<td colspan = 10><br>
<tr>
<td colspan = 3>Encryption type : Caesar Cipher
<tr>
<td colspan = 3>Plain text : <input type = "text" size = 15px name = "plain" required/>&nbsp;&nbsp;&nbsp;Key : <input size = 15px name = "key" required onkeypress="return IsAlphaNumeric(event);" />&nbsp;&nbsp;&nbsp;<input type = "submit" name ="encrypt" width = 100>
<tr>
<td colspan =3><?php
if(isset($_POST['encrypt'])){
	
$plainako = $_POST['plain'];
$plain_text=$_POST['plain'];
$key = $_POST['key'];

//letters of alphabet array
$alphabet=array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 
'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z' , 'a' , 'b' , 'c' , 'd' , 'e' , 'f' ,
 'g' , 'h' , 'i' , 'j' , 'k' , 'l' , 'm' , 'n' , 'o' , 'p' , 'q' , 'r' , 's' , 't' , 'u' , 'v' , 'w' , 'x' , 'y' , 'z');
//positions of the letters in alphabet
$flip=array_flip($alphabet);
 
//plaintext array
$plain_text=str_split($plain_text);
$n=count($plain_text);
$encrypted_text='';
for ($i=0; $i<$n; $i++)
	//encryption
	$encrypted_text.=$alphabet[($flip[$plain_text[$i]]+$key)%26];
print "<br>Your plain text is : ".$plainako;
print "<br>Your cipher text is : ".$encrypted_text;
}
?>
</table>
</div>
</body>
</html>
