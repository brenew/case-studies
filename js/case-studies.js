(function ($) {

    // header-scrolled.js
    $(function() {    
        headerScrolled();
        $(window).scroll(headerScrolled);

        function headerScrolled() {
            var windowpos = $(window).scrollTop();
            let body = $('body');
            let header = $('.header-primary, .header-contact');        
    
            if( windowpos >= 50 ) {
                body.addClass('scrolling-active');
                header.addClass('scrolled');
            } else {
                header.removeClass('scrolled');
                body.removeClass('scrolling-active');
            }
        }        
    });

    // header-search.js
    $(function() {    
        const headerSearchIcon = document.querySelector('.header-primary .open-search-input');
        const headerSearchForm = document.querySelector(".header-primary .search-form");

        document.addEventListener('click', function handleClickOutsideBox(event) {
            if (!headerSearchForm.contains(event.target)) {
                $(headerSearchForm).fadeOut();
            } 
            if( headerSearchIcon.contains(event.target) ) {
                $(headerSearchForm).fadeIn();
            }
        });
    });

    // mega-menu.js
    $(function () {
        let megaMenuItem = $('.header-primary-nav .mega-menu');

        $(function() {
            megaMenuItem.each(function() {
                $this = $(this);
                megaSubmenu = $('div[data-parent=' + $this.attr("id") + ']');
    
                $this.append(megaSubmenu);
            })
        });
    
        megaMenuItem.hover(function() {
            $this = $(this);
            megaSubmenu = $('div[data-parent=' + $this.attr("id") + ']');
    
            megaSubmenu.toggleClass('visible');
            $this.toggleClass('mega-menu-showing');
        });
    });

    // mobile-menu.js
    $(function () {
        var openClass = 'open',
        header = '.header-primary',
        container = '.header--navigation', 
        display = 'mobile-menu--visible', 
        open = '.mobile-nav-toggle', 
        menuContainer = '.header-primary-nav',
        submenuToggleClass = 'sub-menu--toggle',
        submenuToggle = '.sub-menu--toggle',
        parentMenuLink = '.mobile-menu .menu-item-has-children > a';
    
        $(open).on('click', function () {
            $('body').toggleClass(display);
            $(container).toggleClass(openClass);
            $(this).toggleClass(openClass);
            $(this).next(menuContainer).toggleClass(openClass);
        });
    
        if ($(container).length) {
            $('body').prepend('<div class="mobile-menu-overlay"></div>');
        }
    
        $(parentMenuLink).after(
            '<button class="'+ submenuToggleClass +' button">' +
                '<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 25 25" style="enable-background:new 0 0 25 25;" xml:space="preserve"><style type="text/css">.svgcaret{fill:#23408F;}</style><g><path class="svgcaret" d="M12.5,20.5c-0.4,0-0.8-0.1-1.1-0.4L0.9,9.6C0.4,9,0.4,8,0.9,7.4c0.6-0.6,1.5-0.6,2.1,0l9.4,9.4l9.5-9.5 c0.6-0.6,1.5-0.6,2.1,0s0.6,1.5,0,2.1L13.5,20C13.3,20.3,12.9,20.5,12.5,20.5z"/></g></svg>'+
            '</button>'
        );
    
        $(submenuToggle).on('click', function () {
            $(this).toggleClass(openClass);
        });
    });

    // case study sliders
    $(function () {
        if ($('.hero-alt--slide').length > 1) {
            $('.hero-alt--slides').slick({
                arrows: false,
                autoplay:  true,
                autoplaySpeed: 3000,
                infinite: true,
                dots: true,
                dotsClass: 'hero-alt--dots',
                fade: true,
                pauseOnDotsHover: true,
                pauseOnFocus: false,
                pasueOnHover: false,
                slidesToShow: 1,
                slidesToScroll: 1
            });    
        }
        $('.features-slides').slick({
            infinite: true,
            nextArrow: '.features-slides--next',
            prevArrow: '.features-slides--prev',
            responsive: [
                {
                    breakpoint: 568,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ],
            slidesToShow: 2,
            slidesToScroll: 1,
            variableWidth: true
        });
        $('.gallery-slides').slick({
            infinite: true,
            nextArrow: '.gallery-slides--next',
            prevArrow: '.gallery-slides--prev',
            slidesToShow: 1,
            slidesToScroll: 1
        });

        prependZeroToDots();

        function prependZeroToDots() {
            $('.slick-dots button').each(function() {
                let number = $(this).text();
                
                if ( number < 10 ) {
                    $(this).prepend("0");
                }
            });
        }        
    });

    // doubled bands
    $(function () {
        if ($('.band.technology').length > 1) {
            $('.band.technology').first().addClass('band-doubled-top');
            $('.band.technology').first().next().addClass('band-doubled-bottom');
        }
        if ($('.band.highlights').length > 1) {
            $('.band.highlights').first().addClass('band-doubled-top');
            $('.band.highlights').first().next().addClass('band-doubled-bottom').css('background-image', 'none');
            
        }        
    });

})(jQuery);