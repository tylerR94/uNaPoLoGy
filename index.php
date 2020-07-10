<?php
require "connect.php";
require "config.php";
$url = 'http://'.$_SERVER['SERVER_NAME'].dirname($_SERVER["REQUEST_URI"]);
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<title>uNaPoLoGy (the series)</title>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/campaign.css" />
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">
function showDiv() {
   document.getElementById('donation_field').style.display = "block";
   document.getElementById('donateBtn').style.display = "none";
   document.getElementById('submitBtn').style.display = "block";
   document.getElementById('donationInfo').style.display = "block";
}

 function submitForm()
 {
      document.getElementById('donationForm').submit();
 }

$(document).ready(function(){
	
	$('ul.tabs li').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('ul.tabs li').removeClass('current');
		$('.tab-content').removeClass('current');

		$(this).addClass('current');
		$("#"+tab_id).addClass('current');
	})

})
</script>
</head>
<body>
	<div id="site_container">
		<!--HEADER STARTS HERE-->
		<div id="site_top">
			<div id="site_title"></div>
			<div id="site_right">
				<div id="site_right_fill"></div>
				<?php include("social_media.php"); ?>
			</div>
		</div>

		<?php include("navbar.php"); ?>
		<!--HEADER ENDS HERE-->

		<!--BODY STARTS HERE-->
		<div class="divider"></div>
		<div style="background-color: rgba(0,0,0,1);"><iframe width="1060" height="515" src="https://www.youtube.com/embed/hLNQkXL6hok?autoplay=1" frameborder="0" allowfullscreen></iframe></div>
		<div class="divider"></div>
		<div id="body_box"><div id="body_inside">
			<div class="campaign_container">
				<!--PERKS BOX-->
				<div class="campaign_bar"><p>DONATOR PERKS</p></div>
				<div class="campaign_spacer"></div>
				<div class="campaign_box_edge"></div>
				<div class="campaign_box">
					<div class="campaign_box_inside">
						<h3><u>CA $10</u>: uNReMaRKaBLe!</h3>
						<p>- Your name will appear in our pilot's end credits with a special thank you!</p>
						<p>- I will send you a personal email thanking you for your contribution!</p>
						<p><i>Estimated Delivery:</i> <strong>May 2017</strong></p>
						<hr />

						<h3><u>CA $25</u>: uNCuT!</h3>
						<p>ALL of the above PLUS</p>
						<p>- You will get a special shout out on twitter, instagram, Facebook for your contribution!</p>
						<p><i>Estimated Delivery:</i> <strong>May 2017</strong></p>
						<hr />

						<h3><u>CA $50</u>: uNCeNSoReD!</h3>
						<p>ALL of the above PLUS</p>
						<p>- You will be sent a heads up link containing the scenes your dollars went toward editing!</p>
						<p><i>Estimated Delivery:</i> <strong>May 2017</strong></p>
						<hr />

						<h3><u>CA $50</u>: uNCoMMoN! Special Perk!</h3>
						<p>ALL of the above PLUS</p>
						<p>- Uka-Gram! Request the Creator of the show to go to a destination within the Greater Toronto Area and play a ukulele song to a loved one, friend, family or group. Trust us, he’ll do it during the launch and any public spots in the GTA you want him to play--we'll record it for you!</p>
						<p>- Your name will appear in our pilot's end credits with a special thank you!</p>
						<p>- You will get a special shout out on twitter, instagram, Facebook for your contribution!</p>
						<p><i>Estimated Delivery:</i> <strong>April 2017</strong></p>
						<span style="color:red;">Limited reward (6 left of 6)</span>
						<hr />

						<h3><u>CA $100</u>: uNuTTeReD!</h3>
						<p>ALL of the above PLUS</p>
						<p>- We will send you a private link to the pilot once it's finished a WEEK prior to broadcasting home and abroad!</p>
						<p><i>Estimated Delivery:</i> <strong>May 2017</strong></p>
						<span style="color:red;">Limited reward (10 left of 10)</span>
						<hr />

						<h3><u>CA $100</u>: uNFoRGiVeaBLe! Special Perk!</h3>
						<p>Personal Training Session! Enlist the Creator of the show (CanFitPro Cert.) to have a one on one training session to see what YA GOT! He will evaluate your exercise history and create a custom current program to encourage increase in strength and muscle growth.</p>
						<p>- Your name will appear in our pilot's end credits with a special thank you!</p>
						<p>- A special shout out on twitter, instagram, Facebook for your contribution!</p>
						<p>- You will be sent a heads up link containing the scenes your dollars went toward editing!</p>
						<p><i>Estimated Delivery:</i> <strong>April 2017</strong></p>
						<span style="color:red;">Limited reward (4 left of 4)</span>
						<hr />

						<h3><u>CA $250</u>: uNeDiTeD!</h3>
						<p>ALL of the above (not including special perks) PLUS</p>
						<p>- We will mail you a hard copy of the Pilot script signed by the writer Caleb Olivieri and the three amazing co-stars Loretta Yu, Ruth Goodwin and Malube!</p>
						<p>- You will be sent a link you can download of raw footage from production day (bloopers, mistakes, no colour correction, ugly behind the scenes footage).</p>
						<p><i>Estimated Delivery:</i> <strong>May 2017</strong></p>
						<hr />

						<h3><u>CA $500</u>: uNQueSTioNaBLe!</h3>
						<p>ALL of the above (not including special perks) PLUS</p>
						<p>- You will be sent a 11" x 17" poster!</p>
						<p>- Meet the Creator and Team via Skype or face to face to discuss the future of the series and why this content is important to be shown to audiences.</p>
						<p>- Join us for the wrap party and watch a private screening of the pilot episode! Yay!</p>
						<p><i>Estimated Delivery:</i> <strong>May 2017</strong></p>
						<span style="color:red;">Limited reward (4 left of 4)</span>
						<hr />

						<h3><u>CA $500</u>: uNCoNVeNTioNaL! Special Perks!</h3>
						<p>Take advantage of the very latest brow trend. Micro Blading for Semi Permanent Brows!</p>
						<p>Procedure offered at Toronto Tattoo Clinic by one of their instructors.</p>
						<p>Retail value of $600.</p>
						<p>Link here for more details on Micro Blading:</p>
						<p><a href="http://www.torontotattooclinic.com/">http://www.torontotattooclinic.com/</a></p>
						<p>- Your name will appear in our pilot's end credits with a special thank you!</p>
						<p>- A special shout out on twitter, instagram, Facebook for your contribution!</p>
						<p>- You will be sent a heads up link containing the scenes your dollars went toward editing!</p>
						<p>- Join us for the wrap party and watch a private screening of the pilot episode!</p>
						<p><i>Estimated Delivery:</i> <strong>May 2017</strong></p>
						<span style="color:red;">Limited reward (2 left of 2)</span>
						<hr />

						<h3><u>CA $1,000</u>: uNaPoLoGeTiC!</h3>
						<p>Oh my god! Wow! First off--THANK YOU!</p>
						<p>You get ALL of the Above (not including special perks) PLUS</p>
						<p>- Hello Executive Producer! Get a credit as executive producer and come on set for a day to see the magic first hand! And get your name in our IMDB page as executive producer!</p>
						<p><i>Estimated Delivery:</i> <strong>May 2017</strong></p>
						<span style="color:red;">Limited reward (2 left of 2)</span>
					</div>
				</div>
				<div class="campaign_box_edge"></div>
			</div>
			<div class="box_space">&nbsp;</div>
			<div class="campaign_container_2">
				<!--DONATE BOX-->
				<div class="campaign_bar_2"><p>DONATE NOW</p></div>
				<div class="campaign_spacer"></div>
				<div class="campaign_box_2_edge"></div>
				<div class="campaign_box_2">
					<div class="campaign_box_inside">
						<p>Thanks for stopping by the uNaPoLoGy series! We are raising money to shoot the pilot episode of this new series. We need any and all help we can get! Every dollar makes a difference, so please consider donating some if you are able to. If you can't, no problem! Feel free to help our cause by spreading the word.</p>
						<br />
						<h2 style="font-family: Verdana,sans-serif;"><u>Campaign Progress</u></h2><br />
						<div class="progressbar"><div class="progressbar_div" style="width:<?php echo $percent; ?>%;"><div class="progressbar_left">$<?php echo $sum; ?></div><div class="progressbar_right">$7000</div></div></div>
						<br />
						<div><div id="donation_field" style="display:none;float:left;">

					    <form id="donationForm" action="donation_redirect.php" method="post" class="payPalForm">
					    	<input type="hidden" name="cmd" value="_donations" />
				            <input type="hidden" name="item_name" value="Donation" />

				            <!-- Your PayPal email: -->
				            <input type="hidden" name="business" value="<?php echo $myPayPalEmail?>" />

				            <!-- PayPal will send an IPN notification to this URL: -->
				            <input type="hidden" name="notify_url" value="<?php echo $url.'/ipn.php'?>" /> 

				            <!-- The return page to which the user is navigated after the donations is complete: -->
				            <input type="hidden" name="return" value="<?php echo $url.'/donation_success.php'?>" /> 

				            <!-- Signifies that the transaction data will be passed to the return page by POST -->
				            <input type="hidden" name="rm" value="2" /> 


							<!-- 	General configuration variables for the paypal landing page. Consult 
				            		http://www.paypal.com/IntegrationCenter/ic_std-variable-ref-donate.html for more info  -->

				            <input type="hidden" name="no_note" value="1" />
				            <input type="hidden" name="cbt" value="Go Back To The Site" />
				            <input type="hidden" name="no_shipping" value="1" />
				            <input type="hidden" name="lc" value="US" />
				            <input type="hidden" name="currency_code" value="CAD" />


							<!-- The amount of the transaction: -->
				            <input type="hidden" name="bn" value="PP-DonationsBF:btn_donate_LG.gif:NonHostedGuest" />

				            <!-- You can change the image of the button: -->

						</div>
						<div style="clear:both;display:none;" id="donationInfo" >
							<table>
								<tr>
					                <td><label for="amount">Amount:</label></td>
					                <td><input type="number" name="amount"  /></td>
					            </tr>

				        		<tr>
					                <td><label for="name">Name:</label></td>
					                <td><input type="text" id="name" name="name" /></td>
					            </tr>

					            <tr>
					                <td><label for="showamount">Show Donation Amount:</label></td>
					                <td>Yes<input type="radio" id="showamount" name="showamount" value="Yes" checked="checked" /> No<input type="radio" id="showamount" name="showamount" value="No" /></td>
								</tr>
					            
								<tr>
					                <td><label for="message">Message:</label></td>
					                <td><textarea name="message" id="message"></textarea></td>
					            </tr>
					        </table>
						</div>
						<div id="donateBtn" style="float:left;" class="donate_button" onclick="showDiv()">DONATE</div><div id="submitBtn" name="submit" style="display:none;float:left;" class="donate_button" onclick="submitForm()">SEND DONATION</div></div>
						</form>
						<br /><br />&nbsp;
						<u><h2 style="font-family: 'Baloo Bhaina', cursive;">WHAT'S ALL THE FUSS ABOUT?</u></h2>
						<p>The PILOT episode we are raising funds for is the first STEPPING stone!
