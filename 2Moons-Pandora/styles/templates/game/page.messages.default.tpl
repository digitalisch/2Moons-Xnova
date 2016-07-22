{block name="title" prepend}{$LNG.lm_messages}{/block}
{block name="content"}
<table style="width:760px;table-layout:fixed;">
	<tr>
		<th colspan="3">{$LNG.mg_overview}<span id="loading" style="display:none;"> ({$LNG.loading})</span></th>
	</tr>
	<tr>
		<th colspan="1">Type</th>
		<th colspan="1">New Messages</th>
		<th colspan="1">All Messages</th>
	</tr>
		{foreach $CategoryList as $CategoryID => $CategoryRow}
		{if ($CategoryRow@iteration % 1) === 1}<tr>{/if}
		{if $CategoryRow@last && ($CategoryRow@iteration % 1) !== 0}<td>&nbsp;</td>{/if}
		<td>
			<a href="#" onclick="Message.getMessages({$CategoryID});return false;" style="color:{$CategoryRow.color};">
				{$LNG.mg_type.{$CategoryID}}
			</a>
		</td>
		<td style="word-wrap: break-word;color:{$CategoryRow.color};">
			<span id="unread_{$CategoryID}">
				{$CategoryRow.unread}
			</span>
		</td>
		<td style="word-wrap: break-word;color:{$CategoryRow.color};">
			<span id="total_{$CategoryID}">
				{$CategoryRow.total}
			</span>
		</td>
		{if $CategoryRow@last || ($CategoryRow@iteration % 1) === 0}</tr>{/if}
		{/foreach}
</table>
<table style="width:760px;table-layout:fixed;">
	<tr>
		<th>{$LNG.mg_game_operators}</th>
	</tr>
	{foreach $OperatorList as $OperatorName => $OperatorEmail}
	<tr>
		<td>{$OperatorName}<a href="mailto:{$OperatorEmail}" title="{$LNG.mg_write_mail_to_ops} {{$OperatorName}}"><img src="{$dpath}img/m.gif" alt=""></a></td>
	</tr>
	{/foreach}
</table>
{/block}
{block name="script" append}
{if !empty($category)}
<script>$(function() {
	Message.getMessages({$category}, {$side});
})</script>
{/if}
{/block}