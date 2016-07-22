{block name="title" prepend}{$LNG.siteTitleIndex}{/block}
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
                     <div class="innerContent featureImages">
					 <div id="container">
							<div id="slider">
								<ul>
									<li><img src="./styles/resource/images/login/slideshow/1.jpg" width="630" height="246" alt="Image One" /></li>
									<li><img src="./styles/resource/images/login/slideshow/2.jpg" width="630" height="246" alt="Image Two" /></li>
									<li><img src="./styles/resource/images/login/slideshow/3.jpg" width="630" height="246" alt="Image Three" /></li>
									<li><img src="./styles/resource/images/login/slideshow/4.jpg" width="630" height="246" alt="Image Four" /></li>
								</ul>
							</div>
							<ul id="pagination" class="pagination">
								<li onclick="slideshow.pos(0)"></li>
								<li onclick="slideshow.pos(1)"></li>
								<li onclick="slideshow.pos(2)"></li>
								<li onclick="slideshow.pos(3)"></li>
							</ul>
                     </div>
					 </div>
                  </div>
                  <div class="contentBlock small">
                     <div class="innerContent blockImages">
                        
							<img src="./styles/resource/images/login/races/goauld/1.png" alt="" height="140"></img>
                     </div>
                  </div>
                  <div class="contentBlock small">
                     <div class="innerContent blockImages">
                        
							<img src="./styles/resource/images/login/races/humans/1.png" alt="" height="140"></img>
                     </div>
                  </div>
                  <div class="contentBlock small last">
                     <div class="innerContent blockImages">
                          
							<img src="./styles/resource/images/login/races/replicator/1.png" alt="" height="140"></img>
                     </div>
                  </div>
                  <div class="clear"></div>
             
					
				  <div class="contentBlock">
                     <div class="innerContent" style="height:262px">
                      	<h1>{foreach $newsList as $newsRow}
								{if !$newsRow@first}<hr>{/if}
								<h2>{$newsRow.title}</h2><br>
								<div class="info">{$newsRow.from}</div>
								<br><div><p>{$newsRow.text}</p></div>
							{foreachelse}
								<h1>{$LNG.news_does_not_exist}</h1>
							{/foreach}</h1>
                     </div>
                  </div>
				  
               </div>
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
	<script type="text/javascript">
var slideshow=new TINY.slider.slide('slideshow',{
	id:'slider',
	auto:4,
	resume:false,
	vertical:true,
	navid:'pagination',
	activeclass:'current',
	position:0,
	rewind:false,
	elastic:true,
});

  jQuery(document).ready(function($) {
      $('a').smoothScroll({
        speed: 1000,
        easing: 'easeInOutCubic'
      });

      $('.showOlderChanges').on('click', function(e){
        $('.changelog .old').slideDown('slow');
        $(this).fadeOut();
        e.preventDefault();
      })
  });
</script>

{/block}
{block name="script" append}
<script>{if $code}alert({$code|json});{/if}</script>
{/block}