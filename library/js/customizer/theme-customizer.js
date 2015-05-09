(function ($) {

	$(function(){

		wp.customize('footer_logo', function(value){
			value.bind(function(to){
				$('#footer-logo img').attr('src', to);
			});
		});




		wp.customize('footer_cr_content', function(value){
			value.bind(function(to){
				$('#footer-cr').find('span.cr-content').text(to);
			});
		});

	});

})(jQuery);
