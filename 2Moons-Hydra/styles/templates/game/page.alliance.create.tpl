{block name="title" prepend}{$LNG.lm_alliance}{/block}
{block name="content"}
<form action="game.php?page=alliance&amp;mode=create&amp;action=send" method="POST">
	
	
	<div class="grid_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon time">{$LNG.al_make_alliance}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content">
		
	<table class="table519">
		<tr>
			<th colspan=2>{$LNG.al_make_alliance}</th>
		</tr>
		<tr>
			<td>{$LNG.al_make_ally_tag_required}</td>
			<td><input type="text" name="atag" size="8" maxlength="8" value=""></td>
		</tr>
		<tr>
			<td>{$LNG.al_make_ally_name_required}</th>
			<td><input type="text" name="aname" size="20" maxlength="30" value=""></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" value="{$LNG.al_make_submit}"></td>
		</tr>
	</table>
		
	</div>
	<!-- Box Content: End -->
	
</div>

</form>
{/block}