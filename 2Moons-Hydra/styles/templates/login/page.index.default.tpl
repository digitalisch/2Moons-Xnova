{block name="title" prepend}{$LNG.siteTitleIndex}{/block}
{block name="content"}

<div id="wrap" class="container_24">

	<!-- Header Grid Container: Start -->
	<div class="login">
		
	<!-- Info Notice: Start -->
	<div class="notice info">
		<p>{$LNG.loginNotf}</p>
	</div>
	<!-- Info Notice: End -->
	
		<!-- Header: Start -->
		<div id="header">
				
			<!-- Logo: Start -->
			<a href="#" id="logo"></a>
			<!-- Logo: End -->
			
			<!-- Login: Start -->
				<form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
				
				<!-- Username Input: Start -->
				<label for="username" class="label_username">User</label>
				<input type="text" name="username" value="username" id="username" class="password tip-stay validate" title="Username" />
				<!-- Username Input: End -->
				
				<!-- Password Input: Start -->
				<label for="password" class="label_password">Password</label>
				<input type="password" name="password" value="password" id="password" class="password tip-stay validate" title="Password" />
				<!-- Password Input: End -->
				
				<!-- Login Button: Start -->
				<input type="submit" value="login" class="tip" title="Login" />
				<!-- Login Button: End -->
				
			</form>
			<!-- Login: End -->
			
		</div>
		<!-- Header: End -->
		
		<!-- Breadcrumb Bar: Start -->
		<div id="breadcrumb">
			
			<!-- Breadcrumb: Start -->
			<ul class="left">
				<li class="icon bullseye"><a href="index.php?page=register">{$LNG.loginReg}</a></li>
				<li class="icon key"><a href="index.php?page=lostPassword">{$LNG.loginReg2}</a></li>
			</ul>
			<!-- Breadcrumb: End -->
			
			<!-- Breadcrumb Icon Links: Start -->
			<ul class="right">
			<li><a href="#" class="icon home tip" title="Home">Home</a></li>
			<li><a href="index.php?page=rules" class="icon book tip" title="{$LNG.menu_rules}">{$LNG.menu_rules}</a></li>
			<li><a href="index.php?page=battleHall" class="icon ipad tip" title="{$LNG.menu_battlehall}">{$LNG.menu_battlehall}</a></li>
			<li><a href="index.php?page=banList" class="icon warning2 tip" title="{$LNG.menu_banlist}">{$LNG.menu_banlist}</a></li>
			</ul>
			<!-- Breadcrumb Icon Links: End -->
			
		</div>
		<!-- Breadcrumb Bar: End -->
		
	</div>
	<!-- Header Grid Container: End -->

</div>
<div id="wrap" class="container_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon pages">Edit CUSTOM.php - {$LNG.loginNews}</h2>
		
		<!-- Tab Select: Start -->
		<ul class="sorting">
			<li><a href="#tab1" class="active">{$LNG.loginNews1}</a></li>
			<li><a href="#tab2">{$LNG.loginNews2}</a></li>
		</ul>
		<!-- Tab Select: End -->
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
		<!-- Tabs: Start -->
		<div class="tabs">
			
			<div id="tab1">
				<p>You can remove "Edit CUSTOM.php" in page.index.default.tpl<br><br>
				{$LNG.loginNews1_1}
				</p>
			</div>
			
			<div id="tab2">
				<p>
				{$LNG.loginNews1_2}
				</p>
			</div>
			
			
		</div>
		<!-- Tabs: End -->

	</div>
	<!-- Box Content: End -->
	
</div>



{/block}
{block name="script" append}
<script>{if $code}alert({$code|json});{/if}</script>
{/block}