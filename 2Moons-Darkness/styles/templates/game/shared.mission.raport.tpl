{block name="title" prepend}{$pageTitle}{/block}
{block name="content"}
{if isset($Info)}
<table style="width:100%">
	<tr>
		<td class="transparent" style="width:40%;font-size:22px;font-weight:bold;padding:10px 0 30px;color:{if $Raport.result == "a"}lime{elseif $Raport.result == "r"}red{else}white{/if}">{$Info.0}</td>
		<td class="transparent" style="font-size:22px;font-weight:bold;padding:10px 0 30px;">VS</td>
		<td class="transparent" style="width:40%;font-size:22px;font-weight:bold;padding:10px 0 30px;color:{if $Raport.result == "r"}lime{elseif $Raport.result == "a"}red{else}white{/if}">{$Info.1}</td>
	</tr>
</table>
{/if}
<div style="width:100%;text-align:center">
{if $Raport.mode == 1}{$LNG.sys_destruc_title}{else}{$LNG.sys_attack_title}{/if} 
{$Raport.time}:<br /><br />
{foreach $Raport.rounds as $Round => $RoundInfo}
<table>
	<tr>
		{foreach $RoundInfo.attacker as $Player}
		{$PlayerInfo = $Raport.players[$Player.userID]}
		<td class="transparent">
			<table>
				<tr>
					<td>
						{$LNG.sys_attack_attacker_pos} {$PlayerInfo.name} {if isset($Info)}([XX:XX:XX]){else}([{$PlayerInfo.koords[0]}:{$PlayerInfo.koords[1]}:{$PlayerInfo.koords[2]}]{if isset($PlayerInfo.koords[3])} ({$LNG.type_planet_short[$PlayerInfo.koords[3]]}){/if}){/if}<br />
						{$LNG.sys_ship_weapon} {$PlayerInfo.tech[0]}% - {$LNG.sys_ship_shield} {$PlayerInfo.tech[1]}% - {$LNG.sys_ship_armour} {$PlayerInfo.tech[2]}%
						<table width="100%">
						{if !empty($Player.ships)}
							<tr>
								<td class="transparent">{$LNG.sys_ship_type}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent"><img src="{$dpath}/gebaeude/{$ShipID}.gif" style="width:50px; height:50px;" /><br />{$LNG.shortNames.{$ShipID}}</td>
								{/foreach}
							</tr>
							<tr style="height:22px;">
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">{$LNG.sys_ship_count}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">{$ShipData[0]|number}</td>
								{/foreach}
							</tr>
							<tr style="height:22px;">
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">{$LNG.sys_ship_weapon}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">{$ShipData[1]|number}</td>
								{/foreach}
							</tr>
							<tr style="height:22px;">
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">{$LNG.sys_ship_shield}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">{$ShipData[2]|number}</td>
								{/foreach}
							</tr>
							<tr style="height:22px;">
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">{$LNG.sys_ship_armour}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">{$ShipData[3]|number}</td>
								{/foreach}
							</tr>
						{else}
							<tr style="height:22px;">
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">
									<br />{$LNG.sys_destroyed}<br /><br />
								</td>
							</tr>
						{/if}
						</table>
					</td>
				</tr>
			</table>
		</td>
		{/foreach}
	</tr>
