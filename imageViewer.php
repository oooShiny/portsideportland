<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="3 Olive Studios" />
	<meta name="description" content="Portside Portland" />
	<meta name="keywords" content="Portside, Portland Maine, new development, Maine, hampton hotel, condos, Opeechee, Jordan's, Jordans, Condominiums, Portland, Old Port Hospitality, Woglom, Kirsch, Hampton, Meats" />
	<link rel="stylesheet" type="text/css" href="CSS/common.css" />	
	<link rel="stylesheet" type="text/css" href="CSS/override.css" />
	<link rel="stylesheet" type="text/css" href="CSS/imageViewer.css" />	
	<title>Portside, Portland Maine Asset Viewer</title>
	<script type="text/javascript" src="//use.typekit.net/uby0xac.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
</head>
<body>
<div id="pageContainer">
	<div id="headerContainer">
		<a href="index.html"><img src="assets/headerLogo.gif" width="271" height="94" alt="headerLogo" border="0"></a>
		<div id="headerContainerTextContainer">
			12 luxury sixth-floor residences at 207 Fore Street in Portland’s waterfront district
		</div>
	</div>
	<div id="contentContainer">
		<div id="mainNavContainer">
			<a href="index.html"><div class="majorLink">home</div></a>
			<a href="location2.html"><div class="majorLink">location</div></a>
			<a href="pricing.html"><div class="majorLink">pricing/sales</div></a>
			<a href="documents.php"><div class="majorLink">documents</div></a>
		</div>
		<div id="bodyContentContainer">
		<?php 
			if ($_GET["assetID"]=="floorPlan") {
				echo '<h2>Floor Plans</h2>';
				echo '<img src="assets/largeImages/floorplan-10-26-10.png" width="795" height="520" alt="Residences colored all units Hampton Inn Portland ME">	';
			}
			if ($_GET["assetID"]=="renderingFront") {
				echo '<h2>Rendering <small>Front of the building.</small></h2>';
				echo '<img src="assets/largeImages/rendering_large.jpg" width="795" height="514" alt="rendering_large">';
			}
			if ($_GET["assetID"]=="renderingCorner") {
				echo '<h2>Rendering <small>Corner of the building.</small></h2>';
				echo '<img src="assets/largeImages/cornerRendering.jpg" width="795" height="465" alt="rendering_corner">';
			}
			if ($_GET["assetID"]=="renderingEntry") {
				echo '<h2>Rendering <small>Entry at 207 Fore Street</small></h2>';
				echo '<img src="assets/largeImages/entry.jpg" width="795" height="465" alt="rendering_entry">';
			}							
		?>
		</div>
	 	<div class="clearALL"></div>
	</div>
	<div id="footerContainer">
		contact: <a href="mailto:info@portsideportland.com">info@portsideportland.com</a>
	</div>
</div>
</body>
</html>