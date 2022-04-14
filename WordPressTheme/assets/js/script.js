
// スムーススクロール
jQuery('a[href^="#"]').click(function() {
	let header = jQuery(".l-header").innerHeight();
	let speed = 300;
	let id = jQuery(this).attr("href");
	let target = jQuery("#" == id ? "html" : id);
	let position = jQuery(target).offset().top - header;
   jQuery("html, body").animate({scrollTop: position},speed);
	
   return false;
  });
  

// topに戻るボタン

var show = jQuery(".p-mv,.p-page-works__cards").offset();
jQuery('.p-footer__btn').hide();
jQuery(window).scroll(function() {
if(jQuery(this).scrollTop() > show.top) {
jQuery('.p-footer__btn').fadeIn();
} else {
jQuery('.p-footer__btn').fadeOut();
	}
});
jQuery('.p-footer__btn').click(function(){
jQuery('html, body').animate({scrollTop: 0}, 500);

});

// スムーススクロール絶対パス
jQuery(function(jQuery) {
	jQuery('a[href*=#]').click(function(){
		var header = jQuery(".l-header").innerHeight();
		var speed = 500;
		var href= jQuery(this).attr('href');
		var url = location.protocol + '//' + location.hostname + location.pathname;
		href = href.replace(url, '');
		var target = jQuery(href == '#' || href == '' ? 'html' : href);
		if( target.size() < 1 ) return true;
		var position = jQuery(target).offset().top - header;
		jQuery('html,body').animate({scrollTop: targetY}, time, 'linear');
		jQuery('.p-header_nav').removeClass('open');
		return false;
	});
  });





// jQuery( window ).on( 'scroll', function() {
// if ( 100 < jQuery( this ).scrollTop() ) { 
//   jQuery( '.j-header' ).addClass( 'change-color' );
// } else {
//   jQuery( '.j-header' ).removeClass( 'change-color' );
// }
// });


// ドロワーメニュー
jQuery('.p-header_hamburger , .p-header_nav-background').on('click' , function(e){
	e.preventDefault();
	
	jQuery('.p-header_nav').toggleClass('open');
	jQuery('.p-header_nav-background').toggleClass('open');
	jQuery('.p-header_nav-close').toggleClass('open');
	jQuery('.p-header_hamburger').toggleClass('active');
	return false;
	});
	jQuery('.p-header_nav ul li a[href]').on('click', function(event) {
		jQuery('.p-header_hamburger').trigger('click');
	});

	

	jQuery(document).ready(function () {
		setTimeout(function() {
		   var slider1 = new Swiper ('.slider0', {
			loop: true,
			effect: 'fade',
			autoplay: {
			  delay: 4000,
			  disableOnInteraction: false,
			  autoplay: 5000,
			},
			speed: 2000,
			});
		   }, 3000);
	 });

	  var slider1 = new Swiper ('.slider1', {
		effect: 'slide',
		loop: true,
		// autoplay: {
		// 	delay: 3000,
		// 	disableOnInteraction: true
		//   },
		spaceBetween: 0,
		slidesPerView: 1,
		breakpoints: {
			768: {
			  slidesPerView: 2,
			  spaceBetween: 40,
			},
			1200: {
			  spaceBetween: 40,
			  slidesPerView: 3,
			}},
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true
		},
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
		scrollbar: {
		  el: '.swiper-scrollbar',
		},
		
	});
//    タイトルアニメーション
	jQuery(window).scroll(function(){
		jQuery(".passing").each(function(){
			var imgPos = jQuery(this).offset().top;    
			var scroll = jQuery(window).scrollTop();
			var windowHeight = jQuery(window).height();
			if (scroll > imgPos - windowHeight + windowHeight / 4){
				jQuery(this).addClass('move');
			}
		});
	});

	 // スクロールして表示領域に入ったらclass付与
jQuery(function () {
    jQuery(".js-fadeUp").on("inview", function () {
        jQuery(this).addClass("is-inview");
    });
  });