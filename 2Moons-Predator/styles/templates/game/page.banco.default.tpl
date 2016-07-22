{block name="title" prepend}Bank{/block}
{block name="content"}
<table style="width:590px;">

<tbody>
<th colspan="2" style="text-align:center">
<tr>
        <td colspan="2">
           Federal Galactic Bank
       </td>
    </tr>
    <tr>
        <td>
            <img src="styles/theme/gow/images/bank_page.png">
        </td>
        <td>
         This mod give you the ultimate solution to protect all of your resources from potential thiefs.<br><br>
Each deposit will cost u 4.000 DM.<br>
Withdraw is and will always be free.
        </td>
    </tr>
    <tr><td>
   You actually have in your bank:
    </td>
    <td <td colspan="3">
   <font color=lime> {$bankm} </font> Metal<br>
    
   <font color=lime> {$bankc} </font> Crystal<br>
    
   <font color=lime> {$bankd} </font> Deuterium
    </td>
    </tr>
    <form action="../">
<br>
<br>
<br>
<br>					
					<tr>
        <td colspan="2">
<select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
        <option value="0" disabled selected>Choose Action</option>
        <option value="?page=bankin">Deposit</option>
        <option value="?page=bankout">Withdraw</option>
      </select>
     
					
				</form>
    
                    </td>
    </tr>
    
<th colspan="2" style="text-align:center">    
</tbody>
</table>
{/block}