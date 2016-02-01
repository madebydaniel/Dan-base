(function (window) {
  var transitions = {
    'transition': 'transitionend',
    'WebkitTransition': 'webkitTransitionEnd',
    'MozTransition': 'transitionend',
    'OTransition': 'otransitionend'
  },
  elem = document.createElement('div');

  for(var t in transitions){
    if(elem.style[t] !== undefined){
      window.transitionEnd = transitions[t];
      break;
    }
  }
})(window);



(function($){

	var hero = ".hero-pjax",
	content = ".content-area"
		 body = $("body");

	$( document ).ready(function() {

		body.attr('data-page-status', 'loaded');

		function pageLoadAnim(event) {

			var url = $(this).attr("href");

		    event.preventDefault();

		    body.attr('data-page-status', 'loading');

			$(".content-area").one(window.transitionEnd, function(){
		        // Everything is done
		        console.log('content fired pjax');
		        $.pjax({
		            url: url,
		            container: content,
		            fragment: content
		        });
		    });

		    $(".hero-pjax").one(window.transitionEnd, function(){
		        // Everything is done
		        console.log('hero fired pjax');
		        $.pjax({
		            url: url,
		            container: hero,
		        });
		    });
		}

		$(document).on('click', 'a', pageLoadAnim);
		   
		  

		$(document).on('pjax:end', function(){
			console.log('pjax end fired');
			jQuery('body').attr('class', pjaxy_page_info.body_class);
			jQuery('head title').html(pjaxy_page_info.page_title);

			$("body").attr('data-page-status', 'loaded');

			console.log('--------------------------');
			console.log(pjaxy_page_info.body_class);
			console.log(pjaxy_page_info.page_title);
			console.log('--------------------------');
	   
		});

	});


})(jQuery);