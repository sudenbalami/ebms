jQuery(document).ready(function ($) {
	$("#personalTrainer").owlCarousel({
		autoPlay: true, 
		nav: true,
		dots: false,
		margin: 30,
		responsive: {
		0: {
			items: 1
		},
		600: {
			items: 3
		},
		1000: {
			items: 3
		},
		1200: {
			items: 3
		}
		},
		loop: true
	});
	$("#divAreasSlider1 , #divTrainerSlider").owlCarousel({
		autoPlay: true, 
		nav: true,
		dots: false,
		margin: 32,
		responsive: {
		0: {
			items: 1
		},
		600: {
			items: 2
		},
		1000: {
			items: 3
		},
		1200: {
			items: 3
		}
		},
		loop: true
	});
	$("#testimonalSlider").owlCarousel({
		nav: true,
    	slideSpeed : 300,
    	paginationSpeed : 400,
    	singleItem:true,
    	loop: true
	});
	$("#testiSlider").owlCarousel({
		nav: true,
    	slideSpeed : 300,
    	paginationSpeed : 400,
    	singleItem:true,
    	loop: false
	});
    $('#scrollbar1').tinyscrollbar();
    $('#nav').click(function(){
	    $('#nav-wrap , #wrapper').toggleClass("active");
	});
});