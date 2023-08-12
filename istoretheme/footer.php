<footer>
    <div class="container">
        <div class="copyright">
            <div class="copyright-left">
                <span><a href="/">iStore.ua</a> — интернет-магазин iStore, украинской сети магазинов техники Apple и сопутствующих товаров.</span>
                <span>По каким-либо вопросам обращайтесь к нам по телефону <strong>0800 330 334 (Бесплатные входящие)</strong> или по электронному адресу <a href="mailto:info@iostore.online">info@iostore.online</a>.</span>
                <span>Всегда рады вас видеть <a href="#">в наших магазинах</a>.</span>
            </div>
            <div class="copyright-right">
                <span>© 2003–2021 iStore</span>
            </div>
        </div>
    </div>
</footer>
<div class="over-block">
    <div class="modal">
        <div class="modal-wrapper">
            <div class="modal-wrapper-back"></div>
            <div class="modal-window">
                <div class="modal-window-content">
                    <div class="modal-window-content-main">
                        <div class="modal-window-head">
                            <div class="icon-modal" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/close-menu.svg)"></div>
                        </div>
                        <div class="modal-window-description">
                            <span>Благодарим за заказ, наш менеджер свяжется с Вами в ближайшее время!</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="overlay-block"></div>

<?php wp_footer(); ?>
<!--<script type='text/javascript' src="<?php echo get_template_directory_uri() ?>/js/main.min.js"></script>-->
<script>
    jQuery(document).ready(function ($) {

        jQuery.event.special.touchstart = {
            setup: function( _, ns, handle ) {
                this.addEventListener("touchstart", handle, { passive: !ns.includes("noPreventDefault") });
            }
        };
        jQuery.event.special.touchmove = {
            setup: function( _, ns, handle ) {
                this.addEventListener("touchmove", handle, { passive: !ns.includes("noPreventDefault") });
            }
        };
        jQuery.event.special.wheel = {
            setup: function( _, ns, handle ){
                this.addEventListener("wheel", handle, { passive: true });
            }
        };
        jQuery.event.special.mousewheel = {
            setup: function( _, ns, handle ){
                this.addEventListener("mousewheel", handle, { passive: true });
            }
        };

        $(".search-icon").click(function () {
            $(".search-block").slideToggle(300);
            return false;
        });

        $(".search-block-close").click(function () {
            $(".search-block").slideToggle(300);
            return false;
        });

        $(".personal-icon").click(function () {
            $(".personal-block").slideToggle(300);
            return false;
        });

        $(".basket-icon").click(function () {
            $(".basket-block").slideToggle(300);
            return false;
        });

        $('.catalog-mobile-block').on('click', function() {
			$(this).parent().children('.catalog-mobile-menu').slideToggle(300, function() {
				if($(this).is(':hidden')) {
					$(this).siblings().children().removeClass('active');
				}
				else {
					$(this).siblings().children().addClass('active');
				}
			}); 
			return false;
		});

        $('.menu-mobile-button').on('click', function() {
  			$('.mobile-menu').addClass('active');
            $('.overlay-block').addClass('active');
            $('.scroll').addClass('active');
		});

        $('.close-mobile-menu').on('click', function() {
            $('.mobile-menu').removeClass('active');
            $('.overlay-block').removeClass('active');
            $('.scroll').removeClass('active');
        });

        $('.call-btn').click(function() {
            $('.modal').fadeIn();
            return false;
	    });	
	
        $('.icon-modal').click(function() {
            $(this).parents('.modal').fadeOut();
            return false;
        });		
    
        $(document).keydown(function(e) {
            if (e.keyCode === 27) {
                e.stopPropagation();
                $('.modal').fadeOut();
            }
        });

        $("#owl-slider").owlCarousel ({
            navigation: true,
            dots: false,
            nav: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 1, 
            animateOut: 'fadeOut', 
            autoplay: true,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false
        });

        $("#owl-slider-actions").owlCarousel ({
            navigation: true,
            dots: false,
            nav: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 4, 
            animateOut: 'fadeOut', 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1,
                },
                425: {
                    items: 2,
                },
                640: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                1024: {
                    items: 4,
                }
            }
        });

        $("#owl-slider-popular").owlCarousel ({
            navigation: true,
            dots: false,
            nav: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true,
            items: 4, 
            animateOut: 'fadeOut', 
            autoplay: false,
            autoplayHoverPause: true,
            autoplayTimeout: 3000,
            loop: true,
            slideBy: 1,
            itemsDesktop: false,
            itemsDesktopSmall: false,
            itemsTablet: false,
            itemsMobile: false,
            responsive: {
                0: {
                    items: 1,
                },
                425: {
                    items: 2,
                },
                640: {
                    items: 2,
                },
                800: {
                    items: 3,
                },
                1024: {
                    items: 4,
                }
            }
        });

    });
</script>
</body>
</html>
