{block name="title" prepend}{$LNG.lm_records}{/block}
{block name="content"}

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.tech.0}: {$update}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
					<thead>
				<tr>
	<th width="33%">{$LNG.tech.0}</th>
	<th width="33%">{$LNG.rec_players}</th>
	<th width="33%">{$LNG.rec_level}</th>
				</tr>
			</thead>
			
			<tbody>
{foreach $buildList as $elementID => $elementRow}
<tr>
	<td>{$LNG.tech.{$elementID}}</td>
	{if !empty($elementRow)}
	<td>{foreach $elementRow as $user}<a href='#' onclick='return Dialog.Playercard({$user.userID});'>{$user.username}</a>{if !$user@last}<br>{/if}{/foreach}</td>
	<td>{$elementRow[0].level|number}</td>
	{else}
	<td>-</td>
	<td>-</td>
	{/if}
</tr>
{/foreach}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.tech.100}: {$update}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
					<thead>
				<tr>
	<th width="33%">{$LNG.tech.100}</th>
	<th width="33%">{$LNG.rec_players}</th>
	<th width="33%">{$LNG.rec_level}</th>
				</tr>
			</thead>
			
			<tbody>
{foreach $researchList as $elementID => $elementRow}
<tr>
	<td>{$LNG.tech.{$elementID}}</td>
	{if !empty($elementRow)}
	<td>{foreach $elementRow as $user}<a href='#' onclick='return Dialog.Playercard({$user.userID});'>{$user.username}</a>{if !$user@last}<br>{/if}{/foreach}</td>
	<td>{$elementRow[0].level|number}</td>
	{else}
	<td>-</td>
	<td>-</td>
	{/if}
</tr>
{/foreach}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.tech.200}: {$update}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
					<thead>
				<tr>
	<th width="33%">{$LNG.tech.200}</th>
	<th width="33%">{$LNG.rec_players}</th>
	<th width="33%">{$LNG.rec_level}</th>
				</tr>
			</thead>
			
			<tbody>
{foreach $fleetList as $elementID => $elementRow}
<tr>
	<td>{$LNG.tech.{$elementID}}</td>
	{if !empty($elementRow)}
	<td>{foreach $elementRow as $user}<a href='#' onclick='return Dialog.Playercard({$user.userID});'>{$user.username}</a>{if !$user@last}<br>{/if}{/foreach}</td>
	<td>{$elementRow[0].level|number}</td>
	{else}
	<td>-</td>
	<td>-</td>
	{/if}
</tr>
{/foreach}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>

<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.tech.400}: {$update}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
					<thead>
				<tr>
	<th width="33%">{$LNG.tech.400}</th>
	<th width="33%">{$LNG.rec_players}</th>
	<th width="33%">{$LNG.rec_level}</th>
				</tr>
			</thead>
			
			<tbody>
{foreach $defenseList as $elementID => $elementRow}
<tr>
	<td>{$LNG.tech.{$elementID}}</td>
	{if !empty($elementRow)}
	<td>{foreach $elementRow as $user}<a href='#' onclick='return Dialog.Playercard({$user.userID});'>{$user.username}</a>{if !$user@last}<br>{/if}{/foreach}</td>
	<td>{$elementRow[0].level|number}</td>
	{else}
	<td>-</td>
	<td>-</td>
	{/if}
</tr>
{/foreach}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>


{/block}