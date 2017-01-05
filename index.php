<?php
	// Get whether this is in dev mode, staging mode OR production mode
	$domain = $_SERVER['HTTP_HOST'];
	$iframe_url = 'https://explore.emergencyreporting.com';
	if( false !== strpos( $domain, '.dev' ) ):
		$iframe_url = 'http://explore.emergencyreporting.dev';
	elseif( flase !== strpos( $domain, 'staging' ) ):
		$iframe_url = 'https://staging.emergencyreporting.com';
	endif;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home - Emergency Reporting</title>
		<link rel="stylesheet" type="text/css" href="er_homepage_styles.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<div class="wrapper">
			<div class="er-fallback-header">
				<span class="logo-container"><a href="<?php echo $iframe_url; ?>"><img class="logo" src="emergency_reporting_logo.png" alt="Logo" /></a></span>
				<a class="contact" href=""><i class="fa fa-envelope"></i> Contact Us</a>
				<a class="phone-number" href=""><i class="fa fa-phone"></i> 1 (866) 773-7678</a>
				<a href=""><span class="button">LOGIN</span></a>
			</div>
			<iframe class="er-page-iframe" src="<?php echo $iframe_url; ?>?src=embed"></iframe>
		</div>
	</body>
</html>
