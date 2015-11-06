<?php

	

	function print_header($level)

	{

		if($level == 1)

		{

?>

			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

			<html xmlns="http://www.w3.org/1999/xhtml">

			<head>

			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

            <meta name="keywords" content="Honeymoons, Honeymoon resorts, couples only resorts, adults only resorts, all inclusive resorts, romance travel, destination weddings, beach vacations, tropical vacations, Sandals all inclusive resorts, romantic getaways, honeymoon packages,Tahiti travel specialist" />

			<title>Honeymoon-Hideaways by Travelsource</title>

			<link href="assets/style.css" rel="stylesheet" type="text/css" />



			<script src="assets/ajaxticker.js" type="text/javascript">

			/***********************************************

			 * Ajax Ticker script (txt file source)- © Dynamic Drive (www.dynamicdrive.com)

			 * This notice MUST stay intact for legal use

			 * Visit http://www.dynamicdrive.com/ for this script and 100s more.

			 ***********************************************/

			</script>

			</head>

<?php

		}



		elseif($level == 2)

		{

?>

			<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

			<html xmlns="http://www.w3.org/1999/xhtml">

			<head>

			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />            

            <meta name="keywords" content="Honeymoons, Honeymoon resorts, couples only resorts, adults only resorts, all inclusive resorts, romance travel, destination weddings, beach vacations, tropical vacations, Sandals all inclusive resorts, romantic getaways, honeymoon packages,Tahiti travel specialist,

            photography workshop" />

			<title>Honeymoon-Hideaways by Travelsource</title>

			<link href="../assets/style.css" rel="stylesheet" type="text/css" />



			<script src="../assets/ajaxticker.js" type="text/javascript">

			/***********************************************

			 * Ajax Ticker script (txt file source)- © Dynamic Drive (www.dynamicdrive.com)

			 * This notice MUST stay intact for legal use

			 * Visit http://www.dynamicdrive.com/ for this script and 100s more.

			 ***********************************************/

			</script>

			</head>

<?php

		}

	}



	function print_banner($level)

	{

		print("<div class=\"banner\">");

		

		if($level == 1)

		{

?>

			<a href="index.php" ><div class="bannerLink"></div></a>

            <div class="ticker">

            	<script type="text/javascript" src="assets/topScroller.js"></script>

            </div>

<?php

		}elseif($level == 2)

		{

?>

			<a href="../index.php" ><div class="bannerLink"></div></a>

            <div class="ticker">

            	<script type="text/javascript" src="../assets/topScroller.js"></script>

            </div>

<?php

		}

		

		print("</div>");

	}



	function print_nav($level)

	{

		print("<div class=\"nav\">");

		

		if($level == 1)

		{

?>

			<h3><a href="index.php">Home</a></h3>

			<a href="http://honeymoonhideaways.honeymoonwishes.com/"><img src="assets/images/registry.jpg" alt="" /></a>

          	<h3>Which destination is perfect for your romantic getaway?</h3>

       		    <a href="caribbean.php"><img src="assets/images/caribbean.gif" /></a>

				<h3 style="margin-top:0px;"><a href="http://www.islandroutes.com?referral=922B2B9D">Book Caribbean Tours</a></h3>

                <a href="http://www.travel-epartners.com/6845"><img src="assets/images/bookMexico.gif" /></a>

                <a href="mexico.php"><img src="assets/images/mexico.gif" /></a>

            	<a href="frenchPolynesia.php"><img src="assets/images/frenchPolynesia.gif" /></a>

				<a href="http://www.sandals.com/index.cfm?referral=101823"><img src="assets/images/sandals.jpg"  /></a>

				<a href="http://www.karismahotels.com/?refer_url=http://www.honeymoon-hideaways.com&refer_name=Honeymoon%20Hideaways&refer_phone=816-525-9859&refer_gi_number=11"><img src="assets/images/elDorado.jpg" /></a>

            	<a href="https://www.facebook.com/trvlsrc"><img src="assets/images/facebook.jpg" /></a>

<?php

		}elseif($level == 2)

		{

?>

<h3><a href="../index.php">Home</a></h3>

          	<a href="http://honeymoonhideaways.honeymoonwishes.com/"><img src="../assets/images/registry.jpg" alt="" /></a>

          	<h3>Which destination is perfect for your romantic getaway?</h3>

       		    <a href="../caribbean.php"><img src="../assets/images/caribbean.gif" /></a>

				<h3 style="margin-top:0px;"><a href="http://www.islandroutes.com?referral=922B2B9D">Book Caribbean Tours</a></h3>

                <a href="http://www.travel-epartners.com/6845"><img src="../assets/images/bookMexico.gif" /></a>

                <a href="../mexico.php"><img src="../assets/images/mexico.gif" /></a>

            	<a href="../frenchPolynesia.php"><img src="../assets/images/frenchPolynesia.gif" /></a>

				<a href="http://www.sandals.com/index.cfm?referral=101823"><img src="../assets/images/sandals.jpg"  /></a>

				<a href="http://www.karismahotels.com/?refer_url=http://www.honeymoon-hideaways.com&refer_name=Honeymoon%20Hideaways&refer_phone=816-525-9859&refer_gi_number=11"><img src="../assets/images/elDorado.jpg" /></a>

            	<a href="http://www.facebook.com"><img src="../assets/images/facebook.jpg" /></a>

<?php			

		}

		

		print("</div>");

	}

	

	

	function print_right($level)

	{

		print("<div class=\"rightSide\">");

		

		if($level == 1)

		{

?>

			<h3>Specials</h3>

        	<script type="text/javascript">

                var xmlfile="assets/tickercontent.txt" //path to ticker txt file on your server.

                //ajax_ticker(xmlfile, divId, divClass, delay, optionalfadeornot)

                new ajax_ticker(xmlfile, "ajaxticker1", "someclass", [3500], "fade")

                </script>

            <h3>More destinations</h3>

            <a href="hawaii.php"><img src="assets/images/hawaii.gif" /></a>

			<a href="costaRica.php"><img src="assets/images/costaRica.gif" /></a>

        	<img class="less" src="assets/images/byPhone.jpg" /> 

            <a href="quoteform.php"><img class="less" src="assets/images/byEmail.jpg" /></a> 

            <a href="filedownload.php?file=honeymoonPamphlet.pdf"><img class="less" src="assets/images/doAndDont.jpg" /></a>



<?php

    	}

        

        if($level == 2)

		{

?>

			<h3>Specials</h3>

        	<script type="text/javascript">

                var xmlfile="../assets/tickercontent.txt" //path to ticker txt file on your server.

                //ajax_ticker(xmlfile, divId, divClass, delay, optionalfadeornot)

                new ajax_ticker(xmlfile, "ajaxticker1", "someclass", [3500], "fade")

                </script>

            <h3>More destionations</h3>

            <a href="../hawaii.php"><img src="../assets/images/hawaii.gif" /></a>

			<a href="../costaRica.php"><img src="../assets/images/costaRica.gif" /></a>

        	<img class="less" src="../assets/images/byPhone.jpg" /> 

            <a href="../quoteform.php"><img class="less" src="../assets/images/byEmail.jpg" /></a> 

            <a href="filedownload.php?file=honeymoonPamphlet.pdf"><img class="less" src="../assets/images/doAndDont.jpg" /></a>



<?php

    	}

		

		print("</div>");

	}

	

	function check_email($email) 

	{

	  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) 

	  {

		return false;

	  }



	  $email_array = explode("@", $email);

	  $local_array = explode(".", $email_array[0]);

	  for ($i = 0; $i < sizeof($local_array); $i++) 

	  {

		if(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&

			↪'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",

			$local_array[$i])) 

		{

		  return false;

		}

	  }



	  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) 

	  {

		$domain_array = explode(".", $email_array[1]);

		if (sizeof($domain_array) < 2) 

		{

			return false; // Not enough parts to domain

		}

		for ($i = 0; $i < sizeof($domain_array); $i++) 

		{

			if(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|

				↪([A-Za-z0-9]+))$", $domain_array[$i])) 

			{

				return false;

			}

		}

	}

  return true;

}

	

function insertSlideshow( $pictures )

{

	print("<script type=\"text/javascript\" src=\"assets/slideshow.js\"></script>\n");

	print("<script type=\"text/javascript\">\n");

	print("var seqslides=new Array() \n");

	

	foreach( $pictures as $index => $picture )

	{

		print("seqslides[$index]=[\"$picture\", \"\"]\n");

	}

	print("\n\n");

	print("printShow( seqslides )</script>\n\n");

	

}



?>