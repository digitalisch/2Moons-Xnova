{block name="title" prepend}{$LNG.lm_technology}{/block}
{block name="content"}


<div class="grid_6">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="titletech">Donation Button</a></h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding" style="height:180px;">
		

	You can donate every 30 Minutes to avoid unadvantages between players. Minimum donation accepted is with 1.00€ . Each time you donate, you recieve your full amount of Dark Matter and all players receives 10% of it.<br><br>
	{if $donation === true}<a href="game.php?page=darkMatter&id=donation"><button type="submit" class="button " style="opacity: 0;">Donate now</button></a>{else}<font color=red><b> You can donate again in <span class="countdown2" secs="{$donation}"></b></font></span>{/if}
					</div>

		
	 </div>
	<!-- Box Content: End -->
	
</div>

<div class="grid_18">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="titletech">Dark Matter</a></h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding" style="height:180px;">
		

	<h5>The valuable ressource Dark Matter it's used in various things that can boost up your empire. It should be spent carefully or a risk step can make your empire fall.</h5>
	<h5> We do not sell Dark Matter in Packages like other games, instead of it, we accept donations to keep our game alive. They are limited by 30 minutes, so that avoid an huge difference in Statistics Board.</h5>
	<h6> By donating, you agree that there is no refunds, and this helps us paying the server or upgrade it with new mods.</h6>
					</div>

		
	 </div>
	<!-- Box Content: End -->
	
</div>


{/block}