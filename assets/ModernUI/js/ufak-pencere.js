var isCorelo = false;

function actionCorelo() {
	if (!isCorelo) {
		isCorelo = true;

		$("#bilgiCorelo").css("width","auto")
		
	} else {
		isCorelo = false;
		$("#bilgiCorelo").animate({
			width: "0px",
			display: "none"
		}, 80);
		
	}
}

var isGCorelo = false;

function actionGCorelo() {
	if (!isGCorelo) {
		isGCorelo = true;

		$("#grup-bilgiGCorelo").animate({
			width: "225px",
			display: "block",
		}, 80);

		
	} else {
		isGCorelo = false;
		$("#grup-bilgiGCorelo").animate({
			width: "0px",
			display: "none"
		}, 80);
		
	}
}