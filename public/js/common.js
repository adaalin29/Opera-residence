 $(document).ready(function() {

	$(".formular-buton").click(function () {
		$('.overlay-cv').css('display', 'flex');
		$('.overlay-cv').hide().fadeIn();
	   });
   
	   $(".close-rezervare-apartament").click(function () {
		   console.log('da');
		$('.overlay-cv').css('display', 'none');
	    $('.overlay-cv').show().fadeOut();
	   });

	AOS.init();

	$(window).scroll(function() {
		if($(window).scrollTop() > 0) {
			$(".scroll-up").css("display","block");
		} else {
			$(".scroll-up").css("display","none");
		}
	}); 
  
	$(".scroll-up").click(function() {
	  $("html, body").animate({ scrollTop: 0 }, "slow");
	  return false;
	});


	$(".sidenav").click(function() {
		if($('.menu').hasClass('afisat')) {
			$('.menu').removeClass('afisat');

			$(".menu").css( {
					left: -100+'%'
				}
			);
		}

		else {
			$('.menu').addClass('afisat');

			$(".menu").css( {
					left:'0%'
				}

			);
		}
	});
	$(".support").click(function() {
		if($('.rezervare').hasClass('afisat')) {
			$('.rezervare').removeClass('afisat');

			$(".rezervare").css( {
					right: -100+'%'
				}
			);
		}

		else {
			$('.rezervare').addClass('afisat');

			$(".rezervare").css( {
					right:'0%'
				}

			);
		}
	});
	$(".close").click(function() {
        if($('.menu').hasClass('afisat')) {
            $('.menu').removeClass('afisat');
    
            $(".menu").css( {
                    left:'-100%'
                }
    
            );
        }
    });
	$(".close-rezervare").click(function() {
        if($('.rezervare').hasClass('afisat')) {
            $('.rezervare').removeClass('afisat');
    
            $(".rezervare").css( {
                    right:'-100%'
                }
    
            );
        }
    });

    
})