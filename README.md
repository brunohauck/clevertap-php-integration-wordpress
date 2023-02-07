# Clevertap Php Integration Wordpress

<Things can be implemented by referring to doc>

TEMP DOCUMENT 

SDK 
First, you need to install a theme and if you are going to use Woocommerce you need the plugin

Open the project in Visual Studio code or any other developer platform.

Open the theme folder as the image

![alt text](https://github.com/brunohauck/clevertap-php-integration-wordpress/docs/imgs/image1.png?raw=true)

Now go to the header.php file and add the latest version of the Web SDK
```
   <script type="text/javascript">
    var clevertap = {event:[], profile:[], account:[], region: 'YOUR-REGION EX -> US1', onUserLogin:[], notifications:[], privacy:[]};
// replace with the CLEVERTAP_ACCOUNT_ID with the actual ACCOUNT ID value from your Dashboard -> Settings page
   clevertap.account.push({"id": "YOUR-CLEVER-ACCOUNT-ID"});//
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
    
   </script>
```
   
Now go to the dashboard in -> segments -> find people -> don't add any criteria and click in the view details 



Now you can see some anonymous users like the image:



Now your basic SDK integration is done. 



Events

You can add events at any page or files on the Wordpress 

In the example below we add in the footer of the page to register the page visit 

Remember that for Web SDK integration we don't have app launch event so is recommended that you add an event to main page to register the Web App launch 

In this case we are going to edit the footer.php
```
<?php wp_footer(); ?>
<script type="text/javascript">


   clevertap.event.push("Main Page Visited", {
       "Name": "Main Page Wordpress",
       "Date": new Date()
   });        




User properties

For testing we can create a Static onUserLogin function remember to use this function for register and login into your application, and next we are going to simulate the login HTML form in Javascript



Push
In-app and so on
<prerequisites>
Clevertap account
Event design sheet
Firebase account
Apple developer account
Worpress and Woocomerce Instalation 
Theme and Template installed 
<Identity Management> refer to this doc for content 
What is identity
Example: Identity management is a very important part of all marketing as well as user management efforts. You need to uniquely identify users and avoid sending the same campaigns to the same user multiple times, and other such mistakes.
Why is Identity Management Important? 
Choosing the right unique Identifier:
<Events design> refer to this doc for content 
What are events
What are user properties?
How the events and user properties will be helpful
Explain data types and why important
Special event
<Integration>
<Install sdk>
Steps to install SDK with screenshots
Where can find the account id and token with screenshots
Explain important dependencies like firebase, install referrer, exoplayer 
Initialize Clevertap SDK - with screenshots
Activity life cycle code with screenshots and explanation of why it required
At the end display a video, on how to check if the data passing to the Clevertap dashboard
Webview code if required
<Location tracking>. - don't have IT
Setlocation code steps with screenshots
Gdpr location code steps with screenshots
How to check if the GDPR location/setlocation is displayed correctly on the clevertap video
<Event and user property integration>
Onuserlogin code, explanation with screenshots(Should contain all data types)
Profile push code, explanation with screenshots(Should contain all data types)
Events code with event properties, explanation with screenshots.(Should contain all data types)
Charged event code with event properties, explanation with screenshots.(Should contain all data types)
Video record to see how the events sending and how can they verify the data type and event properties value
<Push Notifications>(All with screenshots and explanation)
Channel ID code 
FCM receiver
Ios code
Image notifications
Small icon code
Video of testing push notifications

For push notifications, you need to create a project and add the web sdk firebase to your project 

Follow the steps 

1 - Go to firebase console -> https://console.firebase.google.com

2 - Create a new project or use an existing one


Now you have to add a Web Project 



This is going to generate some scripts and you have to add them to your header project.

Remember if you have more than one theme you have to add the integration on all themes for Clevertap to work.

<In-app notifications> (All with screenshots and explanation) - don't have IT
In-app controls example 
Video of testing in-app notifications
<Naitve display>(All with screenshots and explanation) - don't have IT
Native display code with screenshots
Rendering example
Events code with examples
Video of testing native display
<App inbox>(All with screenshots and explanation) - don't have IT
Clevertap ui code with screenshots
Rendering example
Video of testing app inbox

