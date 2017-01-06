<?php
	// Get whether this is in dev mode, staging mode OR production mode
	$domain = $_SERVER['HTTP_HOST'];
	$iframe_url = 'https://www.explore.emergencyreporting.com';
	if( false !== strpos( $domain, '.dev' ) ):
		$iframe_url = 'http://www.explore.emergencyreporting.dev';
	elseif( flase !== strpos( $domain, 'staging' ) ):
		$iframe_url = 'https://staging.emergencyreporting.com';
	endif;
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home - Emergency Reporting</title>
		<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="er_homepage_styles.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<header class="banner navbar navbar-default navbar-fixed-top" role="banner">
			<div class="top-nav container">
				<a class="navbar-brand" href="http://explore.emergencyreporting.dev/" rel="home"><img alt="Emergency Reporting" src="http://explore.emergencyreporting.dev/wp-content/uploads/2015/03/emergency_reporting_logo.png"></a>
				<div class="pull-right">
					<a href="http://explore.emergencyreporting.dev/login/" class="navbar-btn btn btn-theme-primary">Login</a>
				</div>
			</div>
			<nav class="menu-container">
				<div class="container mobile-nav-header">
					<ul id="menu-contact-links" class="contact-menu">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13631"><a href="http://explore.emergencyreporting.dev/contact-us/"><i class="fa fa-envelope"></i> <span class="nav-label">Contact Us</span></a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13641"><a href="tel:1-866-773-7678"><i class="fa fa-phone"></i> <span class="nav-label">1 (866) 773-7678</span></a></li>
					</ul>
				</div>
		</header>
		<iframe class="er-page-iframe" src="<?php echo $iframe_url; ?>?src=embed">
		</iframe>
	</body>
</html>
