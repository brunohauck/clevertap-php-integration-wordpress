<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<?php get_template_part('template-parts/footer/footer-widgets'); ?>

<footer id="colophon" class="site-footer">

	<?php if (has_nav_menu('footer')): ?>
	<nav aria-label="<?php esc_attr_e('Secondary menu', 'twentytwentyone'); ?>" class="footer-navigation">
		<ul class="footer-navigation-wrapper">
			<?php
	        wp_nav_menu(
	        	array(
	        		'theme_location' => 'footer',
	        		'items_wrap' => '%3$s',
	        		'container' => false,
	        		'depth' => 1,
	        		'link_before' => '<span>',
	        		'link_after' => '</span>',
	        		'fallback_cb' => false,
	        	)
	        );
                    ?>
		</ul><!-- .footer-navigation-wrapper -->
	</nav><!-- .footer-navigation -->
	<?php endif; ?>
	<div class="site-info">
		<div class="site-name">
			<?php if (has_custom_logo()): ?>
			<div class="site-logo">
				<?php the_custom_logo(); ?>
			</div>
			<?php else: ?>
			<?php if (get_bloginfo('name') && get_theme_mod('display_title_and_tagline', true)): ?>
			<?php if (is_front_page() && !is_paged()): ?>
			<?php bloginfo('name'); ?>
			<?php else: ?>
			<a href="<?php echo esc_url(home_url('/')); ?>">
				<?php bloginfo('name'); ?>
			</a>
			<?php endif; ?>
			<?php endif; ?>
			<?php endif; ?>
		</div><!-- .site-name -->

		<?php
            if (function_exists('the_privacy_policy_link')) {
	            the_privacy_policy_link('<div class="privacy-policy">', '</div>');
            }
            ?>

		<div class="powered-by">
			<?php
                printf(
                	/* translators: %s: WordPress. */
                	esc_html__('Proudly powered by %s.', 'twentytwentyone'),
                	'<a href="' . esc_url(__('https://wordpress.org/', 'twentytwentyone')) . '">WordPress</a>'
                );
                ?>
		</div><!-- .powered-by -->

	</div><!-- .site-info -->
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript">
	//plugin contact form 7
	clevertap.onUserLogin.push({
		"Site": {
			"Name": "Bruno - Wordpress",            // String
			"Identity": 619085435,              // String or number
			"Email": "guajajaras@gmail.com",         // Email address of the user
			"Phone": "+14155551234",           // Phone (with the country code)
			"Gender": "M",                     // Can be either M or F
			"DOB": new Date(),                 // Date of Birth. Date object
			// optional fields. controls whether the user will be sent email, push etc.
			"MSG-email": false,                // Disable email notifications
			"MSG-push": true,                  // Enable push notifications
			"MSG-sms": true,                   // Enable sms notifications
			"MSG-whatsapp": true,              // Enable WhatsApp notifications
		}
	})
	
	//Add Product - If you are using Woocomerce you need to install a plugin to add to the product this javascript
	clevertap.event.push("Product Viewed", {
		"Product name": "Casio Chronograph Watch",
		"Category": "Mens Accessories",
		"Price": 59.99,
		"Date": new Date()
	});

	//clevertap.event.push("Product Viewed")
	/*
	clevertap.event.push("Product Viewed Web - CT Poc", {
		"Product name": "Casio Chronograph Watch",
		"Category": "Mens Accessories",
		"Price": 59.99,
	});*/





</script>

<div class="btn">CLOSE</div>
<script>


	//clevertap.setLogLevel(LOG_LEVEL)


	clevertap.notificationCallback = function (msg) {
		//raise the notification viewed and clicked events in the callback
		/*
		clevertap.raiseNotificationViewed();
		console.log(JSON.stringify(msg));            //your custom rendering implementation here
		var $button = jQuery("<button></button>");   //element on whose click you want to raise the notification clicked event
		$button.click(function () {
			clevertap.raiseNotificationClicked();
		});*/
	};

	clevertap.notifications.push({
		"apnsWebPushId": "<apple web push id>", //only for safari browser
		"apnsWebPushServiceUrl": "<safari package service url>",//only for safari browser
		"titleText": 'Would you like to receive Push Notifications?',
		"bodyText": 'We promise to only send you relevant content and give you updates on your transactions',
		"okButtonText": 'Sign me up!',
		"rejectButtonText": 'No thanks',
		"okButtonColor": '#f28046'
	});


	//Implementation of banner and others 

	console.log('popup')


	var btn = document.querySelector('.btn');
	var wrapper = window.parent.document.getElementById('wizParDiv0');
	btn.addEventListener('click', closePopUp);
	function closePopUp() { wrapper.remove(); }

	var btn = document.querySelector('.btn');
	var wrapper = window.parent.document.getElementById('wizParDiv2');
	btn.addEventListener('click', closePopUp);
	function closePopUp() { wrapper.remove(); }

	var btn = document.querySelector('.btn');
	var overlay = window.parent.document.getElementById('intentOpacityDiv');
	var wrapper = window.parent.document.getElementById('intentPreview');
	btn.addEventListener('click', closePopUp);
	function closePopUp() { overlay.remove(); wrapper.remove(); }



	/*
	window.addEventListener('DOMContentLoaded', event => {

		// Navbar shrink function
		var navbarShrink = function () {
			const navbarCollapsible = document.body.querySelector('#mainNav');
			if (!navbarCollapsible) {
				return;
			}
			if (window.scrollY === 0) {
				navbarCollapsible.classList.remove('navbar-shrink')
			} else {
				navbarCollapsible.classList.add('navbar-shrink')
			}
		};

		clevertap.event.push("Product Viewed Web - CT Poc", {
			"Product name": "Casio Chronograph Watch",
			"Category": "Mens Accessories",
			"Price": 59.99,
		});



		document.addEventListener('scroll', navbarShrink);


		const mainNav = document.body.querySelector('#mainNav');
		if (mainNav) {
			new bootstrap.ScrollSpy(document.body, {
				target: '#mainNav',
				offset: 74,
			});
		};

		// Collapse responsive navbar when toggler is visible
		const navbarToggler = document.body.querySelector('.navbar-toggler');
		const responsiveNavItems = [].slice.call(
			document.querySelectorAll('#navbarResponsive .nav-link')
		);
		responsiveNavItems.map(function (responsiveNavItem) {
			responsiveNavItem.addEventListener('click', () => {
				if (window.getComputedStyle(navbarToggler).display !== 'none') {
					navbarToggler.click();
				}
			});
		});

	}); */

	//clevertap.event.push("Product Viewed Web - CT Poc")

	clevertap.event.push("Product Viewed Web - CT Poc", {
		"Product name": "Casio Chronograph Watch",
		"Category": "Mens Accessories",
		"Price": 59.99,
	});



</script>



</body>

</html>