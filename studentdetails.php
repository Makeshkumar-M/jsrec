<!DOCTYPE html>
<html>
<head>
	<title>Students Details</title>
	 <link rel="stylesheet" href="shared/style.css">
    <link rel="stylesheet" href="demo_1/style.css">
	<style type="text/css">
	.details{
		position: relative;right: 500px;
		font-size: 20px;



	} 
	.a{
		position: relative;
    
    left: 9%;
    bottom: 214%;
    font-size: 20;
    text-align: left;
    width: 50%;
	}
	.b{
		    position: relative;
    left: 56%;
    bottom: 305%;
    font-size: 20;
    text-align: left;
    width: 40%;


	}
	.c{
		height: 400px;
	}
	.d{
    height: 265px;
    width: 200px;
    border: 2px solid black;
    position: relative;
    left: 72%;
    bottom: 56%;
    text-align: left;
	}
	.sd{
		position: relative;
	    text-align: left; 
	    font-size: 18px;
	}
	label{
		font-size: 16px;
		text-align: left;
	}
	</style>
</head>
<body style=" height:2787px;width: 100%;">
	<h1><!---<img src="assets/img/jay-fin.png" style="">--></h1>
	<?php 
      $connect = mysqli_connect("localhost", "jsrecdb", "", "jsrecdb");  

      $query = "SELECT * FROM studentinfo ORDER BY registerno DESC";  
      $result = mysqli_query($connect, $query);  
      while($row = mysqli_fetch_array($result))  
      { 
      ?>

      
   
	<div class="details">
		<form>
		<div class="col-md-6 grid-margin stretch-card" style="width: 100%;" >    
        <div class="card" style="width: 100%;
    min-width: 203%;
    position: relative;
    left: 490px; ">
        <div class="card-body"  style="width: 100%;height: 1165px;">
	    <div style="    position: relative;top: 77px;left: 100px; ">
	    	<div class="sd"></div>
	<label for="details" id="name" name="name" style="position: relative;left: 10px"><b>Name:&nbsp</b><?php echo $row['studentname']?></label><br><br>
	<label for="details" id="regno" name="regno" style="position: relative;left: 10px"><b>Register Number:&nbsp:</b>&nbsp<?php echo $row['registerno']?></label><br><br>
	<label for="details" id="rollno" name="rollno" style="position: relative;left: 10px"><b>Roll Number:&nbsp</b><?php echo $row['rollno']?></label><br><br>
	<label for="details" id="year" name="year" style="position: relative;left: 10px"><b>Year:&nbsp</b><?php echo $row['department']?></label><br><br>
	<label for="Dept" id="dept" name="dept" style="position: relative;left: 10px"><b>Department:</b>&nbsp<?php echo $row['department']?></label><br><br>
	</div>
	</div>

	<div class="d">
	<?php 
      echo '  
   <img src="data:image/jpeg;base64,'.base64_encode($row['profile'] ).'"style="height:261px;width:198px;"/>';  
    ?>  
	</div>
	<hr size="5" width="90%" color="black" style="    bottom: 47%;
    position: relative;
    right: -61px;">
<div class="c">
	<div class="a">
		<label for="degree"> <b>Degree :&nbsp&nbsp</b><?php echo $row['degree']?></label><br>


        <label for="batch"> <b>Enrolled on:&nbsp&nbsp</b><?php echo $row['degree']?></label><br>
    
       
    <label for ="dob"><b>Date of Birth:&nbsp</b><?php echo $row['dob']?></label><br>

    
 <label for="blood group"><b>Blood Group:&nbsp</b><?php echo $row['bloodgroup']?></label><br>

         <label for="address"><b>Address:&nbsp</b><?php echo $row['address']?></label><br>

        <label for ="city"> <b>City:&nbsp</b><?php echo $row['city']?></label><br>


       
    <label for ="Mobile No"><b> Mobile Number:&nbsp</b><?php echo $row['mobileno']?></label><br>

    <label for ="e-mail"><b> E-Mail ID:&nbsp</b><?php echo $row['email']?></label><br>

   

    <label for ="community"> <b>Community:&nbsp</b><?php echo $row['community']?></label><br>
    
          <label for ="Management/gov"><b>Management/<br>Government Quota:&nbsp</b><?php echo $row['quota']?></label><br>
      </div>


            
<div class="b">
 <label for="days" style="text-align: right:75px;"><b>Days Scholar/Hosteler:&nbsp</b><?php echo $row['dayhostler']?></label><br>


<label for="myCheck"><b>BusNo.:&nbsp</b><?php echo $row['busno']?></label><br>

          <label for ="aadharno"><b>Aadhar Number:&nbsp</b><?php echo $row['aadharno']?></label><br>

    <label for ="cutoff"><b> Cut-Off Mark:</b><?php echo $row['cuttoff']?></label><br>
        <label for="firstgraduate"> <b>First Graduate:&nbsp</b><?php echo $row['firstgraduate']?></label><br>




    <label for ="school name"><b>School Name:&nbsp</b><?php echo $row['schoolname']?></label><br>

    <label for="medium"> <b>Medium of Study:&nbsp</b><?php echo $row['medium']?></label><br>
      

    <label for="father name"><b>Father's Name:&nbsp</b><?php echo $row['fathername']?></label><br>

    <label for="mother name"><b>Mother's Name:&nbsp</b><?php echo $row['mothername']?></label><br>

     <label for ="contactno"> <b>Contact Number:&nbsp</b><?php echo $row['mobileno']?></label><br>
 </div>
 </div>
</form>
<hr size="5" width="90%" color="black" style=" position: relative;
    right: 0px;
    top: -45%;">
</div>
</div>
</div>

</div>
</body>
</html>
<?php 
}

?>