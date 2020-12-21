<html>
<head>
<title >Online Registration</title>

	
	<link rel="stylesheet" type="text/css" href="formstyle.css" />
	</head>
	
<body>


<div class="myDiv">
<h1>Insert</h1>
<br><br><br>
<center>
<div  style="border-radius: 15px; width:300px;height:350px;border: 5px outset black;">
 <form action="db.php" method="post">
    <label for="fname">Name</label>
    <input type="text" id="fname" name="name"  placeholder="Your name.." required>
	<label for="fname">USN</label>
    <input type="text" id="fname" name="usn" placeholder="USN.." required>

    <label for="lname">Branch</label>
	 <select id="country" name="branch">
      <option value="CSE">CSE</option>
      <option value="ME">ME</option>
      <option value="EC">EC</option>
	  <option value="EEE">EEE</option>
	  
    </select>
    <!--input type="text" id="lname" name="lastname" placeholder="Branch.."-->

    <label for="country">Year</label>
    <select id="country" name="year">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
	  <option value="4">4</option>
	  
    </select>
  
    <input type="submit" value="Submit">
  </form>

</div>
</center>
</div>
</body>
</html>