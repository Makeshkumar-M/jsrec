<?php
$servername = "localhost";
$username = "jsrecdb";
$password = "";
$dbname = "jsrecdb";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
  die("connection failed: " . mysql_connect_error());
}
if (isset($_POST['submit'])) 
{
  $year = $_POST['year'];
  $semester = $_POST['semester'];
  $department =$_POST['department'];
  $m1=$_POST['m1'];
  $m2=$_POST['m2'];
  $m3=$_POST['m3'];
  $m4=$_POST['m4'];
  $m5=$_POST['m5'];
  $m7=$_POST['m7'];
  $m8=$_POST['m8'];
  $t1=$_POST['t1'];
  $t2=$_POST['t2'];
  $t3=$_POST['t3'];
  $t4=$_POST['t4'];
  $t5=$_POST['t5'];
  $t6=$_POST['t6'];
  $t7=$_POST['t7'];
  $t8=$_POST['t8'];
  $w1=$_POST['w1'];
  $w2=$_POST['w2'];
  $w3=$_POST['w3'];
  $w4=$_POST['w4'];
  $w5=$_POST['w5'];
  $w6=$_POST['w6'];
  $w7=$_POST['w7'];
  $w8=$_POST['w8'];
  $tu1=$_POST['th1'];
  $tu2=$_POST['th2'];
  $tu3=$_POST['th3'];
  $tu4=$_POST['th4'];
  $tu5=$_POST['th5'];
  $tu6=$_POST['th6'];
  $tu7=$_POST['th7'];
  $tu8=$_POST['th8'];
  $f1=$_POST['f1'];
  $f2=$_POST['f2'];
  $f3=$_POST['f3'];
  $f4=$_POST['f4'];    
  $f7=$_POST['f7'];
  $f8=$_POST['f8'];
  $s1=$_POST['s1'];
  $s2=$_POST['s2'];
  $s3=$_POST['s3'];

  $sql="INSERT INTO timetables(year,semester,department,m1,m2,m3,m4,m5,m6,m7,m8,t1,t2,t3,t4,t5,t6,t7,t8,w1,w2,w3,w4,w5,w6,w7,w8,th1,th2,th3,th4,tu5,th6,th7,th8,f1,f2,f3,f4,f5,f6,f7,f8,s1,s2,s3) VALUES('$year','$semester','$department','$m1','$m2','$m3','$m4','$m5','$m6','$m7','$m8','$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$w1','$w2','$w3','$w4','$w5','$w6','$w7','$w8','$tu1','$tu2','$tu3','$tu4','$tu5','$tu6','$tu7','$tu8','$f1','$f2','$f3','$f4','$f5','$f6','$f7','$f8','$s1','$s2','$s3')";
  
if (mysqli_query($conn,$sql)){
echo "new time table uploaded successfully";
}else{
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
mysqli_close($conn);
?>