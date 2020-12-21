<html>
<head>
<title >Online Registration</title>

	
	<link rel="stylesheet" type="text/css" href="formstyle.css" />
	</head>
	
<body>


<div class="myDiv">
<h1>Insert</h1>
<br><br><br>
<?php
$name=$_POST['name'];
$usn=$_POST['usn'];
$bran=$_POST['branch'];
$year=$_POST['year'];
$con = new mysqli("localhost", "root", "", "Form") or die("Failed to connect to MySQL: " . mysql_error());
$s="select usn from User ";
$result=mysqli_query($con,$s);
$num=0;
while($row = mysqli_fetch_assoc($result)) {
		if ($row["usn"]==$usn)
		{
			//$s="delete from User where usn='$usn'";
//$result=mysqli_query($con,$s);
echo "<h1>Already Exit </h1>";
$num=1;
break;
		}
    //echo "Name: " . $row["Name"]. " - Usn: " . $row["usn"]. " Branch- " . $row["Branch"]. "<br>";

}
 if($num!=1)
 {
	$login="insert into user Values('$name','$usn','$bran','$year');";
$check=mysqli_query($con,$login);
echo "<h1>Inserted </h1>";
 }	
/*
if (mysqli_num_rows($result)==$usn) {
	echo "<h1>Already Done </h1>";
	while($row = mysqli_fetch_assoc($result)) {
		
    //echo "Name: " . $row["Name"]. " - Usn: " . $row["usn"]. " Branch- " . $row["Branch"]. "<br>";

}
  // output data of each row
  
  
} else {
  
$login="insert into user Values('$name','$usn','$bran','$year');";
$check=mysqli_query($con,$login);
echo "<h1>Inserted </h1>";

}*/


?>
<a href="formindex.php" >Home</a>
<a href="display.php" >Display</a>
<a href="remove.php" >Remove</a>

</div>
</body>
</html>