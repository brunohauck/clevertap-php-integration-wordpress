<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="manifest" href="http://localhost/wordpress/manifest.json">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<script type="text/javascript">
     var clevertap = {event:[], profile:[], account:[], region: 'eu1', onUserLogin:[], notifications:[], privacy:[]};
 // replace with the CLEVERTAP_ACCOUNT_ID with the actual ACCOUNT ID value from your Dashboard -> Settings page
	clevertap.account.push({"id": "R97-98R-W46Z"});//
	clevertap.privacy.push({optOut: false}); //set the flag to true, if the user of the device opts out of sharing their data
	clevertap.privacy.push({useIP: true}); //set the flag to true, if the user agrees to share their IP data
	 (function () {
	         var wzrk = document.createElement('script');
	         wzrk.type = 'text/javascript';
	         wzrk.async = true;
	         wzrk.src = ('https:' == document.location.protocol ? 'https://d2r1yp2w7bby2u.cloudfront.net' : 'http://static.clevertap.com') + '/js/clevertap.min.js';
	         var s = document.getElementsByTagName('script')[0];
	         s.parentNode.insertBefore(wzrk, s);
	  })();
	  

    /* Clevertap docs */
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
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>

</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
