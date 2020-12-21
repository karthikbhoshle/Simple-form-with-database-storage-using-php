<html>
<head>
<title >Online Registration</title>
<style>
body {
  background-color: white;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}</style>
	
	<link rel="stylesheet" type="text/css" href="formstyle.css" />
	</head>
	
<body>


<div class="myDiv">
<h1>Display</h1>


 <a href="insert.php" >Insert</a>
<a href="formindex.php" >Home</a>
<a href="remove.php" >Remove</a> 
<br>

<?php
$con = new mysqli("localhost", "root", "", "Form") or die("Failed to connect to MySQL: " . mysql_error());
$s="select Name,usn,Branch,year from User ";
$result=mysqli_query($con,$s);
echo "<br>";
echo "<table>
  <tr style='color:red;'>
    <th>NAME</th>
    <th>USN</th>
    <th>BRANCH</th>
	<th>YEAR</th>
  </tr>";
 while($row = mysqli_fetch_assoc($result)) {
	  echo " <tr>
    <td>" .  $row['Name'] . " </td>
    <td>" . $row['usn'] . "</td>
    <td>" . $row['Branch'] . "</td>
	<td>" . $row['year'] . "</td>
  </tr>";
   //echo "Name: " . $row["Name"]. " - Usn: " . $row["usn"]. " Branch- " . $row["Branch"]. "<br>";
	
 }
// echo "Name: " . $row["Name"]. " - Usn: " . $row["usn"]. " Branch- " . $row["Branch"]. "<br>";}
?>


</div>
</body>
</html>