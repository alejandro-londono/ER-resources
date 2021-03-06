<!DOCTYPE html>
<html lang="eng">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Versioning Variables -->
		<?php include 'variables.php';?>

		<title>Title Page</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- Custom CSS - Add your file path. -->
		<link rel="stylesheet" href="stylesheets/screen.css">

		<!-- Button Animation CSS - See this page to familiarize yourself with the available styles: http://ianlunn.github.io/Hover/ -->
		<link rel="stylesheet" href="http://lp2.ericksonliving.com/resources/css/hover-min.css">
		
		<!-- Erickson Living Fonts - Common fonts used in projects.  -->
		<script type="text/javascript" src="http://fast.fonts.net/jsapi/0522222c-4a07-41f0-b762-37612baa669b.js"></script>
		<link type="text/css" rel="stylesheet" href="http://fast.fonts.net/cssapi/f61f693f-d9fc-452c-98f5-40b4ea3be22a.css">
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="">
		<header>
			
		</header>
		<main>
			
		</main>
		<footer class="container">

			<div class="row footer">

				<div class="logo-container col-lg-5 col-lg-push-2 col-md-5 col-md-push-2 col-sm-5 col-sm-push-2 col-xs-12 center">
					<a href="<?php  echo $commInfo[$commGet]['commhome'] ?>"><img  class="logo" src="<?php  echo $commInfo[$commGet]['logo'] ?>" alt=""></a>
				</div>
				<div class="vertical-line col-lg-push-1 col-lg-4 col-md-push-1 col-md-4 col-sm-push-2 col-sm-4 col-xs-push-2 hidden-xs"><span><?php  echo $commInfo[$commGet]['location'] ?></span></div>
				<br>
				
				
			</div>
			
			<div class="row footer-pt-two">
			        <div class="col-lg-12 text-center">
			            
			            <p>CONNECT WITH US:</p>

			            <nav>
			                <a href="https://www.facebook.com/ericksonliving"><img alt="Facebook" height="25" src="img/fb-blk.png" width="25">
			                </a>
			                <a href="https://twitter.com/ericksonliving"><img alt="Twitter" height="25" src="img/twitter-blk.png" width="25">
			                </a>
			                <a href="https://www.youtube.com/user/ericksonnewmedia"><img alt="Youtube" height="25" src="img/youtube-blk.png" width="25">
			                </a>
			                <a href="https://www.pinterest.com/ericksonliving/"><img alt="Pinterest" height="25" src="img/pin-blk.png" width="25">
			                </a> &nbsp; <a href="https://www.ericksonliving.com" style="text-decoration: underline;">EricksonLiving.com</a>
			            </nav>
			            
			                <p class="small">&copy; <?php echo date('Y') ?> Erickson Living&reg;. All rights reserved. <?php echo $commInfo[$commGet]['iladdress']?>              <br><span class="phone">1&#8209;800&#8209;XXX&#8209;XXXX</span>
			                </p>
			                <p class="disclaimer"></p>
			                <nav>
			                    <ul class="list-inline">
			                        <li>
			                            <a href="http://www.ericksonliving.com/about-us/eho.asp"><img alt="" src="img/eho.png" style="float:left;top:-7px;position:relative;">Equal Housing Opportunity</a>
			                        </li>
			                        <li class="footer-menu-divider">⋅</li>
			                        <li>
			                            <a href="http://www.ericksonliving.com/about-us/privacy-policy.asp">Privacy / Terms of Use</a>
			                        </li>

			                        <li class="footer-menu-divider">⋅</li>
			                        <li>
			                            <a href="http://www.ericksonliving.com/hipaa/index.asp">HIPAA</a>
			                        </li>

			                        <li class="footer-menu-divider">⋅</li>

			                        <li>
			                            <a href="http://www.ericksonliving.com/about-us/press-room.asp">Press Room</a>
			                        </li>

			                        <li class="footer-menu-divider">⋅</li>

			                        <li>
			                            <a href="http://www.ericksonliving.com/about-us/careers.asp">Careers</a>
			                        </li>
			                    </ul>
			                </nav>
			                <p>
			        </div>
			    </div>
		</footer>
		
		<!-- Landing Page Scripts: Scripts include Google Ananlytics tracking, salesforce integration tracking, and bug fixes. -->

		<!-- jQuery -->
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		
		<!-- Bootstrap JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

		<!-- Google Analytics and Bug Fixes -->
		<script src="http://lp2.ericksonliving.com/resources/js/mandatory.js"></script>

		<!-- Form Validation and Additional Variables: Include any variables unable to be placed in PHP file like multiple callsource numbers or location information -->
		
			<!-- Form Validation Script -->		
			<script src="js/jquery.validate.min.js" type="text/javascript"></script>

			<!-- Brochure & Tour Form Validation Options -->
			<script src="js/long-form-validation.js" type="text/javascript"></script>

		<!-- Spam Trap and TimeStamp: This is the most important LP script as it aids in integration with Salesforce.  Never delete it! -->
	    <script type="text/javascript">
	        $(document).ready(function() {
	            $('#formElement16').hide();
	            $('input').focus(function() {
	                $('input[name="Address2"]').val("blue");
	            });
	        });
	        $(document).ready(function() {
	            var d = new Date();
	            var n = d.getTime();
	            $('input[name="TimeStamp"]').val(n);
	            $('input[name="last"]').change(function() {
	                var ComboTimeStamp = n + $('input[name="last"]').val();
	                $('input[name="TimeStamp"]').val(ComboTimeStamp);
	            });
	        });
	    </script>		

		<!-- Searchforce Tracking - Prime Visibility tracing for Google Ad Words -->
		<script async="" src="http://sftrack.searchforce.net/SFConversionTracking/sfct.js" type="text/javascript"></script>
		<script id="sfcode1" language="Javascript" type="text/javascript">
			var jed = {
			    event: 'landing',
			    cookieexpire: '365'
			};
			(function() {
			    var sf = document.createElement('script');
			    sf.type = 'text/javascript';
			    sf.async = true;
			    sf.src = 'http://sftrack.searchforce.net/SFConversionTracking/sfct.js';
			    var s = document.getElementById('sfcode1');
			    s.parentNode.insertBefore(sf, s);
			})();
		</script>
		<!-- Javascript to autofill form sections, phone numbers and copy -->
		<script src="js/autocomplete.js"></script>
	</body>
</html>