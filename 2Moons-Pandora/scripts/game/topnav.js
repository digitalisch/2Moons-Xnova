//topnav.js
//RealTimeRessisanzeige for 2Moons
// @version 1.0
// @copyright 2010 by ShadoX

function resourceTicker(config, init) {
	if(typeof init !== "undefined" && init === true)
		window.setInterval(function(){resourceTicker(config)}, 1000);
		
	var element	= $('#'+config.valueElem);

	if(element.hasClass('res_current_max'))
	{
		return false;
	}
	
	var nrResource = Math.max(0, Math.round(parseFloat(config.available) + parseFloat(config.production) / 3600 * (serverTime.getTime() - startTime) / 1000));
	
	if (nrResource < config.limit[1]) 
	{
		if (!element.hasClass('res_current_warn') && nrResource >= config.limit[1] * 0.9)
		{
			element.addClass('res_current_warn');
		}
		if(viewShortlyNumber) {
			element.attr('data-tooltip-content', NumberGetHumanReadable(nrResource));
			element.html(shortly_number(nrResource));
		} else {
			element.html(NumberGetHumanReadable(nrResource));
		}
	} else {
		element.addClass('res_current_max');
	}
}

function getRessource(name) {
	return parseInt($('#current_'+name).data('real'));
}

$(function() {
	var div			= $('#planetSelectorWrapper');
	var Selector	= div.children('select');
	var Val			= Selector.val();
	var Option		= Selector.find('option:selected');
	Selector.before(function() {
		if(Option.prev().length == 1) {
			div.css('width', function(index, value) {
				return (parseFloat(value) + 30)+"px";
			});
			Selector.css('margin', '37px 5px');
			return '<input type="button" style="margin:37px 0 0 5px;float:center;" value="<-" onclick="$(\'#planetSelector > :selected\').prev().attr(\'selected\', \'selected\');$(\'#planetSelector\').trigger(\'change\')">';
		}
	});
	Selector.after(function() {
		if(Option.next().length == 1) {
			div.css('width', function(index, value) {
				return (parseFloat(value) + 30)+"px";
			});
			Selector.css('margin', '37px 5px');
			return '<input type="button" style="margin:37px 0;float:center;" value="->" onclick="$(\'#planetSelector > :selected\').next().attr(\'selected\', \'selected\');$(\'#planetSelector\').trigger(\'change\')">';
		}
	});
})();