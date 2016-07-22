
<!-- Footer Grid: Start -->
<div id="wrap" class="container_24">


	<!-- Footer: Start -->
	<div id="footer">
		
		<p class="left">
			Copyright &#169; 2014 <a href="https://2moons-host.com">2Moons Browsergame Hosting</a> 
			| Powered by <a href="http://2moons.cc">2Moons v1.7.3</a>.
		</p>
		
		
		<!-- Footer Icon Navigation: Start -->
		<ul class="right">
			<li><a href="https://2moons-host.com" class="icon home tip" title="Home">Home</a></li>
		</ul>
		<!--Footer Icon Navigation: End -->
		
	</div>
	<!-- Footer: End -->
	
</div>
<!-- Footer Grid: End -->


</div>
<div id="dialog" style="display:none;"></div>
<script>
var LoginConfig = {
	'isMultiUniverse': {$isMultiUniverse|json},
	'referralEnable' : {$referralEnable|json},
	'basePath' : {$basepath|json}
};
</script>
{if $analyticsEnable}
<script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
<script type="text/javascript">
try{
var pageTracker = _gat._getTracker("{$analyticsUID}");
pageTracker._trackPageview();
} catch(err) {}</script>
{/if}
</body>
</html>