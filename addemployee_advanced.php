<html>
<head>
<title>Add a New Employee</title>
</head>
<body>
<form method="POST" action="dbConnect.php">
<h1>Add a New Employee</h1>
<hr>

<table cellpadding="10" cellspacing="5">
<tr>
<th colspan = 2><h3>Fill the form below to add a new employee</h3></th>
</tr>
<tr>
<th align="left">*Employee Id</th>
<td><input type = "text" name = "empId"></td>
</tr>
<tr>
<th align="left">*Full Name</th>
<td><input type = "text" name = "empName"></td>
</tr>
<tr>
<th align="left">*Position</th>
<td><input type = "text" name = "empPosition"></td>
</tr>
<tr>
<th align="left">*Email</th>
<td><input type = "text" name = "empMail"></td>
</tr>
<tr>
<tr>
<th>*Company Code </th>
				<td>
					<select name="compCode">
					<option>10</option>
					<option>20</option>
					<option>30</option>
					<option>40</option>
					</select>
				</td>
</tr>
<tr>
<td><input type = "submit" value="Add Employee" name="addEmp"></td>
<td><input type = "submit" value = "Clear Form"></td>
</tr>
</table>
</form>
<?php
if(!isset($_GET['signup'])){
	exit();
}
else{
	$check = $_GET['signup'];
	
	if($check == "empty"){
		echo"<h2>You did not fill all the fields !<h2>";
		exit();
	}
	elseif($check == "invalidemail"){
	    echo"<h2>Email address is invalid !<h2>";
		exit();
	}
	elseif($check == "invalidid"){
		echo"<h2>Employee Id should be int !<h2>";
		exit();
	}

}
?>
</body>
</html>