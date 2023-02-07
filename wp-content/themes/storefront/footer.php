<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package storefront
 */

?>

		</div><!-- .col-full -->
	</div><!-- #content -->

	<?php do_action( 'storefront_before_footer' ); ?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="col-full">

			<?php
			/**
			 * Functions hooked in to storefront_footer action
			 *
			 * @hooked storefront_footer_widgets - 10
			 * @hooked storefront_credit         - 20
			 */
			do_action( 'storefront_footer' );
			?>

		</div><!-- .col-full -->
	</footer><!-- #colophon -->

	<?php do_action( 'storefront_after_footer' ); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

<script type="text/javascript">

	clevertap.event.push("Main Page Visited", {
		"Name": "Main Page Wordpress",
		"Date": new Date()
	});			

	
	clevertap.onUserLogin.push({
		"Site": {
			"Name": "Bruno Hauck - Wordpress",            // String
			"Identity": 619085435,              // String or number
			"Email": "bruno@clevertap.com",         // Email address of the user
			"Phone": "+14155551234",           // Phone (with the country code)
			"Gender": "M",                     // Can be either M or F
			"DOB": new Date(),                 // Date of Birth. Date object
			// optional fields. controls whether the user will be sent email, push etc.
			"MSG-email": false,                // Disable email notifications
			"MSG-push": true,                  // Enable push notifications
			"MSG-sms": true,                   // Enable sms notifications
			"MSG-whatsapp": true,              // Enable WhatsApp notifications
			"Team": "San Francisco 49",
			"Score-value": 36, //integer value
			"Spent": 55.22,
			"Premium-account": true,
			"Register-date": new Date(),
		}
	})

	// Profile push used when you want do edit some info on the user

	clevertap.profile.push({
		"Site": {
			"Name": "Bruno Hauck - Wordpress",            // String
			"Identity": 619085435,              // String or number
			"Email": "bruno@clevertap.com",         // Email address of the user
			"Team": "San Francisco 49",
			"Score-value": 36, //integer value
			"Spent": 55.22,
			"Premium-account": true,
			"Register-date": new Date(),
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



	

	clevertap.event.push("Charged", {
    "Amount": 300,
    "Payment mode": "Credit Card",
    "Charged ID": 24052013,
    "Items": [
        {
            "Category": "Books",
            "Book name": "The Millionaire next door",
            "Quantity": 1
        },
        {
            "Category": "Books",
            "Book name": "Achieving inner zen",
            "Quantity": 1
        },
        {
            "Category": "Books",
            "Book name": "Chuck it, let's do it",
            "Quantity": 5
        }
    ]
});



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
