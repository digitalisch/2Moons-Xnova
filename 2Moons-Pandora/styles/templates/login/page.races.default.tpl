{block name="title" prepend}{$LNG.race}{/block}
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
											<div style="width: 230px; height:300px; float:left; margin-left: 15px; margin-top: 36px;">
												<div style="position:absolute; margin-top: -30px; color: #FFF; width:230px; text-align:center;">
													{$LNG.races_m}
												</div>
												<div style="text-align:center; width: 230px;">
													<img src="styles/resource/images/login/races/humans/1.png"></img>
												</div>
												<div style="text-align:center; font-size:10px; font-family:Verdana, Geneva, sans-serif; color: #FFF;">
													{$LNG.races_m_desc1}
												</div><br></br>
												<div style=" background-image: url(styles/resource/images/login/races/humans/2.png); background-size: 24px 24px; background-repeat:no-repeat; background-position: left; width: 230px; height: 24px; padding-left: 30px; color: #FFF; font-family:Verdana, Geneva, sans-serif; font-size:10px; margin-top: 5px;">
													{$LNG.races_m_1}
												</div>
												<div style=" background-image: url(styles/resource/images/login/races/humans/3.png); background-size: 24px 24px; background-repeat:no-repeat; background-position: left; width: 230px; height: 24px; padding-left: 30px; color: #FFF; font-family:Verdana, Geneva, sans-serif; font-size:10px; margin-top: 5px;">
													{$LNG.races_m_2}
												</div>
												<div style=" background-image: url(styles/resource/images/login/races/humans/4.png); background-size: 24px 24px; background-repeat:no-repeat; background-position: left; width: 230px; height: 24px; padding-left: 30px; color: #FFF; font-family:Verdana, Geneva, sans-serif; font-size:10px; margin-top: 5px;">
													{$LNG.races_m_3}
												</div>
											</div>
											<div style="width: 230px; height:300px; float:left; margin-left: 15px; margin-top: 36px;">
												<div style="position:absolute; margin-top: -30px; color: #FFF; width:230px; text-align:center;">
													{$LNG.races_g}
												</div>
												<div style="text-align:center; width: 230px; margin-top: 10px;">
													<img src="styles/resource/images/login/races/goauld/1.png"></img>
												</div>
												<div style="text-align:center; font-size:10px; font-family:Verdana, Geneva, sans-serif; color: #FFF; margin-top: 10px;"> 
													{$LNG.races_g_desc1}
												</div><br></br>
												<div style=" background-image: url(styles/resource/images/login/races/goauld/2.png); background-size: 24px 24px; background-repeat:no-repeat; background-position: left; width: 230px; height: 24px; padding-left: 30px; color: #FFF; font-family:Verdana, Geneva, sans-serif; font-size:10px; margin-top: 5px;">											  
													{$LNG.races_g_1}
												</div>
												<div style=" background-image: url(styles/resource/images/login/races/goauld/3.png); background-size: 24px 24px; background-repeat:no-repeat; background-position: left; width: 230px; height: 24px; padding-left: 30px; color: #FFF; font-family:Verdana, Geneva, sans-serif; font-size:10px; margin-top: 5px;">									  
													{$LNG.races_g_2}
												</div>
												<div style=" background-image: url(styles/resource/images/login/races/goauld/4.png); background-size: 24px 24px; background-repeat:no-repeat; background-position: left; width: 230px; height: 24px; padding-left: 30px; color: #FFF; font-family:Verdana, Geneva, sans-serif; font-size:10px; margin-top: 5px;">											  
													{$LNG.races_g_3}
												</div>
											</div>
											<div style="width: 230px; height:300px; float:left; margin-left: 20px; margin-top: 36px;">
												<div style="position:absolute; margin-top: -30px; color: #FFF; width:230px; text-align:center; ">
													{$LNG.races_r}
												</div>
												<div style="text-align:center; width: 230px; margin-top: 20px;">
													<img src="styles/resource/images/login/races/replicator/1.png"></img>
												</div>
												<div style="text-align:center; font-size:10px; font-family:Verdana, Geneva, sans-serif; color: #FFF; margin-top: 15px;">
													{$LNG.races_r_desc1}
												</div><br></br>
												<div style=" background-image: url(styles/resource/images/login/races/replicator/2.png); background-size: 24px 24px; background-repeat:no-repeat; background-position: left; width: 230px; height: 24px; padding-left: 30px; color: #FFF; font-family:Verdana, Geneva, sans-serif; font-size:10px; margin-top: 5px;">
													{$LNG.races_r_1}
												</div>
												<div style=" background-image: url(styles/resource/images/login/races/replicator/3.png); background-size: 24px 24px; background-repeat:no-repeat; background-position: left; width: 230px; height: 24px; padding-left: 30px; color: #FFF; font-family:Verdana, Geneva, sans-serif; font-size:10px; margin-top: 5px;">
													{$LNG.races_r_2}
												</div>
												<div style=" background-image: url(styles/resource/images/login/races/replicator/4.png); background-size: 24px 24px; background-repeat:no-repeat; background-position: left; width: 230px; height: 24px; padding-left: 30px; color: #FFF; font-family:Verdana, Geneva, sans-serif; font-size:10px; margin-top: 5px;">												  
													{$LNG.races_r_3}
												</div>
											</div>
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