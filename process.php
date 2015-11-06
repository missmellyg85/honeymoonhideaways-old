<?php include("functions.php"); 
	print_header(1);
?>

<body>
	<div class="container">
<?php
	print_banner(1);
?>
        <div class="wrapper">
   	  	  <div class="nav">
          	<a href="http://honeymoonhideaways.honeymoonwishes.com/"><img src="assets/images/registry.jpg" alt="" /></a>
          	<h3>Which destination is perfect for your romantic getaway?</h3>
       		    <a href="caribbean.html"><img src="assets/images/caribbean.jpg" /></a>
                <a href="mexico.html"><img src="assets/images/mexico.jpg" /></a>
                <a href="frenchPolynesia.html"><img src="assets/images/frenchPolynesia.jpg" /></a>
                <a href="hawaii.html"><img src="assets/images/hawaii.jpg" /></a>
              <img src="assets/images/sandals.jpg"  />            
          </div>

<?php
  require_once('recaptchalib.php');
  $privatekey = "6LfwgLwSAAAAAFgcMA5Y-oI9D29XBd1H622gjwG1";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
?>
	
   	    <div class="main">
        	  <h2>Uh oh!</h2>
<?php
    die ("The reCAPTCHA wasn't entered correctly. Please click the back button and try it again.");
  } else {	
		$messageBody = "Hello,\n\nsomeone has sent you a quote request:\n\n" .
	
		"Name:  " . $_POST[name] .  "  "  .
		
		"Email:  " . $_POST[email] .  "\n\n" .
		
		"Home Phone:  " . $_POST[homePhone] . "  " .
		
		"Best time to call:  " . $_POST[homeTime] . "\n\n" .
		
		"Work Phone:  " . $_POST[workPhone] .
		
		"Best time to call:  " . $_POST[workTime] . "\n\n" .
		
		"Call me to discuss options?  " . $_POST[callMe] . "\n\n"  .
		
		"Comments:  " . $_POST[comments] .  "\n\n"  .
		
		"Destination:  " . $_POST[destination] . "\n\n"  .
		
		"Date of Travel:  " . $_POST[travelDate] .  "\n\n"  .
		
		"Length of Stay:  " . $_POST[stayLength] .  "\n\n"  .
		
		"# Persons Traveling:  " . $_POST[persons] .  "\n\n"  .
		
		"Special Occasion:  " .  "\n\n"  . 
		
		"Honeymoon? " . $_POST[honeymoon] . "\n\n"  .
		
		"Anniversary? " . $_POST[anniversary] . "\n\n"  .
		
		"Vacation? " . $_POST[vacation] .  "\n\n"  .
		
		"Wedding? " . $_POST[wedding] .  "  "  . "Wedding package info? " . $POST[weddingPackages] .  "\n\n"  .
		
		"Wedding location: " . $_POST[weddingLocation] .  "\n\n"  .
		
		"Special requests: " . $_POST[specialRequest] . "\n\n" .
		
		"Type of honeymoon: " . $_POST[accomodations] .  "\n\n"  .
		
		"Desired price range: " . $_POST[priceRange] . "\n\n" .
		
		"Air? " . $_POST[air] . "  "  .  "From: " . $_POST[startCity] . "\n\n"  .
		
		"Car? " . $_POST[car] . "  "  . "Car size: " . $_POST[carSize] . "\n\n" .
		
		"Prerferred price per person: " . $_POST[perPersonPrice];
	
		$to = "trvlsrc@sbcglobal.net";
	
		$subject = "Honeymoon-Hideaways Quote Request";
	
		$from = "donotreply@travel.com";
	
		$headers = "From: $from"; // You could add other headers in here, like cc or bcc if you wanted
	
		
	
		mail( $to , $subject , $messageBody , $headers );


	print("<script type=\"text/javascript\">window.location = 'success.php'</script>");
  }


?>


</div>
            <div class="rightSide">
              <h3>Specials</h3>
              <script type="text/javascript">
                var xmlfile="tickercontent.txt" //path to ticker txt file on your server.
                //ajax_ticker(xmlfile, divId, divClass, delay, optionalfadeornot)
                new ajax_ticker(xmlfile, "ajaxticker1", "someclass", [3500], "fade")
                </script>
              <img class="less" src="assets/images/byPhone.jpg" /> <a href="quoteform.html"><img class="less" src="assets/images/byEmail.jpg" /></a> <a href="questionairre.htm"><img class="less" src="assets/images/doAndDont.jpg" /></a></div>
        </div>
        <div class="footer">
        	Copyright © 2010 - This website was created by <a href="http://www.MelissaLeann.com">Melissa Leann Design</a> and may not be copied without permission of the <a href="m&#97;ilto:&#109;&#101;&#108;&#105;&#115;&#115;&#97;&#64;&#109;&#101;&#108;&#105;&#115;&#115;&#97;&#108;&#101;&#97;&#110;&#110;&#46;&#99;&#111;&#109;?subject=" title="">&#119;&#101;&#98;&#109;&#97;&#115;&#116;&#101;&#114;</a>
        </div>	
	</div>
</body>
</html>




