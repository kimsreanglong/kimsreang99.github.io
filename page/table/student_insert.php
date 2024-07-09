<?php
	include "conn/dg_configure.php";

	$stuName = $_POST['txtStudentName'];
	$stuGender = $_POST['rdoStuGender'];
	$stuPhoneNum = $_POST['txtPhoneNumber'];
	$stuDOB = $_POST['txtDOB'];
	$stuAddress = $_POST['txtAddress'];

	$sql = "INSERT INTO tblstudent (Stu_Name, Stu_Gender, Stu_Phone, Stu_DOB, Stu_Address) VALUES ('$stuName', '$stuGender', '$stuPhoneNum', '$stuDOB', '$stuAddress');";
	$result = mysqli_query($conn, $sql);
	if (!$result){
		echo "Error Inserting a new record!!";
	}else{
		$message_type = "success";

		header("location: ../../index.php?p=student-list"). urlencode($message);
	}
	mysql_close($conn);

?>
