<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package storefront
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
	<script type="text/javascript">
		var clevertap = { event: [], profile: [], account: [], region: 'eu1', onUserLogin: [], notifications: [], privacy: [] };
		// replace with the CLEVERTAP_ACCOUNT_ID with the actual ACCOUNT ID value from your Dashboard -> Settings page
		clevertap.account.push({ "id": "R97-98R-W46Z" });//
		clevertap.privacy.push({ optOut: false }); //set the flag to true, if the user of the device opts out of sharing their data
		clevertap.privacy.push({ useIP: true }); //set the flag to true, if the user agrees to share their IP data
		(function () {
			var wzrk = document.createElement('script');
			wzrk.type = 'text/javascript';
			wzrk.async = true;
			wzrk.src = ('https:' == document.location.protocol ? 'https://d2r1yp2w7bby2u.cloudfront.net' : 'http://static.clevertap.com') + '/js/clevertap.min.js';
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(wzrk, s);
		})();

	</script>





	<script type="module">

		// Initialize Firebase 
		// Import the functions you need from the SDKs you need
		import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.2/firebase-app.js";
		import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.2/firebase-analytics.js";
		// TODO: Add SDKs for Firebase products that you want to use
		// https://firebase.google.com/docs/web/setup#available-libraries

		// Your web app's Firebase configuration
		// For Firebase JS SDK v7.20.0 and later, measurementId is optional
		const firebaseConfig = {
			apiKey: "AIzaSyATexGjCe0zenntk4AXB8pp8z83Zilh7o4",
			authDomain: "teste-clevertap.firebaseapp.com",
			projectId: "teste-clevertap",
			storageBucket: "teste-clevertap.appspot.com",
			messagingSenderId: "600111574066",
			appId: "1:600111574066:web:2ffaead57d1a91327de02b"
		};

		// Initialize Firebase
		const app = initializeApp(firebaseConfig);
		const analytics = getAnalytics(app);



		/*
		  // Import the functions you need from the SDKs you need
		  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.15.0/firebase-app.js";
		  // TODO: Add SDKs for Firebase products that you want to use
		  // https://firebase.google.com/docs/web/setup#available-libraries
  
		  // Your web app's Firebase configuration
		  const firebaseConfig = {
			  apiKey: "AIzaSyATexGjCe0zenntk4AXB8pp8z83Zilh7o4",
			  authDomain: "teste-clevertap.firebaseapp.com",
			  projectId: "teste-clevertap",
			  storageBucket: "teste-clevertap.appspot.com",
			  messagingSenderId: "600111574066",
			  appId: "1:600111574066:web:2ffaead57d1a91327de02b"
		  };
		  // Initialize Firebase
		  const app = initializeApp(firebaseConfig);*/
	</script>

	<style>
		</head><body <?php body_class(); ?>><?php wp_body_open(); ?> <?php do_action('storefront_before_site'); ?> <div id="page" class="hfeed site"><?php do_action('storefront_before_header'); ?><header id="masthead" class="site-header" role="banner" style="<?php storefront_header_styles(); ?>"><?php
						/**
						 * Functions hooked into storefront_header action
						 *
						 * @hooked storefront_header_container                 - 0
						 * @hooked storefront_skip_links                       - 5
						 * @hooked storefront_social_icons                     - 10
						 * @hooked storefront_site_branding                    - 20
						 * @hooked storefront_secondary_navigation             - 30
						 * @hooked storefront_product_search                   - 40
						 * @hooked storefront_header_container_close           - 41
						 * @hooked storefront_primary_navigation_wrapper       - 42
						 * @hooked storefront_primary_navigation               - 50
						 * @hooked storefront_header_cart                      - 60
						 * @hooked storefront_primary_navigation_wrapper_close - 68
						 */
						do_action('storefront_header');
						?> </header>< !-- #masthead --><?php
						 /**
						  * Functions hooked in to storefront_before_content
						  *
						  * @hooked storefront_header_widget_region - 10
						  * @hooked woocommerce_breadcrumb - 10
						  */
						 do_action('storefront_before_content');
						 ?><div id="content" class="site-content" tabindex="-1"><div class="col-full"><?php
						 do_action('storefront_content_top');