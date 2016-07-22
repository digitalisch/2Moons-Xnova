{block name="title" prepend}{$LNG.lm_technology}{/block}
{block name="content"}


<div class="grid_6">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="titletech">Rival Top List</a></h2> 
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding" style="height:180px;">
		
						<center><a href="game.php?page=vote&id=1">
<img src="http://www.rivaltoplist.com/vote.jpg" border="0" alt="RivalTopList, private servers, world-of-warcraft, ogame, counter-strike, mmorpg-and-mpog, gaming-websites"></a>
</center><br>
	After clicking on image and vote in vote.name, you will recieve after 5 minutes, 5000 units of Dark Matter!<br><br>
	{if $voteid1 === true}<font color=blue><b>You can vote now!</b></font>{else}<font color=red><b> You can vote again in <span class="countdown2" secs="{$voteid1}"></b></font></span>{/if}
					</div>

		
	 </div>
	<!-- Box Content: End -->
	
</div>


{/block}