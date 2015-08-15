jQuery(document).ready(function($){

	var modalTrigger = $('.modal-trigger'),
		modalContainer = $('.modal-container'),
		modalContent = modalContainer.find('.modal-content'),
		modalBkgrd = modalContainer.find('.modal-bkgrd'),
		modalClose = modalContainer.find('.close-modal');

	//trigger the animation - open modal window
	modalTrigger.on('click', function(){
		var tl = new TimelineLite();

		tl.to(modalBkgrd, 0.2, {
			opacity: '0.8',
		})
		.to(modalBkgrd, 0.4, {
			height: '100%',
			top: 0,
		}, -0.1)
		.to(modalContainer, 0.4, {
			top: 0,
			height: '100%',
		}), -0.3;
	});

	//trigger the animation - close modal window
	modalClose.on('click', function(){
		
		var tl = new TimelineLite();

		tl.to(modalContainer, 0.4, {
			top:'-100%',
			height: 0,
		})
		.to(modalBkgrd, 0.6, {
			opacity: 0,
			height: 0,
			top: '-100%',
		}), -0.2;
		

	});
	




});