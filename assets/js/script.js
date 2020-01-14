/*
Theme Name: Lutheran Community
Author: Guilherme R. de Oliveira
Description: Site about the community Luterana in Araçatuba/SP - Brazil. The technologies used were Javascript, Jquery, HTML5, CSS3, SASS.
Version: 1.0.
*/

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
    autoplay: true,
	autoplayTimeout: 2200,
	autoplayHoverPause: true,
	autoplaySpeed: false,
	// dotClass: 'owl-dot',
	// dotsClass: 'owl-dots',
	dots: true,
	navText: [" ", " "],
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
    autoplayTimeout: 1750,
	autoplayHoverPause: true,
	autoplaySpeed: false,
	dots: true,
	navText: [" ", " "],
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
	loop: true,
	// autoplay: true,
	// autoplayTimeout: 3000,
	// autoplayHoverPause: true,
	// autoplaySpeed: false,
	dots: true,
	navText: [" ", " "],
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
	loop: true,
	autoplay: true,
    autoplayTimeout: 2000,
	autoplayHoverPause: true,
	autoplaySpeed: false,
	dots: true,
	navText: [" ", " "],
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

// Pega a 1º classe do body
const home = window.document.getElementsByTagName('body')[0].className
let homeArray = home.split(' ')

// Redimensiona o tamanho da imagem principal na Home
function sizeOfWindow() {
	let mainImage = window.document.getElementById('main-image')
	let windowHeight = window.innerHeight
	let windowHeightPX = windowHeight + 'px'

	mainImage.style.height = windowHeightPX
}
if (homeArray[0] == 'home') {
	sizeOfWindow()
}

// Define a altra do menu de acordo com o tamanho vertical do dispositivo
function sizeOfWindowToMenu() {
	let windowWidth = window.innerWidth

	let headerMenuResponsive = window.document.getElementById('header-responsive')
	let heightHeaderMenuResponsive = headerMenuResponsive.offsetHeight

	let mainMenuResponsive = window.document.getElementById('main-menu-responsive')
	let windowHeight = mainMenuResponsive.offsetHeight

	if (windowWidth <= 991) {
		valueHeight = windowHeight - heightHeaderMenuResponsive
		mainMenuResponsive.style.height = valueHeight + 80 + 'px'
		console.log(valueHeight)
	} else {
		mainMenuResponsive.style.height = '100%'
	}
}
sizeOfWindowToMenu()

// Redimensiona a altura da height
// window.addEventListener('resize', adjustMenuResponsive)
// function adjustMenuResponsive() {
// 	let windowWidth = window.innerWidth
// 	let mainMenuResponsive = window.document.getElementById('main-menu-responsive')

// 	if (windowWidth >= 992) {
// 		mainMenuResponsive.style.height = '100%'
// 	} else {
// 		mainMenuResponsive.style.height = '91%'
// 	}	
// }


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

// Clique para descer na Home
if (homeArray[0] == 'home') {
	let windowWidth = window.innerWidth
	const arrowDownGlobal = window.document.getElementById('arrow-down')
	arrowDownGlobal.addEventListener('click', goDown)
	function goDown() {
		if (windowWidth >= 992) {
			let mainImage = window.document.getElementById('content-1').offsetTop
			scrollToPosition(mainImage)
		} else {
			let mainImage = window.document.getElementById('content-1').offsetTop
			let heightHeaderMenuResponsive = window.document.getElementById('header-responsive').offsetHeight
			scrollToPosition(mainImage - heightHeaderMenuResponsive)
		}
	}
}


// Clique para subir na Home
if (homeArray[0] == 'home') {
	const arrowTopGlobal = window.document.getElementById('arrow-top')
	arrowTopGlobal.addEventListener('click', goTop)
	function goTop() {
		let windowTop = window.document.getElementById('main-image').offsetTop
		scrollToPosition(windowTop)
	}
}

// Suviazação do scroll por clique
function scrollToPosition(toPosition) {
	smoothScrollTo(toPosition, 1000)
}
function smoothScrollTo(endY, duration) {
	const startY = window.scrollY || window.pageYOffset
	const distanceY = endY - startY
	const startTime = new Date().getTime()

	duration = typeof duration !== 'undefined' ? duration : 400

	const easeInOutQuart = function(time, from, distance, duration) {
		if ((time /= duration /2 ) < 1) return distance / 2 * time * time * time * time * time + from
		return -distance /2 * ((time -= 2) * time * time * time - 2) + from
	}

	const timer = setInterval(function() {
		const time = new Date().getTime() - startTime
		const newY = easeInOutQuart(time, startY, distanceY, duration)
		if (time >= duration) {
			clearInterval(timer)
		}
		window.scroll(0, newY)
	}, 1000 / 60)
}

// Apresenta e esconde Arrow Down
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

// Apresenta e esconde Arrow Top
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