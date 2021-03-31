<?php
include('dbclass.php');
$db=new database();

function curPageURL() {
	$pageURL = 'http://';
	$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	//$pageURL .= $_SERVER["SERVER_NAME"].$_SERVER['PHP_SELF'];
	return $pageURL;
}
	
function year($pauid) {
$sql="SELECT year FROM `pau` WHERE pau_id=".$pauid;
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$year=$row['year'];
return $year;
}

function newmail($type, $year) {
$sql="SELECT ts_id FROM tapal_sub WHERE tapal_sub.type_id=".$type." AND tapal_sub.read_status='N' AND tapal_sub.t_id!=0 AND tapal_sub.f_year_id=".$year;
$res=mysql_query($sql);
$result=mysql_num_rows($res);
return $result;
}

function panchayath($pid) {
$sql="SELECT p_name FROM `panchayath` WHERE p_id=".$pid;
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$panchayath=$row['p_name'];
return $panchayath;
}

function ward($wid) {
$sql="SELECT w_name FROM `ward` WHERE w_id=".$wid;
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$ward=$row['w_name'];
return $ward;
}

function category($catid) {
$sql="SELECT cat_name FROM `category` WHERE cat_id=".$catid;
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$category=$row['cat_name'];
return $category;
}

function user($uid) {
$sql="SELECT name FROM `user` WHERE u_id=".$uid;
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$user=$row['name'];
return $user;	
}

function fullname($uid) {
$sql="SELECT firstname, lastname FROM `user` WHERE u_id=".$uid;
$res=mysql_query($sql);
$row=mysql_fetch_array($res);
$fullname=$row['firstname'].' '.$row['firstname'];
return $fullname;	
}

function remarks($id) {
$sql_re="SELECT remark, u_id FROM iay_remark WHERE sp_id=".$id;
	$re_result=mysql_query($sql_re);
	if(mysql_num_rows($re_result)>0){
		$remarks='<td style="text-align:center"><span style="cursor:pointer; font-weight:bold; color:#090" onmouseover="tooltip(';
		$remarks.="'";
		while($re_row=mysql_fetch_array($re_result))
			$remarks.= '<b>'.user($re_row['u_id']).':</b> '.$re_row['remark'].'<br><br>';
		$remarks.="'";
		$remarks.=');" onmouseout="exit();">Remarks</span></td>';
	}
	else
		$remarks='<td style="text-align:center; color:#F00">No Remarks</td>';
	
return $remarks;
}

function desig($type_id){
	$sql='SELECT type FROM user_type WHERE type_id='.$type_id;
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	return $row['type'];
}

function dateto($date){
	$date_fra=explode('-',$date);
	$output=$date_fra[2].'-'.$date_fra[1].'-'.$date_fra[0];
	return $output;
}

function listmonth(){
	$sql='SELECT * FROM month';
	$result=mysql_query($sql);
	$output='';
	while($row=mysql_fetch_array($result))
		$output.='<option value="'.$row['m_id'].'">'.$row['m_name'].'</option>';
	return $output;	
}

function mname($mid){
	$sql='SELECT m_name FROM month WHERE m_id='.$mid;
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	return $row['m_name'];
}


function genPagination($total,$currentPage,$baseLink,$nextPrev=true,$limit=10)
{
    if(!$total OR !$currentPage OR !$baseLink)
    {
        return false;
    }
        
    //Total Number of pages
    $totalPages = ceil($total/$limit);
    
    //Text to use after number of pages
    $txtPagesAfter = ($totalPages==1)? " page": " pages";
    
    //Start off the list.
    $txtPageList ='Total '.$totalPages.$txtPagesAfter.' : ';
    
    //Show only 3 pages before current page(so that we don't have too many pages)
    $min = ($currentPage-10 > 0) ? $currentPage-10 : 1;
    
    //Show only 3 pages after current page(so that we don't have too many pages)
    $max = ($currentPage + 10 > $totalPages) ? $totalPages : $currentPage+10;
    
    //Variable for the actual page links
    $pageLinks = "";
    
    //Loop to generate the page links
    for($i=$min;$i<=$max;$i++)
    {
        if($currentPage==$i)
        {
            //Current Page
            $pageLinks .= '<b class="pagination_selected">'.$i.'</b>';
        }
        else
        {
            $pageLinks .= '<a href="'.$baseLink.$i.'" class="pagination">'.$i.'</a>';
        }
    }
    
    if($nextPrev)
    {
        //Next and previous links
        $next = ($currentPage + 1 > $totalPages) ? false : '<a class="pagination_ex" href="'.$baseLink.($currentPage + 1).'">Next</a>';
        
        $prev = ($currentPage - 1 <= 0 ) ? false : '<a class="pagination_ex" href="'.$baseLink.($currentPage - 1).'">Previous</a>';
    }
    
    return $txtPageList.$prev.$pageLinks.$next;
    
} 

