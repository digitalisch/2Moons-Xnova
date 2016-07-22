{block name="title" prepend}{/block}
{block name="content"}
<div id="content">
<table>
		<tr>
			<th colspan="3">{$Campi}</th>
		</tr>
<tr>	<form action="game.php?page=editPlanet&mode=field&sk=change" method="POST" id="rename">
			<td>{$Descr}{$Field}{$Campi}</td>
			<td>{$Buy} 2.000 {$dark}{$descr_field}
			<input value="{$Send}" type="submit"></form></td>
		</tr><tr>
			<th colspan="3">{$Change_img}</th>
		</tr>
<tr>	<form action="game.php?page=editPlanet&mode=image&sk=shows" method="POST" id="rename">
			<td>{$Change_img}</td>
			<td>{$Buy} 200 {$dark}{$Change_img_desc}
			<input value="{$Change}" type="submit"></form></td>
		</tr>
		</table>
</div>
{/block}