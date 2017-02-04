

<style>
.lib,.head,.trow,.tdata{
	border: 1px solid black;
	border-collapse:collapse;	
}
.lib{
	margin-top:30px;	
}
.head{
	background-color:orange;	
}
.coll{
	background-color:orange;	
}
.tdata{
	height:40px;	
}
.head{
	height:50px;
}
</style>
<?php
	if(isset($_POST['name']) && isset($_POST['rad']) && isset($_POST['libcomm'])){
		session_start();
		$name=$_POST['name'];
		$desig=$_POST['designation'];
		$colname=$_POST['college'];
		$ccate=$_POST['rad'];
		$experience=$_POST['experience'];
		$estaclg=$_POST['estaclg'];
		$estalib=$_POST['estalib'];
		$ug=$_POST['ug'];
		$pg=$_POST['pg'];
		$libfrom=$_POST['libfrom'];
		$libto=$_POST['libto'];
		$libcomm=$_POST['libcomm'];
		$chairman=$_POST['chairman'];
		$secretary=$_POST['secretary'];
		$members=$_POST['members'];
		
		$sac_libr=$_POST['sac_librarian'];
		$filled_libr=$_POST['filled_librarian'];
		$vac_libr=$_POST['vacant_librarian'];
		$aca_libr=$_POST['academic_librarian'];
		$prof_libr=$_POST['professional_librarian'];
		
		$sac_alibr=$_POST['sac_assis_librarian'];
		$filled_alibr=$_POST['filled_assis_librarian'];
		$vac_alibr=$_POST['vacant_assis_librarian'];
		$aca_alibr=$_POST['academic_assis_librarian'];
		$prof_alibr=$_POST['professional_assis_librarian'];
		
		
		$sac_libra=$_POST['sac_assis_library'];
		$filled_libra=$_POST['filled_assis_library'];
		$vac_libra=$_POST['vacant_assis_library'];
		$aca_libra=$_POST['academic_assis_library'];
		$prof_libra=$_POST['professional_assis_library'];
		
		$sac_librr=$_POST['sac_rs_library'];
		$filled_librr=$_POST['filled_rs_library'];
		$vac_librr=$_POST['vacant_rs_library'];
		$aca_librr=$_POST['academic_rs_library'];
		$prof_librr=$_POST['professional_rs_library'];
		
		$sac_libratt=$_POST['sac_att_library'];
		$filled_libratt=$_POST['filled_att_library'];
		$vac_libratt=$_POST['vacant_att_library'];
		$aca_libratt=$_POST['academic_att_library'];
		$prof_libratt=$_POST['professional_att_library'];
		
		$connection=mysqli_connect("localhost","root","","question");
		
		$query="INSERT INTO `survey1`(`name`, `designation`, `college`, `category`, `year_college`, `year_library`, `ug`, `pg`, `libfrom`, `libto`, `libcom`, `chairman`, `secretary`, `members`, `san_librarian`, `filled_librarian`, `vacant_librarian`, `academic_librarian`, `professional_librarian`, `san_asst_librarian`, `filled_aast_librarian`, `vacant_aast_librarian`, `academic_aast_librarian`, `professional_aast_librarian`, `san_library_asst`, `filled_library_asst`, `vacant_library_asst`, `academic_library_asst`, `professional_library_asst`, `san_library_rs`, `filled_library_rs`, `vacant_library_rs`, `academic_library_rs`, `professional_library_rs`, `san_library_att`, `filled_library_att`, `vacant_library_att`, `academic_library_att`, `professional_library_att`) VALUES ('".$name."','".$desig."','".$colname."','".$ccate."','".$estaclg."','".$estalib."','".$ug."','".$pg."','".$libfrom."','".$libto."','".$libcomm."','".$chairman."','".$secretary."','".$members."','".$sac_libr."','".$filled_libr."','".$vac_libr."','".$aca_libr."','".$prof_libr."','".$sac_alibr."','".$filled_alibr."','".$vac_alibr."','".$aca_alibr."','".$prof_alibr."','".$sac_libra."','".$filled_libra."','".$vac_libra."','".$aca_libra."','".$prof_libra."','".$sac_librr."','".$filled_librr."','".$vac_librr."','".$aca_librr."','".$prof_librr."','".$sac_libratt."','".$filled_libratt."','".$vac_libratt."','".$aca_libratt."','".$prof_libratt."')";
		
		$result=mysqli_query($connection,$query);
		
		$query="select slno from survey1 where name='".$name."' and college='".$colname."' and chairman='".$chairman."'";
		$result=mysqli_query($connection,$query);
		$row=mysqli_fetch_row($result);
		$slno=$row[0];
		
		//immportant
		$_SESSION['id']=$slno;
		
		$query="INSERT INTO `completed`(`slno`, `pageno`) VALUES ($slno,1)";
		$result=mysqli_query($connection,$query);
	}
