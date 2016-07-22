<?php
 
class ShowPaymentsPage extends AbstractPage 
{
	public static $requireModule = 0;
	function __construct() 
	{
parent::__construct();
	}

function show()
{
	global $USER, $PLANET, $LNG, $CONF, $reslist, $resource;
	
	$Button = $_GET['payment'];
	$ID = $_GET['token'];
	$DarkMatter = $USER['darkmatter'];
	$Premium = $USER['premium_time'];
	$Payment = $USER['payments'];
	
$PremiumTime1 = 2592000 + TIMESTAMP; // 1 Month in Seconds (Same as 30*24*3600)
$PremiumTime2 = 5184000 + TIMESTAMP; // 3 Months in Seconds (Same as 60*24*3600)
$PremiumTime3 = 7776000 + TIMESTAMP; // 6 Months in Seconds (Same as 90*24*3600)
$PremiumRebuy1 = 2592000; // 1 Month in Seconds (Same as 30*24*3600)
$PremiumRebuy2 = 5184000; // 3 Months in Seconds (Same as 60*24*3600)
$PremiumRebuy3 = 7776000; // 6 Months in Seconds (Same as 90*24*3600)
	
######################################################################################
######### Badge Achievements Level 1

	if($USER['achievements_badge1'] == 0)
	{
	if($USER['achievements'] >= 20)
		{
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_badge1` = 1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `achievements_badge` = achievements_badge+1 WHERE `id` = ".$USER['id'].";");
	$GLOBALS['DATABASE']->query("UPDATE ".USERS." SET `darkmatter` = darkmatter + '".$achievement1_darkmatter."' WHERE `id` = ".$USER['id'].";");
	
	$this->printMessage(sprintf($LNG['achievements_badge1_success']),"?page=achievement",4);
		
}
	if($USER['achievements'] >= 20)
	$badge1_req1 = '<span style="color:lime">'.$LNG['achievements_badge1_require_1'].'</span>';
else
	$badge1_req1 = '<span style="color:red">'.$LNG['achievements_badge1_require_1'].'</span>';


$this->tplObj->assign_vars(array(
	'badge1_req1'    	=> $badge1_req1,
	'badge1_title'    => ' <span style="color:red">'.$LNG['achievements_badge1'].'</span>',
	'badge1_img'    => ' <img border="1" src="styles/achievements/locked.png" align="top" width="80" height="80"></td>',
));
	}
	
if($USER['achievements_badge1'] == 1)
	{
$this->tplObj->assign_vars(array(
	'badge1_title'    => ' <span style="color:lime">'.$LNG['achievements_badge1'].'</span>',
	'badge1_req1'    => ' <span style="color:lime">'.$LNG['achievements_badge1_done'].'</span>',
	'badge1_img'    => ' <img border="1" src="styles/achievements/badge1_done.png" align="top" width="80" height="80"></td>',
));
	}
	
	
######### DO NOT CHANGE ANYTHING THERE, If the "achievement mom" is the same number of missions complete in the category
	
if($USER['achievements_badge'] < 4)
	{
$this->tplObj->assign_vars(array(
	'badge_title'    => ' <span style="color:red">'.$LNG['achievements_badge'].'</span>',
));
	}
	
if($USER['achievements_badge'] >= 4)
	{
$this->tplObj->assign_vars(array(
	'badge_title'    => ' <span style="color:lime">'.$LNG['achievements_badge'].'</span>',
));
	}


	$this->tplObj->assign_vars(array(
		));
	
	$this->display('page.payments.body.tpl');
 }
}
?>
