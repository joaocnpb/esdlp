$( document ).ready(function() {
   $('.animate-scroll').each(function() {
		var controller = new ScrollMagic.Controller();
		var ourScene = new ScrollMagic.Scene({
			triggerElement: this,
			reverse: true,
			triggerHook: 0.9,
		})
		.setClassToggle(this, "active")
		.addTo(controller);
	});
    
    var controller2 = new ScrollMagic.Controller();
    var ourScene2 = new ScrollMagic.Scene({
			triggerElement: '#edificiotext',
			 triggerHook: 'onLeave',
          reverse: true,
			triggerHook: 0,
		})
		.setClassToggle('#main-nav', "active")
		.addTo(controller2);
    
    $(".slideplantas").slick({
        dots: false,
        centerMode: false,
        arrows:false,
        infinite: false,
        speed: 100,
        fade: true,
        cssEase: 'linear',
        initialSlide: 1,
         swipeToSlide: true
      });
    
    $('.dot').bind('click',function () {
    $('.slideplantas').slick('slickGoTo', $(this).data("slide"))
});
    
    $(".dot").click(function(){
  if (!$(this).hasClass("active")) {
    $(".dot.active").removeClass("active");
    $(this).addClass("active");
  }
});
    
    $(".slidemaquetes").slick({
        dots: false,
        arrows:true,
        infinite: true,
        speed: 100,
        fade: true,
        cssEase: 'linear',
        initialSlide: 0,
         swipeToSlide: true
      });

    
    $('.purplearea').on('mouseover', function(){
        var label = $(this).attr('data-label');
        $('#legendaplantas p').text(label);
        $('#legendaplantas').fadeIn('fast');
    });
     $('.purplearea').on('mouseout', function(){
        $('#legendaplantas').fadeOut('fast');
    });
    
    $('.purplearea').on('click', function(){
        var label = $(this).attr('data-label');
        $('#legendaplantas p').text(label);
        $('#legendaplantas').fadeIn('fast');
    });
    
});