{block name="title" prepend}Jack Pot{/block}
{block name="content"}
<table style="width:590px;">

<tbody><tr>
        <td colspan="2">
           Jack Pot !
       </td>
    </tr>
    <tr>
        <td>
         This mod is a little game where you could win up to 500.000 DM<br>
     Will you be one of the lucky winners? <br>
     Jack Pot Prize increase by 10.000 each 12h<br><br>
     You receive 5 free attemps each 12h.
        </td>
    </tr>
    
      

</tbody>
</table>
<table style="width:590px;">
<tr>
        <td>
            You still have {$amount} free attemps left today<br> (next reset: {if !empty($next_reset)} <span style="color:green;" class="countdown2"  secs="{$next_reset}"></span>{/if})
        </td>
        <td>
    Buy extra attemps <br>
        <form action="game.php?page=jackpot&act=buyext" method="POST">
					<select name="premium">
						{foreach from=$prices item=i key=k}
							<option value="{$k}">{$k} Attemp(s) - {$i} DM</option>
						{/foreach}
					</select>
					<bR>
					

				</td>
			</tr>
  
    
   
					
					<tr>
        <td colspan="2">
    <input type="submit" value="Buy" name="Buy">
				</form>
    
				</form>
    
                    </td>
    </tr>
    <tr>
        <td colspan="2">
; Jack Pot Prize : {$jackpot} DM 
    
				</form>
    
                    </td>
    </tr>
    
</table>
<table style="width:590px;">
<tr>
        
        <td>
         Are you a safe cracker? Show it us and try to crack this amaizing box !. Enter here the code that you think will<br> match with the safe. You will receive in info about the code if ur choosen code is in <br>range of the safe code (+/-30)
        </td>
    </tr>
      
    
</table>
<table style="width:590px;">

					
					<tr>
	<th><center>NUMBER #1</center></th>
	<th><center>NUMBER #2</center></th>
	<th><center>NUMBER #3</center></th>
</tr>
<tr>

        <td>
    <form action="game.php?page=jackpot&act=try" method="POST" id="harv" name="harv">
        <select size="3" name="code1" id="code1">
      <option value="0">0</option> 
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
      </select>
        </td>
     <td>
    
        <select size="3" name="code2" id="code2">
      <option value="0">0</option> 
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
      </select>
        </td>
     <td>
    
        <select size="3" name="code3" id="code3" >
      <option value="0">0</option> 
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
      </select>
        </td>
    </tr>
</table>
<table style="width:590px;">

<tr>
        <td colspan="2">
    
    
	<input type="submit" value="Try">			</form>
    
                    </td>
    </tr>
    </table>
{/block}
