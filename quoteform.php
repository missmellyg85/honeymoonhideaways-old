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
	<form method="POST" action="process.php">
    	<h2>Quote Request Form</h2>
    	<p>
        	Please be sure to include as much information as possible. We must have dates, the length of stay, number of persons, and the type of accommodation desired in order to give a price quote. Please include whether or not you need airfare (in many cases, our packages include airfare which is less expensive).</p>
        <p>
        	If you would like to talk with us to help you decide where you would like to go based upon your preferences and what activities you enjoy, go ahead and call us or check the shaded box and we will be happy to call you. If you are requesting a price quote, please make sure you include your phone number and the best time to reach you.  We will be following up with an E-mail to confirm that we received your request, and then a phone call to go over the price quote with you.</p>
        <p><red> * </red><redSmall>Indicates a required field</redSmall></p>
        <p>
        	<label>Name<red> * </red>:</label><input name="name" size="28" type="text" />
            <label>Email Address:</label><input name="email" size="20" type="text" />
        </p>
        <p>
        	<label>Home phone<red> * </red>:</label><input name="homePhone" size="11" type="text" />
            <label>Best time to call:</label>
            	<select size="1" name="homeTime">
                	<option selected="selected">Choose one</option>
                	<option>8am</option>
    				<option>9am</option>
    				<option>10am</option>
   					<option>11am</option>
 	   				<option>12pm</option>
    				<option>1pm</option>
    				<option>2pm</option>
    				<option>3pm</option>
    				<option>4pm</option>
    				<option>5pm</option>
    				<option>6pm</option>
    				<option>7pm</option>
    				<option>8pm</option>
          </select>
        </p>
        <p>
        	<label>Work phone:</label><input name="workPhone" size="11" type="text" />
            <label>Best time to call:</label>
            	<select size="1" name="workTime">
                	<option selected="selected">Choose one</option>
                    <option>8am</option>
    				<option>9am</option>
    				<option>10am</option>
   					<option>11am</option>
 	   				<option>12pm</option>
    				<option>1pm</option>
    				<option>2pm</option>
    				<option>3pm</option>
    				<option>4pm</option>
    				<option>5pm</option>
    				<option>6pm</option>
    				<option>7pm</option>
    				<option>8pm</option>
                </select>
        </p>
        <p style="background-color:#99ccff">
        	I haven't decided on all of my plans and would like to discuss options with you.
            Please call me <input name="callMe" value="yes" type="checkbox" />
        </p>
        <p>
        	<label>Comments:</label><input name="comments" size="83" type="text" />
        </p>
        <p>
        	<label>Destination<red> * </red>:</label><input name="destination" size="15" type="text" />
        	<label>Date of Travel<red> * </red>:</label><input name="travelDate" size="8" type="text" />
       	</p>
        <p>
            <label>Length of Stay<red> * </red>:</label><input name="stayLength" size="7" type="text" />
        	<label>#Persons Traveling<red> * </red>:</label><input name="persons" size="5" type="text" />
        </p>
        <p>
        	Special Occasion:
        </p>
        <p>
    		<label>Honeymoon</label><input name="honeymoon" value="yes" type="checkbox" />&nbsp;
			<label>Anniversary</label><input name="anniversary" value="yes" type="checkbox" />
    		<label>Vacation</label><input name="vacation" value="yes" type="checkbox" />
    		<label>Wedding</label><input name="wedding" value="yes" type="checkbox" />
        </p>
        <p>
        	If you have checked Wedding, do you already have your wedding plans made? If not, would you like information on Wedding packages? (Some of our packages include FREE weddings.)<br />
            <label>Yes</label>
      <input name="weddingPackages" value="yes" type="checkbox" />
            <label>No</label><input name="noPackage" value="no" type="checkbox" />
            <br />
          If no, please give us information on where your wedding will be held:
          <input name="weddingLocation" size="77" type="text" />
        </p>
        <p>
        	Special Requirements or Requests:<br />
            <input name="specialRequest" size="61" type="text" /><br /> 
        	(non-Smoking, air-conditioned, on the beach, full-kitchen, etc.)</p>
        <p>
        	<label>Type of Honeymoon/Vacation desired</label>
            	<select size="1" name="accomodations">
    		 		<option selected="selected">Please choose one</option>
    				<option>All-inclusive resort</option>
    				<option>Bed and Breakfast</option>
    				<option>Cruise</option>
    				<option>Condo</option>
    				<option>Hotel</option>
    				<option>Yacht Charter</option>
                </select>
        </p>
        <p>
        	<label>Desired Price Range</label>
            	<select size="1" name="priceRange">
    		 		<option selected="selected">Please choose one</option>
    		 		<option>Economy</option>
    				<option>Moderate</option>
    				<option>Deluxe</option>
                </select>
        </p>
        <p>
        	<label>Do you need air?</label><input name="air" value="yes" type="checkbox" />
            <label>From what city?</label><input name="startCity" size="10" type="text" />
        </p>
        <p>
            <label>Do you need a car?</label><input name="car" value="yes" type="checkbox" />
            <label>What size car?</label>
            	<select size="1" name="carSize">
    				<option selected="selected">Please choose one</option>
    				<option>Compact</option>
    				<option>Mid-size</option>
    				<option>Full-size</option>
    				<option>Convertible</option>
    				<option>4-wheel drive jeep</option>
                </select>
        </p>
        <p>
        	Do you have a price range that you would like to stay within? This enables us to select packages that meet your price criteria as well as your special requirements.
        </p>
        <p>
        	<label>$ per person</label><input name="perPersonPrice" size="9" type="text"  />
        </p>
		<p>
<?php
	
		 require_once('recaptchalib.php');
		 $publickey = "6LfwgLwSAAAAAI9EWhCBFB-Q0QaP_eoWDd0MceZ2"; // you got this from the signup page
		 echo recaptcha_get_html($publickey);

?>
		</p>
        <p>
        	<input value="submit" type="submit" />
        	<input value="reset" type="reset" />
        </p>    
	</form>
</div>
<?php
	print_right(1);
?>
      </div>
        <div class="footer">
        	Copyright © 2010 - This website was created by <a href="http://www.MelissaLeann.com">Melissa Leann Design</a> and may not be copied without permission of the <a href="m&#97;ilto:&#109;&#101;&#108;&#105;&#115;&#115;&#97;&#64;&#109;&#101;&#108;&#105;&#115;&#115;&#97;&#108;&#101;&#97;&#110;&#110;&#46;&#99;&#111;&#109;?subject=" title="">&#119;&#101;&#98;&#109;&#97;&#115;&#116;&#101;&#114;</a>
        </div>	
	</div>
</body>
</html>
