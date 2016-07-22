{block name="title" prepend}{$LNG.lm_logout}{/block}
{block name="content"}<section id="playground">
<div class="full-width">
<div class="box">
<div class="inner"> 
<div class="titlebar">{$LNG.lm_alliance}</div>
<div class="contents">
<table style="width:100%">
	<tr>
		<th>{$LNG.lo_title}</th>
		</tr>
	<tr>
		<td>{$LNG.lo_logout}</td>
	</tr>
</table>
<br><br>
<table style="width:100%">
<tr>
	<th>{$LNG.lo_redirect}</th>
</tr>
<tr>
	<td>{$LNG.lo_notify}<br><a href="./index.php">{$LNG.lo_continue}</a></td>
</tr>
</table>

</div>
</div>
</div>
</div>
</section>
{/block}
{block name="script" append}
<script type="text/javascript">
    var second = 5;
	function Countdown(){
		if(second == 0)
			return;
			
		second--;
		$('#seconds').text(second);
	}
	window.setTimeout("window.location.href='./index.php'", 5000);
	window.setInterval("Countdown()", 1000);
</script>
{/block}