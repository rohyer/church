$('#banner-full ul').owlCarousel({
	loop: true,
	responsiveClass: true,
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
	responsiveClass: true,
	responsive:{
		0:{
			items: 1,
			nav: true
		},
		768:{
			items: 2,
			nav: true
		},
		992:{
			items: 3,
			nav: true
		}
	}
});

$('#schedules-responsive ul').owlCarousel({
	items: 1,
	loop: true,
	autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
	responsiveClass: true,
	responsive:{
		0:{
			items: 1,
			nav: true
		}
	}
});


$('#schedules .aul').owlCarousel({
	items: 1,
	loop: false,
	responsiveClass: true,
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

$('#messages ul').owlCarousel({
	items: 1,
	loop: false,
	autoplay: true,
    autoplayTimeout: 1000,
    autoplayHoverPause: true,
	responsiveClass: true,
	responsive:{
		0:{
			items: 1,
			nav: true
		},
		768:{
			items: 2,
			nav: true
		},
		992:{
			items: 3,
			nav: true
		}
	}
});

$(window).on("load scroll", function(){
    $(".show").each(function(){
        var el = $(this);
        var eleHeight = el.outerHeight(); // altura da div
        var eleTopo = el.offset().top; // distancia da div ao topo do documento
        var scrlTopo = $(window).scrollTop(); // quanto foi rolada a janela
        var distance = eleTopo-scrlTopo; // distancia da div ao topo da janela
        var altJanela = window.innerHeight; // altura da janela
        if(distance <= altJanela-(eleHeight/3)) {
            el.animate({ 'opacity': 1 }, 400);
        }
    });
});

// document.getElementById("first-three-schedules").remove();

const home = window.document.getElementsByTagName('body')[0].className
let homeArray = home.split(' ')

// Scroll Click Down
if (homeArray[0] == 'home') {
	const arrowDownGlobal = window.document.getElementById('arrow-down')
	arrowDownGlobal.addEventListener('click', goDown)
	function goDown() {
		let mainImage = window.document.getElementById('content-1').offsetTop
		scrollToPosition(mainImage)
	}
}


// Scroll Click Top
if (homeArray[0] == 'home') {
	const arrowTopGlobal = window.document.getElementById('arrow-top')
	arrowTopGlobal.addEventListener('click', goTop)
	function goTop() {
		let windowTop = window.document.getElementById('main-image').offsetTop
		scrollToPosition(windowTop)
	}
}

function scrollToPosition(toPosition) {
	smoothScrollTo(toPosition, 1000)
}

function smoothScrollTo(endY, duration) {
	const startY = window.scrollY || window.pageYOffset
	const distanceY = endY - startY
	const startTime = new Date().getTime()

	duration = typeof duration !== 'undefined' ? duration : 400

	const easeInOutQuart = (time, from, distance, duration) => {
		if ((time /= duration /2 ) < 1) return distance / 2 * time * time * time * time * time + from
		return -distance /2 * ((time -= 2) * time * time * time - 2) + from
	}

	const timer = setInterval(() => {
		const time = new Date().getTime() - startTime
		const newY = easeInOutQuart(time, startY, distanceY, duration)
		if (time >= duration) {
			clearInterval(timer)
		}
		window.scroll(0, newY)
	}, 1000 / 60)
}

if (homeArray[0] == 'home') {
	window.addEventListener('scroll', function(e) {
		let y = window.pageYOffset
		let mainImage = window.document.getElementById('main-image').offsetHeight

		if (y > mainImage - 400) {
			let arrowDown = window.document.getElementById('arrow-down')
			arrowDown.style.opacity = 0
			arrowDown.style.transitionDuration = '.5s'
		} else {
			let arrowDown = window.document.getElementById('arrow-down')
			arrowDown.style.opacity = 100
		}
	})
}

if (homeArray[0] == 'home') {
	window.addEventListener('scroll', function(e) {
		let y = window.pageYOffset
		let mainImage = window.document.getElementById('main-image').offsetHeight

		if (y > mainImage - 10) {
			let arrowTop = window.document.getElementById('arrow-top')
			arrowTop.style.opacity = 100
			arrowTop.style.transitionDuration = '.5s'
		} else {
			let arrowTop = window.document.getElementById('arrow-top')
			arrowTop.style.opacity = 0
		}
	})
}

// ======================= MENU RESPONSIVE
const btnIcon = window.document.getElementById('btn-icon')
btnIcon.addEventListener('click', openMenu)
function openMenu() {
	let mainMenuResponsive = window.document.getElementById('main-menu-responsive')
	let body = window.document.getElementsByTagName('body')[0]

	if (btnIcon.className == 'menu-closed') {
		btnIcon.classList.add('menu-opened')
		btnIcon.classList.remove('menu-closed')
		mainMenuResponsive.classList.add('open-menu-responsive')
		body.style.overflow = 'hidden'
	} else if (btnIcon.className == 'menu-opened') {
		btnIcon.classList.remove('menu-opened')
		btnIcon.classList.add('menu-closed')
		mainMenuResponsive.classList.remove('open-menu-responsive')
		body.style.overflow = 'initial'
	}
	
}




// var a = document.getElementsByClassName("abcde")
// a.classList.remove("abcde");
// for (i = 0; i < a.length; i++) {
// 	a.classList.remove("abcde");
// }


// function openEvent() {
// 	var eventContent = document.getElementsByClassName("event-content");
// 	var eventPost = document.getElementsByClassName("event-post");
// 	var eventOpen = document.getElementsByClassName("open-content-event");
// 	var eventClose = document.getElementsByClassName("close-content-event");
// 	var eventPlus = document.getElementsByClassName("event-plus");
// 	var i;
// 	var j;
// 	var k;
// 	var l;
// 	var m;
	
// 	for (i = 0; i < eventContent.length; i++) {
// 		eventContent[i].style.visibility = "visible";
// 		eventContent[i].style.top = "120px";
// 		eventContent[i].style.left = "17px";
// 	}

// 	for (j = 0; j < eventOpen.length; j++) {
// 		eventPost[j].classList.add("event-post-before");
// 	}

// 	// for (k = 0; k < eventOpen.length; k++) {
// 	// 	eventOpen[k].style.display = "none";
// 	// }

// 	for (l = 0; l < eventClose.length; l++) {
// 		eventClose[l].style.display = "block";
// 	}

// 	for (m = 0; m < eventPlus.length; m++) {
// 		eventPlus[m].style.transform = "rotateZ(45deg)";
// 		eventPlus[m].style.transition = ".3s";
// 		eventPlus[m].style.color = "#ffffff";
// 	}
// }

// function closeEvent() {
// 	var eventContent = document.getElementsByClassName("event-content");
// 	var eventPost = document.getElementsByClassName("event-post");
// 	var eventPlus = document.getElementsByClassName("event-plus");
// 	var eventClose = document.getElementsByClassName("close-content-event");
// 	var eventOpen = document.getElementsByClassName("open-content-event");
// 	var i;
// 	var j;
// 	var k;
// 	var l;
	
// 	for (i = 0; i < eventContent.length; i++) {
// 		eventContent[i].style.visibility = "hidden";
// 		eventContent[i].style.top = "-240px";
// 		eventContent[i].style.left = "17px";
// 	}

// 	for (j = 0; j < eventOpen.length; j++) {
// 		eventPost[j].classList.remove("event-post-before");
// 	}

// 	for (k = 0; k < eventClose.length; k++) {
// 		eventClose[k].style.display = "none";
// 	}

// 	for (l = 0; l < eventPlus.length; l++) {
// 		eventPlus[l].style.transform = "rotateZ(270deg)";
// 		eventPlus[l].style.transition = ".3s";
// 		eventPlus[l].style.color = "#000000";
// 	}
	
// }