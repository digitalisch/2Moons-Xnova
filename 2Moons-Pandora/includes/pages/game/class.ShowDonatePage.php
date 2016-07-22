<?php
class ShowDonatePage extends AbstractPage
{	
	public static $requireModule = 0;
	
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		
	$donate		= $USER['donate'];
	
	$this->tplObj->assign_vars(array(
                'user_id' 	=> $USER['id'],
				'donate'	=> $donate,
				)
		);
		$this->display("page.donate.default.tpl");
	}
}
?>