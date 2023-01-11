<?php require 'db.php';
session_start();
$enroll=$_SESSION['enroll'];
if(!isset($_SESSION['enroll']))
{
     header("location:index.php?mes=<p class='error'>Please login</p>");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
	<title>Dashboard</title>
</head>
<body style="text-align:center; margin-top: 13%; background-image: url(images/users.jpg);  background-repeat: no-repeat;  background-size: auto;"   oncontextmenu="return false;">
<h5 style="text-align:left; margin-left: 40%;">Your Enroll No is: "<?php   echo $enroll;    ?>"</h5><br>
<form name="frm" method="get">

<select name="select" id="select" class="select">
   <option value="0">Select your UG Department</option>
   <option value="ug/BA.php" >BA</option>
   <option value="ug/BSc.php">B.Sc</option>
   <option value="ug/BCom.php">B.Com</option>
   <option value="ug/BBA.php">BBA</option>
</select>
     <input type="button" value="Go" onclick="javascript:goPage()" />
</form><br><br>

<script language="javascript">
     function goPage() {
          if (document.frm.select.value != '') {   
              document.frm.action = document.frm.select.value;
              document.frm.submit();   
          }
     }
</script>

<form name="frm1" method="get">

<select name="select1" id="select1" class="select1">
   <option value="0">Select your PG Department</option>
   <option value="pg/MA.php" >MA</option>
   <option value="pg/MSc.php">M.Sc</option>
   <option value="pg/MCom.php">M.Com</option>
   <option value="pg/MBA.php">MBA</option>
</select>
     <input type="button" value="Go" onclick="javascript:goPage1()" />
</form><br><br>

<script language="javascript">
     function goPage1() {
          if (document.frm1.select1.value != '') {   
              document.frm1.action = document.frm1.select1.value;
              document.frm1.submit();   
          }
     }
</script>

<form name="frm2" method="get">

<select name="select2" id="select2" class="select2">
   <option value="0">Select your Programme</option>
   <option value="diploma/diplomadownload.php" >Diploma</option>
   <option value="diploma/vocationaldiplomadownload.php">Vocational Diploma</option>
   <option value="diploma/pgdiplomadownload.php">PG Diploma</option>
   <option value="diploma/certificatedownload.php">Certificate</option>
</select>
     <input type="button" value="Go" onclick="javascript:goPage2()" />
</form>

<script language="javascript">
     function goPage2() {
          if (document.frm2.select2.value != '') {   
              document.frm2.action = document.frm2.select2.value;
              document.frm2.submit();   
          }
     }
</script>
<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
Function disableclick(e)
{
  if(event.button==2)
   {
     alert(status);
     return false;  
   }
}
</script>


</body>
</html>