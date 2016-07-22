{block name="title" prepend}{$LNG.lm_messages}{/block}
{block name="content"}


<div class="grid_24">
	
	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon users">{$LNG.mg_overview}<span id="loading" style="display:none;"> ({$LNG.loading})</span></h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
		<!-- Simple Sorting Table + Pagination: Start -->
		<table>
			
			<tbody>
	<tr>
{foreach $CategoryList as $CategoryID => $CategoryRow}
		{if ($CategoryRow@iteration % 6) === 1}<tr>{/if}
		{if $CategoryRow@last && ($CategoryRow@iteration % 6) !== 0}<td>&nbsp;</td>{/if}
		<td style="word-wrap: break-word;color:{$CategoryRow.color};"><a href="#" onclick="Message.getMessages({$CategoryID});return false;" style="color:#666600;">{$LNG.mg_type.{$CategoryID}}</a>
		<br><span style="color:#666600;" id="unread_{$CategoryID}">{$CategoryRow.unread}</span><span style="color:#666600;">/</span><span style="color:#666600;" id="total_{$CategoryID}">{$CategoryRow.total}</span>
		</td>
		{if $CategoryRow@last || ($CategoryRow@iteration % 6) === 0}</tr>{/if}
		{/foreach}
			</tbody>
		</table>
		<!-- Plain Table: End -->
	</div>
	<!-- Box Content: End -->
	
</div>


{/block}
{block name="script" append}
{if !empty($category)}
<script>$(function() {
	Message.getMessages({$category}, {$side});
})</script>
{/if}
{/block}