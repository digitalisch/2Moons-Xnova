{block name="title" prepend}{$LNG.fcm_info}{/block}
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
<table class="table519">
	<tr>
		<td><p>{$message}</p>{if !empty($redirectButtons)}<p>{foreach $redirectButtons as $button}<a href="{$button.url}"><button>{$button.label}</button></a>{/foreach}</p>{/if}</td>
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
                  
				  
               </div>
               <div class="clear"></div>
            </div>
            <div class="footer">
               <span>
                  Contact owner <a href="flocke_dittrich@gmx.de">Bijuu</a><br />
               </span>
            </div>
         </div>
      </div>
{/block}