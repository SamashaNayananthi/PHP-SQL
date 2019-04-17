<?php
if(!isset($_GET['id']){
	exit();
}
else{
	$id = $_GET['id'];
	
	 $con = mysqli_connect("localhost","root","")
           or die ("Access Denied");
		   
           $res = mysqli_select_db($con,"w1697763");
           if(!$res)
	       echo "Connection Failur";
           else
	       $qry = "SELECT * FROM w1697763_Employee
                   WHERE w1697763_empId=$id";
           $rslt = mysqli_query($con,$qry)
           or die(mysqli_error());
		   
		   $emp=mysqli_fetch_assoc($rslt));
                
				echo"<h1>New Employee Confirmation</h1><br>
		        <h2>Your new employee has been added successfully</h2><br>
				<h3>Added employee id : ".$emp[w1697763_empId]."</h3>
				<h3>Added full name   : ".$emp[w1697763_empFullName]."</h3>
				<h3>Added position    : ".$emp[w1697763_empPosition]."</h3>
				<h3>Added email       : ".$emp[w1697763_empEmail]."</h3>
				<h3>Added company code: ".$emp[w1697763_compCode]."</h3>";
                
				
                 mysqli_close(); 
		         exit();
}
?>

