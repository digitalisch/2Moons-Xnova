{block name="title" prepend}{$LNG.lm_playercard}{/block}
{block name="content"}
<script>function Fild()
{
	var Count	= $('#filds').val();
	var type	= $('#type').val();
	var kolvo	= $('#kolvo').val();
	var power	= $('#power').val();
	
	if(isNaN(Count) || Count < 0 ) {
		$('#filds').val(0);
		Count = 0;
	}
	
	var cost_i 	= 0;
	var cost 	= 0;
	
		for(var i = 0; i < Count; i++ )
			{
				cost_i 	= Math.round(type * Math.pow(power,Number(kolvo) + Number(i)));
				cost 	= Number(cost) + Number(cost_i);
			}
	$('#cost_filds').text(NumberGetHumanReadable(cost));
	cost	= 0; step 	= 0;	cost_i	= 0;
}

function Totalo()
{

	var prem_leveling1 	= $('#prem_leveling1').val();
	var prem_leveling2 	= $('#prem_leveling2').val();
	var prem_leveling3 	= $('#prem_leveling3').val();
	
	
	
	
	
	if(isNaN(prem_leveling1) || prem_leveling1 < 0 ) {
		$('#prem_leveling1').val(0);
		prem_leveling1 = 0;
	}
	if(isNaN(prem_leveling2) || prem_leveling2 < 0 ) {
		$('#prem_leveling2').val(0);
		prem_leveling2 = 0;
	}
	if(isNaN(prem_leveling3) || prem_leveling3 < 0 ) {
		$('#prem_leveling3').val(0);
		prem_leveling3 = 0;
	}
	
	
	

	var prem_leveling_price1 	= {$h_win} 	* Number(prem_leveling1);
	var prem_leveling_price2 	= {$draw} 	* Number(prem_leveling2);
	var prem_leveling_price3 	= {$v_win} 	* Number(prem_leveling3);

	$('#cost_prem1').text(NumberGetHumanReadable(Math.round((prem_leveling_price1))));
	$('#cost_prem2').text(NumberGetHumanReadable(Math.round((prem_leveling_price2))));
	$('#cost_prem3').text(NumberGetHumanReadable(Math.round((prem_leveling_price3))));
	
	
}</script>
<script>
function closeWin()
{
myWindow.close();
}
</script>
<script>
$(document).ready(function () {
    
 
    
    $('input[type=radio]').change(function(){
   

    if ($('#mission1').is(':checked')) {
         
        $('.containner').hide();
        $('#PaymentContainer1').show();
    } else {
        $('#PaymentContainer1').hide();
    }

    if ($('#mission2').is(':checked')) {
            
        $('.containner').hide();
        $('#PaymentContainer2').show();
    } else {
        $('#PaymentContainer2').hide();
    }
	if ($('#mission3').is(':checked')) {
            
        $('.containner').hide();
        $('#PaymentContainer3').show();
    } else {
        $('#PaymentContainer3').hide();
    }
	
	
        });
});
$("#mission1").prop("checked", true).change();</script>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td style="height:12px;" >{$h_team} vs {$v_team}</td>
      </tr>
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="right" valign="middle">Home picture</td>
            <td align="center" valign="middle"><span style="font-size: 20px;">vs</span></td>
            <td align="left" valign="middle">Visitor picture</td>
          </tr>
          <tr>
          </tr>
          <tr>
            <td width="33%"><b><input type="radio" name="result1" value="1" id="mission1" class="missions"> {$h_team} ({$h_win})</b></td>
            <td width="33%"><b><input type="radio" name="result1" value="3" id="mission2" class="missions"> Draw ({$draw})</b></td>
            <td width="33%"><b><input type="radio" name="result1" value="2" id="mission3" class="missions"> {$v_team} ({$v_win})</b></td>
          </tr>
          <tr>
          </tr>

          <tr>
           
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="130" align="left"><b>Open untill:</b></td>
        <td>15.12.2013 - 21h00</td>
      </tr>
      <tr>
      </tr>
      <tr>
        <td align="left"><b>Credits:</b></td>
        <td>{$cred} Credits</td>
      </tr>
      <tr>
      </tr>
      <tr> 
      </tr>
      <tr>
        <td width="130" align="left"><b>Category:</b></td>
        <td>Football World Cup First Phase</td>
      </tr>
    </table> <div id="PaymentContainer1" class="containner" style="display:none; margin-top:5px; border:1px solid white; background-color:#1C1F23; width:100%; margin-left:0px; border-radius: 5px;">
	<form action="?page=MatchDet" method="post">
	<input name="cmd" value="1" type="hidden">
	<input name="matchid" value="{$id}" type="hidden">
	<input name="result" value="1" type="hidden">
	<input name="hname" value="{$h_team}" type="hidden">
	<input name="vname" value="{$v_team}" type="hidden">
      Price: {$h_win} <br>
	  Match ID<input style="width:50px;" type="text" value="{$id}" name="matchidd" disabled="disabled";"><br>
	  Bet Amount $<input style="width:50px;" type="text" value="0" id="prem_leveling1" name="prem_leveling1" onkeyup="Totalo();"> <br>
	   Possible Gains <span style="color:#090;" id="cost_prem1" name="cost_prem1">0</span> Credits
	   <center><input type="submit" name="submit" value="Buy Ticket" class="button"></center>
	    </form>
	  </div>
	  <div id="PaymentContainer2" class="containner" style="display:none; margin-top:5px; border:1px solid white; background-color:#1C1F23; width:100%; margin-left:0px; border-radius: 5px;">
	  <form action="?page=MatchDet" method="post">
	<input name="cmd" value="3" type="hidden">
	<input name="matchid" value="{$id}" type="hidden">
	<input name="result" value="3" type="hidden">
		<input name="hname" value="{$h_team}" type="hidden">
	<input name="vname" value="{$v_team}" type="hidden">
        Price: {$draw} <br>
		 Match ID<input style="width:50px;" type="text" value="{$id}" name="matchidd" disabled="disabled";"><br>
	  Bet Amount $<input style="width:50px;" type="text" value="0" id="prem_leveling2" name="prem_leveling2" onkeyup="Totalo();"> <br>
	   Possible Gains <span style="color:#090;" id="cost_prem2" name="cost_prem2">0</span> Credits
	   <center><input type="submit" name="submit" value="Buy Ticket" class="button"></center>
	    </form>
	  </div>
	  <div id="PaymentContainer3" class="containner" style="display:none; margin-top:5px; border:1px solid white; background-color:#1C1F23; width:100%; margin-left:0px; border-radius: 5px;">
	  <form action="?page=MatchDet" method="post">
	<input name="cmd" value="2" type="hidden">
	<input name="matchid" value="{$id}" type="hidden">
	<input name="result" value="2" type="hidden">
		<input name="hname" value="{$h_team}" type="hidden">
	<input name="vname" value="{$v_team}" type="hidden">
       Price: {$v_win} <br>
	    Match ID<input style="width:50px;" type="text" value="{$id}" name="matchidd" disabled="disabled";"><br>
	  Bet Amount $<input style="width:50px;" type="text" value="0" id="prem_leveling3" name="prem_leveling3" onkeyup="Totalo();"> <br>
	   Possible Gains <span style="color:#090;" id="cost_prem3" name="cost_prem3">0</span> Credits
	   <center><input type="submit" name="submit" value="Buy Ticket" class="button"></center>
	    </form>
	  </div>
	 </td>
  </tr>
 
  <tr>
  </tr>
</table>
{/block}