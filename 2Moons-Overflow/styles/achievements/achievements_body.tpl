{include file="overall_header.tpl"}
{include file="left_menu.tpl"}
{include file="overall_topnav.tpl"}
<div id="content">

<table>
<tr>
<td colspan=4><a class="tooltip" href="#" name="<b>{lang}achievements_mines{/lang}<p>{lang}achievements_t{/lang}<font color=skyblue>{$mines_amount}</font> {lang}achievements_t2{/lang}<br>{lang}achievements_t3{/lang}<font color=skyblue>4</font> {lang}achievements_t2{/lang}</b>">{$mines4_img}</a></td>
<td colspan=4><a class="tooltip" href="#" name="<b>{lang}achievements_tech{/lang}<p>{lang}achievements_t{/lang}<font color=skyblue>{$tech_amount}</font> {lang}achievements_t2{/lang}<br>{lang}achievements_t3{/lang}<font color=skyblue>2</font> {lang}achievements_t2{/lang}</b>">{$tech2_img}</a></td>
<td colspan=4><a class="tooltip" href="#" name="<b>{lang}achievements_engine{/lang}<p>{lang}achievements_t{/lang}<font color=skyblue>{$engine_amount}</font> {lang}achievements_t2{/lang}<br>{lang}achievements_t3{/lang}<font color=skyblue>2</font> {lang}achievements_t2{/lang}</b>">{$engine2_img}</a></td>
<td colspan=4><a class="tooltip" href="#" name="<b>{lang}achievements_colonization{/lang}<p>{lang}achievements_t{/lang}<font color=skyblue>{$colonization_amount}</font> {lang}achievements_t2{/lang}<br>{lang}achievements_t3{/lang}<font color=skyblue>2</font> {lang}achievements_t2{/lang}</b>">{$colonization2_img}</a></td>
<td colspan=4><a class="tooltip" href="#" name="<b>{lang}achievements_war{/lang}<p>{lang}achievements_t{/lang}<font color=skyblue>{$war_amount}</font> {lang}achievements_t2{/lang}<br>{lang}achievements_t3{/lang}<font color=skyblue>3</font> {lang}achievements_t2{/lang}</b>">{$war3_img}</a></td>
</tr>
</table>

<table>
<tr>
<th class=kategorie colspan=3>{lang}achievements_name{/lang}</th>
</tr>


<Mines Start>
<tr>	
<td>
<a class="link" onclick="$('#mines').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$mines_title}</b></a>
<div id="mines" style="display: none;">
<table style="width:100%">
<tr>
<td width="80">
{$mines1_img}</td>
<td><b><p align=left>{$mines1_title}</p>{lang}achievements_mines1_desc{/lang}</b><p>
<b>{$mines1_req1} {$mines1_req2} {$mines1_req3}</b></td>
</tr>

<tr>
<td width="80">
{$mines2_img}</td>
<td><b><p align=left>{$mines2_title}</p>{lang}achievements_mines2_desc{/lang}</b><p>
<b>{$mines2_req1} {$mines2_req2} {$mines2_req3}</b></td>
</tr>

<tr>
<td width="80">
{$mines3_img}</td>
<td><b><p align=left>{$mines3_title}</p>{lang}achievements_mines3_desc{/lang}</b><p>
<b>{$mines3_req1} {$mines3_req2} {$mines3_req3}</b></td>
</tr>

<tr>
<td width="80">
{$mines4_img}</td>
<td><b><p align=left>{$mines4_title}</p>{lang}achievements_mines4_desc{/lang}</b><p>
<b>{$mines4_req1} {$mines4_req2} {$mines4_req3}</b></td>
</tr>

</table>
</div>
<Mines End>

<Tech Start>
<tr>	
<td>
<a class="link" onclick="$('#tech').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$tech_title}</b></a>
<div id="tech" style="display: none;">
<table style="width:100%">
<tr>
<td width="80">
{$tech1_img}</td>
<td><b><p align=left>{$tech1_title}</p>{lang}achievements_tech1_desc{/lang}</b><p>
<b>{$tech1_req1} {$tech1_req2} {$tech1_req3}</b></td>
</tr>

<tr>
<td width="80">
{$tech2_img}</td>
<td><b><p align=left>{$tech2_title}</p>{lang}achievements_tech2_desc{/lang}</b><p>
<b>{$tech2_req1} {$tech2_req2} {$tech2_req3}</b></td>
</tr>

</table>
</div>
<Tech End>

<Engine Start>
<tr>	
<td>
<a class="link" onclick="$('#engine').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$engine_title}</b></a>
<div id="engine" style="display: none;">
<table style="width:100%">
<tr>
<td width="80">
{$engine1_img}</td>
<td><b><p align=left>{$engine1_title}</p>{lang}achievements_engine1_desc{/lang}</b><p>
<b>{$engine1_req1} {$engine1_req2} {$engine1_req3}</b></td>
</tr>

<tr>
<td width="80">
{$engine2_img}</td>
<td><b><p align=left>{$engine2_title}</p>{lang}achievements_engine2_desc{/lang}</b><p>
<b>{$engine2_req1} {$engine2_req2} {$engine2_req3}</b></td>
</tr>

</table>
</div>
<Engine End>

<Colonization Start>
<tr>	
<td>
<a class="link" onclick="$('#colonization').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$colonization_title}</b></a>
<div id="colonization" style="display: none;">
<table style="width:100%">
<tr>
<td width="80">
{$colonization1_img}</td>
<td><b><p align=left>{$colonization1_title}</p>{lang}achievements_colonization1_desc{/lang}</b><p>
<b>{$colonization1_req1} {$colonization1_req2} {$colonization1_req3}</b></td>
</tr>

<tr>
<td width="80">
{$colonization2_img}</td>
<td><b><p align=left>{$colonization2_title}</p>{lang}achievements_colonization2_desc{/lang}</b><p>
<b>{$colonization2_req1} {$colonization2_req2} {$colonization2_req3}</b></td>
</tr>

</table>
</div>
<Colonization End>

<War Start>
<tr>	
<td>
<a class="link" onclick="$('#war').slideToggle();return false" href="#"><p align=left>
&nbsp <b>{$war_title}</b></a>
<div id="war" style="display: none;">
<table style="width:100%">
<tr>
<td width="80">
{$war1_img}</td>
<td><b><p align=left>{$war1_title}</p>{lang}achievements_war1_desc{/lang}</b><p>
<b>{$war1_req1} {$war1_req2} {$war1_req3}</b></td>
</tr>

<tr>
<td width="80">
{$war2_img}</td>
<td><b><p align=left>{$war2_title}</p>{lang}achievements_war2_desc{/lang}</b><p>
<b>{$war2_req1} {$war2_req2} {$war2_req3}</b></td>
</tr>

<tr>
<td width="80">
{$war3_img}</td>
<td><b><p align=left>{$war3_title}</p>{lang}achievements_war3_desc{/lang}</b><p>
<b>{$war3_req1} {$war3_req2} {$war3_req3}</b></td>
</tr>

</table>
</div>
<War End>

</table>
</div>
{include file="planet_menu.tpl"}
{include file="overall_footer.tpl"}