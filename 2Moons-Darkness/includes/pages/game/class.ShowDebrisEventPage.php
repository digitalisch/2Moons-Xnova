<?php

class ShowDebrisEventPage extends AbstractPage
{
	public static $requireModule = 0;

	function __construct() 
	{
		parent::__construct();
	}
	
	private function randRange($min, $max, $count){
    $range = array();
	$i=0;
    while($i++ < $count){
        while(in_array($num = mt_rand($min, $max), $range)){}
			$range[] = $num;
    }
    return $range;
		}
	function show() 
	{
	global $CONF;
		
		//let's create some asteroids
		
		//luam random de galaxy, apoi random de systeme si apoi verificam daca avem in acel sistem loc gol
		//daca da atunci pe locul gol punem o planeta de tip asteroid
		$galaxy = $this->randRange(1,9,4);
		foreach($galaxy as $Element){
			//$Element -> valoarea galaxiei dorite
			$system = $this->randRange(1,400,40);

			//facem cautarea daca are slot liber
			foreach($system as $System_Element){

				//planet location random
				$planets = rand(1,15);
				$cautare = $GLOBALS['DATABASE']->query("SELECT *FROM ".PLANETS." where `galaxy` = '".$Element."' and `system` = '".$System_Element."' and `planet` = '".$planets."';");
				if($GLOBALS['DATABASE']->numRows($cautare)==0){
					//create asteroid planets
					$metal_rand = Config::get('asteroid_metal');
					$crystal_rand = Config::get('asteroid_crystal');
				      $deuterium_rand= Config::get('asteroid_deuterium');
					$GLOBALS['DATABASE']->query("INSERT INTO ".PLANETS."(`name`,`id_owner`,`universe`,`galaxy`,`system`,`planet`,`planet_type`,`image`,`diameter`,`metal`,`crystal`,`deuterium`,`last_update`) 
						VALUES('Asteroid','".Asteroid_Id."','1','".$Element."','".$System_Element."','".$planets."','1','asteroid','9800','".$metal_rand."','".$crystal_rand."','".$deuterium_rand."','".TIMESTAMP."');");
					
				}
                
                                
                                }
			}
                        $totalPremiums = $GLOBALS['DATABASE']->query("SELECT DISTINCT `id` FROM ".USERS.";");
                while($xy = $GLOBALS['DATABASE']->fetch_array($totalPremiums)){
                $message = "Asteroid Event started<br>
Every asteroid that you harvest will bring 750 DM.<br><br>

Das Asteroiden-Event hat begonnen<br>
Jeder Asteroid den ihr erntet bringt euch 750 DM.<br><br>

Evenement Asteroid a commencé<br>
Chaque Asteroid recyclé vous rapportera en plus 750 MN";
                SendSimpleMessage($xy['id'], 1, TIMESTAMP, 50, "Event System", "Event Info", $message);
                }
		}
		public function DeleteAsteroidPlanets(){
			$GLOBALS['DATABASE']->query("DELETE FROM ".PLANETS." where `id_owner` = '".Asteroid_Id."' ;");
		//all asteroids have been deleted
		}
}