<?php
$servername = "localhost";
$username = "jsrecdb";
$password = "";
$dbname = "jsrecdb";

$conn =mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
  die("connection failed: " . mysql_connect_error());
}
if (isset($_POST['submit'])) 
{
$facultyname = $_POST['facultyname'];
$file = addslashes(file_get_contents($_FILES["profile"]["tmp_name"]));  
$facultyid = $_POST['facultyid'];
$designation = $_POST['designation'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$auid = $_POST['auid'];
$address = $_POST['address'];
$city = $_POST['city'];
$pancardno = $_POST['pancardno'];
$aadharno = $_POST['aadharno'];
$mobileno = $_POST['mobileno'];
$dateofjoining = $_POST['dateofjoining'];
$experience = $_POST['experience'];
$department = $_POST['department'];

$dateofreleving = $_POST['dateofreleving'];
$certificates = $_POST['certificates'];
$domain = $_POST['domain'];
$sql = "INSERT INTO facultyinfo(id,facultyname,profile,facultyid,designation,dob,email,auid,address,city,pancardno, aadharno,mobileno,dateofjoining,experience,department,dateofreleving,certificates,domain)VALUES(NULL,'$facultyname','$file','$facultyid','$designation','$dob','$email','$auid','$address','$city','$pancardno','$aadharno','$mobileno','$dateofjoining','$experience','$department','$dateofreleving','$certificates','$domain')";

if (mysqli_query($conn,$sql)){
	echo "<script>alert('student details uploaded successfully')</script>";
	header("Location:facultyinformation.html");
}else{
	echo "Error: " . mysqli_error($conn);
}
}
mysqli_close($conn);
?>