?>

<html>
<head>
<title>
Questionnaire
</title>
<link rel='stylesheet' href='css/index.css'/>
</head>
<body>
<div class="top-container">
<center><h1><u>Collection Development</u></h1></center>
<form action='page3.php' method='POST'>
	
    <table>
    	<tr> <td class='col1'>1) Book Selection and Acquisition </td></tr>
	<tr> <td class='col1'>a) Do you have any collection development policy in your library? </td></tr>
	</table>
   	<span class='yearofesta'>Yes</span>
    <input type="radio" class='radiob' name="qcolldeve" value="Yes"></input>
        <span class='yearofesta'>No</span>
   	<input type="radio" class='radiob' name="qcolldeve" value="No"></input><br/>
	<table>
    	<tr> <td class='col1'>b) If ‘yes’ do you have any written document on that? </td></tr>
	</table>
   	<span class='yearofesta'>Yes</span>
    <input type="radio" class='radiob' name="colldeve" value="Yes"></input>
        <span class='yearofesta'>No</span>
   	<input type="radio" class='radiob' name="colldeve" value="No"></input><br/>

	<br/>
	<table>
    <tr> <td class='col1' >2) Which of the following sources are used for selection of documents for library(Give ranking in order of preference)? (1-10)</td></tr>
			<tr><td class='col1'><span class='yearofesta'>a) Teacher’s suggestions   </span></td>
                <td class='col2'>
                    <input type=text size=50 name='teachersuggestion' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>b) Student’s suggestions </span></td>
                <td class='col2'>
                    <input type=text size=50 name='studentsuggestion' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>c) Subject bibliographies </span></td>
                <td class='col2'>
                    <input type=text size=50 name='subjectbibliography' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>d)Book reviews   </span></td>
                <td class='col2'>
                    <input type=text size=50 name='bookreview' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>e) Book exhibitions</span></td>
                <td class='col2'>
                    <input type=text size=50 name='bookexhibition' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>f) Publisher’s catalogue</span></td>
                <td class='col2'>
                    <input type=text size=50 name='publishercatalouge' class='input'/>
                </td>
            </tr>
            
            
            <tr><td class='col1'><span class='yearofesta'>g) Any Other</span></td>
                <td class='col2'>
                    <input type=text size=50 name='anyother' class='input'/>
                </td>
            </tr>
            
	</table>
    <center><h1><u>Document Collection</u></h1></center>
    <table>
    	<tr> <td class='col1'>1) Which Access do yo have? </td></tr>
	</table>
   	<span class='yearofesta'>Open</span>
    <input type="radio" class='radiob' name="access" value="open"></input>
        <span class='yearofesta'>Partially Open</span>
   	<input type="radio" class='radiob' name="access" value="partially_open"></input>
		<span class='yearofesta'>Closed</span>
   	<input type="radio" class='radiob' name="access" value="closed"></input><br/>
	<br/>
	
    
    <table>
    <tr> <td class='col1' >2) Give total collection and it’s break up:</td></tr>
			<tr><td class='col1'><span class='yearofesta'>a) Total Books   </span></td>
                <td class='col2'>
                    <input type=text size=50 name='totalbooks' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>i) Reference Books </span></td>
                <td class='col2'>
                    <input type=text size=50 name='referencebooks' class='input'/>
                </td>
            </tr>
            
            
            <tr><td class='col1'><span class='yearofesta'>ii) Text Books </span></td>
                <td class='col2'>
                    <input type=text size=50 name='textbooks' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>b) Theses/ Dissertations  </span></td>
                <td class='col2'>
                    <input type=text size=50 name='theses' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>c) CD’s </span></td>
                <td class='col2'>
                    <input type=text size=50 name='cd' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>d) Project Reports   </span></td>
                <td class='col2'>
                    <input type=text size=50 name='project' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>e) Any Other</span></td>
                <td class='col2'>
                    <input type=text size=50 name='other2' class='input'/>
                </td>
            </tr>
 		      
            <tr><td class='col1'><span class='yearofesta'>f) Mention the number of journals on subscription </span></td>
                <td class='col2'>
                    <input type=text size=50 name='noofjournal' class='input'/>
                </td>
            </tr>
           
    	<tr> <td class='col1' ><span class='yearofesta'>g) Do you have back volumes of journals?
         </span></td>
         </tr>
   		</table>
           <table>
        <span class='yearofesta' style='margin-left:60px'>Yes</span>
   <input type="radio" class='radiob' name="backvol" value="Yes"></input>
        	<span class='yearofesta'>No</span>
   	<input type="radio" class='radiob' name="backvol" value="No"></input><br/>
		<table>
            
            <tr><td class='col1'><span class='yearofesta'>h) If ‘yes’ specify their number</span></td>
                <td class='col2'>
                    <input type=text size=50 name='noofjou' class='input'/>
                </td>
            </tr> 
            
        <tr> <td class='col1' ><span class='yearofesta'>i) Are the back volumes of journals bound?
         </span></td>
         </tr>
   		</table>
           <table>
        <span class='yearofesta' style='margin-left:60px'>Yes</span>
   <input type="radio" class='radiob' name="backboundvol" value="Yes"></input>
        	<span class='yearofesta'>No</span>
   	<input type="radio" class='radiob' name="backboundvol" value="No"></input><br/>
		<table>
            
            <tr><td class='col1'><span class='yearofesta'>j) How many magazines are being subscribed?</span></td>
                <td class='col2'>
                    <input type=text size=50 name='noofmagazine' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>k) How many newspapers are being subscribed? </span></td>
                <td class='col2'>
                    <input type=text size=50 name='noofnewspaper' class='input'/>
                </td>
            </tr>     
       		
            
            <tr> <td class='col1' ><span class='yearofesta'>l) Does your library have book bank?
         </span></td>
         </tr>
   		</table>
           <table>
        <span class='yearofesta' style='margin-left:60px'>Yes</span>
   <input type="radio" class='radiob' name="bankbook" value="Yes"></input>
        	<span class='yearofesta'>No</span>
   	<input type="radio" class='radiob' name="bankbook" value="No"></input><br/>
		
	</table>
    <center>
    <table class="lib">
    <tr class='trow'>
        <th class='head'>Documents</th>
       
        <th class='head'>2015/16</th>
   		     
   </tr>
	
    <tr class='trow'>
    	<td class="tdata"><center>Purchased Books</center></td>
        
        <td class="tdata"><input type='text' style='height:100%; width:100%; margin:0px;' name='fif_pb'/></td>
    </tr>
    
    <tr class='trow'>
    	<td class="tdata"><center>Gifted Books</center></td>
        
        <td class="tdata"><input type='text' style='height:100%; width:100%; margin:0px;' name='fif_gb'/></td>
    </tr>
    
    <tr class='trow'>
    	<td class="tdata"><center>Non Book Material</center></td>
        
        <td class="tdata"><input type='text' style='height:100%; width:100%; margin:0px;' name='fif_nb'/></td>
    </tr>
       
</table>
</center>
    
    
    <center><input type="submit" id="submit" value="Next Page" style="margin-top:30px;"/></center>
</form>
</div>
</body>