<?php
/*
  This file is part of WOT Game.

    WOT Game is free software: you can redistribute it and/or modify
    it under the terms of the GNU Affero General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    WOT Game is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with WOT Game.  If not, see <http://www.gnu.org/licenses/>.
*/

require_once(WCF_DIR.'lib/action/AbstractAction.class.php');

require_once(LW_DIR.'lib/data/user/alliance/Alliance.class.php');

/**
 * Deletes a user from his alliance.
 * 
 * @author		Biggerskimo
 * @copyright 	2008 Lost Worlds
 */
class AllianceKickUserAction extends AbstractAction {
	protected $allianceID = 0;
	protected $alliance = null;
	protected $userID = 0;

	/**
	 * @see Action::readParameters()
	 */
	public function readParameters() {
		parent::readParameters();
		
		if(isset($_REQUEST['allianceID'])) $this->allianceID = intval($_REQUEST['allianceID']);
		else {
			require_once(WCF_DIR.'lib/system/exception/IllegalLinkException.class.php');
			throw new IllegalLinkException();
		}
		
		if(isset($_REQUEST['userID'])) $this->userID = intval($_REQUEST['userID']);
		else {
			require_once(WCF_DIR.'lib/system/exception/IllegalLinkException.class.php');
			throw new IllegalLinkException();
		}
	}

	/**
	 * @see Action::execute()
	 */
	public function execute() {
		parent::execute();

		// check permission
		if (!WCF::getUser()->userID) {
			require_once(WCF_DIR.'lib/system/exception/PermissionDeniedException.class.php');
			throw new PermissionDeniedException();
		}
				
		$this->alliance = Alliance::getByUserID($this->userID, true);
		$this->user = new LWUser($this->userID);
		
		if($this->userID == WCF::getUser()->userID) {
			require_once(WCF_DIR.'lib/system/exception/PermissionDeniedException.class.php');
			throw new PermissionDeniedException();
		}
		
		if($this->user->ally_id != $this->allianceID) {
			require_once(WCF_DIR.'lib/system/exception/PermissionDeniedException.class.php');
			throw new PermissionDeniedException();
		}
	
		if(!$this->alliance->getRank(true, 6)) {
			require_once(WCF_DIR.'lib/system/exception/PermissionDeniedException.class.php');
			throw new PermissionDeniedException();
		}
		
		$this->alliance->deleteUser($this->userID);
		
		$this->executed();

		header('Location: index.php?page=AllianceMembersList');
		exit;
	}
}
?>