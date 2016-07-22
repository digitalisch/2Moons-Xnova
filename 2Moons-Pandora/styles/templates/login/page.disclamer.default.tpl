{block name="title" prepend}{$LNG.siteTitleDisclamer}{/block}
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
									<table id="disclamerTable">
										<tr>
											<td style="width:25%;text-align:left;">{$LNG.disclamerLabelAddress}</td><td style="width:75%;text-align:right;">{$disclamerAddress}</td>
										</tr>
										<tr>
											<td style="width:25%;text-align:left;">{$LNG.disclamerLabelPhone}</td><td style="width:75%;text-align:right;">{$disclamerPhone}</td>
										</tr>
										<tr>
											<td style="width:25%;text-align:left;">{$LNG.disclamerLabelMail}</td><td style="width:75%;text-align:right;"><a href="{$disclamerMail}">{$disclamerMail}</a></td>
										</tr>
										<tr>
											<td colspan="2" style="text-align:left;"><p><br></p></td>
										</tr>
										<tr>
											<td><a href="http://www.disclaimer.de/disclaimer.htm?farbe=FFFFFF/000000/000000/000000" target="disclamer">{$LNG.disclamerLabelNotice}</a></td>
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