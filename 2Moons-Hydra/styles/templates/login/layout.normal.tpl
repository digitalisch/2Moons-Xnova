{include file="main.header.tpl"}
{include file="main.navigation.tpl"}
<div id="content">
<section>
<div id="wrap" class="container_24">

	<!-- Box Header: Start -->
	<div class="box_top">
		
		<h2 class="icon">{block name=title}{/block}</h2>
		
	</div>
	<!-- Box Header: End -->
	
	<!-- Box Content: Start -->
	<div class="box_content padding">
		
	{block name=content} {/block}
		
	</div>
	<!-- Box Content: End -->
	
</div>
</section>
</div>

{include file="main.footer.tpl" nocache}