function payitem_name($epi_id){
$sql='SELECT allowance FROM employee_pay_items WHERE epi_id='.$epi_id;
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
return $row['allowance'];
}
function payitem_status($epi_id){
$sql='SELECT status FROM employee_pay_items WHERE epi_id='.$epi_id;
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
return $row['status'];
}

function e_officer($id) {
	$sql='SELECT imp_officer_designation FROM extension_office WHERE eo_id='.$id;
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	return $row['imp_officer_designation'];
}
function e_head_of_acc($id){
	if($id!=0){
		$sql='SELECT head_of_account FROM e_head_of_account WHERE eha_id='.$id;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		return $row['head_of_account'];
	}
	else
		return '&nbsp;';
}

function filestatus($hc,$hcs,$hcr,$bdo,$bdos,$bdor) {
	if($hc=='N' && $hcs=='N'){
		if($hcr=='')
			return '<span style="color:#00C; font-weight:bold">Section forwarded file to Head Clerk</span>';
		else
			return '<span style="color:#00C; font-weight:bold">Remark from Head Clerk to Section</span>';
	}		
	else if($hc=='Y' && $bdo=='N' && $bdos=='N'){
		if($bdor=='')
			return '<span style="color:#060; font-weight:bold">File approved by Head Clerk</span>';
		else
			return '<span style="color:#00C; font-weight:bold">Remark from BDO to Section</span>';
	}	
	else if($hc=='N' && $hcs=='Y' && $bdo=='N' && $bdos=='N')
		return '<span style="color:#F00; font-weight:bold">Emergency file! Section forwarded to BDO</span>';
	else if($hcs=='Y' && $bdos=='Y')
		return '<span style="color:#F00; font-weight:bold">Emergency file! Section self approved</span>';
	else if($hc=='Y' && $hcs=='N' && $bdo=='N' && $bdos=='Y')
		return '<span style="color:#F00; font-weight:bold">Emergency file! Head Clerk approved</span>';
	else if($bdo=='Y')
		return '<span style="color:#060; font-weight:bold">File approved by BDO</span>';
	else
		return '<span style="color:#00C; font-weight:bold">Waiting for status update</span>';
}

function single_filestatus($hcs,$bdos) {
	if($hcs=='Y' && $bdos=='Y')
		return '<span style="color:#F00; font-weight:bold">Emergency file! Section self approved</span>';
	else if($hcs=='Y' && $bdos=='N')
		return '<span style="color:#F00; font-weight:bold">Emergency file! Section Forwarded to BDO without Head Clerk\'s approval</span>';
	else if($hcs=='N' && $bdos=='Y')
		return '<span style="color:#F00; font-weight:bold">Emergency file! Head Clerk approved without BDO\'s approval</span>';
	else
		return NULL;
}

function file_forwaded($hcs,$bdos) {
	if($hcs=='Y' && $bdos=='Y')
		return 'Section';
	else if($hcs=='Y' && $bdos=='N')
		return 'Block DEvelopment Officer';
	else if($hcs=='N' && $bdos=='N')
		return 'Head Clerk';
	else
		return '&nbsp;';
}

function c_fund($id){
if($id!=0)
	{
		$sql='SELECT fund_name FROM project_fund_type WHERE pft_id='.$id;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		return $row['fund_name'];
	}
	else
		return NULL;	
}
function c_source_fund($id){
if($id!=0)
	{
		$sql='SELECT source_fund FROM project_source_fund WHERE psf_id='.$id;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		return $row['source_fund'];
	}
	else
		return NULL;	
}
function c_project_show_type($id){
	if($id!=0)
	{
		$sql='SELECT ptype_name FROM project_types WHERE pt_id='.$id;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		return $row['ptype_name'];
	}
	else
		return NULL;	
}
function c_project_mode($id){
	if($id!=0)
	{
		$sql='SELECT implementation_mode FROM project_implementation_mode WHERE pim_id='.$id;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		return $row['implementation_mode'];
	}
	else
		return NULL;		
}
function c_head_ofaccount($id)
{
	if($id!=0)
	{
		$sql='SELECT head_of_account FROM project_headof_account WHERE pha_id='.$id;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		return $row['head_of_account'];
	}
	else
		return NULL;
}
function a_head_account($id)
{
	if($id!=0)
	{
		$sql='SELECT head FROM a_headof_accounts WHERE aha_id='.$id;
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		return $row['head'];
	}
	else
		return NULL;
}

?>