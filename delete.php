<html>
<head>
<title >Online Registration</title>

	
	<link rel="stylesheet" type="text/css" href="formstyle.css" />
	</head>
	
<body>


<div class="myDiv">

<br><br><br>
<?php

$usn=$_POST['usn'];
$num=0;
$con = new mysqli("localhost", "root", "", "Form") or die("Failed to connect to MySQL: " . mysql_error());
$s="select usn from User ";
$result=mysqli_query($con,$s);

	while($row = mysqli_fetch_assoc($result)) {
		if ($row["usn"]==$usn)
		{
			$s="delete from User where usn='$usn'";
$result=mysqli_query($con,$s);
echo "<h1>Deleted </h1>";
$num=1;
break;
		}
    //echo "Name: " . $row["Name"]. " - Usn: " . $row["usn"]. " Branch- " . $row["Branch"]. "<br>";

}
 if($num!=1)
 {
	echo "<h1>USN Not Found</h1>";
 }	



?>
<a href="formindex.php" >Home</a>
<a href="display.php" >Display</a>
<a href="insert.php" >Insert</a>

</div>
</body>
</html>