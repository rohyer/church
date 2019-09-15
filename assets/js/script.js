$('#banner-full ul').owlCarousel({
	loop: true,
	reponsiveClass: true,
	responsive:{
		0:{
			items: 1,
			nav: true
		},
		600:{
			items: 1,
			nav: true
		},
		1000:{
			items: 1,
			nav: true
		}
	}
});

$('#events ul').owlCarousel({
	loop: false,
	reponsiveClass: true,
	responsive:{
		0:{
			items: 1,
			nav: true
		},
		600:{
			items: 2,
			nav: true
		},
		1000:{
			items: 3,
			nav: true
		}
	}
});


$('#schedules ul').owlCarousel({
	loop: false,
	reponsiveClass: true,
	responsive:{
		0:{
			items: 1,
			nav: true
		},
		600:{
			items: 1,
			nav: true
		},
		1000:{
			items: 1,
			nav: true
		}
	}
});


function openEvent() {
	var eventContent = document.getElementsByClassName("event-content");
	var eventPost = document.getElementsByClassName("event-post");
	var eventOpen = document.getElementsByClassName("open-content-event");
	var eventClose = document.getElementsByClassName("close-content-event");
	var eventPlus = document.getElementsByClassName("event-plus");
	var i;
	var j;
	var k;
	var l;
	var m;
	
	for (i = 0; i < eventContent.length; i++) {
		eventContent[i].style.visibility = "visible";
		eventContent[i].style.top = "120px";
		eventContent[i].style.left = "17px";
	}

	for (j = 0; j < eventOpen.length; j++) {
		eventPost[j].classList.add("event-post-before");
	}

	// for (k = 0; k < eventOpen.length; k++) {
	// 	eventOpen[k].style.display = "none";
	// }

	// for (l = 0; l < eventClose.length; l++) {
	// 	eventClose[l].style.display = "block";
	// }

	for (m = 0; m < eventPlus.length; m++) {
		eventPlus[m].style.transform = "rotateZ(45deg)";
		eventPlus[m].style.transition = ".3s";
		eventPlus[m].style.color = "#ffffff";
	}
}

function closeEvent() {
	var eventContent = document.getElementsByClassName("event-content");
	var eventPost = document.getElementsByClassName("event-post");
	var eventClose = document.getElementsByClassName("close-content-event");
	var eventOpen = document.getElementsByClassName("open-content-event");
	var i;
	var j;
	var k;
	var l;
	
	for (i = 0; i < eventContent.length; i++) {
		eventContent[i].style.visibility = "hidden";
		eventContent[i].style.top = "420px";
		eventContent[i].style.left = "17px";
	}

	for (j = 0; j < eventOpen.length; j++) {
		eventPost[j].classList.remove("event-post-before");
	}

	for (k = 0; k < eventClose.length; k++) {
		eventClose[k].style.display = "none";
	}
	
	for (l = 0; l < eventOpen.length; l++) {
		eventOpen[l].style.display = "block";
	}
	
}