</table>
<br /><br />
<table>
	<tr>
		{foreach $RoundInfo.defender as $Player}
		{$PlayerInfo = $Raport.players[$Player.userID]}
		<td class="transparent">
			<table>
				<tr>
					<td>
						{$LNG.sys_attack_defender_pos} {$PlayerInfo.name} {if isset($Info)}([XX:XX:XX]){else}([{$PlayerInfo.koords[0]}:{$PlayerInfo.koords[1]}:{$PlayerInfo.koords[2]}]{if isset($PlayerInfo.koords[3])} ({$LNG.type_planet_short[$PlayerInfo.koords[3]]}){/if}){/if}<br />
						{$LNG.sys_ship_weapon} {$PlayerInfo.tech[0]}% - {$LNG.sys_ship_shield} {$PlayerInfo.tech[1]}% - {$LNG.sys_ship_armour} {$PlayerInfo.tech[2]}%
						<table width="100%">
						{if !empty($Player.ships)}
							<tr>
								<td class="transparent">{$LNG.sys_ship_type}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent"><img src="{$dpath}/gebaeude/{$ShipID}.gif" style="width:50px; height:50px;" /><br />{$LNG.shortNames.{$ShipID}}</td>
								{/foreach}
							</tr>
							<tr style="height:22px;" style="padding-left: 10px; padding-right: 10px;">
								<td class="transparent">{$LNG.sys_ship_count}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent">{$ShipData[0]|number}</td>
								{/foreach}
							</tr>
							<tr style="height:22px;" style="padding-left: 10px; padding-right: 10px;">
								<td class="transparent">{$LNG.sys_ship_weapon}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent">{$ShipData[1]|number}</td>
								{/foreach}
							</tr>
							<tr style="height:22px;" style="padding-left: 10px; padding-right: 10px;">
								<td class="transparent">{$LNG.sys_ship_shield}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent">{$ShipData[2]|number}</td>
								{/foreach}
							</tr>
							<tr style="height:22px;" style="padding-left: 10px; padding-right: 10px;">
								<td class="transparent">{$LNG.sys_ship_armour}</td>
								{foreach $Player.ships as $ShipID => $ShipData}
								<td class="transparent">{$ShipData[3]|number}</td>
								{/foreach}
							</tr>
						{else}
							<tr style="height:22px;">
								<td class="transparent" style="padding-left: 10px; padding-right: 10px;">
									<br />{$LNG.sys_destroyed}<br /><br />
								</td>
							</tr>
						{/if}
						</table>
					</td>
				</tr>
			</table>
		</td>
		{/foreach}
	</tr>
</table>
{if !$RoundInfo@last}
{$LNG.fleet_attack_1} {$RoundInfo.info[0]|number} {$LNG.fleet_attack_2} {$RoundInfo.info[3]|number} {$LNG.damage}<br />
{$LNG.fleet_defs_1} {$RoundInfo.info[2]|number} {$LNG.fleet_defs_2} {$RoundInfo.info[1]|number} {$LNG.damage}<br /><br />
{/if}
{/foreach}
<br /><br />
<table>
	<tr><td>
{if $Raport.result == "a"}
{$LNG.sys_attacker_won}<br />
{$LNG.sys_stealed_ressources} {foreach $Raport.steal as $elementID => $amount}{$amount|number} {$LNG.tech.$elementID}{if ($amount@index + 2) == count($Raport.steal)} {$LNG.sys_and} {elseif !$amount@last}, {/if}{/foreach}
{elseif $Raport.result == "r"}
{$LNG.sys_defender_won}
{else}
{$LNG.sys_both_won}
{/if}
<br /><br />
{$LNG.sys_attacker_lostunits} {$Raport['units'][0]|number} {$LNG.sys_units}<br />
{$LNG.sys_defender_lostunits} {$Raport['units'][1]|number} {$LNG.sys_units}<br />
{$LNG.debree_field_1} {foreach $Raport.debris as $elementID => $amount}{$amount|number} {$LNG.tech.$elementID}{if ($amount@index + 2) == count($Raport.debris)} {$LNG.sys_and} {elseif !$amount@last}, {/if}{/foreach}{$LNG.debree_field_2}<br /><br />
{if $Raport.mode == 1}
	{* Destruction *}
	{if $Raport.moon.moonDestroySuccess == -1}
		{* Attack not win *}
		{$LNG.sys_destruc_stop}<br />
	{else}
		{* Attack win *}
		{sprintf($LNG.sys_destruc_lune, "{$Raport.moon.moonDestroyChance}")}<br />{$LNG.sys_destruc_mess1}
		{if $Raport.moon.moonDestroySuccess == 1}
			{* Destroy success *}
			{$LNG.sys_destruc_reussi}
		{elseif $Raport.moon.moonDestroySuccess == 0}
			{* Destroy failed *}
			{$LNG.sys_destruc_null}			
		{/if}
		<br />
		{sprintf($LNG.sys_destruc_rip, "{$Raport.moon.fleetDestroyChance}")}
		{if $Raport.moon.fleetDestroySuccess == 1}
			{* Fleet destroyed *}
			<br />{$LNG.sys_destruc_echec}
		{/if}			
	{/if}
{else}
	{* Normal Attack *}
	{$LNG.sys_moonproba} {$Raport.moon.moonChance} %<br />
	{if !empty($Raport.moon.moonName)}
		{if isset($Info)}
			{* Moon created (HoF Mode) *}
			{sprintf($LNG.sys_moonbuilt, "{$Raport.moon.moonName}", "XX", "XX", "XX")}
		{else}
			{* Moon created *}
			{sprintf($LNG.sys_moonbuilt, "{$Raport.moon.moonName}", "{$Raport.koords[0]}", "{$Raport.koords[1]}", "{$Raport.koords[2]}")}
		{/if}
	{/if}
{/if}
{$Raport.additionalInfo}
</td></tr>
</table>
<style>
hr{
background-color: #c7d4e1;
color: #c7d4e1;
border: none;
height: 1px;
margin: 23px 0 24px;}
</style>
<br><br>
{if $crom == battlehall}
<center>Comments ({$com_number}):

