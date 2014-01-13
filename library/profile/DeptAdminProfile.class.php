<?php
include('teacherProfile.php');
class deptAdminProfile extends TeacherProfile{
	
	function setdeptAdmin(){
		$username = $_POST['myusername'];
		$password = $_POST['mypassword'];
		$email = $_POST['inputEmail'];
		$name = $_POST['inputFirstName'];
		$birth= $_POST['day'];
		$mobile = "";
		$collegeId = "";
		$dept = "";
		$sql = "INSERT INTO teacher VALUES ('','$username','$password','$email','$name','$birth','$mobile','$collegeId','$dept','deptadmin')";

		$abc = new database;
		$abc->query($sql);
		}
	function editdeptAdmin(){
		$id = "";
		$username = $_POST['myusername'];
		$password = $_POST['mypassword'];
		$email = $_POST['inputEmail'];
		$name = $_POST['inputFirstName'];
		$birth= $_POST['day'];
		$mobile = "";
		$collegeId = "";
		$dept= "";
		$sql = "UPDATE user SET username = '$username' password='$password' name='$name' email='$email' birth='$birth' mobile='$mobile' collegeId='$collegeId' dept='$dept' post = 'deptadmin' WHERE id = $idweb";
		$abc = new database;
		$abc->query($sql);
	}
	 function deletedeptAdmin(){
		$id = "";
		$sql = "DELETE FROM teacher
				WHERE id = $idweb";
		$abc = new database;
		$abc->query($sql);
	 }
}

?>