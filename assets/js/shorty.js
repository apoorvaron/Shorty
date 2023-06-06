/**
 * Template Name: Logis - v1.1.0
 * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
 * Author: BootstrapMade.com
 * License: https://bootstrapmade.com/license/
 */
document.addEventListener('DOMContentLoaded', () => {
	('use strict');

	/**
	 * Preloader
	 */
	const preloader = document.querySelector('#preloader');
	if (preloader) {
		window.addEventListener('load', () => {
			preloader.remove();
		});
	}

	/**
	 * Sticky header on scroll
	 */
	const selectHeader = document.querySelector('#header');
	if (selectHeader) {
		document.addEventListener('scroll', () => {
			window.scrollY > 100
				? selectHeader.classList.add('sticked')
				: selectHeader.classList.remove('sticked');
		});
	}

	/**
	 * Scroll top button
	 */
	const scrollTop = document.querySelector('.scroll-top');
	const sideIcons = document.querySelector('.side_icons');
	if (sideIcons) {
		const toggleSideIcons = function () {
			window.scrollY > 100
				? sideIcons.classList.add('active')
				: sideIcons.classList.remove('active');
		};
		window.addEventListener('load', toggleSideIcons);
		document.addEventListener('scroll', toggleSideIcons);
		scrollTop.addEventListener(
			'click',
			window.scrollTo({
				top: 0,
				behavior: 'smooth',
			})
		);
	}

	/**
	 * Chat button
	 */

	const chatBtn = document.querySelector('.chat_btn');
	const chatArea = document.querySelector('.wrapper');
	$('.wrapper').slideUp();
	$(document).ready(function () {
		$('.chat_btn').click(function () {
			$('.wrapper').slideToggle();
		});
	});

	$(document).ready(function () {
		$('#send-btn').on('click', function () {
			$value = $('#data').val();
			$msg =
				'<div class="user-inbox inbox"><div class="msg-header"><p>' +
				$value +
				'</p></div></div>';
			$('.form').append($msg);
			$('#data').val('');

			$.ajax({
				url: 'user/message.php',
				type: 'POST',
				data: 'text=' + $value,
				success: function (result) {
					$replay =
						'<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-user"></i></div><div class="msg-header"><p>' +
						result +
						'</p></div></div>';
					$('.form').append($replay);
					$('.form').scrollTop($('.form')[0].scrollHeight);
				},
			});
		});
	});
	/**
	 * Mobile nav toggle
	 */
	const mobileNavShow = document.querySelector('.mobile-nav-show');
	const mobileNavHide = document.querySelector('.mobile-nav-hide');

	document.querySelectorAll('.mobile-nav-toggle').forEach((el) => {
		el.addEventListener('click', function (event) {
			event.preventDefault();
			mobileNavToogle();
		});
	});

	function mobileNavToogle() {
		document.querySelector('body').classList.toggle('mobile-nav-active');
		mobileNavShow.classList.toggle('d-none');
		mobileNavHide.classList.toggle('d-none');
	}

	/**
	 * Hide mobile nav on same-page/hash links
	 */
	document.querySelectorAll('#navbar a').forEach((navbarlink) => {
		if (!navbarlink.hash) return;

		let section = document.querySelector(navbarlink.hash);
		if (!section) return;

		navbarlink.addEventListener('click', () => {
			if (document.querySelector('.mobile-nav-active')) {
				mobileNavToogle();
			}
		});
	});

	/**
	 * Toggle mobile nav dropdowns
	 */
	const navDropdowns = document.querySelectorAll('.navbar .dropdown > a');

	navDropdowns.forEach((el) => {
		el.addEventListener('click', function (event) {
			if (document.querySelector('.mobile-nav-active')) {
				event.preventDefault();
				this.classList.toggle('active');
				this.nextElementSibling.classList.toggle('dropdown-active');

				let dropDownIndicator = this.querySelector('.dropdown-indicator');
				dropDownIndicator.classList.toggle('bi-chevron-up');
				dropDownIndicator.classList.toggle('bi-chevron-down');
			}
		});
	});

	/**
	 * Initiate pURE cOUNTER
	 */
	new PureCounter();

	/**
	 * Initiate glightbox
	 */
	const glightbox = GLightbox({
		selector: '.glightbox',
	});

	/**
	 * Init swiper slider with 1 slide at once in desktop view
	 */
	new Swiper('.slides-1', {
		speed: 600,
		loop: true,
		autoplay: {
			delay: 5000,
			disableOnInteraction: false,
		},
		slidesPerView: 'auto',
		pagination: {
			el: '.swiper-pagination',
			type: 'bullets',
			clickable: true,
		},
		navigation: {
			nextEl: '.swiper-button-next',
			prevEl: '.swiper-button-prev',
		},
	});

	/**
	 * Animation on scroll function and init
	 */
	function aos_init() {
		AOS.init({
			duration: 1000,
			easing: 'ease-in-out',
			once: true,
			mirror: false,
		});
	}
	window.addEventListener('load', () => {
		aos_init();
	});
});
