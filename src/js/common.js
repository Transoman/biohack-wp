'use strict';

let svg4everybody = require('svg4everybody'),
  popup = require('jquery-popup-overlay'),
  iMask = require('imask'),
  Swiper = require('swiper'),
  fancybox = require('@fancyapps/fancybox'),
  Simplebar = require('simplebar');

jQuery(document).ready(function($) {
  // Toggle nav menu
  let toggleNav = function () {
    let toggle = $('.nav-toggle');
    let nav = $('.header__nav');
    let closeNav = $('.nav__close');
    let overlay = $('.nav-overlay');
    let htmlEl = $('html');

    toggle.on('click', function (e) {
      e.preventDefault();
      nav.toggleClass('open');
      overlay.toggleClass('is-active');
      htmlEl.toggleClass('lock-scroll');
    });

    closeNav.on('click', function (e) {
      e.preventDefault();
      nav.removeClass('open');
      overlay.removeClass('is-active');
      htmlEl.removeClass('lock-scroll');
    });

    overlay.on('click', function (e) {
      e.preventDefault();
      nav.removeClass('open');
      $(this).removeClass('is-active');
      htmlEl.removeClass('lock-scroll');
    });
  };

  // Fixed header
  let fixedHeader = function(e) {
    let header = $('.header');

    if (e.scrollTop() > 150) {
      header.addClass('fixed');
    }
    else {
      header.removeClass('fixed');
    }
  };

  // Modal
  let initModal = function() {
    $('.modal').popup({
      transition: 'all 0.3s',
      scrolllock: true,
      onclose: function() {
        $(this).find('label.error').remove();
        $(this).find('.wpcf7-response-output').hide();
      }
    });
  };

  // Input mask
  let inputMask = function() {
    let phoneInputs = $('input[type="tel"]');
    let maskOptions = {
      mask: '+{7} (000) 000-0000'
    };

    if (phoneInputs) {
      phoneInputs.each(function(i, el) {
        IMask(el, maskOptions);
      });
    }
  };

  let gallerySlider = new Swiper('.gallery-slider', {
    slidesPerView: 4,
    speed: 1000,
    autoplay: {
      delay: 3000,
      disableOnInteraction: false
    },
    scrollbar: {
      el: '.swiper-scrollbar',
      hide: false,
      draggable: true
    },
    breakpoints: {
      1500: {
        slidesPerView: 3,
      },
      992: {
        slidesPerView: 2,
      },
      576: {
        slidesPerView: 1,
      }
    }
  });

  $().fancybox({
    selector: '[data-fancybox="gallery"]',
    hash: false,
    loop: true,
    beforeClose : function(instance) {
      if ($('.gallery-slider').length) {
        gallerySlider.slideTo(instance.currIndex);
      }
    }
  });

  new Swiper('.portfolio-slider', {
    slidesPerView: 1.8,
    spaceBetween: 40,
    speed: 1000,
    navigation: {
      nextEl: '.portfolio .swiper-button-next',
      prevEl: '.portfolio .swiper-button-prev',
    },
    breakpoints: {
      1200: {
        slidesPerView: 1.3,
      },
      992: {
        slidesPerView: 1.1,
      },
      767: {
        slidesPerView: 1,
      }
    }
  });

  new Swiper('.countries-slider', {
    slidesPerView: 5,
    spaceBetween: 30,
    speed: 1000,
    slidesPerColumn: 2,
    autoplay: {
      delay: 3000,
    },
    breakpoints: {
      1730: {
        slidesPerView: 4,
        spaceBetween: 30,
        slidesPerColumn: 2
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerColumn: 2
      },
      992: {
        slidesPerView: 2,
        spaceBetween: 30,
        slidesPerColumn: 2
      },
      576: {
        slidesPerView: 1,
        spaceBetween: 30,
        slidesPerColumn: 2
      }
    }
  });

  let newsSlider = new Swiper('.news-slider', {
    slidesPerView: 1.13,
    spaceBetween: 40,
    speed: 1000,
    navigation: {
      nextEl: '.news .swiper-button-next',
      prevEl: '.news .swiper-button-prev',
    },
    breakpoints: {
      992: {
        slidesPerView: 1,
        spaceBetween: 30,
      }
    }
  });

  $().fancybox({
    selector: '[data-fancybox="news"]',
    hash: false,
    loop: true,
    beforeClose : function(instance) {
      if ($('.news-slider').length) {
        newsSlider.slideTo(instance.currIndex);
      }
    }
  });

  let methodsShowHide = function() {
    let list = $('.methods__list');
    if ($(window).width() < 993) {
      $('.methods-card').hide();
      $('.methods-card:lt(3)').show();

      $('.methods__show-all').click(function(e) {
        e.preventDefault();
        list.find('.methods-card:not(:visible):lt(3)').show();

        let count = list.find('.methods-card:not(:visible)').length;

        if (count <= 0) {
          $(this).hide();
        }
      });
    }
    else {
      $('.methods-card').show();
    }
  };

  let breakpoint = window.matchMedia( '(min-width: 992px)' );
  let teamSlider;

  let breakpointChecker = function() {
    // if larger viewport and multi-row layout needed
    if ( breakpoint.matches === true ) {
      // clean up old instances and inline styles when available
      if ( teamSlider !== undefined ) {
        if ($('.teams').length) {
          $('.teams').removeClass('swiper-container');
          $('.teams__item').unwrap('.swiper-wrapper');
          $('.teams__item').removeClass('swiper-slide');
          $('.teams .swiper-pagination').remove();
          teamSlider.destroy( true, true );
        }
      }
      // or/and do nothing
      return;
      // else if a small viewport and single column layout needed
    } else if ( breakpoint.matches === false ) {
      // fire small viewport version of swiper
      return enableSwiper();
    }
  };

  let enableSwiper = function() {
    $('.teams').addClass('swiper-container');
    if (! $('.teams .swiper-wrapper').length ) {
      $('.teams__item').wrapAll('<div class="swiper-wrapper"></div>');
    }
    $('.teams__item').addClass('swiper-slide');
    $('.teams').append('<div class="swiper-pagination"></div>');

    teamSlider = new Swiper ('.teams', {
      slidesPerView: 1,
      spaceBetween: 30,
      speed: 1000,
      pagination: {
        el: '.swiper-pagination',
      },
    });
  }

  // keep an eye on viewport size changes
  breakpoint.addListener(breakpointChecker);
  // kickstart
  breakpointChecker();

  // Contact Form
  let showModal = true;

  let contactForm = function() {
    $('.wpcf7').each(function(i, el) {
      let submit = $(this).find('[type="submit"]');

      if (submit.length) {
        let button = '<button type="submit" class="btn"><span class="btn-load"></span><span class="text">' + submit.val() + '</span></button>';
        submit.replaceWith(button);
        $(this).find('.ajax-loader').remove();
      }

      toggleSubmit( $(this) );

      $(this).on( 'click', '.wpcf7-acceptance', function() {
        toggleSubmit( $(el) );
      } );

    });

    function toggleSubmit(form) {
      let button = form.find('button[type="submit"]');

      if (form.find('.wpcf7-acceptance').length) {
        if (form.find('.wpcf7-acceptance input:checkbox').is(':checked')) {
          button.prop('disabled', false);
        } else {
          button.prop('disabled', true);
        }
      }
    }

    // Loader
    $('.wpcf7 form').on('submit', function () {
      let btn = $(this).find('.btn');

      if (btn.hasClass('btn-link')) {
        btn.addClass("btn-loading");
        btn.find('.text').css('display', 'none');
      } else {
        btn.addClass("btn-loading");
      }
    });

    $('.wpcf7').on('wpcf7spam wpcf7invalid wpcf7mailsent wpcf7mailfailed', function (e) {
      let form = $('.wpcf7');
      $(form).find('.btn').removeClass("btn-loading");
    });

    $('.wpcf7').on('wpcf7mailsent', function() {
      showModal = false;
    });
  };

  $(window).mouseleave(function(e) {
    if (e.clientY < 0) {
      if (showModal) {
        $('#proposition-modal').popup('show');
      }
    }
  });

  // Smooth scroll to anchor
  $('a[href*="#"]')
  // Remove links that don't actually link to anything
    .not('[href="#"]')
    .not('[href="#0"]')
    .click(function(event) {
      // On-page links
      if (
        location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
        &&
        location.hostname == this.hostname
      ) {
        // Figure out element to scroll to
        let target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        // Does a scroll target exist?
        if (target.length) {
          // Only prevent default if animation is actually gonna happen
          event.preventDefault();

          let headerHeight = $('.header').outerHeight();

          $('.nav').removeClass('open');
          $('.nav-overlay').removeClass('is-active');
          $('html').removeClass('lock-scroll');

          $('html, body').animate({
            scrollTop: target.offset().top - headerHeight
          }, 1000);
        }
      }
    });

  // Youtube Video Lazy Load
  let lazyVideo = function() {
    function findVideos() {
      let videos = document.querySelectorAll('.video');

      for (let i = 0; i < videos.length; i++) {
        setupVideo(videos[i]);
      }
    }

    function setupVideo(video) {
      let link = video.querySelector('.video__link');
      let button = video.querySelector('.video__button');
      let text = video.querySelector('p');
      let id = parseMediaURL(link);

      video.addEventListener('click', function() {
        if (!this.classList.contains('video--dummy')) {
          let iframe = createIframe(id);

          link.remove();
          button.remove();
          if (text) {
            text.remove();
          }
          video.appendChild(iframe);
        }
      });

      let source = "https://img.youtube.com/vi/"+ id +"/maxresdefault.jpg";

      if (!video.querySelector('.video__media')) {
        let image = new Image();
        image.src = source;
        image.classList.add('video__media');

        image.addEventListener('load', function() {
          link.append( image );
        } (video) );
      }

      link.removeAttribute('href');
      video.classList.add('video--enabled');
    }

    function parseMediaURL(media) {
      let regexp = /^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/;
      let url = media.href;
      let match = url.match(regexp);

      return match[5];
    }

    function createIframe(id) {
      let iframe = document.createElement('iframe');

      iframe.setAttribute('allowfullscreen', '');
      iframe.setAttribute('allow', 'autoplay');
      iframe.setAttribute('src', generateURL(id));
      iframe.classList.add('video__media');

      return iframe;
    }

    function generateURL(id) {
      let query = '?rel=0&showinfo=0&autoplay=1';

      return 'https://www.youtube.com/embed/' + id + query;
    }

    findVideos();
  };


  toggleNav();
  initModal();
  inputMask();
  methodsShowHide();
  contactForm();
  fixedHeader($(this));
  lazyVideo();

  $(window).resize(function() {
    methodsShowHide();
  });

  $(window).scroll(function() {
    fixedHeader($(this));
  });

  // SVG
  svg4everybody({});
});