{block name="title" prepend}{$LNG.siteTitleIndex}{/block}
{block name="content"}


	
<link rel="stylesheet" type="text/css" href="styles/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="styles/css/login.css">
     <link rel="stylesheet" type="text/css" href="./space.css">
    



	<div class="header">
		<ul class="inline">
			<li><a href="index.php">Index</a></li>
            <li><a href="index.php?page=rules">Rules</a></li>
      <li><a href="index.php?page=disclamer">Contact</a></li>
	  <li>
		{if count($languages) > 1}
		<ul id="language">
		{foreach $languages as $langKey => $langName}
		<li><a href="?lang={$langKey}" rel="alternate" hreflang="{$langKey}" title="{$langName}"><span class="flags {$langKey}">{$langName}</span></a></li>
		{/foreach}
		</ul>
		{/if}
	</li>
		</ul>
	</div>
	<div class="wrapper">
    	<img src="styles/images/sixaxis.png" style="position: absolute; margin-top: 70px; margin-left: -180px; z-index: 2000">
	
<div id="main_div_centre">
{$LNG.takeo}

	<div id="content" class="sub_main"><form action="" method="post">
	<div class="sub_main_cat_2_1">
		<div class="sub_main_cat_2_1_1">
			Register for Free :
		</div>
	
		<div class="sub_main_cat_2_1_2">Username :</div>
		<div class="sub_main_cat_2_1_3">
			<div class="sub_main_cat_2_1_3_2 border10l">
				<input name="username" type="text">
			</div>
			
		</div>
		<div class="sub_main_cat_2_1_2">Email :</div>
		<div class="sub_main_cat_2_1_3">
			<div class="sub_main_cat_2_1_3_2 border10l">
				<input name="email" type="text">
			</div>
			
		</div>
		<div class="sub_main_cat_2_1_2">Password :</div>
		<div class="sub_main_cat_2_1_3">
			<div class="sub_main_cat_2_1_3_2 border10l">
				<input name="password" type="password">
			</div>
			
		</div>
		<div class="sub_main_cat_2_1_3_4">
			<input name="rules" id="reg_cgu" value="1" type="checkbox"> When checking this box, you accept the <span id="cgu" class="show_hidden">rules</span>
		</div>
		<div class="sub_main_cat_2_1_3_5">
			<input class="rep_submit" value="Take Over" type="submit">
		</div>
	</div></div>
	<div id="infos_univers" class="sub_main_cat_2_2 border20">
		<div class="sub_main_cat_2_2_1">Select one of these avaible accounts :</div>
<div class="sub_main_cat_2_2_1"><div class="rep_pad"><div>Rank :</div><div>Total</div><div>Buildings</div><div>Research</div></div></div>
<div class=""><br><label><div class="sub_main_cat_2_2_1_1"><div class="rep_pad">
{foreach name=RangeList item=RangeInfo from=$RangeList}<label>
<div><input type="radio" name="idc" value="{$RangeInfo.id}"></div><div>{$RangeInfo.total_rank}</div><div>{$RangeInfo.build_rank}</div><div>{$RangeInfo.tech_rank}</div>
</label>
{/foreach}

</div>
	</div>Total Online: <span style="color:red">{$online_users}/{$reg_user}</span>
</form></div>

<div class="footer">
		&copy; Copyright 2012 - 2013 | All rights reserved<br>
        Powered by <a href="" onClick="window.open(this.href); return false;">Annonymous</a> | Published by <a href="" onClick="window.open(this.href); return false;">Annonymous</a><br>
	</div>
</html>{/block}