(function($){
	console.log("Main.js loaded");
	var activeThumb = 1;
	var display = document.querySelector("#display #displayImg");
	var back = document.querySelector("#display #back");
	var next = document.querySelector("#display #next");
	var thumbs = document.querySelectorAll("#thumbs li a");

	var artdisplay = document.querySelector("#artDisplay #artDisplayImg");
	var artback = document.querySelector("#artDisplay #back");
	var artnext = document.querySelector("#artDisplay #next");

	for (var i = 0,j=thumbs.length; i < j; i++) {
		thumbs[i].onclick = function(e){
			e.preventDefault();
			this.getAttribute("href");
			artdisplay.setAttribute("src", this.getAttribute("href"));
			console.log("image hit and main image switched");
			return false;
		};
	};

	if(artback){
		artback.onclick = function(e){
			console.log("back hit");
			e.preventDefault();
			if (activeThumb == 1) {
				activeThumb = 4;
				artdisplay.setAttribute("src", "img/art/" + activeThumb+".png");
			}else{
				activeThumb--;
				artdisplay.setAttribute("src", "img/art/" + activeThumb+".png");
			};
			return false;
		};
	}

	if(artnext){
		artnext.onclick = function(e){
			console.log("next hit");
			e.preventDefault();
			if (activeThumb == 4) {
				activeThumb = 1;
				artdisplay.setAttribute("src", "img/art/" + activeThumb+".png");
			}else{
				activeThumb++;
				artdisplay.setAttribute("src", "img/art/" + activeThumb+".png");
			};
			return false;
		};
	}

	if(back){
		back.onclick = function(e){
			console.log("back hit");
			e.preventDefault();
			if (activeThumb == 1) {
				activeThumb = 3;
				display.setAttribute("src", "img/CTA/" + activeThumb+".png");
			}else{
				activeThumb--;
				display.setAttribute("src", "img/CTA/" + activeThumb+".png");
			};
			return false;
		};
	}

	if(next){
		next.onclick = function(e){
			console.log("next hit");
			e.preventDefault();
			if (activeThumb == 3) {
				activeThumb = 1;
				display.setAttribute("src", "img/CTA/" + activeThumb+".png");
			}else{
				activeThumb++;
				display.setAttribute("src", "img/CTA/" + activeThumb+".png");
			};
			return false;
		};
	}

})(jQuery);