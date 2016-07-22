{block name="title" prepend}Loyality Program{/block}
{block name="content"}
<table>
		<tr>
			<td>
                <div id="top_customers">
	<div class="loyalty_program_info" style="margin-top:30px;">
		<h1>Loyality Program</h1>
		<p> {$LNG.lp1}
</p>
	</div>

	<div class="lp_container">
	<div class="black_gradient" style="margin-top:180px">
		<div class="badge">
			<!--<img src="styles/images/bronze_badge.png" width="100%" height="100%">-->
             
		</div>
		<h2>{$text}</h2>
	</div>
		<table class="benefit_details">
                                     <tbody>
                    <tr>
                        <td>
                            {$lol}

                        </td>
                    </tr>
	            </tbody></table>
                
           </div>
<div class="lp_container_details">
	<table width="100%">
		<thead>
		<tr>
			<td style="width:248px"><h1 style="margin-left: 50px;">Levels</h1></td>
			<td class="header" colspan="5"></td>
		</tr>
		</thead>
		<tbody>
		<tr class="row_color">
			<th>{$LNG.lp2}</th>
						<td style="width: 128px;">1x</td>
						<td style="width: 128px;">2x</td>
						<td style="width: 128px;">4x</td>
						<td style="width: 128px;">6x</td>
						<td style="width: 128px;">8x</td>
					</tr>
		{* <tr class="row_color">
			<th>L.P received bonus</th>
			                                    <td>250</td>
												<td>500</td>
												<td>1000</td>
												<td>2000</td>
												<td>4000</td>
								</tr> *}
		<tr>
			<th>{$LNG.lp3}</th>
						<td>0%</td>
						<td>5%</td>
						<td>10%</td>
						<td>15%</td>
						<td>20%</td>
					</tr>
		<tr class="row_color">
			<th>{$LNG.lp4}</th>
									<td>-</td>
									<td>125</td>
									<td>625<!--<img src="styles/images/lock.png" width="21px" height="24px">--></td>
									<td>2500</td>
									<td>7000</td>
					</tr>
		</tbody>
	</table>
</div>
</div>
            </td>
        </tr>
    </table>
{/block}
