<div id="leftmenu">
	<ul id="menu">
		<br>
		<center><a href="game.php?page=alliance"style="color:white">{$LNG.lm_alliance}</a></center>
		<center><a href="game.php?page=board" target="forum"style="color:white">{$LNG.lm_forums}</a></center>
		<center><a href="game.php?page=statistics"style="color:white">{$LNG.lm_statistics}</a></center>
		<center><a href="game.php?page=records"style="color:white">{$LNG.lm_records}</a></center>
		<center><a href="game.php?page=battleHall"style="color:white">{$LNG.lm_topkb}</a></center>
		<center><a href="game.php?page=search"style="color:white">{$LNG.lm_search}</a></center>
		<center><a href="#" onclick="return Dialog.Chat();"style="color:white">{$LNG.lm_chat}</a></center>
		<center><a href="game.php?page=ticket"style="color:white">{$LNG.lm_support}</a></center>
		<center><a href="game.php?page=questions"style="color:white">{$LNG.lm_faq}</a></center>
		<center><a href="game.php?page=banList"style="color:white">{$LNG.lm_banned}</a></center>
		<center><a href="#" onclick="return Dialog.rules();"style="color:white">{$LNG.lm_rules}</a></center>
		<center><a><br></a></center>
		<center><a href="game.php?page=messages"style="color:white">{$LNG.lm_messages}{nocache}{if $new_message > 0}<span style="color:lime;"id="newmes"> (<span id="newmesnum">{$new_message}</span>)</span>{/if}{/nocache}</a></center>
		<center><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"style="color:white">{$LNG.lm_notes}</a></center>
		<center><a href="game.php?page=buddyList"style="color:white">{$LNG.lm_buddylist}</a></center>
		<center><a href="game.php?page=settings"style="color:white">{$LNG.lm_options}</a></center>
		<center><a href="index.php?page=disclamer" target="_blank"style="color:white">{$LNG.lm_disclamer}</a></center>
		<center><a href="game.php?page=logout"><img src="./styles/theme/gow/img/logout.png"title="{$LNG.lm_logout}"></a>
	</ul>
</div>