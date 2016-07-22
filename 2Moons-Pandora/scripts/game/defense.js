var v  			= new Date();

function DefenseInit() {
	Defense		= data.Queue;
	Amount			= new DecimalNumber(Defense[0][1],0);
	defense_id		= data.b_defense_id_plus;
	$('#timeleft').text(data.pretty_time_b_defense);
	DefenseList();
	BuildlistDefense();
	DefenseInterval	= window.setInterval(BuildlistDefense, 1000);
}

function BuildlistDefense() {
	var n = new Date();
	var s = Defense[0][2] - defense_id - Math.round((n.getTime() - v.getTime()) / 1000);
	var s = Math.round(s);
	var m = 0;
	var h = 0;
	if (s <= 0) {
		Amount.sub('1');
		$('#val_'+Defense[0][3]).text(function(i, old){
			return ' ('+bd_available+NumberGetHumanReadable(parseInt(old.replace(/.* (.*)\)/, '$1').replace(/\./, ''))+1)+')';
		})
		if (Amount.toString() == '0') {
			Defense.shift();
			if (Defense.length == 0) {
				$("#bx").html(Ready);
				document.getElementById('auftr').options[0] = new Option(Ready);
				document.location.href	= document.location.href;
				window.clearInterval(DefenseInterval);
				return;
			}
			Amount = Amount.reset(Defense[0][1]);
			DefenseList();
		} else {
			document.getElementById('auftr').options[0].innerHTML	= Amount.toString() + " " + Defense[0][0] + " " + bd_operating;
		}
		defense_id = 0;
		v = new Date();
		s = 0;
	}
	$("#bx").html(Defense[0][0]+" "+GetRestTimeFormat(s));
}

function DefenseList() {
	while (document.getElementById('auftr').length > 0)
		document.getElementById('auftr').options[document.getElementById('auftr').length - 1] = null;

	for (iv = 0; iv <= Defense.length - 1; iv++ ) {
		if(iv == 0)
			document.getElementById('auftr').options[iv] = new Option(Amount.toString()+ " " + Defense[iv][0] + " " + bd_operating, iv);
		else
			document.getElementById('auftr').options[iv] = new Option(Defense[iv][1]+ " " + Defense[iv][0] + " " + bd_operating, iv);
	}
}