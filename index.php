<?php
	require 'facebook.php';

	$app_id = "219455464888691";
	$app_secret = "22eaff10783b752d217adc7ae0604d3c";

	$facebook = new Facebook(array(
		'appId' => $app_id,
		'secret' => $app_secret,
		'cookie' => true
	));

	$signed_request = $facebook->getSignedRequest();
	$like_status = $signed_request["page"]["liked"];
?>

<!doctype html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>design build play : like gate</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />

<script type="text/javascript">
	window.fbAsyncInit = function() {
		FB.Canvas.setSize();
	}
	// Do things that will sometimes call sizeChangeCallback()
	function sizeChangeCallback() {
		FB.Canvas.setSize();
	}
</script>

<base target='_blank' />
</head>

<body>

<div id="container">

<?php if ($like_status) { ?>
	<div id="fan">NO!!</div>
<?php } else { ?>
	<div id="nofan">YESSS</div>
	<div id="fb-root"></div>
<?php } ?>

</div>

<div id="fb-root"></div>
<script src="https://connect.facebook.net/en_US/all.js"></script>
<script>
	FB.init({
		appId : '219455464888691',
		status : true, // check login status
		cookie : true, // enable cookies to allow the server to access the session
		xfbml : true // parse XFBML
	});

	window.fbAsyncInit = function() {
		FB.Canvas.setAutoGrow();
	}
	</script>
	<script>
		FB.Event.subscribe('edge.create',
		function(response){
		top.location.href = 'FACEBOOK URL TO REFRESH';
	});
</script>

</body>
</html>