<?php

class ShowRefPage extends AbstractPage {

	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}

	function show() {
		
		global $CONF, $LNG, $PLANET, $USER, $resource, $UNI;
		
		$RefLinks		= array();
		
		
		$RefLinksRAW	= $GLOBALS['DATABASE']->query("SELECT u.id, u.username, u.ref_bonus, s.total_points FROM ".USERS." as u LEFT JOIN ".STATPOINTS." as s ON s.id_owner = u.id AND s.stat_type = '1' WHERE ref_id = ".$USER['id'].";");
		
		if(Config::get('ref_active')) 
		{
			while ($RefRow = $GLOBALS['DATABASE']->fetch_array($RefLinksRAW)) {
				$RefLinks[$RefRow['id']]	= array(
					'username'	=> $RefRow['username'],
					'points'	=> $RefRow['total_points'],
					'ref'		=> $RefRow['ref_bonus'],
				);
			}
		}
		
		$query 		= $GLOBALS['DATABASE']->uniquequery("SELECT username FROM ".USERS." WHERE id = '". $USER['ref_id'] ."' ;");
		$refs 		= $GLOBALS['DATABASE']->uniquequery("SELECT count(*) AS ref_count FROM ".USERS." WHERE `ref_id` = '". $USER['id'] ."';");
		

		
			$this->tplObj->assign_vars(array(
				'id'						=> $USER['ref_id'],
				'name'						=> $query['username'],
				'refs'						=> $refs['ref_count'],
				'refmax'					=> makebr(Config::get('ref_max_referals')),
				'ref_active'				=> Config::get('ref_active'),
				'ref_minpoints'				=> Config::get('ref_minpoints'),
				'RefLinks'					=> $RefLinks,
				'path'						=> HTTP_PATH,
			'userid'					=> $USER['id'],
			));
			
				$this->display('page.ref.default.tpl');
			
		}
	}

?>