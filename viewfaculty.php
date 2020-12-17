<!DOCTYPE html>
<html>
<head>
<title>Faculty Details</title>
<style type="text/css">
.details{
position: relative;right: 500px;
font-size: 20px;



}
.a{
position: relative;right: 50%;
bottom: -25px;
font-size: 20;text-align: right;
width: 40%;


}
.b{
position: relative;left: -70px;
bottom: 250px;
font-size: 20;text-align: right;
width: 40%;


}
.c{
height: 400px;
}
.d{
    height: 205px;
    width: 154px;
    border: 2px solid black;
    position: relative;
    left: 27%;
    bottom: 160px;
}
</style>
</head>
<body><center>
<h1><!---<img src="assets/img/jay-fin.png" style="">--></h1>
<div class="details">
<?php
$connect = mysqli_connect("localhost","root","","jsrecdp");
$query = "SELECT * FROM createblog ORDER BY id  DESC";
$result= mysqli_fetch_array($connect,$query);
while($row = mysqli_fetch_array($result))
?>
<form>
<div style=" position: relative;
    top: 71px;
    left: 54px;">
<label for="details" id="name" name="name" style="position: relative;left: 10px">Name:</label><br><br>
<label for="details" id="regno" name="regno" style="position: relative;left: 20px">Designation:</label><br><br>
<label for="details" id="rollno" name="rollno" style="position: relative;left: 20px">Faculty ID:</label><br><br>
<label for="details" id="year" name="year" style="position: relative;left: 3px">Anna University ID:</label><br><br>
</div>
</div>

<div class="d">
<?php 
 echo '<img src="data:image/jpeg;base64,'.base64_encode($row['profile'] ).'"  style=""/>';  
?>
</div>
<hr size="5" width="90%" color="black">
<div class="c">
<div class="a">


       
   
       
    <label for ="dob">Date of Birth:<?php echo $row['dob']?></label><br><br>

   

         <label for="address">Address:<?php echo $row['address']?></label><br><br>

        <label for ="city"> City:<?php echo $row['city']?></label><br><br>


       
    <label for ="Mobile No"> Mobile Number:<?php echo $row['mobileno']?></label><br><br>

    <label for ="e-mail"> E-Mail ID:<?php echo $row['email']?></label><br><br>   
      </div>


           
<div class="b">

<?php
$connect = mysqli_connect("localhost","root","","jsrecdp");
$query = "SELECT * FROM createblog ORDER BY id  DESC";
$result= mysqli_fetch_array($connect,$query);
while($row = mysqli_fetch_array($result))
?>



     <label for ="aadharno">Aadhar Number:<?php echo $row['aadharno']?></label><br><br>

    <label for ="PanCard Number">PANcard number:<?php echo $row['pancard']?></label><br><br>
                       
   

    <label for ="date of joining"> Date Of Joining:<?php echo $row['dateofjoining']?></label><br><br>

    <label for ="experience">Experience:<?php echo $row['experience']?></label><br><br>

    <label for ="department">Department:<?php echo $row['department']?></label><br><br>

    <label for ="certificates">Certificates Collected:<?php echo $row['certificates']?></label><br><br>


    <label for ="releving">Date of Releving:<?php echo $row['dateofreleving']?></label><br><br>

    <label for ="contactno"> Contact No:<?php echo $row['mobileno']?></label><br><br>
 </div>
</form>
<hr size="5" width="90%" color="black" style="    position: relative;
    bottom: 65%;">


</div>

</center>
</body>
<script>
var x, i, j, l, ll, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
    });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect);
</script>
</html>
