{block name="title" prepend}{$LNG.lm_messages}{/block}
{block name="content"}
<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_messages}</div>
<div class="contents">
<table style="width:100%">	<tr>
		<th colspan="3">{$LNG.mg_overview}<span id="loading" style="display:none;"> ({$LNG.loading})</span></th>
	</tr>
		{foreach $CategoryList as $CategoryID => $CategoryRow}
		{if ($CategoryRow@iteration % 3) === 1}<tr>{/if}
		{if $CategoryRow@last && ($CategoryRow@iteration % 3) !== 0}<td>&nbsp;</td>{/if}
		<td style="word-wrap: break-word;color:{$CategoryRow.color};"><a href="#" onclick="Message.getMessages({$CategoryID});return false;" style="color:{$CategoryRow.color};">{$LNG.mg_type.{$CategoryID}}</a>
		<br><span id="unread_{$CategoryID}">{$CategoryRow.unread}</span>/<span id="total_{$CategoryID}">{$CategoryRow.total}</span>
		</td>
		{if $CategoryRow@last || ($CategoryRow@iteration % 3) === 0}</tr>{/if}
		{/foreach}
</table>
</div>
</div>
</div>
</div>
</section>
{/block}
{block name="script" append}
{if !empty($category)}
<script>$(function() {
	Message.getMessages({$category}, {$side});
})</script>
{/if}
{/block}