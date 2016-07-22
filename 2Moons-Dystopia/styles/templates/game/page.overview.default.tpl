{block name="title" prepend}{$LNG.lm_overview}{/block}
{block name="script" append}{/block}
{block name="content"}

					<div class="article clearfix">
						<div class="section clearfix col9" id="home_news_section">
							<div class="container">
								<h2 class="clearfix">
									<div class="icon"></div>
									<div>Salle de Contrôle</div>
								</h2>
								<div class="news_articles">
										<div class="news_article">
											<div class="article_content">
												<div class="title_block dark_hatch_container">
													<h3 style="color: #FFF; line-height: 16px;">
														<table style="width: 100%; margin-top: 6px;">
															<tr>
															
																																	
																<td class="transparent" style="text-align : left; box-shadow: 0px 0px 0px 0px;">
																	
																	
																	<a href="#" onclick="return Dialog.PlanetAction();" title="{$LNG.ov_planetmenu}">{$LNG.type_planet.$planet_type} "<span class="planetname">{$planetname}</span>"</a> ({$username}) {$messages}
																</td>
																
																<td class="servertime" style="text-align : right; box-shadow: 0px 0px 0px 0px; background: transparent; border: 0px; border-radius: 0px;">
																	{$servertime}
																</td>
															</tr>
														</table>
													</h3>									
												</div>
												
													



															 															 
																	 <!-- A MODIFIER EN FONCTION DES NEWS -->
																		<style type="text/css">
																			 #fondoverview{
																					background-image: url(http://dystopiaonline.fr/v1.1.0/styles/resource/images/planeten/fond.png);
																			}
																		</style>
																	<!-- A MODIFIER EN FONCTION DES NEWS -->
															 													<div style="position: relative;">
														<div id="overview" style="padding: 2.4px;">


															<table id="tableoverview2" class="table519">	
																<tr>

																	<td class="transparent"></td>

																</tr>
															</table>


	
															<table id="tableoverview" class="table519" style="
																margin-top: 200px;
																height: 120px;
																width: 600px;
																float: right;
																margin-right: 10px;
															">		


																<tr>

																	<td id="tableoverviewtd">{$LNG.ov_diameter}: </td>

																	<td id="tableoverviewtd" colspan="2">{$planet_diameter} {$LNG.ov_distance_unit} (<a title="{$LNG.ov_developed_fields}">{$planet_field_current}</a> / <a title="{$LNG.ov_max_developed_fields}">{$planet_field_max}</a> {$LNG.ov_fields})</td>

																</tr>

																<tr>

																	<td id="tableoverviewtd">{$LNG.ov_temperature}:</td>

																	<td id="tableoverviewtd" colspan="2">{$LNG.ov_aprox} {$planet_temp_min}{$LNG.ov_temp_unit} {$LNG.ov_to} {$planet_temp_max}{$LNG.ov_temp_unit}</td>

																</tr>

																<tr>

																	<td id="tableoverviewtd">{$LNG.ov_position}:</td>

																	<td id="tableoverviewtd" colspan="2"><a href="game.php?page=galaxy&amp;galaxy={$galaxy}&amp;system={$system}">[{$galaxy}:{$system}:{$planet}]</a></td>

																</tr>

																
																<tr>

																	<td id="tableoverviewtd">{$LNG.ov_points}:</td>

																	<td id="tableoverviewtd" colspan="2">{$rankInfo}</td>

																</tr>

																															</table>
															
															
															<br>
															
																<table id="tableoverview" class="table519" style="
																	background-color: rgba(0, 0, 0, 0.8);
																	border-radius: 0px;
																	padding: 10px;
																	margin: 0px;
																	width: 100%;
																">	
																

																

															</table>



														<div id="activ">

															<table>
															
																																																												</table>


														</div>


														
														
															<table style="position: absolute;
															top: 5px;
															right: 6px;
															background-color: rgba(0, 0, 0, 0.79);
															border-radius: 0px 0px 0px 3px;
															padding: 6px;">
																<tr>
																		
																	</td>
																</tr>
															</table>
														
															
															

														
														</div>
														<div id="fondoverview"></div>
													</div>






														<div id="lune" style="text-align: center;">
																													</div>
		
		


														<br>
														<table class="table519">

																																
														</table>



														


															
														








													
												
											</div>
										</div>						                

								</div>
							</div>
						</div>
					</div>


{/block}