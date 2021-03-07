<!DOCTYPE HTML>
<html>
<head>
</head>
<form
<body>
<center>
<tr>
<th> First name: </th><td><?php echo $_POST['fname'] ?></td><br>
</tr>
<tr>
<th> Last name: </th><td><?php echo $_POST['lname'] ?></td><br>
</tr>
<tr>
<th> Email: </th><td><?php echo $_POST['email'] ?></td><br>
</tr>
<tr>
<th> Gender: </th><td><?php echo $_POST['gender'] ?></td><br>
</tr>
<tr>
<td><a href="/second.php">Back</a></td>
</tr>
<br>
<?php 
$x=10;
$y=20;
$txt ="HELLO SAMANTA ";

echo $x+$y;
echo "<br>";
echo "i love ".$txt."<br>";
$cars = array("Volvo","BMW","Toyota","Audi","Roles Royece");

foreach($cars as $value){
	echo "$value <br>";
}
?>
</center>
</body>
</html>