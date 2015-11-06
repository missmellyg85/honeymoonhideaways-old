<?php include("functions.php"); 
	
	print_header(1);
?>

<body>
	<div class="container">
<?php
	print_banner(1);
?>
        <div class="wrapper">
<?php
	print_nav(1);
?>
          <div class="main">
<?php

// The file is specified in the URL
if( isset( $_GET[file] ) )
{
	// The form has been submitted
	if( isset( $_GET[submitted] ) )
	{
		// Check to make sure all required fields are not blank
		if( !isset( $_GET[email] ) )
		{
			print("<h1>You must enter an email address to download this file. Please go back and fill out all fields.</h1>");
			return 1;
		}
		elseif( ! check_email( $_GET[email] ) )
		{
			print("<h1>You must enter a VALID email address to download this file. Please go back and fill out all fields correctly.</h1>");
			return 1;			
		}
		elseif( ! isset( $_GET[name] ) )
		{
			print("<h1>You must enter a name to download this file. Please go back and fill out all fields.</h1>");	
			return 1;
		}
		
		// Send an email to alert of the file download
		$to = "trvlsrc@sbcglobal.net";
		$subject = "File Downloaded";
		$body = "Hello, \n This message is to alert you that the file $_GET[file] was downloaded by $_GET[name] ($_GET[email]) " . 
		"at the time this email was sent. If you have any questions, contact the webmaster. Thanks!";
		mail( $to , $subject , $body );
		
		// Redirect the user to the file
		print("<script type=\"text/javascript\">window.location='assets/$_GET[file]'</script>");
	}
	// The form has not been submitted
	else
	{
		// Display the information form
?>

		<h3>Please enter your information below to download this file</h3><br />
		<form action="" method="GET">
			<input type="hidden" name="submitted" value="yes" />
			<input type="hidden" name="file" value="<?php print($_GET[file]); ?>" />
			<p>Name:  <input type="text" name="name" length="50" /> </p>
			<p>Email: <input type="text" name="email" length="50" /> </p>
			<input type="submit" value="Download File" />
		</form>
<?php

	}
}
// The file is not specified
else
{
	// Not the ideal solution...
	print("<h1>Error. You must follow a link to access this page. Please go back.</h1>");
}	


   	print("</div>");

	print_right(1);
?>
        </div>
        <div class="footer">
        	Copyright © 2010 - This website was created by <a href="http://www.MelissaLeann.com">Melissa Leann Design</a> and may not be copied without permission of the <a href="m&#97;ilto:&#109;&#101;&#108;&#105;&#115;&#115;&#97;&#64;&#109;&#101;&#108;&#105;&#115;&#115;&#97;&#108;&#101;&#97;&#110;&#110;&#46;&#99;&#111;&#109;?subject=" title="">&#119;&#101;&#98;&#109;&#97;&#115;&#116;&#101;&#114;</a>
        </div>	
	</div>
</body>
</html>