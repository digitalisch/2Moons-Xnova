{block name="title" prepend}Vote{/block}{block name="content"}	
<table style="margin-top:30px">		
<th>Vote system</th>		
<tr>			
<td><br><font color=lime>{$LNG.Vote1}
<br>
<br><li> {$LNG.Vote2} </li>
<br><li> {$LNG.Vote3} </li>
<br><li> {$LNG.Vote4} </li>
<br><li> {$LNG.Vote5} </li>
<br></font> 
<br><font color=red>{$LNG.Vote6}
<br>
<br><li>{$LNG.Vote7} </li>
<br></font>
<br><font color=gold>{$LNG.Vote8}
<br>
<br><li> {$LNG.Vote9} </li>
<br><li> {$LNG.Vote10} </li>
<br><li> {$LNG.Vote11} </li>
<br></font>
<br><font color=skyblue>{$LNG.Vote12}
<br>{$LNG.Vote13}</font>
<br><br>			
<table>						
<tr>						
{foreach from=$voturile key=k item=v}					
<td><img src="{$v.pic}"> <br> {$v.link} <br><font color=lime>300 DM</font></td>						
{/foreach}						
</tr>			
</table>					
</td>		
</tr>	
</table>{/block}