jQuery(document).ready(function ($) {

    const swiper = new Swiper('.post_sponsors', {
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            500: {
                slidesPerView: 2
            },
            800: {
                slidesPerView: 3
            },
            1200: {
                slidesPerView: 4
            },
            1300: {
                slidesPerView: 5
            }
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    const posts_swiper = new Swiper('.the_news_slides', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            767: {
                slidesPerView: 2
            },
            1023: {
                slidesPerView: 3
            }
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    const gallery_slider = new Swiper('.gallery-slider', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        slidesPerView: 1,
        spaceBetween: 20,
        breakpoints: {
            767: {
                slidesPerView: 2
            },
            1023: {
                slidesPerView: 4
            }
        },
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });

    var offset = 100;
    var speed = 250;
    var duration = 500;
    $(window).scroll(function () {
        if ($(this).scrollTop() < offset) {
            $('.topbutton').fadeOut(duration);
        } else {
            $('.topbutton').fadeIn(duration);
        }
    });
    $('.topbutton').on('click', function () {
        $('html, body').animate({ scrollTop: 0 }, speed);
        return false;
    });

    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    $('#back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false;
    });

    var page = 1;
    var loading = false;
    var $loadmore = $('#load-more');

    function loadPosts() {
        $.ajax({
            type: 'POST',
            url: loadmore_params.ajax_url,
            data: {
                action: 'load_more_posts',
                page: page,
                security: loadmore_params.load_more_nonce
            },
            beforeSend: function () {
                $loadmore.html('Loading...');
                loading = true;
            },
            success: function (data) {
                if (data) {
                    $('.blog_posts').append(data);
                    $loadmore.html('Load More');
                    loading = false;
                    page++;
                } else {
                    $loadmore.html('No More Posts');
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
            }
        });
    }

    $loadmore.click(function () {
        if (!loading) {
            loadPosts();
        }
    });

    
    //Ιnfinite Scroll blog page
    let elem = document.querySelector('#js-blog-wrapper');
    if (elem) {
        let infScroll = new InfiniteScroll(elem, {
            // options
            path: '.next.page-numbers',
            append: '.post-item',
            history: false,
            button: '.view-more-button',
            scrollThreshold: false,
        });
        infScroll.on('append', function (body, path, items, response) {
            items.forEach((element, index) => {
            animeObserver.observe(element);
            });
        });
    }


    //Fullscreen Menu
    $('.js-show-menu').on('click', function () {
        $('.fullscreen-menu-wrapper .inner').addClass('active');
    });

    $('.closeBtn').on('click', function () {
        $('.fullscreen-menu-wrapper .inner').removeClass('active');
    });

    if ($(window).width() < 767) { 
        $('.fullscreen-menu-wrapper ul.main-menu-wrapper li a.level0').click(function() {
            $('.fullscreen-menu-wrapper li.menu-item-has-children .sub-menu').each(function( index ) {
                $(this).closest('li.menu-item-has-children').find('.sub-menu').removeClass('show');
            });
            $(this).closest('li.menu-item-has-children').find('.sub-menu').addClass('show');
        });
    }
    else {
        $('.fullscreen-menu-wrapper ul.main-menu-wrapper li a.level0').mouseenter(function() {
            $(this).closest('li.menu-item-has-children').find('.sub-menu').addClass('show');
        });
    
        $('.fullscreen-menu-wrapper ul.main-menu-wrapper li').mouseleave(function() {
            $(this).find('.sub-menu').removeClass('show');
        });
    }
});
