{block name="title" prepend}{$LNG.achievements_name}{/block}
{block name="content"}
<script type="text/javascript" src="scripts/jQuery.js?v=1829"></script>
    <table>
        <tbody>
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_name}</th>
			</tr>
			<tr>
				<td colspan="3">{$LNG.achievements_desc}</td>
			</tr>
			
			{if $mine > 6}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_mine} - {$mine_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_mine} - {$mine_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=buildings"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_mine_desc} <p> {$LNG.achievements_require} : <p>{$mine_req_1} {$mine_done1}  <p>{$mine_req_2} {$mine_done2}  <p>{$mine_req_3} {$mine_done3}</td>
				<td style="width: 25%;">Reward:<p>{$mine_reward}</td>
            </tr>
			{/if}
			
			{if $research > 6}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_research} - {$research_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_research} - {$research_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=research"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_research_desc} <p> {$LNG.achievements_require} : <p>{$research_req_1} {$research_done1}  <p>{$research_req_2} {$research_done2}  <p>{$research_req_3} {$research_done3}</td>
				<td style="width: 25%;">Reward:<p>{$research_reward}</td>
			</tr>
			{/if}
			
			{if $battle > 6}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_battle} - {$battle_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_battle} - {$battle_lvl}</th>
			</tr>
			<tr>
				<td style="width: 15%;"><a href="game.php?page=fleetTable"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_battle_desc} <p> {$LNG.achievements_require} : <p>{$battle_req_1} {$battle_done1}  <p>{$battle_req_2} {$battle_done2}</td>
				<td style="width: 25%;">Reward:<p>{$battle_reward}</td>
			</tr>
			{/if}
			
			{if $ship > 5}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_ship} - {$ship_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_ship} - {$ship_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=shipyard&mode=fleet"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_ship_desc} <p> {$LNG.achievements_require} : <p>{$ship_req_1} {$ship_done1} <p>{$ship_req_2} {$ship_done2}</td>
				<td style="width: 25%;">Reward:<p>{$ship_reward}</td>
			</tr>
			{/if}
			
			{if $defence > 5}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_defence} - {$defence_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_defence} - {$defence_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=shipyard&mode=defense"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_defence_desc} <p> {$LNG.achievements_require} : <p>{$defence_req_1} {$defence_done1}</td>
				<td style="width: 25%;">Reward:<p>{$defence_reward}</td>
			</tr>
			{/if}
			
			{if $storage > 3}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_storage} - {$storage_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_storage} - {$storage_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=buildings"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_storage_desc} <p> {$LNG.achievements_require} : <p>{$storage_req_1} {$storage_done1}  <p>{$storage_req_2} {$storage_done2}  <p>{$storage_req_3} {$storage_done3}</td>
				<td style="width: 25%;">Reward:<p>{$storage_reward}</td>
			</tr>
			{/if}

			{if $moon > 3}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_moon} - {$moon_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_moon} - {$moon_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=buildings"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_moon_desc} <p> {$LNG.achievements_require} : <p>{$moon_req_1} {$moon_done1}  <p>{$moon_req_2} {$moon_done2}  <p>{$moon_req_3} {$moon_done3}</td>
				<td style="width: 25%;">Reward:<p>{$moon_reward}</td>
			</tr>
			{/if}
			
			{if $colony > 5}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_colony} - {$colony_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_colony} - {$colony_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=fleetTable"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_colony_desc} <p> {$LNG.achievements_require} : <p>{$colony_req_1} {$colony_done1}</td>
				<td style="width: 25%;">Reward:<p>{$colony_reward}</td>
			</tr>
			{/if}
			
			{if $friend > 2}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_friend} - {$friend_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_friend} - {$friend_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=alliance"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_friend_desc} <p> {$LNG.achievements_require} : <p>{$friend_req_1} {$friend_done1}</td>
				<td style="width: 25%;">Reward:<p>{$friend_reward}</td>
			</tr>
			{/if}

			{if $stats > 6}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_statpoints} - {$statpoints_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_statpoints} - {$statpoints_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=statistics"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_statpoints_desc} <p> {$LNG.achievements_require} : <p>{$statpoints_req_1} {$statpoints_done1}</td>
				<td style="width: 25%;">Reward:<p>{$statpoints_reward}</td>
			</tr>	
			{/if}
			
			{if $destroyer > 6}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_destroy} - {$destroy_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_destroy} - {$destroy_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=galaxy"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_destroy_desc} <p> {$LNG.achievements_require} : <p>{$destroy_req_1} {$destroy_done1}</td>
				<td style="width: 25%;">Reward:<p>{$destroy_reward}</td>
			</tr>
			{/if}
			
			{if $debris > 5}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_debris} - {$debris_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_debris} - {$debris_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=galaxy"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_debris_desc} <p> {$LNG.achievements_require} : <p>{$debris_req_1} {$debris_done1}<p>{$debris_m} <p>{$debris_req_2} {$debris_done2}<p>{$debris_c}</td>
				<td style="width: 25%;">Reward:<p>{$debris_reward}</td>
			</tr>
			{/if}	
			
			{if $offi > 4}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_offi} - {$offi_lvl}</th>
			</tr>
			{else}
			<tr>
				<th class=kategorie colspan="3">{$LNG.achievements_typ_offi} - {$offi_lvl}</th>
			</tr>
            <tr>
				<td style="width: 15%;"><a href="game.php?page=officier"><img src="styles/achievements/achievements.png" alt="achievement" width="85" height="85"></a></td>
				<td style="width: 60%;">{$LNG.achievements_offi_desc} <p> {$LNG.achievements_require} : <p>{$offi_req_1} {$offi_done1}</td>
				<td style="width: 25%;">Reward:<p>{$offi_reward}</td>
			</tr>
			{/if}
		</tbody>
    </table>
{/block}