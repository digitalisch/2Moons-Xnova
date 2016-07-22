{block name="title" prepend}Betting System{/block}
{block name="content"}

     <link rel="stylesheet" type="text/css" href="./space.css">

<table width="100%" cellspacing="1" cellpadding="2" style="margin-left:50px;">
  <tr align="center">
    <td><a class="titlelink" href="game.php?page=bet"><img src="styles/images/wetten/overview_uk.png" width="75" height="75" border="0" alt="" /></a></td>
    <td><a class="titlelink" href="game.php?page=bet&amp;status=opened"><img src="styles/images/wetten/opened_uk.png" width="75" height="75" border="0" alt="" /></a></td>
    <td><a class="titlelink" href="game.php?page=bet&amp;status=closed"><img src="styles/images/wetten/closed_uk.png" width="75" height="75" border="0" alt="" /></a></td>
    
    <td><a class="titlelink" href="game.php?page=bet&amp;status=exchange"><img src="styles/images/wetten/wechselstube_uk.png" width="75" height="75" border="0" alt="" /></a> </td>
  </tr>
</table>
<table width="100%" cellspacing="1" cellpadding="2" style="margin-left:50px;"><tr><td>
<center>You can exchange here your credits or buy a new package of credits if you lost all yours. 1 credit cost 1 dark-matter. In order to be benefic for you, for each 50.000 credits won be you previously ingame, you can request a 5eur voucher code with the folowing form.</center>
<br>
  <div class="fleft" style="margin: 15px 0 15px 0;">
                               
                         
                                <div class="souscorps"style="margin: 0 0 0 5%; width: 243px;">
                                    <div class="marg10">
                                    
                                    
                                    <div style="width: 300px; clear: both;">
                                   <div class="" style="margin: 0px 0px 0px 15px;">
                                   
                                    <div style="font-size: 14px;"> 		 
<form action="game.php?page=credits" method="POST">
									<input type="hidden" name="con" value="in">
					<select name="take">
						{foreach from=$prices item=i key=k}
							<option value="{$k}">{$k} Credit(s) - {$i} DM</option>
						{/foreach}
					</select>
					
<br></div></div><div class="" style="margin: 0px 0px 0px 65px;">
                                   
                                    <div style="font-size: 14px;"><br>
									<input type="submit" value="Buy Credits" class="button" name="Buy"></form></div>
                                    </div></div>
                                    
                                    </div> 
                                </div>    
                                </div>
								 <div class="fleft" style="margin: 15px 0 15px 0;">
                               
                         
                                <div class="souscorps"style="margin: 0 0 0 5%; width: 243px;">
                                    <div class="marg10">
                                    
                                    
                                    <div style="width: 300px; clear: both;">
                                    <div class="" style="margin: 0px 0px 0px 50px;">
                                   
                                    <div style="font-size: 14px;">Bought Credits: {$bc}<br> Won Credits: {$wc} 
</div></div>
<div style="width: 200px; clear: both;">
                                    <div class="" style="margin: 0px 0px 0px 25px;">
<hr></div></div>
<div style="width: 300px; clear: both;">
                                    <div class="" style="margin: 0px 0px 0px 50px;">
									Total Credits<sup>(1)</sup>: {$tc} <br> Widrawable<sup>(2)</sup>: {$wc}</div>
                                    </div></div>
                                    
                                    </div>
                                </div>    
                                </div>
								 <div class="fright" style="margin: 15px 0 15px 0;">
                               
                         
                                <div class="souscorps"style="margin: 0 0 0 5%; width: 243px;">
                                    <div class="marg10">
                                    
                                    
                                    <div style="width: 300px; clear: both;">
                                   <div class="" style="margin: 0px 0px 0px 30px;">
                                   
                                    <div style="font-size: 14px;"> 
									<form action="game.php?page=credits" method="POST">
									<input type="hidden" name="con" value="out">
					<select name="widraw">
						{foreach from=$prices1 item=i key=k}
							<option value="{$k}">{$k} Credit(s) - {$i} EUR</option>
						{/foreach}
					</select><br><br>
								<input type="submit" value="Request Your Voucher" class="button" name="Buy"></form></div>
                                    </div></div>
                                    
                                    </div>
                                </div>  
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<center><font size="1px"><sup>(1)</sup> Your total amounts of credits is a simple addition of your bought credits and your won credits.<br>
	<sup>(2)</sup> You can only request a Dark Matter Gift Code with the credits you won, this is to avoid players buying and reselling imediatly there credits for a code. At the end of the cup, you will be able to widraw you left bought credits at 70% of the total price.</font></center>

	
{/block}


