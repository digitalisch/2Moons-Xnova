{block name="title" prepend}{$LNG.an_an}{/block}
{if !$NotBuilding}
{block name="content"}

<table style="width:100%"><form action="" method="post">
<input name="action" value="in" type="hidden">
<td class="c" colspan="7"><center><font color="#00FF00">{$LNG.an_anb}</font></center></td></tr>
<tr><th colspan="3"><center>{$LNG.an_sellres}</center></th></tr>
<tr><th><center>{$LNG.Metal}</center></th><th><center>{$LNG.Crystal}</center></th><th><center>{$LNG.Deuterium}</center></th></tr>
<tr><th><center><input name="metallinn" value="0" type="text"></center></th>
<th><center><input name="kristallinn" value="0" type="text"></center></th>
<th><center><input name="deyterinn" value="0" type="text"></center></th></tr>

<tr><th colspan="3"><center>{$LNG.an_buyres}</center></th></tr>
<tr><th><center>{$LNG.Metal}</center></th><th><center>{$LNG.Crystal}</center></th><th><center>{$LNG.Deuterium}</center></th></tr>
<tr><th><center><input name="metalloutt" value="0" type="text"></center></th>
<th><center><input name="kristalloutt" value="0" type="text"></center></th>
<th><center><input name="deyteroutt" value="0" type="text"></center></th></tr>

<tr><th colspan="3"><center>{$LNG.an_action}</center></th></tr>
<tr><td colspan="3"><center><input value="{$LNG.an_expose}" type="submit"></center></td></tr>
</form></table>
<br><br><br><br><br>
{if $userallyid != 0}
<table style="width:100%"><form action="" method="post">
<input name="action" value="inally" type="hidden">
<td class="c" colspan="7"><center><font color="#00FF00">{$LNG.an_anb_ally}</font></center></td></tr>
<tr><th colspan="3"><center>{$LNG.an_sellres}</center></th></tr>
<tr><th><center>{$LNG.Metal}</center></th><th><center>{$LNG.Crystal}</center></th><th><center>{$LNG.Deuterium}</center></th></th></tr>
<tr><th><center><input name="metallinn" value="0" type="text"></center></th>
<th><center><input name="kristallinn" value="0" type="text"></center></th>
<th><center><input name="deyterinn" value="0" type="text"></center></th></tr>

<tr><th colspan="3"><center>{$LNG.an_buyres}</th></tr>
<tr><th><center>{$LNG.Metal}</center></th><th><center>{$LNG.Crystal}</center></th><th><center>{$LNG.Deuterium}</center></th></tr>
<tr><th><center><input name="metalloutt" value="0" type="text"></center></th>
<th><center><input name="kristalloutt" value="0" type="text"></center></th>
<th><center><input name="deyteroutt" value="0" type="text"></center></th></tr>

<tr><th colspan="3"><center>{$LNG.an_action}</center></th></tr>
<tr><th colspan="3"><center><input value="{$LNG.an_expose}" type="submit"></center></th></tr>
</form></table>
{/if}
{/block}{/if}