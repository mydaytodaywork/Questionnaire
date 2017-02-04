<?php
session_start();
if(isset($_POST['tform4_1'])){
	$con = mysqli_connect('localhost','root','','question');

	$op1 = isset($_POST['form4_1'])?$_POST['form4_1']:'';
	$op2 = isset($_POST['form4_2'])?$_POST['form4_2']:'';
	$op3 = isset($_POST['form4_3'])?$_POST['form4_3']:'';
	$op4 = isset($_POST['form4_4'])?$_POST['form4_4']:'';

	$q4 = "INSERT INTO `survey4`(`slno`, `tform4_1`, `tform4_2`, `tform4_3`, `tform4_4`, `tform4_5`, `tform4_6`,
	 `tform4_7`, `tform4_8`, `tform4_9`, `tform4_10`, `tform4_11`, `tform4_12`, `tform4_13`,`form4_1`,`form4_2`,`form4_3`,`form4_4`,`tform4_100`,`tform4_101`) 
	VALUES (".$_SESSION['id'].",'".$_POST['tform4_1']."', '".$_POST['tform4_2']."', '".$_POST['tform4_3']."', '".$_POST['tform4_4']."',
	 '".$_POST['tform4_5']."', '".$_POST['tform4_6']."', '".$_POST['tform4_7']."', '".$_POST['tform4_8']."', '".$_POST['tform4_9']."',
	  '".$_POST['tform4_10']."', '".$_POST['tform4_11']."', '".$_POST['tform4_12']."', '".$_POST['tform4_13']."', '".$op1."',
	   '".$op2."', '".$op3."', '".$op4."','".$_POST['tform4_100']."','".$_POST['tform4_101']."')";
	$result = mysqli_query($con,$q4);
}

?>


<?php
$page5="
<html>
<head>
</head>
<style>
	.sub{
		padding-left: 40px;
	}
	.sub input{
		margin-left: 40px;
	}
	.sub2{
		padding-left: 80px;
	}
	.form5{
		padding-left: 130px;
		padding-right: 130px;
		width: 60%;
		background-color: #ff9;
	}
	.txt{
		height:30px;
	}
	.btn{
		width:800px;
		height:40px;
	}
	table tr td{
		font-size:20px;
	}
