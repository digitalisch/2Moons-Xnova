{block name="title" prepend}{$LNG.lm_research}{/block}
{block name="content"}

			<div class="article clearfix" id="home_carousel_article">
				<div class="section parent_section clearfix col9 carousel_section"></div>
				<div class="article clearfix">
					<div class="section clearfix col9" id="home_news_section">
						<div class="container">
							<div class="creat_ally">
							</div>
							<h2 class="clearfix">
								<div class="icon"></div>
								<div>Infrastructures</div>
							</h2>
							<div class="news_articles">
																<br>
								<center>
									
								</center>
								<br>
																
																

{if !empty($Queue)}
<div id="buildlist" class="buildlist">
	<table style="width:760px">
		{foreach $Queue as $List}
		{$ID = $List.element}
		<tr>
			<td style="width:70%;vertical-align:top;" class="left">
				{if isset($ResearchList[$List.element])}
				{$CQueue = $ResearchList[$List.element]}
				{/if}
				{$List@iteration}.: 
				{if isset($CQueue) && $CQueue.maxLevel != $CQueue.level && !$IsFullQueue && $CQueue.buyable}
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="insert">
					<input type="hidden" name="tech" value="{$ID}">
					<button type="submit" class="build_submit onlist">{$LNG.tech.{$ID}} {$List.level}{if !empty($List.planet)} @ {$List.planet}{/if}</button>
				</form>
				{else}
				{$LNG.tech.{$ID}} {$List.level}{if !empty($List.planet)} @ {$List.planet}{/if}
				{/if}
				{if $List@first}
				<br><br><div id="progressbar" data-time="{$List.resttime}"></div>
			</td>
			<td>
				<div id="time" data-time="{$List.time}"><br></div>
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="build_submit onlist">{$LNG.bd_cancel}</button>
				</form>
				{else}
			</td>
			<td>
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="{$List@iteration}">
					<button type="submit" class="build_submit onlist">{$LNG.bd_cancel}</button>
				</form>
				{/if}
				<br><span style="color:lime" data-time="{$List.endtime}" class="timer">{$List.display}</span>
			</td>
		</tr>
	{/foreach}
	</table>
</div>
{/if}																
								
								
								
								{foreach $ResearchList as $ID => $Element}
								<div class="news_article">
									<div class="article_content">
										<div class="title_block dark_hatch_container" style="height: 35px;">
										
										
										
										
											<table style="width:100%; left: 0px; margin-top: -7px;">
												<tr>
													<td class="transparent" style="box-shadow: 0px 0px 0px 0px">
														<div class="titlebulding">
															<a href="#" onclick="return Dialog.info({$ID})">{$LNG.tech.{$ID}}</a>{if $Element.level > 0} ({$LNG.bd_lvl} {$Element.level}{if $Element.maxLevel != 255}/{$Element.maxLevel}{/if}){/if}
																<i>																</i>
														</div>
													</td>
													
													<td class="transparent" style="box-shadow: 0px 0px 0px 0px">
														<div class="buttonbulding">
														
						{if $Element.maxLevel == $Element.levelToBuild}
						<span class="btn btn-success btn-flat" style="color:red">{$LNG.bd_maxlevel}</span>
					{elseif $IsLabinBuild || $IsFullQueue || !$Element.buyable}
						<span class="btn btn-success btn-flat" style="color:red">{if $Element.level == 0}{$LNG.bd_tech}{else}{$LNG.bd_tech_next_level}{$Element.levelToBuild + 1}{/if}</span>
					{else}
						<form action="game.php?page=research" method="post" class="build_form">
							<input type="hidden" name="cmd" value="insert">
							<input type="hidden" name="tech" value="{$ID}">
							<button class="btn btn-success btn-flat" type="submit" class="build_submit">{$LNG.fgf_time}: {$Element.elementTime|time}</button>
						</form>
					{/if}
																																																														</div>				
													</td>
												</tr>
											</table>
										</div>
										
										<div class="text_block">
											<div class="secondary_content">
												<table style="width:100%; border:0px;">
													<tr style="border-spacing:1px;">
														<td class="transparent" style="border:none; width: 249px;">
															<a href="#" onclick="return Dialog.info(4)" style="display: block; height: 144px;">
																<img src="styles/theme/gow/gebaeude/{$ID}.gif" alt="{$LNG.tech.{$ID}}" alt="Panneaux Solaires" style="border: 2px solid #000; border-radius: 2px; height: 140px;">
															</a>
														</td>
																			<td class="transparent" style="border-radius: 0px; width: 300px;">
																					<table style="border-collapse: separate; text-align:center; width: 100%;">
																						<tr>
																							<td class="transparent" style="border-radius: 0px;">
																								Ressource
																							</td>
																							<td class="transparent" style="border-radius: 0px;">
																								Prix
																							</td>
																							<td class="transparent" style="border-radius: 0px;">
																								Il vous manque
																							</td>
																						</tr>
																							
																							
																							
																							{foreach $Element.costRessources as $RessID => $RessAmount}
																						<tr>
																						
																							<td class="transparent" style="border-radius: 0px; width: 50px;">
																								<a class="tooltip" data-tooltip-content="<h3>Alliage</h3>">
																									<img src="http://dystopiaonline.fr/v1.1.0/styles/theme/gow/images/{$RessID}.png" alt="" style="height:38px; box-shadow: 0px 0px 5px #000; border-radius: 2px; border: 1px solid rgba(0, 0, 0, 0.7); margin-bottom: -3px;">
																								</a>
																							</td>
																							<td class="transparent" style="border-radius: 0px; background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.8); width: 125px;">
																								<span style="color:#090">
																									<b><span style="color:{if $Element.costOverflow[$RessID] == 0}lime{else}red{/if}">{$RessAmount|number}</span></b>
																								</span>
																							</td>
																							<td class="transparent" style="border-radius: 0px; background: none repeat scroll 0% 0% rgba(0, 0, 0, 0.8); width: 125px;">
																																																	<span style="font-weight:700">0</span>
																																															</td>
																						</tr>																							
																														 {/foreach}
																							
																							
																							
																									

																																													<tr>
																							<td class="transparent" colspan="3" style="border-radius: 0px;">
																								<i style="text-shadow: 0px 0px 2px #010101;"> {if !empty($Element.infoEnergy)}
							{$Element.infoEnergy}<br>
						{/if}</i>
																							</td>
																						</tr>
																					</table>
																					
																					
																			</td>
																			
																			
																			
																			
																			
																			
																			
																			<td class="transparent" style="border:0px;">
																				<p class="mini-des">{$LNG.shortDescription.{$ID}}</p>
																			</td>																			
																			
																			
																			
																			
																			
																			
																			
																			
					
																				


																</tr>
															</table>
											</div>
										</div>
									</div>
								</div>	
	{/foreach}
																								

																
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="clearer"></div>
	</div>

{/block}