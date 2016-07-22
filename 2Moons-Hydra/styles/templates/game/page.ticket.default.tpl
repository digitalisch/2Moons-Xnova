{block name="title" prepend}{$LNG.lm_support}{/block}
{block name="content"}

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.lm_support}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
		<tr style="height:20px;">
		<td colspan="5"><a href="game.php?page=ticket&amp;mode=create">{$LNG.ti_new}</a></td>
	</tr>
			<thead>
			<th style="width:10%">{$LNG.ti_id}</td>
		<th style="width:45%">{$LNG.ti_subject}</td>
		<th style="width:15%">{$LNG.ti_answers}</td>
		<th style="width:15%">{$LNG.ti_date}</td>
		<th style="width:15%">{$LNG.ti_status}</td>
			</thead>
			<tbody>
	{foreach $ticketList as $TicketID => $TicketInfo}	
	<tr>
		<td><a href="game.php?page=ticket&amp;mode=view&amp;id={$TicketID}">#{$TicketID}</a></td>
		<td><a href="game.php?page=ticket&amp;mode=view&amp;id={$TicketID}">{$TicketInfo.subject}</a></td>
		<td>{$TicketInfo.answer - 1}</td>
		<td>{$TicketInfo.time}</td>
		<td>{if $TicketInfo.status == 0}<span style="color:green">{$LNG.ti_status_open}</span>{elseif $TicketInfo.status == 1}<span style="color:orange">{$LNG.ti_status_answer}</span>{else}<span style="color:red">{$LNG.ti_status_closed}</span>{/if}</td>
	</tr>
	{/foreach}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>


{/block}