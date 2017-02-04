<?php
	session_start();
	if(isset($_POST['qcolldeve']) && isset($_POST['colldeve'])){
		$col1=$_SESSION['id'];
		$col2=$_POST['qcolldeve'];
		$col3=$_POST['colldeve'];
		$tsugg=$_POST['teachersuggestion'];
		$ssugg=$_POST['studentsuggestion'];
		$books=$_POST['bookseller'];
		$sub_bib=$_POST['subjectbibliography'];
		$book_review=$_POST['bookreview'];
		$booke=$_POST['bookexhibition'];
		$pub_cat=$_POST['publishercatalouge'];
		$other1=$_POST['anyother'];
		$access=$_POST['access'];
		$totb=$_POST['totalbooks'];
		$refb=$_POST['referencebooks'];
		$txtb=$_POST['textbooks'];
		$theses=$_POST['theses'];
		$cd=$_POST['cd'];
		$project=$_POST['project'];
		$microfilms=$_POST['microfilms'];
		$slides=$_POST['slides'];
		$pamphlets=$_POST['pamphlets'];
		$other2=$_POST['other2'];
		$noofjournal=$_POST['noofjournal'];
		$backvol=$_POST['backvol'];
		$noofjou=$_POST['noofjou'];
		$backbound=$_POST['backboundvol'];
		$maga=$_POST['noofmagazine'];
		$news=$_POST['noofnewspaper'];
		$bankbook=$_POST['bankbook'];
		
		$ele_pb=$_POST['ele_pb'];
		$twe_pb=$_POST['twe_pb'];
		$thi_pb=$_POST['thi_pb'];
		$four_pb=$_POST['four_pb'];
		$fif_pb=$_POST['fif_pb'];
		
		
		$ele_gb=$_POST['ele_gb'];
		$twe_gb=$_POST['twe_gb'];
		$thi_gb=$_POST['thi_gb'];
		$four_gb=$_POST['four_gb'];
		$fif_gb=$_POST['fif_gb'];
		
		
		$ele_nb=$_POST['ele_nb'];
		$twe_nb=$_POST['twe_nb'];
		$thi_nb=$_POST['thi_nb'];
		$four_nb=$_POST['four_nb'];
		$fif_nb=$_POST['fif_nb'];
		
		
		$connection=mysqli_connect("localhost","root","","question");
		/*$query="INSERT INTO `survey2`(`slno`, `coll_development_policy`, `written_document`, `teacher_suggestion`, `student_suggestion`, `book_seller`, `subject_bib`, `book_review`, `book_exhibition`, `pub_cata`, `any_other`, `access_type`, `total_books`, `ref_books`, `text_books`, `theses`, `cd`, `project`, `microfilm`, `slides`, `pamphlets`, `other2`, `num_of_journal`, `back_vol`, `back_vol_no`, `back_vol_bound`, `magazine`, `newspaper`, `book_bank`) VALUES 
		('".$col1."','".$col2."','".$col3."','".$tsugg."','".$ssugg."','".$books."','".$sub_bib.
		"','".$book_review."','".$booke."','".$pub_cat."','".$other1."','".$access."','".$totb.
		"','".$refb."','".$txtb."','".$theses."','".$cd."','".$project."','".$microfilms."','".$slides."','".$pamphlets."','".$other2."','".$noofjournal."','".$backvol."','".$noofjou."','".$backbound."','".$maga."','".$news."','".$bankbook."')";*/
		
		$query="INSERT INTO `survey2`(`slno`, `coll_development_policy`, `written_document`, `teacher_suggestion`, `student_suggestion`, `book_seller`, `subject_bib`, `book_review`, `book_exhibition`, `pub_cata`, `any_other`, `access_type`, `total_books`, `ref_books`, `text_books`, `theses`, `cd`, `project`, `microfilm`, `slides`, `pamphlets`, `other2`, `num_of_journal`, `back_vol`, `back_vol_no`, `back_vol_bound`, `magazine`, `newspaper`, `book_bank`, `ele_pb`, `twe_pb`, `thi_pb`, `four_pb`, `fif_pb`, `ele_gb`, `twe_gb`, `thi_gb`, `four_gb`, `fif_gb`, `ele_nb`, `twe_nb`, `thi_nb`, `four_nb`, `fif_nb`) VALUES 
		('".$col1."','".$col2."','".$col3."','".$tsugg."','".$ssugg."','".$books."','".$sub_bib.
		"','".$book_review."','".$booke."','".$pub_cat."','".$other1."','".$access."','".$totb.
		"','".$refb."','".$txtb."','".$theses."','".$cd."','".$project."','".$microfilms."','".$slides."','".$pamphlets."','".$other2."','".$noofjournal."','".$backvol."','".$noofjou."','".$backbound."','".$maga."','".$news."','".$bankbook."','".$ele_pb."','".$twe_pb."','".$thi_pb."','".$four_pb.
		"','".$fif_pb."','".$ele_gb."','".$twe_gb."','".$thi_gb."','".$four_gb.
		"','".$fif_gb."','".$ele_nb."','".$twe_nb."','".$thi_nb."','".$four_nb.
		"','".$fif_nb."')";
		
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
<h1><center><u>Technical Processing</u></center></h1>
<h2><center><u>1) Classification</u></center></h2>
<form action="page4.php" method="post">
	<table>
    	<tr> <td class='col1'>a) Is the library collection classified?</td></tr>
	</table>
    <table><tr><td>	
        <input type="radio" class='yearofesta' class='radiob' name="rad" value="Fully"></input><span>Fully </span>
       </td> 
        <td>
        <input class='yearofesta' type="radio" class='radiob' name="rad" value="Partially"></input><span>Partially</span>        
        </td><td>
        <input type="radio" class='radiob' class='yearofesta' style='margin-left:40px;' name="rad" value="Not At All"></input><span>Not At all</span>
	</td></tr></table>
    
    
    <table>
    	<tr> <td class='col1'>b) Which classification scheme do you follow? (Give edition also)</td></tr>
	</table>
    <table><tr><td>	
        <input type="radio" class='yearofesta' class='radiob' name="rad1" value="CC"></input><span>
        CC </span>
       </td> 
        <td>
        <input class='yearofesta' type="radio" class='radiob' name="rad1" value="DDC"></input><span>DDC</span>        
        </td><td>
        <input type="radio" class='radiob' class='yearofesta' style='margin-left:40px;' name="rad1" value="UDC"></input><span>UDC</span>
	</td>
    	<td>
        <input type="radio" class='radiob' class='yearofesta' style='margin-left:40px;' name="rad1" value="Any Other"></input><span>Any Other</span>
	</td>
    </tr></table>
    
    
    <h2><center><u>2) Cataloguing:</u></center></h2>
    <table>
    	<tr> <td class='col1'>a) Are the books in library catalogued?</td></tr>
	</table>
    <table><tr><td>	
        <input type="radio" class='yearofesta' class='radiob' name="rad2" value="Fully"></input><span>Fully </span>
       </td> 
        <td>
        <input class='yearofesta' type="radio" class='radiob' name="rad2" value="Partially"></input><span>Partially</span>        
        </td><td>
        <input type="radio" class='radiob' class='yearofesta' style='margin-left:40px;' name="rad2" value="Not At All"></input><span>Not At all</span>
	</td></tr></table>
    
    <table>
    	<tr> <td class='col1'>b) Which catalogue code do you follow for cataloguing?</td></tr>
	</table>
    <table><tr><td>	
        <input type="radio" class='yearofesta' class='radiob' name="rad3" value="AACR-I"></input><span>
        AACR-I </span>
       </td> 
        <td>
        <input class='yearofesta' type="radio" class='radiob' name="rad3" value="AACR-II"></input><span>AACR-II</span>        
        </td><td>
        <input type="radio" class='radiob' class='yearofesta' style='margin-left:40px;' name="rad3" value="CCC"></input><span>CCC</span>
	</td>
    	<td>
        <input type="radio" class='radiob' class='yearofesta' style='margin-left:40px;' name="rad3" value="Any Other"></input><span>Any Other</span>
	</td>
    </tr></table>
    
    <table>
    	<tr> <td class='col1'>c) Which physical form of the catalogue is being used?</td></tr>
	</table>
    <table><tr><td>	
        <input type="radio" class='yearofesta' class='radiob' name="rad4" value="Book Form"></input><span>
        Book Form </span>
       </td> 
        <td>
        <input class='yearofesta' type="radio" class='radiob' name="rad4" value="Card Form"></input><span>Card Form</span>        
        </td><td>
        <input type="radio" class='radiob' class='yearofesta' style='margin-left:40px;' name="rad4" value="Any Other"></input><span>Any Other</span>
	</td></tr></table>
    
    
    <table>
    	<tr> <td class='col1'>e) How much time on an average does it take for a document to reach shelf from the date of its procurement?</td></tr>
	</table>
    <table><tr><td>	
        <input type="radio" class='yearofesta' class='radiob' name="rad5" value="Less Than One Week"></input><span>
        Less Than One Week </span>
       </td> 
        <td>
        <input class='yearofesta' type="radio" class='radiob' name="rad5" value="1-2 Weeks"></input><span>
        1-2 Weeks</span>        
        </td><td>
        <input type="radio" class='radiob' class='yearofesta' style='margin-left:40px;' name="rad5" value="More Than 2 Weeks"></input><span>More Than 2 Weeks</span>
	</td></tr></table>
    <br/>
    <table>
		<tr> 
			<td class='col1'>f) State difficulties if any faced in cataloguing documents</td>
			<td class='col2'>
				<input size=50 type=text name='diff' class='input'/>
			</td>
		</tr>
	</table><br/>
    <center><input type="submit" id="submit" value="Next Page"/></center>
    
</form>
</div>
</body>