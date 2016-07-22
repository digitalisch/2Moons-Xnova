{block name="title" prepend}{/block}
{block name="content"}
<div id="content">
<table>
		<tr>
			<th colspan="3">{$Campi}</th>
		</tr>
<tr>	<form action="game.php?page=editPlanet&mode=field&sk=change" method="POST" id="rename">
			<td>{$Descr}{$Field}{$Campi}</td>
			<td>{$Buy} 1.000 {$dark}{$descr_field}
			<input value="{$Send}" type="submit"></form></td>
		</tr><tr>
			<th colspan="3">{$Change_img}</th>
		</tr>
<tr>	<form action="game.php?page=editPlanet&mode=image&sk=shows" method="POST" id="rename">
			<td>{$Change_img}</td>
			<td>{$Buy} 10 {$dark}{$Change_img_desc}
			<input value="{$Change}" type="submit"></form></td>
		</tr><tr>
			<th colspan="3">{$Change_pla}</th>
		</tr>
		<tr>	<form action="game.php?page=editPlanet&mode=coord" method="POST" id="rename">
			<td>{$Change_planet} 50.000 {$dark}.</td>
			<td><input name="galaxy" size="20" type="text">
			<input name="system" size="20" value="" type="text">
			<input name="planet" size="20" value="" type="text">
			<input value="{$Change}" type="submit"></form></td>
		</tr>
		</table>
</div>
{/block}