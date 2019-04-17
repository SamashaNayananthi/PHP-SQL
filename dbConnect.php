<?php
if (isset($_POST['addEmp'])){
	
$id = $_POST['empId'];
$fullName = $_POST['empName'];
$position = $_POST['empPosition'];
$email = $_POST['empMail'];
$code = $_POST['compCode'];

   if (empty($id) || empty($fullName) || empty($position) || empty($email) || empty($code)){
	   header("Location:addemployee_advanced.php?signup=empty");
	   exit();
   }
   else{
	   if(!filter_var($id,FILTER_VALIDATE_INT)){
		   header("Location:addemployee_advanced.php?signup=invalidid");
		   exit();
	   }
	   elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		   header("Location:addemployee_advanced.php?signup=invalidemail");
		   exit();
	   }
	  
	   else{
		   $con = mysqli_connect("localhost","root","")
           or die ("Access Denied");
		   
           $res = mysqli_select_db($con,"w1697763");
           if(!$res)
	       echo "Connection Failur";
           else
	       $qry = "insert into w1697763_Employee(w1697763_empId,w1697763_empFullName,w1697763_empPosition,w1697763_empEmail,w1697763_compCode) 
	               values('$id','$fullName','$position','$email','$code')";
           $rslt = mysqli_query($con,$qry)
           or die(mysqli-error());
                 mysqli_close(); 
				  header("Location:getemployee.php?signup=confirm&id=$id"); 
		   exit();
	   }
   }
}
else{
	header("Location:addemployee_advanced.php?signup=error");
}
?>