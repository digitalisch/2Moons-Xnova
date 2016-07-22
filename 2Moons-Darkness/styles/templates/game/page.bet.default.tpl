{block name="title" prepend}Betting System{/block}
{block name="content"}


<table width="100%" cellspacing="1" cellpadding="2" style="margin-left:50px;">
  <tr align="center">
    <td><a class="titlelink" href="game.php?page=bet"><img src="styles/images/wetten/overview_uk.png" width="75" height="75" border="0" alt="" /></a></td>
    <td><a class="titlelink" href="game.php?page=bet&amp;status=opened"><img src="styles/images/wetten/opened_uk.png" width="75" height="75" border="0" alt="" /></a></td>
    <td><a class="titlelink" href="game.php?page=bet&amp;status=closed"><img src="styles/images/wetten/closed_uk.png" width="75" height="75" border="0" alt="" /></a></td>
    
    <td><a class="titlelink" href="game.php?page=bet&amp;status=exchange"><img src="styles/images/wetten/wechselstube_uk.png" width="75" height="75" border="0" alt="" /></a> </td>
  </tr>
</table>
<table width="100%" cellspacing="1" cellpadding="2" style="margin-left:50px;">
<tr>
	<td width="33%">Date</td><td>Match</td>

</tr>

<tr>
{$liste}
</tr>
<br>
</table>
   
{/block}