<div id="comments" style="width:500px;color:#090909;">
<ul id="discuss" class="comments" >
{if $comments == "There are no comments"}
    <li style="background: url('images/comments-ruleline.png') no-repeat scroll -3px 0 white; margin: 0 5px 0 17px;padding: 15px 0;list-style: none outside none;">
    {$comments}
    </li>
{else}
{foreach from=$comments key=k item=v}
<li style="background: url('images/comments-ruleline.png') no-repeat scroll -3px 0 white; margin: 0 5px 0 17px;padding: 15px 0;list-style: none outside none;">
    <div style="margin:0px 10px 0px 0px;padding: 0px! important;float:left;">
        <img src="styles/images/no_avatar.png" height="35px" width="35px">
    </div>
    <div style="float: left;font-size: 85%;line-height: 1.7;overflow: hidden;text-overflow: ellipsis;margin:0;padding:0;width:300px;text-align: left;">
       <p>{$v.name} at {$v.time}</p>

            {$v.says}
        </div>
    <div style="clear: both;display: block;font-size: 1px;height: 1px;line-height: 1px;margin-bottom: -1px;"></div>
</li>
{/foreach}
{/if}
</ul>
<div style="background: url('styles/images/comments-ruleline.png') no-repeat scroll -3px 0pt white; margin: 0pt 5px 0pt 57px; padding: 15px 0pt; list-style: none outside none;">
<h2><span style="color:#22A6F3">What do you think?</span></h2> 
<form method="POST" id="addc">
    <ul style="list-style-type:none;">
        <li>
            <textarea name="comment" cols="30" rows="4" style="color:#090909;"></textarea>
        </li>
        <li>
            <input type="hidden" value="{$id_ul_hof}" name="hof">
            <a id="post" style="background: url('styles/images/addto-sbtn-lcap.gif') no-repeat scroll left top transparent;color: #FFFFFF;display: block;float: left; eight: 17px;line-height: 15px;padding: 0 11px;text-decoration: none !important;" href="javascript:void(0);">
                <span style="background: url('styles/images/addto-sbtn-rcap.gif') no-repeat scroll right top transparent;display: block; float: left; height: 17px; padding-right: 2.1em; white-space: nowrap;">
                     Post Comment
                 </span>
            </a>
         <li>
    </ul>
</form>
<div id="rezultat"></div>
</div>
</div>
</center>
{/if}
 <script>
      $(document).ready(function() {
                $("#post").click(function(){
                 $.post('game.php?page=raport&mode=show&gets=add&'+$('#addc').serialize(), function(data) {
		
                $('#rezultat').html(data);
                $.post('game.php?page=raport&mode=show&gets=comments&rid='+$('#addc').serialize(),function(data){
                    $('#discuss').html(data);
                        });
                    });
             });
      });

	</script>
{$Raport.additionalInfo}
</div>
{/block} 