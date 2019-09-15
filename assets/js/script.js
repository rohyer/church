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


function clickEvents() {
	var eventContent = document.getElementsByClassName("event-content");
	var i;
	for (i = 0; i < eventContent.length; i++) {
		eventContent[i].style.visibility = "visible";
		eventContent[i].style.top = "-200px";
		eventContent[i].style.left = "-163px";
	}
	
}