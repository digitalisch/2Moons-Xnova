function MovimentoGalassia(mo_galasia){
        mo_galasia = (mo_galasia) ? mo_galasia : ((evento) ? evento : null);
        if(mo_galasia.keyCode == 37) {
          galaxy_submit('systemLeft');

      }
      if(mo_galasia.keyCode == 39) {
          galaxy_submit('systemRight');
      }
      if(mo_galasia.keyCode == 38) {
          galaxy_submit('galaxyRight');
     }

      if(mo_galasia.keyCode == 40) {
          galaxy_submit('galaxyLeft');
      }
  }
  document.onkeydown = MovimentoGalassia;

function doit(missionID, planetID) {
	$.getJSON("game.php?page=fleetAjax&ajax=1&mission="+missionID+"&planetID="+planetID, function(data)
	{
		$('#slots').text(data.slots);
		if(typeof data.ships !== "undefined")
		{
			$.each(data.ships, function(elementID, value) {
				$('#elementID'+elementID).text(number_format(value));
			});
		}
		
		var statustable	= $('#fleetstatusrow');
		var messages	= statustable.find("~tr");
		if(messages.length == MaxFleetSetting) {
			messages.filter(':last').remove();
		}
		var element		= $('<td />').attr('colspan', 8).attr('class', data.code == 600 ? "success" : "error").text(data.mess).wrap('<tr />').parent();
		statustable.removeAttr('style').after(element);
	});
}

function galaxy_submit(value) {
	$('#auto').attr('name', value);
	$('#galaxy_form').submit();
}