</style>
<body>
	<center>
	<form class='form5' action='thanks.php' method='POST'>
		<h1><center><u>Other Users and Services</u></center></h1>
		<table class='table5'>
			<tr><td>1) Do you provide reference service to users?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_1' val='Yes'/>Yes<input type='radio' name='form5_1' val='No'/>No</td><td></td></tr>
			<tr><td>2) State the form of reference service you provide</td><td><input class='txt' size=50 type='text' name='tform5_1'/></td></tr>
			<tr><td>3) Do you provide Current Awareness Service to users?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_2' val='Yes'/>Yes<input type='radio' name='form5_2' val='No'/>No</td><td></td></tr>
			<tr><td>4) Do you provide Selective Dissemination of Information (SDI) service?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_3' val='Yes'/>Yes<input type='radio' name='form5_3' val='No'/>No</td><td></td></tr>
			<tr><td>5) If 'yes' how do you provide it?</td><td><input class='txt' size=50 type='text' name='tform5_2'/></td></tr>
			<tr><td>6) Do you organize book exhibitions?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_4' val='Yes'/>Yes<input type='radio' name='form5_4' val='No'/>No</td><td></td></tr>
			<tr><td>7) If 'yes' on which occasions do you arrange these?</td><td><input class='txt' size=50 type='text' name='tform5_3'/></td></tr>
			<tr><td>8) Do you provide bibliographical service?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_5' val='Yes'/>Yes<input type='radio' name='form5_5' val='No'/>No</td><td></td></tr>
			<tr><td>9) Does your library have facility of Photocopy Service?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_6' val='Yes'/>Yes<input type='radio' name='form5_6' val='No'/>No</td><td></td></tr>
			<tr><td>10) If 'Yes' how many copies of document a user is entitled to get copied?</td><td><input class='txt' size=50 type='text' name='tform5_4'/></td></tr>
			<tr><td>11) What are the per copy charges?</td><td></td></tr>
			<tr><td class='sub'>a) For Teachers</td><td><input class='txt' size=50 type='text' name='tform5_5'/></td></tr>
			<tr><td class='sub'>b) For Students</td><td><input class='txt' size=50 type='text' name='tform5_6'/></td></tr>

			<tr><td>12) Do you participate in resource sharing programme with any other library?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_7' val='Yes'/>Yes<input type='radio' name='form5_7' val='No'/>No</td><td></td></tr>
			<tr><td>13) If 'Yes' which resources do you share and with which libraries?</td><td><input class='txt' size=50 type='text' name='tform5_7'/></td></tr>
			<tr><td>14) Do you render Referral Service to readers?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_8' val='Yes'/>Yes<input type='radio' name='form5_8' val='No'/>No</td><td></td></tr>
			<tr><td>15) Does your library have provision of Orientation programme for students?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_9' val='Yes'/>Yes<input type='radio' name='form5_9' val='No'/>No</td><td></td></tr>

			<tr><td>16) How do you give orientation to them?</td><td></td></tr>
			<tr><td class='sub'>a) Through lecture</td><td><input type='checkbox' name='cform5_1'/></td></tr>
			<tr><td class='sub'>b) By library tour</td><td><input type='checkbox' name='cform5_2'/></td></tr>
			<tr><td class='sub'>c) Through written document</td><td><input type='checkbox' name='cform5_3'/></td></tr>
			<tr><td class='sub'>d) In any other way</td><td><input type='checkbox' name='cform5_4'/></td></tr>

			<tr><td>17) Do you maintain newspaper clippings of important and related topics?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_10' val='Yes'/>Yes<input type='radio' name='form5_10' val='No'/>No</td><td></td></tr>
			
			</table>
			<center><h1><u>Others</u></h1><center>

			<table class='table5'>
			<tr><td>1) Do you make attempts to promote use of libraries?</td><td></td></tr>
			<tr><td class='sub'>i) If 'Yes' do you ascertain information needs of users?</td> <td></td></tr><tr> <td class='sub'><input type='radio' name='form5_11' val='Yes'/>Yes<input type='radio' name='form5_11' val='No'/>No</td><td></td></tr>

			<tr><td class='sub'>ii) If 'Yes' which of the following methods are used for that purpose:</td><td></td></tr>
			<tr><td class='sub2'>a) Maintain suggestion box</td><td><input type='checkbox' name='cform5_5'/></td></tr>
			<tr><td class='sub2'>b) Conduct user survey</td><td><input type='checkbox' name='cform5_6'/></td></tr>
			<tr><td class='sub2'>c) Discuss with users</td><td><input type='checkbox' name='cform5_7'/></td></tr>
			<tr><td class='sub2'>d) Record queries of users</td><td><input type='checkbox' name='cform5_8'/></td></tr>
			<tr><td class='sub2'>e) Any other</td><td><input class='txt' size=50 type='text' name='tform5_8'/></td></tr>

			<tr><td>2) Mention other methods you use to promote use of libraries</td><td><input class='txt' size=50 type='text' name='tform5_9'/></td></tr>
			<tr><td>3) Do you face any difficulties in managing library and proving services to users?(Mention those)</td><td><input class='txt' size=50 type='text' name='tform5_10'/></td></tr>
			<tr><td>4) What do you suggest to make your library more effective?</td><td><input class='txt' size=50 type='text' name='tform5_11'/></td></tr>
			<tr><td>5) What are your future plans for the library?</td><td><input class='txt' size=50 type='text' name='tform5_12'/></td></tr>

		</table>
		<input class='btn' type='Submit'/>
	</form>
	</center>
</body>
</html>";



if(isset($_SESSION['id'])){
	echo $page5;
}
else{
	echo "Something Went Wrong";
}

?>