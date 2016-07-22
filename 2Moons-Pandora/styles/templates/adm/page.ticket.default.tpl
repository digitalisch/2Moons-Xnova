{include file="overall_header.tpl"}
<table width="70%" cellpadding="2" cellspacing="2">
	<tr>
		<th colspan="7">{$LNG.ti_header}</th>
	</tr>
	<th colspan="7"><font color=red>Support</font></th>
	<tr>
		<th style="width:10%;color:yellow;">{$LNG.ti_id}</td>
		<th style="width:10%;color:yellow;">{$LNG.ti_username}</td>
		<th style="width:40%;color:yellow;">{$LNG.ti_subject}</td>
		<th style="width:10%;color:yellow;">{$LNG.ti_answers}</td>
		<th style="width:15%;color:yellow;">{$LNG.ti_date}</td>
		<th style="width:15%;color:yellow;">{$LNG.ti_status}</td></font>
	</tr>	
	{foreach $ticketList as $TicketID => $TicketInfo}
	{if  $TicketInfo.status < 2 && $TicketInfo.categoryID == 1}
	<tr>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">#{$TicketID}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.username}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.subject}</a></td>
		<td>{$TicketInfo.answer - 1}</td>
		<td>{$TicketInfo.time}</td>
		<td>{if $TicketInfo.status == 0}<span style="color:green">{$LNG.ti_status_open}</span>{elseif $TicketInfo.status == 1}<span style="color:orange">{$LNG.ti_status_answer}</span>{/if}</td>
	</tr>
	{/if}
	{/foreach}
	<th colspan="7"><font color=red>Bugs und Fehler</font></th>
	<tr>
		<th style="width:10%;color:yellow;">{$LNG.ti_id}</td>
		<th style="width:10%;color:yellow;">{$LNG.ti_username}</td>
		<th style="width:40%;color:yellow;">{$LNG.ti_subject}</td>
		<th style="width:10%;color:yellow;">{$LNG.ti_answers}</td>
		<th style="width:15%;color:yellow;">{$LNG.ti_date}</td>
		<th style="width:15%;color:yellow;">{$LNG.ti_status}</td></font>
	</tr>	
	{foreach $ticketList as $TicketID => $TicketInfo}
	{if  $TicketInfo.status < 2 && $TicketInfo.categoryID == 2}
	<tr><font color=yellow>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">#{$TicketID}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.username}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.subject}</a></td>
		<td>{$TicketInfo.answer - 1}</td>
		<td>{$TicketInfo.time}</td>
		<td>{if $TicketInfo.status == 0}<span style="color:green">{$LNG.ti_status_open}</span>{elseif $TicketInfo.status == 1}<span style="color:orange">{$LNG.ti_status_answer}</span>{/if}</td>
	</tr>
	{/if}
	{/foreach}
	<th colspan="7"><font color=red>W&uuml;nsche und Ideen</font></th>
	<tr><font color=yellow>
		<th style="width:10%;color:yellow;">{$LNG.ti_id}</td>
		<th style="width:10%;color:yellow;">{$LNG.ti_username}</td>
		<th style="width:40%;color:yellow;">{$LNG.ti_subject}</td>
		<th style="width:10%;color:yellow;">{$LNG.ti_answers}</td>
		<th style="width:15%;color:yellow;">{$LNG.ti_date}</td>
		<th style="width:15%;color:yellow;">{$LNG.ti_status}</td></font>
	</tr>	
	{foreach $ticketList as $TicketID => $TicketInfo}
	{if  $TicketInfo.status < 2 && $TicketInfo.categoryID == 3}
	<tr>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">#{$TicketID}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.username}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.subject}</a></td>
		<td>{$TicketInfo.answer - 1}</td>
		<td>{$TicketInfo.time}</td>
		<td>{if $TicketInfo.status == 0}<span style="color:green">{$LNG.ti_status_open}</span>{elseif $TicketInfo.status == 1}<span style="color:orange">{$LNG.ti_status_answer}</span>{/if}</td>
	</tr>
	{/if}
	{/foreach}
	<th colspan="7"><font color=red>Fremdwerbung</font></th>
	<tr><font color=yellow>
		<th style="width:10%;color:yellow;">{$LNG.ti_id}</td>
		<th style="width:10%;color:yellow;">{$LNG.ti_username}</td>
		<th style="width:40%;color:yellow;">{$LNG.ti_subject}</td>
		<th style="width:10%;color:yellow;">{$LNG.ti_answers}</td>
		<th style="width:15%;color:yellow;">{$LNG.ti_date}</td>
		<th style="width:15%;color:yellow;">{$LNG.ti_status}</td></font>
	</tr>	
	{foreach $ticketList as $TicketID => $TicketInfo}
	{if  $TicketInfo.status < 2 && $TicketInfo.categoryID == 4}
	<tr>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">#{$TicketID}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.username}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.subject}</a></td>
		<td>{$TicketInfo.answer - 1}</td>
		<td>{$TicketInfo.time}</td>
		<td>{if $TicketInfo.status == 0}<span style="color:green">{$LNG.ti_status_open}</span>{elseif $TicketInfo.status == 1}<span style="color:orange">{$LNG.ti_status_answer}</span>{/if}</td>
	</tr>
	{/if}
	{/foreach}
	<tr>
		<th colspan="7">{$LNG.ti_status_closed}</th>
	</tr>
	<tr>
		<th style="width:10%">{$LNG.ti_id}</td>
		<th style="width:10%">{$LNG.ti_username}</td>
		<th style="width:40%">{$LNG.ti_subject}</td>
		<th style="width:10%">{$LNG.ti_answers}</td>
		<th style="width:15%">{$LNG.ti_date}</td>
		<th style="width:15%">{$LNG.ti_status}</td>
	</tr>
	{foreach $ticketList as $TicketID => $TicketInfo}	
	{if $TicketInfo.status == 2}
	<tr>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">#{$TicketID}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.username}</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.subject}</a></td>
		<td>{$TicketInfo.answer - 1}</td>
		<td>{$TicketInfo.time}</td>
		<td><span style="color:red">{$LNG.ti_status_closed}</span></td>
	</tr>
	{/if}
	{/foreach}
</table>
{include file="overall_footer.tpl"}