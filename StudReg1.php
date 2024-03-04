<?php include 'connect.php'; ?>
<?php
$FirstName=$_POST['FirstName'];
$LastName=$_POST['LastName'];
$MobileNo=$_POST['MobileNo'];
$Class=$_POST['Class'];
mysqli_query($connect,"INSERT INTO StudReg(FirstName, LastName, MobileNo, Class) VALUES('$FirstName', '$LastName', '$MobileNo', '$Class')");
if(mysqli_affected_rows($connect) > 0){
	echo "<p>Student Added</p>";
	echo "<a href=studRegForm.html>Go Back</a>";
	} 
else  
{
	echo "Student NOT Added.<br/>";
	echo "mysqli_error($connect)";
}
?>