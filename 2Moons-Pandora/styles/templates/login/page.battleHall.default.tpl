{block name="title" prepend}{$LNG.siteTitleBattleHall}{/block}
{block name="content"}
      <div class="loginHeader">
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
								<table>
									<tr>
										<th style="color:lime">{$LNG.tkb_platz}</th>
										<th style="color:lime">{$LNG.tkb_owners}</th>
										<th style="color:lime">{$LNG.tkb_datum}</th>
										<th style="color:lime">{$LNG.tkb_units}</th>
									</tr>
									{foreach $hallList as $hallRow}
									<tr>
										<td>&nbsp;&nbsp;&nbsp;{$hallRow@iteration}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td>&nbsp;&nbsp;&nbsp;
										{if $hallRow.result == "a"}
										<span style="color:#00FF00">{$hallRow.attacker}</span><span style="color:#FFFFFF"><b> VS </b></span><span style="color:#FF0000">{$hallRow.defender}</span>
										{elseif $hallRow.result == "r"}
										<span style="color:#FF0000">{$hallRow.attacker}</span><span style="color:#FFFFFF"><b> VS </b></span><span style="color:#00FF00">{$hallRow.defender}</span>
										{else}
										{$hallRow.attacker}<b> VS </b>{$hallRow.defender}
										{/if}&nbsp;&nbsp;&nbsp;
										</td>
										<td>{$hallRow.time}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
										<td>{$hallRow.units|number}</td>
									</tr>
									{/foreach}
									<tr>
									<td colspan="4"><p>{$LNG.tkb_legende}<span style="color:#00FF00">{$LNG.tkb_gewinner}</span><span style="color:#FF0000">{$LNG.tkb_verlierer}</span></p></td>
									</tr>
								</table>
							</div></div></div>
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