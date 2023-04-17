<?php session_start();?>
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
	<title>Portside, Portland Maine Documents</title>
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
			<a href="documents.php"><div class="majorLink activePageLink">documents</div></a>
		</div>
		<div id="imageContentContainer">
			<div class="leftColumnPhotoContainer"><a href="entry.html"><img src="assets/smallPhotosAndRenders/entryRender.jpg" width="245" height="214" alt="entryRender"></a></div>		
			<div class="leftColumnPhotoContainer"><a href="corner.html"><img src="assets/smallPhotosAndRenders/cornerRender.jpg" width="245" height="214" alt="Hotel Sebago Rendering 06-02-10.jpg"></a></div>
		</div>
		<div id="bodyContentContainer">
<?php 
	if($_GET["err"]=="227") {
		echo'<div id="errMessage">Sorry the password you provided was incorrect. Please try again.<BR>If the problem persists please contact us for assistance.<BR><BR></div>';
	}
?>
<?php
if (isset($_SESSION["UID"])) {
	echo 'Thank You<BR>Portside Portland';
	echo '<BR><BR>';
	echo '1.  <a href="Documents/pdfs/1_Rules_09-17-10.pdf" target="_blank">Rules_09-17-10.pdf</a><BR>';
	echo '2.  <a href="Documents/pdfs/2_Declaration_v2_10-05-10.pdf" target="_blank">Declaration_v2_10-05-10.pdf</a><BR>';
	echo '3.  <a href="Documents/pdfs/3_Memo_Parking_09-16-10.pdf" target="_blank">Memo_Parking_09-16-10.pdf</a><BR>';
	echo '4.  <a href="Documents/pdfs/4_Bylaws_100510.pdf" target="_blank">Bylaws_100510.pdf</a><BR>';
	echo '5.  <a href="Documents/pdfs/5_Condo_Plot_09-24-10.pdf" target="_blank">Condo_Plot_09-24-10.pdf</a><BR>';
	echo '6.  <a href="Documents/pdfs/6_Condo_Plans_09-24-10.pdf" target="_blank">Condo_Plans_09-24-10.pdf</a><BR>';
	echo '7.  <a href="Documents/pdfs/7_Proposed_Budget_09-17-10.pdf" target="_blank">Proposed_Budget_09-17-10.pdf</a><BR>';
	echo '8.  <a href="Documents/pdfs/8_Form_Warranty_Deed_09-23-10.pdf" target="_blank">Form_Warranty_Deed_09-23-10.pdf</a><BR>';
	echo '9.  <a href="Documents/pdfs/9_AgmtReduce_Statute_09-17-10.pdf" target="_blank">AgmtReduce_Statute_09-17-10.pdf</a><BR>';
	echo '10. <a href="Documents/pdfs/10_Revisedparking.pdf" target="_blank">Revisedparking.pdf</a><BR>';
	echo '11. <a href="Documents/pdfs/11_Declaration_Hotel.pdf" target="_blank">Declaration_Hotel.pdf</a><BR>';
	echo '12. <a href="Documents/pdfs/12_bylaws_09-16-10.pdf" target="_blank">bylaws_09-16-10.pdf</a><BR>';
	echo '13. <a href="Documents/pdfs/13_CondominiumPlatHotel.pdf" target="_blank">CondominiumPlatHotel.pdf</a><BR>';
	echo '14. <a href="Documents/pdfs/14_Condo.pdf" target="_blank">Condo.pdf</a><BR>';
} else {
	echo 'You must have a password to access these documents. If you require assistance please contact SO AND SO to aquire one.<BR><BR> Thank You<BR>Portside Portland';
	echo '<BR><BR>';
	echo 'Please enter the password here and click submit';
	echo '<form action="accessDocs.php" method="POST" name="docLog">';
	echo '<input type="password" name="password">';
	echo '<input type="submit" name="submit" value="submit">';
	echo '</form>';
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