Our goal is to raise $7,000 to shoot the pilot (a 25 minute episode) and pitch an 8 episode per season outline to networks, on demand, and digital media.
YOU are the most important part of this! Yes, you! If you decide to contribute in anyway you'll be with us every step of the way! Progress reports ie; updates on set, behind the scenes, finalization on editing and when we plan to broadcast the pilot to spread the word!
</p>
<br />
<u><h2 style="font-family: 'Baloo Bhaina', cursive;">LET'S BREAK IT DOWN FOR YOU</u></h2>
<p>The script is 24 pages that has been broken down into 3 shooting days. Funds will go toward Actra union fees (talent is worth the money!). Principal performers are paid $150 a day (3 principals for 3 days is $1350). Supporting roles are $120 a day (5 supporting for one day each is $600). Background performers are $100 a day (2 background for one day is $200).
The equipment such as the camera, lights, sound, and a crew of 13 people will be $1800; Location permits,  transportation, craft services, costume, props, production design, insurance will be an estimate of $1550. Most importantly Post-production and distribution via social media $1500 (Facebook, instagram, twitter boosts to get the content to more viewers).
</p>
						<br />
						<div class="campaign_tabs_container">

							<ul class="tabs">
								<li class="tab-link current" data-tab="tab-1">Donators</li>
								<li class="tab-link" data-tab="tab-2">Updates</li>
							</ul>

							<div id="tab-1" class="tab-content current">
								<?php
								$donations = mysqli_query("SELECT * FROM dc_comments ORDER BY id DESC");
								$rowcount = mysqli_num_rows($donations);
								$content = mysqli_fetch_all($donations,MYSQLI_ASSOC);
								for($i=0;$i<$rowcount;$i++){
									echo '<div style="float:left;"><u>'.$content['name'].'</u></div><div style="float:right;">';
									if(is_null($content['amount'])){ echo '<u>Amount: <i>Hidden</i></u></div>'; }else{
										echo '<u>Amount: $'.$content['amount'].'</u></div>';
									}
									echo '<div style="clear:both;"></div>';
									if (strlen($content['message']) > 0){
										echo '<br /><div>'.$content['message'].'</div>';
									}
									echo '<hr />';
								?>
							</div>
							<div id="tab-2" class="tab-content">
								<?php
								$updates = mysqli_query("SELECT * FROM updates ORDER BY id DESC");
								$rowcount = mysqli_num_rows($updates);
								$content = mysqli_fetch_all($updates,MYSQLI_ASSOC);
								for($i=0;$i<$rowcount;$i++){
									echo '<div style="float:left;"><u>'.$content['timestamp'].'</u></div>';
									echo '<div style="clear:both;"></div>';
									echo '<br /><div>'.$content['post'].'</div>';
									echo '<hr />';
								}
								?>
							</div>
						</div>
					</div>
				</div>
				<div class="campaign_box_2_edge"></div>

			</div>
		</div></div>
		<!--BODY ENDS HERE-->
	</div>
</body>
<!--THIS WEBSITE WAS BUILT BY TYLER RICHARDS-->
</html>