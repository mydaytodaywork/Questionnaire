<html>
<head>
<title>
Questionnaire
</title>
<script src="bootstrap/jquery.min.js"></script>
<link rel='stylesheet' href='css/index.css'/>
</head>
<style>
td{
	width:200px;
}
.lib,.head,.trow,.tdata{
	border: 1px solid black;
	border-collapse:collapse;	
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
.lateshow{
	display:none;
}
</style>
<script>
	$(document).ready(function(){
		$("input[type='radio']").click(function() {
			if(($('#hiding:checked').val())=='Yes'){
				$(".lateshow").show();
			}
			else if(($('#hiding:checked').val())=='No'){
				$(".lateshow").hide();
			}
		});
	});

</script>

<body>
<div class="top-container">
<center><h1> <u> Questionnaire </u></h1></center>
<form action='page2.php' method='POST'>
	<table>
		<tr> 
			<td class='col1'>1) Name</td>
			<td class='col2'>
				<input size=50 required type=text name='name' class='input'/>
			</td>
		</tr>
		
		<tr> 
			<td class='col1'>2) Designation</td>
			<td class='col2'>
				<input size=50 type=text name='designation' class='input'/>
			</td>
		</tr>
		
		<tr> 
			<td class='col1'>3) Name of the Institute / University </td>
			<td class='col2'>
				<input type=text size=50 name='college' class='input'/>
			</td>
		</tr>
		
		<tr> <td class='col1'>4) Category of the Institute / University:</td></tr>
	</table>
    <table><tr><td>	<span class='yearofesta'>Government </span>
        <input type="radio" class='radiob' name="rad" value="Government"></input>
       </td> 
        <td><span class='yearofesta'>Government Aided</span>
        <input type="radio" class='radiob' name="rad" value="Government Aided"></input>        
        </td><td><span class='yearofesta'>University College</span>
        <input type="radio" class='radiob' name="rad" value="University College"></input>
	</td></tr></table>
    <table>
        	
        
        	<tr> <td class='col1'>5) Year Of Establishment:</td></tr>
            <tr> 
                <td class='col1'><span class='yearofesta'>a) College: </span></td>
                <td class='col2'>
                    <input type=text size=50 name='estaclg' class='input'/>
                </td>
            </tr>
			<tr> 
                <td class='col1'><span class='yearofesta'>b) Library: </span></td>
                <td class='col2'>
                    <input type=text size=50 name='estalib' class='input'/>
                </td>
            </tr>
        
       <tr> 
			<td class='col1' >6) Student's Intake:</td></tr>
			<tr><td class='col1'><span class='yearofesta'>a) UG </span></td>
                <td class='col2'>
                    <input type=text size=50 name='ug' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>b) PG </span></td>
                <td class='col2'>
                    <input type=text size=50 name='pg' class='input'/>
                </td>
            </tr>
            
		</tr>
        
        <tr> 
			<td class='col1' >7) Library Timings:</td></tr>
			<tr><td class='col1'><span class='yearofesta'>a) From </span></td>
                <td class='col2'>
                    <input type=text size=50 name='libfrom' class='input'/>
                </td>
            </tr>
            
            <tr><td class='col1'><span class='yearofesta'>b) To </span></td>
                <td class='col2'>
                    <input type=text size=50 name='libto' class='input'/>
                </td>
            </tr>
		</tr> 
        
    </table>
    
    
    <!-- Innsert tabll ehere -->
    <center><h1><u>Manpower in Library</u></h1>
<table class="lib">
    <tr class='trow'>
        <th class='head' rowspan=1>Designation</th>
        <th class='head' colspan=1>No of Posts</th>
	
    <tr class='trow'>
    	<td class="tdata"><center>Librarian</center></td>
        <td class="tdata"><input type='text' style='height:100%; width:100%; margin:0px;' name='sac_librarian'/></td>
        
    </tr>
    
    <tr class='trow'>
    	<td class="tdata"><center>Assistant Librarian</center></td>
        <td class="tdata"><input type='text' style='height:100%; width:100%; margin:0px;' name='sac_assis_librarian'/></td>
    </tr>
    
    <tr class='trow'>
    	<td class="tdata"><center>Library Assistant</center></td>
        <td class="tdata"><input type='text' style='height:100%; width:100%; margin:0px;' name='sac_assis_library'/></td>
    </tr>
    
    <tr class='trow'>
    	<td class="tdata"><center>Library Restorer</center></td>
        <td class="tdata"><input type='text' style='height:100%; width:100%; margin:0px;' name='sac_rs_library'/></td>
    </tr>
    
    
    <tr class='trow'>
    	<td class="tdata"><center>Library Attendant</center></td>
        <td class="tdata"><input type='text' style='height:100%; width:100%; margin:0px;' name='sac_att_library'/></td>
    </tr>
       
</table>
   </center> 
    
    
    <table><tr>
    <h1><u><center>Library Committee</center></u></h1></tr>
    <tr> <td class='col1'>a) Is there a Library Committee</td></tr>
	</table>
    <table>
    <tr><td>
   	<span class='yearofesta'>Yes</span>
    <input id='hiding' type="radio" class='radiob' name="libcomm" value="Yes"></input>
        
        </td><td><span class='yearofesta'>No</span>
   	<input type="radio" id='hiding' class='radiob' name="libcomm" value="No"></input><br/>
</td></tr></table>    <table> 
            <tr><td class='lateshow' class='col1'><span class='yearofesta'> Total No of Members: </span></td>
                <td class='lateshow' class='col2'>
                    <input type=text size=50 name='members' class='input'/>
                </td>
            </tr>
	</table><br/><br/><br/>
    <center><input type="submit" id="submit" value="Next Page"/></center>    
</form>
</div>
</body>
</html>