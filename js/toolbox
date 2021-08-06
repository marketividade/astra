function setDate(element, value, sum) {
	//if (isValidDate(value)) {
	jQuery(element).val(new Date(calculateTime(value) + sum).toLocaleDateString('pt-br'));
	//}
}
//}


// Criar função para colher dados da URL
function requestQueryString(variable) {
	var vars = [], hash;
	var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
	for (var i = 0; i < hashes.length; i++) {
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars[variable];
}

/*Criar função para calculos de dias versus milisegundos*/
function days(miliseconds) {
	return miliseconds / (1000 * 3600 * 24);
}

/*Criar função para calculos envolvendo datas*/
function calculateTime(txtDateVal) {
	var parts = txtDateVal.split("/");
	var dtDateVal = new Date(parseInt(parts[2], 10),
		parseInt(parts[1], 10) - 1,
		parseInt(parts[0], 10));
	return Date.parse(dtDateVal);
}

/*Criar função para habilitar e desabilitar botões de confirmação de datas*/
function toggleBtn(button, status) {

	if (status == "enabled") {
		jQuery(button).removeAttr("disabled");
		//  console.log("function called");

	}
	else {
		jQuery(button).attr("disabled", "disabled");
	}
}

/*Criar função para repor texto existente na página*/
function replaceTxt(element, orignalText, newText) {
	jQuery(element).text(jQuery(element).text().replace(orignalText, newText));
}

function replaceHtml(element, orignalText, newText) {

	var selected_element = jQuery(element + ":contains('" + orignalText + "')");
	var edited_content = selected_element.html().replace(orignalText, newText);
	selected_element.html(edited_content);
	//console.clear();
	//console.log(selected_element);

}

/*Criar função para validar as datas informadas*/
function isValidDate(date) {
	return /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/g.test(date)
}

function isHome() {
	var pages = ['/', '/home'];
	var home = false;

	for (var i = 0; i < pages.length; i++) {
		if (location.pathname == pages[i]) {
			home = true;
			//  console.log("home");

			//do stuff you want here
			break; //terminates the loop on first match
		}
	}
	return home;
}

function isPage(page) {
	var pages = ['/' + page, page, page + '/', '/' + page + '/'];
	var isItPage = false;

	for (var i = 0; i < pages.length; i++) {
		if (location.pathname == pages[i]) {
			isItPage = true;
			//  console.log("home");

			//do stuff you want here
			break; //terminates the loop on first match
		}
	}
	return isItPage;
}

function svgColor(element, color) {
  //"#0094A1" verde
  //"#FFFFFF" branca
  //.icon-search lupa
    jQuery(element + " svg path").css("fill", color);
}

function replaceTxt(element, orignalText, newText) {
	jQuery(element).text(jQuery(element).text().replace(orignalText, newText));
}

function replaceHtml(element, orignalText, newText) {

	var selected_element = jQuery(element + ":contains('" + orignalText + "')");
	if (selected_element.lenth) {
		var edited_content = selected_element.html().replace(orignalText, newText);
		selected_element.html(edited_content);
	}

	//console.clear();
	//console.log(selected_element);

}

function requestSpecificString(url, variable) {
	var vars = [], hash;
	var hashes = url.slice(url.indexOf('?') + 1).split('&');
	for (var i = 0; i < hashes.length; i++) {
		hash = hashes[i].split('=');
		vars.push(hash[0]);
		vars[hash[0]] = hash[1];
	}
	return vars[variable];
}

function isDefined(variable) {
	if (typeof variable === 'undefined')
	{ return false }
	else
	{ return true }
}
