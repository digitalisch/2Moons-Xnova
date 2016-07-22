<form action="?page=fleetTable&amp;action=acs" method="post">
<input name="fleetID" value="{$acsData.mainFleetID}" type="hidden">
	<table class="redesign">
		<tr>
			<th colspan="2" id="acsName">{$acsData.acsName} (<a href="javascript:Rename();">{$LNG.fl_acs_change}</a>)</td>
		</tr>
		<tr style="height:20px;">
			<td style="width:50%;">{$LNG.fl_members_invited}</th>
            <td style="width:50%;">{$LNG.fl_invite_members}</th>
		</tr>
		{if !empty($acsData.statusMessage)}
		<tr>
			<td colspan="2">
				{$acsData.statusMessage}
			</td>
		</tr>
		{/if}
		<tr>
			<td>
				<select size="5" style="width:80%;">
					{html_options options=$acsData.invitedUsers}
                </select>
			</td>
			<td>
				<p><input name="username" type="text"></p>
				<p><input type="submit" class="button" value="{$LNG.fl_continue}"></p>
			</td>
		</tr>
	</table>
</form>
<script type="text/javascript">
function Rename(){
	var Name = prompt("{$LNG.fl_acs_change_name}", "{$acsData.acsName}");
	$.getJSON('?page=fleetTable&action=acs&fleetID={$acsData.mainFleetID}&acsName='+Name, function(data) {
		if(data != "") {
			alert(data);
			return;
		}
		$('#acsName').text(Name);
	});
}
</script>