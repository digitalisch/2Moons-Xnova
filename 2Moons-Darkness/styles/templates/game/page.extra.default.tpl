{block name="title" prepend}Extra Planet{/block}
{block name="content"}
{if $requiredDarkMatter}
<table style="width:590px;">
<tr>
	<th>{$LNG.fcm_info}</th>
</tr>
<tr>
	<td><span style="color:red;">{$requiredDarkMatter}</span></td>
</tr>
</table>
<br>
<br>
{/if}
<table style="width:590px;">

<tbody>

<tr>
        <td colspan="2">
            Buy one more planet slot 
       </td>
    </tr>
   
        <td>
    {$LNG.extraone}
         <br>
{$LNG.extratwo} {$extra_planet} / {$LNG.extratree}.<br>
{$LNG.extrafour}
       </td>
    </tr>
    
    <form method="POST">
					
					<tr>
        <td colspan="2">
    <button type="submit" name="Buy" class="button" style="height:25px;">{$LNG.extrafive}</button>     
					
				</form>
    
                    </td>
    </tr>
    
    
</tbody>
</table>
{/block}
