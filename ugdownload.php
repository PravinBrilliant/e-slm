<?php
require 'db.php';
session_start();
if(!isset($_SESSION['enroll']))
{
     header("location:index.php?mes=<p class='error'>Please login</p>");
}
?>
<html>
<head>
<title>UG </title>
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
</head>
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.js" type="text/javascript"></script>
	
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/jquery.dataTables.js"></script>
	<script type="text/javascript" charset="utf-8" language="javascript" src="js/DT_bootstrap.js"></script>

<style>
</style>
<body>
	    <div class="row-fluid">

	        <div class="span12">
	            <div class="container">
		<br />
		<h4><p>UG - Download Files</p></h4>	
		
		<br />
		
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th align="center">Department</th>
					<th align="center">Subject Name</th>
					<th align="center">Subject Code</th>
					<th align="center">Semester</th>
					<th align="center">Year</th>
					<th align="center">Action</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from ug order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
				$id=$row['id'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $row['department'] ;?>
				</td>
				<td>
					&nbsp;<?php echo $row['sname'] ;?>
				</td>
				<td>
					&nbsp;<?php echo $row['scode'] ;?>
				</td>
				<td>
					&nbsp;<?php echo $row['semester'] ;?>
				</td>
				<td>
					&nbsp;<?php echo $row['year'] ;?>
				</td>
				<td>
					<button class="alert-success"><a href="download.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Download</a></button>  
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
	</div>
	</div>
	<h4 style="text-align: center;"><a href="logout.php">Logout</a></h4>
<hr>
</body></html>

