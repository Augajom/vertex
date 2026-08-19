/*
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
*/

(function($) {

	var	$window = $(window),
		$body = $('body'),
		$header = $('#header'),
		$banner = $('#banner');

	// Breakpoints.
		breakpoints({
			xlarge:	'(max-width: 1680px)',
			large:	'(max-width: 1280px)',
			medium:	'(max-width: 980px)',
			small:	'(max-width: 736px)',
			xsmall:	'(max-width: 480px)'
		});

	// Play initial animations on page load.
		$window.on('load', function() {
			window.setTimeout(function() {
				$body.removeClass('is-preload');
			}, 100);
		});

	// Header.
		if ($banner.length > 0
		&&	$header.hasClass('alt')) {

			$window.on('resize', function() { $window.trigger('scroll'); });

			$banner.scrollex({
				bottom:		$header.outerHeight(),
				terminate:	function() { $header.removeClass('alt'); },
				enter:		function() { $header.addClass('alt'); },
				leave:		function() { $header.removeClass('alt'); }
			});

		}

	// Menu.
		var $menu = $('#menu');

		$menu._locked = false;

		$menu._lock = function() {

			if ($menu._locked)
				return false;

			$menu._locked = true;

			window.setTimeout(function() {
				$menu._locked = false;
			}, 350);

			return true;

		};

		$menu._show = function() {

			if ($menu._lock())
				$body.addClass('is-menu-visible');

		};

		$menu._hide = function() {

			if ($menu._lock())
				$body.removeClass('is-menu-visible');

		};

		$menu._toggle = function() {

			if ($menu._lock())
				$body.toggleClass('is-menu-visible');

		};

		$menu
			.appendTo($body)
			.on('click', function(event) {

				event.stopPropagation();

				// Hide.
					$menu._hide();

			})
			.find('.inner')
				.on('click', '.close', function(event) {

					event.preventDefault();
					event.stopPropagation();
					event.stopImmediatePropagation();

					// Hide.
						$menu._hide();

				})
				.on('click', function(event) {
					event.stopPropagation();
				})
				.on('click', 'a', function(event) {

					var href = $(this).attr('href');

					event.preventDefault();
					event.stopPropagation();

					// Hide.
						$menu._hide();

					// Redirect.
						window.setTimeout(function() {
							window.location.href = href;
						}, 350);

				});

		$body
			.on('click', 'a[href="#menu"]', function(event) {

				event.stopPropagation();
				event.preventDefault();

				// Toggle.
					$menu._toggle();

			})
			.on('keydown', function(event) {

				// Hide on escape.
					if (event.keyCode == 27)
						$menu._hide();

			});

	// Scroll Reveal Animations.
		$(function() {
			// Auto-apply reveal classes to sections and elements
			$('.wrapper.spotlight .image').addClass('reveal-on-scroll reveal-zoom');
			$('.wrapper.spotlight .content').addClass('reveal-on-scroll reveal-up');
			$('.features article').each(function(index) {
				$(this).addClass('reveal-on-scroll reveal-up');
				var delayClass = 'delay-' + (((index % 4) + 1) * 100);
				$(this).addClass(delayClass);
			});
			$('.table-wrapper, .legal-scroll-box, .solid-tabs, #footer .inner > *').addClass('reveal-on-scroll reveal-up');

			if ('IntersectionObserver' in window) {
				var revealObserver = new IntersectionObserver(function(entries, observer) {
					entries.forEach(function(entry) {
						if (entry.isIntersecting) {
							entry.target.classList.add('reveal-visible');
							observer.unobserve(entry.target);
						}
					});
				}, {
					root: null,
					threshold: 0.12,
					rootMargin: '0px 0px -40px 0px'
				});

				document.querySelectorAll('.reveal-on-scroll').forEach(function(el) {
					revealObserver.observe(el);
				});
			} else {
				// Fallback if IntersectionObserver is not available
				$('.reveal-on-scroll').addClass('reveal-visible');
			}

			// Smooth Anchor Scrolling
			$('a[href^="#"]').not('[href="#"]').not('[href="#menu"]').on('click', function(e) {
				var target = $(this.getAttribute('href'));
				if (target.length) {
					e.preventDefault();
					var headerOffset = $('#header').outerHeight() || 60;
					var targetPosition = target.offset().top - headerOffset + 5;
					$('html, body').stop().animate({
						scrollTop: targetPosition
					}, 600, 'swing');
				}
			});
		});

})(jQuery);