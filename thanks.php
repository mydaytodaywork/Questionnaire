<?php
session_start();
if(isset($_POST['tform5_1'])){
	$con = mysqli_connect('localhost','root','','question');

	$op1 = isset($_POST['form5_1'])?$_POST['form5_1']:'';
	$op2 = isset($_POST['form5_2'])?$_POST['form5_2']:'';
	$op3 = isset($_POST['form5_3'])?$_POST['form5_3']:'';
	$op4 = isset($_POST['form5_4'])?$_POST['form5_4']:'';
	$op5 = isset($_POST['form5_5'])?$_POST['form5_5']:'';
	$op6 = isset($_POST['form5_6'])?$_POST['form5_6']:'';
	$op7 = isset($_POST['form5_7'])?$_POST['form5_7']:'';
	$op8 = isset($_POST['form5_8'])?$_POST['form5_8']:'';
	$op9 = isset($_POST['form5_9'])?$_POST['form5_9']:'';
	$op10 = isset($_POST['form5_10'])?$_POST['form5_10']:'';
	$op11 = isset($_POST['form5_11'])?$_POST['form5_11']:'';

	$ch1 = isset($_POST['cform5_1'])?$_POST['cform5_1']:'';
	$ch2 = isset($_POST['cform5_2'])?$_POST['cform5_2']:'';
	$ch3 = isset($_POST['cform5_3'])?$_POST['cform5_3']:'';
	$ch4 = isset($_POST['cform5_4'])?$_POST['cform5_4']:'';
	$ch5 = isset($_POST['cform5_5'])?$_POST['cform5_5']:'';
	$ch6 = isset($_POST['cform5_6'])?$_POST['cform5_6']:'';
	$ch7 = isset($_POST['cform5_7'])?$_POST['cform5_7']:'';
	$ch8 = isset($_POST['cform5_8'])?$_POST['cform5_8']:'';

	$q5 = "INSERT INTO `survey5`(`slno`, `tform5_1`, `tform5_2`, `tform5_3`, `tform5_4`, `tform5_5`, `tform5_6`, `tform5_7`, `tform5_8`,
	 `tform5_9`, `tform5_10`, `tform5_11`, `tform5_12`, `form5_1`, `form5_2`, `form5_3`, `form5_4`, `form5_5`, `form5_6`, `form5_7`, `form5_8`,
	  `form5_9`, `form5_10`, `form5_11`, `cform5_1`, `cform5_2`, `cform5_3`, `cform5_4`, `cform5_5`, `cform5_6`, `cform5_7`, `cform5_8`)
	   VALUES (".$_SESSION['id'].",'".$_POST['tform5_1']."','".$_POST['tform5_2']."','".$_POST['tform5_3']."','".$_POST['tform5_4']."',
	   	'".$_POST['tform5_5']."','".$_POST['tform5_6']."','".$_POST['tform5_7']."','".$_POST['tform5_8']."','".$_POST['tform5_9']."',
	   	'".$_POST['tform5_10']."','".$_POST['tform5_11']."','".$_POST['tform5_12']."','".$op1."','".$op2."','".$op3."','".$op4."','".$op5."',
	   	'".$op6."','".$op7."','".$op8."','".$op9."','".$op10."','".$op11."','".$ch1."','".$ch2."','".$ch3."','".$ch4."','".$ch5."','".$ch6."','".$ch7."','".$ch8."')";

	$result = mysqli_query($con,$q5);
}
?>
<center><h1>Thank You!!!!!!!</h1></center>