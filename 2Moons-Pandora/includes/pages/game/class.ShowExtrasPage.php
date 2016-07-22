<?php

class ShowExtrasPage extends AbstractPage {

	public static $requireModule = 0;

	function __construct() {
		parent::__construct();
	}
	

	function show() {

		{
			$this->display('extras.tpl');
		}
	}
}
?>