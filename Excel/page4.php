<?php
	$connection=mysqli_connect("localhost","root","","question");
	session_start();
	$col1=$_SESSION['id'];
	$rad=$_POST['rad'];
	$rad1=$_POST['rad1'];
	$rad2=$_POST['rad2'];
	$rad3=$_POST['rad3'];
	$rad4=$_POST['rad4'];
	$rad5=$_POST['rad4'];
	$diff=$_POST['diff'];
	
	
	$query="INSERT INTO `survey3`(`slno`, `is_lib_col_classified`, `Class_scheme`, `are_books_cata`, `catalouge_code`, `physical_form`, `avg_time`, `difficulty`) VALUES ($col1,'".$rad."','".$rad1."','".$rad2."','".$rad3."','".$rad4."','".$rad5."','".$diff."')";
	$result=mysqli_query($connection,$query);
?>


<?php
$page4="
<html>
<head>
</head>
<style>
	.sub{
		padding-left: 40px;
	}
	.form4{
		padding-left: 130px;
		padding-right: 130px;
		width: 60%;
		background-color: #ff9;
	}
	.cen{
		text-align:center;
	}

	.txt{
		height:30px;
	}
	.btn{
		width:800px;
		height:40px;
	}
</style>
<body>
	<center>
	<form class='form4' action='page5.php' method='POST'>
		
		<h2>Circulation:-</h2>
		1) Mention the number of books that the following categories of users are entitled to borrow with loan period:
		
		<table>
		<thead><tr><th>User Category</th><th>No. of books entitled to borrow</th><th>Loan period ( in days ) </th></tr></thead>
		<tbody>
			
			<tr><td>UG</td><td><input class='txt' size=40 type='text' name='tform4_1'/></td><td><input class='txt' size=40 type='text' name='tform4_2'/></td></tr>
			<tr><td>PG</td><td><input class='txt' size=40 type='text' name='tform4_3'/></td><td><input class='txt' size=40 type='text' name='tform4_4'/></td></tr>
			<tr><td>Faculty</td><td><input class='txt' size=40 type='text' name='tform4_5'/></td><td><input class='txt' size=40 type='text' name='tform4_6'/></td></tr>
			<tr><td>Staff</td><td><input class='txt' size=40 type='text' name='tform4_100'/></td><td><input class='txt' size=40 type='text' name='tform4_100'/></td></tr>
		</tbody>
		</table>

		<table class='table4'>
		<tr><td>2) Which system of circulation do you follow?<td></td></tr>
		<tr><td class='cen'><input type='radio' name='form4_1' val='Browne system'/>Browne system<input type='radio' name='form4_1' val='Newark system'/>Newark system<input type='radio' name='form4_1' val='Ledger system'/>Ledger system<br><input type='radio' name='form4_1' val='computer'/>computer<input type='radio' name='form4_1' val='any other'/>any other</td></tr>
		<tr><td>3) If 'Yes' please mention</td><td><input class='txt' size=40 type='text' name='tform4_7'/></td></tr>
		<tr><td>4) Give average number of the books issued daily to:</td><td></td></tr>

		<tr><td class='sub'>a) PG students</td><td><input class='txt' size=40 type='text' name='tform4_8'/></td></tr>
		<tr><td class='sub'>b) UG students</td><td><input class='txt' size=40 type='text' name='tform4_9'/></td></tr>
		<tr><td class='sub'>c) Teachers</td><td><input class='txt' size=40 type='text' name='tform4_10'/></td></tr>

		<tr><td>5)  Do you impose any overdue fine for delayed return of books by the due date?</td><td></td></tr>
		<tr><td class='sub'><input type='radio' name='form4_2' val='Yes'/>Yes<input type='radio' name='form4_2' val='No'/>No</td><td></td></tr>
		<tr><td>6) If 'Yes' mention the rate of overdue fine you impose on:</td><td></td></tr>

		<tr><td class='sub'>a) Students</td><td><input class='txt' size=40 type='text' name='tform4_11'/></td></tr>
		<tr><td class='sub'>b) Teachers</td><td><input class='txt' size=40 type='text' name='tform4_12'/></td></tr>

		<tr><td>7) Do you have reservation policy in your library?</td><td></td></tr>
		<tr><td class='sub'><input type='radio' name='form4_3' val='Yes'/>Yes<input type='radio' name='form4_3' val='No'/>No</td><td></td></tr>
		<tr><td>8) Do the users expect Internet connectivity in library?</td><td></td></tr>
		<tr><td class='sub'><input type='radio' name='form4_4' val='Yes'/>Yes<input type='radio' name='form4_4' val='No'/>No</td><td></td></tr>
		<tr><td>9) If 'yes' for what kind of information do they expect it?</td><td><input class='txt' size=40 type='text' name='tform4_13'/></td></tr>
		</table>

		<input class='btn' type='Submit' value='Next Page'/>

	</form>
	</center>
</body>
</html>";


if(isset($_SESSION['id'])){
	echo $page4;
}
else{
	echo "Something Went Wrong";
}
?>