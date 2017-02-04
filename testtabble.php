<style>
table,th,tr,td{
	border: 1px solid black;
	border-collapse:collapse;	
}
th{
	background-color:orange;	
}
.coll{
	background-color:orange;	
}
td{
	height:40px;	
}
th{
	height:50px;
}
</style>
<form action="page7.php" method="post" >
<center>
<table>
	<tr><th colspan=7><center> Budget Details Of Print Books </center></th></tr>
    <tr>
    	<th>Sr no.</th>
        <th>Collection Detail</th>
        <th>Sanctioned Amount. ( Rs. )</th>
        <th>Department/school</th>
        <th>Sanctioned Amount ( Rs. )</th>
        <th>Amount Spent ( Rs. )</th>
        <th>Pending Amount.</th>
    </tr>
    <tr>
    	<td rowspan=6><center>1</center></td>
        <td rowspan=6><center> Print Books </center></td>
        <td rowspan=6><input type='text' name='t1_sanc_amount1' style='height:100%; width:100%; margin:0;'/></td>
		<td>School Of Arts</td>
        <td><input type='text' name='t1_sanc_amount2_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_amount_spent_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_pending_spent_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
    
    
    <tr>
    	<td>School Of Science</td>
        <td><input type='text' name='t1_sanc_amount2_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_amount_spent_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_pending_spent_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
	</tr>
    <tr>
    	<td>School Of Commerce</td>
    	<td><input type='text' name='t1_sanc_amount2_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_amount_spent_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_pending_spent_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>    </tr>
    <tr>
        <td>Misc</td>
    	<td><input type='text' name='t1_sanc_amount2_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_amount_spent_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_pending_spent_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
    <tr class='coll'>
        <td rowspan="2">Total</td>
    	<td><input type='text' name='t1_sanc_amount2_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_amount_spent_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t1_pending_spent_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
</table>


<br/><br/>
<!-- Table 2 -->


<table>
	<tr><th colspan=7><center> Budget Details Of E-Books </center></th></tr>
    <tr>
    	<th>Sr no.</th>
        <th>Collection Detail</th>
        <th>Sanctioned Amount. ( Rs. )</th>
        <th>Department/school</th>
        <th>Sanctioned Amount ( Rs. )</th>
        <th>Amount Spent ( Rs. )</th>
        <th>Pending Amount.</th>
    </tr>
    <tr>
    	<td rowspan=6><center>1</center></td>
        <td rowspan=6><center> E-Books </center></td>
        <td rowspan=6><input type='text' name='t2_sanc_amount1' style='height:100%; width:100%; margin:0;'/></td>
		<td>School Of Arts</td>
        <td><input type='text' name='t2_sanc_amount2_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_amount_spent_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_pending_spent_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
    
    
    <tr>
    	<td>School Of Science</td>
        <td><input type='text' name='t2_sanc_amount2_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_amount_spent_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_pending_spent_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
	</tr>
    <tr>
    	<td>School Of Commerce</td>
    	<td><input type='text' name='t2_sanc_amount2_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_amount_spent_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_pending_spent_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>    </tr>
    <tr>
        <td>Misc</td>
    	<td><input type='text' name='t2_sanc_amount2_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_amount_spent_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_pending_spent_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
    <tr class='coll'>
        <td rowspan="2">Total</td>
    	<td><input type='text' name='t2_sanc_amount2_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_amount_spent_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t2_pending_spent_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
</table>


<br/><br/>
<!-- Table 3 -->


<table>
	<tr><th colspan=7><center> Budget Details Of Journals </center></th></tr>
    <tr>
    	<th>Sr no.</th>
        <th>Collection Detail</th>
        <th>Sanctioned Amount. ( Rs. )</th>
        <th>Department/school</th>
        <th>Sanctioned Amount ( Rs. )</th>
        <th>Amount Spent ( Rs. )</th>
        <th>Pending Amount.</th>
    </tr>
    <tr>
    	<td rowspan=6><center>1</center></td>
        <td rowspan=6><center> Journals </center></td>
        <td rowspan=6><input type='text' name='t3_sanc_amount1' style='height:100%; width:100%; margin:0;'/></td>
		<td>School Of Arts</td>
        <td><input type='text' name='t3_sanc_amount2_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_amount_spent_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_pending_spent_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
    
    
    <tr>
    	<td>School Of Science</td>
        <td><input type='text' name='t3_sanc_amount2_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_amount_spent_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_pending_spent_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
	</tr>
    <tr>
    	<td>School Of Commerce</td>
    	<td><input type='text' name='t3_sanc_amount2_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_amount_spent_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_pending_spent_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>    </tr>
    <tr>
        <td>Misc</td>
    	<td><input type='text' name='t3_sanc_amount2_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_amount_spent_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_pending_spent_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
    <tr class='coll'>
        <td rowspan="2">Total</td>
    	<td><input type='text' name='t3_sanc_amount2_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_amount_spent_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t3_pending_spent_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
</table>



<br/><br/>
<!-- Table 4 -->

<table>
	<tr><th colspan=7><center> Budget Details Of E-Journals </center></th></tr>
    <tr>
    	<th>Sr no.</th>
        <th>Collection Detail</th>
        <th>Sanctioned Amount. ( Rs. )</th>
        <th>Department/school</th>
        <th>Sanctioned Amount ( Rs. )</th>
        <th>Amount Spent ( Rs. )</th>
        <th>Pending Amount.</th>
    </tr>
    <tr>
    	<td rowspan=6><center>1</center></td>
        <td rowspan=6><center> E-Journals </center></td>
        <td rowspan=6><input type='text' name='t4_sanc_amount1' style='height:100%; width:100%; margin:0;'/></td>
		<td>School Of Arts</td>
        <td><input type='text' name='t4_sanc_amount2_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_amount_spent_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_pending_spent_sa' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
    
    
    <tr>
    	<td>School Of Science</td>
        <td><input type='text' name='t4_sanc_amount2_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_amount_spent_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_pending_spent_ss' style='height:100%; width:100%; padding:0; margin:0;'/></td>
	</tr>
    <tr>
    	<td>School Of Commerce</td>
    	<td><input type='text' name='t4_sanc_amount2_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_amount_spent_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_pending_spent_sc' style='height:100%; width:100%; padding:0; margin:0;'/></td>    </tr>
    <tr>
        <td>Misc</td>
    	<td><input type='text' name='t4_sanc_amount2_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_amount_spent_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_pending_spent_sm' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
    <tr class='coll'>
        <td rowspan="2">Total</td>
    	<td><input type='text' name='t4_sanc_amount2_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_amount_spent_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
        <td><input type='text' name='t4_pending_spent_tt' style='height:100%; width:100%; padding:0; margin:0;'/></td>
    </tr>
</table>
</center>
</form>