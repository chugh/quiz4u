<?php
//hgfgfh
include('database.php');
class studentProfile{
	private $database = new Database();
	
	function setStudent(){
		$username = "";
		$password = "";
		$email = "";
		$name = "";
		$birth= "";
		$sem = "";
		$mobile = "5455";
		$rollNo = "";
		$branch = "";
		$emailid = "";
		$rollno="";
		$sql = "INSERT INTO user VALUES ('','$username','$password','$emailid','$name','$birth','$sem','$mobile','$rollno','$branch')";
		
		$this->databse->query($sql);
		}
	function editStudent(){
		$id = "";
		$username = $_POST['myusername'];
		$password = $_POST['mypassword'];
		$email = $_POST['inputEmail'];
		$name = $_POST['inputFirstName'];
		$birth= $_POST['day'];
		$sem = "";
		$mobile = "";
		$rollNo = "";
		$branch = "";
			$sql = "UPDATE user SET username = '$username' password='$password' name='$name' email='$emailid' birth='$birth' sem='$sem' mobile='$mobile' rollno='$rollno' branch='$branch' 
			WHERE id = $idweb";
		$this->database->query($sql);
	}
	 function deleteStudent(){
		$id = "";
		$sql = "DELETE FROM user
						WHERE id = $idweb";
		$abc = new database;
		$abc->query($sql);
	 }
	
	
	
		  
		
		
		
	
	
	
	

}


?>