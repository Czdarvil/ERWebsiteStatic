<?php
	// Get whether this is in dev mode, staging mode OR production mode
	$domain = $_SERVER['HTTP_HOST'];
	$url_prefix = 'http://';
	if( isset( $_SERVER['HTTPS'] ) ):
		$url_prefix = 'https://';
	endif;
	$iframe_url = 'explore.emergencyreporting.com';
	if( false !== strpos( $domain, '.dev' ) ):
		$iframe_url = 'explore.emergencyreporting.dev';
	elseif( flase !== strpos( $domain, 'staging' ) ):
		$iframe_url = 'staging-explore.emergencyreporting.com';
	endif;
	$iframe_url = $url_prefix . $iframe_url;
	$url_params = isset( $_SERVER[ 'QUERY_STRING' ]) ? $_SERVER[ 'QUERY_STRING' ] : '';
	// Remove all 'src' parameters and add our own.
	$url_params = preg_replace( "/src=[^\&]+/", '', $url_params );
	$url_params = 'src=embed&' . $url_params;
	$url_params = str_replace( '&&', '&', $url_params );
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Emergency Reporting - The Most Trusted RMS Solution</title>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="Affordable, easy to use NFIRS reporting and fire station management tools. Emergency Reporting is the first web-based solution for fire and EMS agencies."/>

    	<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Emergency Reporting - The Most Trusted RMS Solution" />
		<meta property="og:description" content="Affordable, easy to use NFIRS reporting and fire station management tools. Emergency Reporting is the first web-based solution for fire and EMS agencies." />
		<meta property="og:url" content="https://www.emergencyreporting.com/" />
		<meta property="og:site_name" content="Emergency Reporting" />

		<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="./styles/style.css" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
		<header id='navbar-header' class="banner navbar navbar-default navbar-fixed-top" role="banner">
			<div class="top-nav container">
				<a class="navbar-brand" href="./" rel="home"><img alt="Emergency Reporting" src="./images/emergency_reporting_logo.png"></a>
				<div class="pull-right">
					<a href="https://secure.emergencyreporting.com" class="navbar-btn btn btn-theme-primary">Login</a>
				</div>
			</div>
			<nav class="menu-container">
				<div class="container mobile-nav-header">
					<ul id="menu-contact-links" class="contact-menu">
						<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-13631"><a href="<?php echo $iframe_url; ?>/contact-us/"><i class="fa fa-envelope"></i> <span class="nav-label">Contact Us</span></a></li>
						<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13641"><a href="tel:18667737678"><i class="fa fa-phone"></i> <span class="nav-label">1 (866) 773-7678</span></a></li>
					</ul>
				</div>
		</header>
		<iframe id='er-page-iframe' class="er-page-iframe" src="<?php echo $iframe_url . '?' . $url_params; ?>">
		</iframe>
		<script type='text/javascript'>
			// inital setting of the iframe height
			reposition_header();

			window.onresize = function() {
				reposition_header();
			}

			function reposition_header() {
				var window_height = window.innerHeight;
				var styles = window.getComputedStyle(document.getElementById('navbar-header'));
				var header_height = parseInt(styles.getPropertyValue('height'), 10);
				document.getElementById('er-page-iframe').style.height = window_height - header_height + 'px';
			}

		</script>
	</body>
</html>
