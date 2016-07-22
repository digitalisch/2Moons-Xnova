<?php

class ShowBancoPage extends AbstractPage
{
            
	function __construct() 
	{
		parent::__construct();
	}
	
	function show(){
		global $USER, $PLANET, $LNG, $UNI, $CONF,$resource,$pricelist;
		
	
	$this->tplObj->loadscript("jquery.countdown.js");
		$this->tplObj->assign_vars(
				array(
                                'bankm' => pretty_number($USER['bankm']),
                                'bankc' => pretty_number($USER['bankc']),
                                'bankd' => pretty_number($USER['bankd']),
                                        )
		);
		$this->display("page.banco.default.tpl");
	}
}