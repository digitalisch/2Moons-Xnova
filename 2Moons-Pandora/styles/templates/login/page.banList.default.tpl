{block name="title" prepend}{$LNG.siteTitleBanList}{/block}
{block name="content"}      <div class="loginHeader">
         <div class="loginHeaderContent">
            <div class="left">
               <img src="./styles/resource/images/login/login_image.png" alt="login image" />
            </div>
            <form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
				<div class="right">
					<table>
						<tr>
							<td style="padding-right:20px">
								<label for="username">{$LNG.loginUsername}:</label>
							</td>
							<td>
								<input type="text" value="" name="username" id="username"/>
							</td>
						</tr>
						<tr>
							<td>
								<label for="password">{$LNG.loginPassword}:</label>
							</td>
							<td>
								<input type="password" id="password" value="" name="password"/>
							</td>
						</tr>
					</table>
				</div>
								<input class="sign_up" type="submit" value="{$LNG.loginButton}">
			</form>
            <div class="clear"></div>
         </div>
      </div>
      <div class="wrapper">
         <div class="mainBody">
            <div class="header">
               <div class="headerImage">
                  <img src="./styles/resource/images/login/header.png" alt="header image" />
               </div>
            </div>
            <div class="content">
               <div class="left">
                  <div class="mainMenu">
                     <ul>
                        <li>
                           <a href="index.php">
								{$LNG.menu_index}
							</a>
                        </li>
                        <li>
							<a href="#">
								{$LNG.forum}
							</a>
                        </li>
                        <li>
							<a href="index.php?page=rules">
								{$LNG.menu_rules}
							</a>
                        </li>
                        <li>
							<a href="index.php?page=battleHall">
								{$LNG.menu_battlehall}
							</a>
                        </li>
                        <li class="last">
							<a href="index.php?page=races">
								{$LNG.race}
							</a>
                        </li>
                     </ul>
                  </div>
                <div class="contentBlock">
                     <div class="innerContent" style="height:740px">
{if $isMultiUniverse}<p>
{html_options options=$universeSelect selected=$UNI class="changeUni" id="universe" name="universe"}
</p>{/if}
<table>
	<tr>
		<th colspan="5">{$LNG.bn_players_banned_list}</th>
	</tr>
{if $banCount}
	<tr>
		<td style="text-align:right;" colspan="5">{$LNG.mg_page}: {if $page != 1}<a href="index.php?page=banList&amp;side={$page - 1}">&laquo;</a>&nbsp;{/if}{for $site=1 to $maxPage}<a href="index.php?page=banList&amp;side={$site}">{if $site == $page}<b>[{$site}]</b>{else}[{$site}]{/if}</a>{if $site != $maxPage}&nbsp;{/if}{/for}{if $page != $maxPage}&nbsp;<a href="index.php?page=banList&amp;side={$page + 1}">&raquo;</a>{/if}</td>
	</tr>
{/if}
	<tr>
		<td>{$LNG.bn_from}</td>
		<td>{$LNG.bn_until}</td>
		<td>{$LNG.bn_player}</td>
		<td>{$LNG.bn_by}</td>
		<td>{$LNG.bn_reason}</td>
	</tr>
{if $banCount}
	{foreach $banList as $banRow}
	<tr>
		<td>{$banRow.from}</td>
		<td>{$banRow.to}</td>
		<td>{$banRow.player}</td>
		<td><a href="mailto:{$banRow.mail}" title="{$banRow.info}">{$banRow.admin}</a></td>
		<td>{$banRow.theme}</td>
	</tr>
	{/foreach}
	<tr>
		<td style="text-align:right;" colspan="5">{$LNG.mg_page}: {if $page != 1}<a href="index.php?page=banList&amp;side={$page - 1}">&laquo;</a>&nbsp;{/if}{for $site=1 to $maxPage}<a href="index.php?page=banList&amp;side={$site}">{if $site == $page}<b>[{$site}]</b>{else}[{$site}]{/if}</a>{if $site != $maxPage}&nbsp;{/if}{/for}{if $page != $maxPage}&nbsp;<a href="index.php?page=banList&amp;side={$page + 1}">&raquo;</a>{/if}</td>
	</tr>
	<tr>
		<td colspan="5">{$LNG.bn_exists}{$banCount|number}{$LNG.bn_players_banned}</td>
	</tr>
{else}
	<tr>
		<td colspan="5">{$LNG.bn_no_players_banned}</td>
	</tr>	
{/if}
</table></div></div></div>
					 <div class="right">
                  <div class="contentBlock">
                     <div class="innerContent" style="height: 495px;">
                       <div class="login_page">
							<div>
								<a href="index.php?page=register">
										<span class="register_button"/></span>
								</a>
							</div>
					   </div>
                     </div>
                  </div>
                  <div class="contentBlock">
                     <div class="innerContent" style="height:262px"> 
                       <table border="1">
							<tr>
								<td style="padding: 5px;border: 2px solid #086CF9;">
									Momentan Online: 
								</td>
								<td style="padding: 5px;border: 2px solid #086CF9;">
									Registrierte Spieler:
								</td>
								<td style="padding: 5px;border: 2px solid #086CF9;">
									Zuletzt Registriert: 
								</td>
								<td style="padding: 5px;border: 2px solid #086CF9;">
									Besiedelte Planeten: 
								</td>
							</tr>
			<tr>
				<td style="padding: 5px;border: 2px solid #086CF9;">{$online}</td>
				<td style="padding: 5px;border: 2px solid #086CF9;">{$user}</td>
				<td style="padding: 5px;border: 2px solid #086CF9;">{$last}</td>
				<td style="padding: 5px;border: 2px solid #086CF9;">{$planet}</td>
                      
			</tr>
	</table>
                     </div>
                  </div>
				  
               </div>
               <div class="clear"></div>
            </div>
            <div class="footer">
               <span>
                  Kontakt Person <a href="mailto:flocke_dittrich@gmx.de">Bijuu</a><br />
               </span>
            </div>
         </div>
      </div>
{/block}