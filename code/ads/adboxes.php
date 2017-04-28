<?php

/* This code shows the adbox.
 *
 * To use, pass the variable ?ad=FOO
 *
 */

require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;

$thisad = strip_tags($_GET["name"]);
$mobileads = array('google-responsive', 'liquidweb-325x38');

// If it's mobile AND it's not in the array, bail.
if ( $detect->isMobile() && !in_array($thisad, $mobileads) ) {
	return;
}

echo '<div class="jf-adboxes '.$thisad.'">';

switch ($thisad) {

	// Project Wonderful Block
	case "halfbanner-234x60":
			?><center>
				<!-- Project Wonderful Ad Box Code -->
				<div id="pw_adbox_43724_6_0"></div>
				<script type="text/javascript"></script>
				<noscript><map name="admap43724" id="admap43724"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=43724&type=6" shape="rect" coords="0,0,234,60" title="" alt="" target="_blank" rel="nofollow" /></map>
				<table cellpadding="0" cellspacing="0" style="width:236px;border-style:none;background-color:;"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=43724&type=6" style="width:236px;height:62px;border-style:none;" usemap="#admap43724" alt="" /></td></tr><tr><td colspan="1"><center><a style="font-size:10px;color:#fff;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=43724&type=6&tag=40958" target="_blank">Your ad could be here, right now.</a></center></td></tr></table>
				</noscript>
				<!-- End Project Wonderful Ad Box Code -->
				</center>
			<?php
		break;
	case "line-buttons-500x250":
			?>
				<!-- Project Wonderful Ad Box Code -->
				<div id="pw_adbox_43375_4_0"></div>
				<script type="text/javascript"></script>
				<noscript><map name="admap43375" id="admap43375"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=43375&type=4" shape="rect" coords="0,0,125,125" title="" alt="" target="_blank" rel="nofollow" /><area href="http://www.projectwonderful.com/out_nojs.php?r=1&c=0&id=43375&type=4" shape="rect" coords="0,125,125,250" title="" alt="" target="_blank" rel="nofollow" /></map>
				<table cellpadding="0" cellspacing="0" style="width:126px;border-style:none;background-color:;"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=43375&type=4" style="width:126px;height:250px;border-style:none;" usemap="#admap43375" alt="" /></td></tr><tr><td colspan="1"><center><a style="font-size:10px;color:#0000FF;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=43375&type=4&tag=40958" target="_blank">Your ad could be here, right now.</a></center></td></tr></table>
				</noscript>
				<!-- End Project Wonderful Ad Box Code -->
			<?php
		break;
	case "leaderboard-728x90":
			?>
				<center>
				<!-- Project Wonderful Ad Box Code -->
				<div id="pw_adbox_57751_5_0"></div>
				<script type="text/javascript"></script>
				<noscript><map name="admap57751" id="admap57751"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=57751&type=5" shape="rect" coords="0,0,728,90" title="" alt="" target="_blank" /></map>
				<table cellpadding="0" cellspacing="0" style="width:728px;border-style:none;background-color:;"><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=57751&type=5" style="width:728px;height:90px;border-style:none;" usemap="#admap57751" alt="" /></td></tr><tr><td colspan="1"><center><a style="font-size:10px;color:#FFFFFF;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=57751&type=5&tag=40958" target="_blank">Your ad could be here, right now.</a></center></td></tr></table>
				</noscript>
				<!-- End Project Wonderful Ad Box Code -->
				</center>
			<?php
		break;
	case "medium-rectangle-300x250":
			?>
				<!-- Project Wonderful Ad Box Code -->
				<div id="pw_adbox_52059_7_0"></div>
				<script type="text/javascript"></script>
				<noscript><map name="admap52059" id="admap52059"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=52059&type=7" shape="rect" coords="0,0,300,250" title="" alt="" target="_blank" /></map>
				<table cellpadding="0" cellspacing="0" style="width:300px;border-style:none;background-color:;"><tr><td colspan="1"><center><a style="font-size:10px;color:#0000ff;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=52059&type=7&tag=40958" target="_blank">Your ad could be here, right now.</a></center></td></tr><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=52059&type=7" style="width:300px;height:250px;border-style:none;" usemap="#admap52059" alt="" /></td></tr></table>
				</noscript>
				<!-- End Project Wonderful Ad Box Code -->
			<?php
		break;
	case "skyscraper-160x600":
			?>
				<center>
				<!-- Project Wonderful Ad Box Code -->
				<div id="pw_adbox_57786_3_0"></div>
				<script type="text/javascript"></script>
				<noscript><map name="admap57786" id="admap57786"><area href="http://www.projectwonderful.com/out_nojs.php?r=0&c=0&id=57786&type=3" shape="rect" coords="0,0,160,600" title="" alt="" target="_blank" /></map>
				<table cellpadding="0" cellspacing="0" style="width:160px;border-style:none;background-color:;"><tr><td colspan="1"><center><a style="font-size:10px;color:#0000FF;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=57786&type=3&tag=40958" target="_blank">Your ad could be here, right now.</a></center></td></tr><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=57786&type=3" style="width:160px;height:600px;border-style:none;" usemap="#admap57786" alt="" /></td></tr></table>
				</noscript>
				<!-- End Project Wonderful Ad Box Code -->
				</center>
			<?php
		break;

	// LiquidWeb Block
	case "liquidweb-120x240": // Acutally 120x60 for reasons
		?><a href="//liquidweb.evyy.net/c/294289/297315/4464"><img src="//a.impactradius-go.com/display-ad/4464-297315" border="0" alt="Liquid Web Managed Web Hosting" width="120" height="60"/></a><img height="0" width="0" src="//liquidweb.evyy.net/i/294289/297315/4464" style="position:absolute;visibility:hidden;" border="0" /><?php
		break;
	case "liquidweb-325x38":
		?><a href="//liquidweb.evyy.net/c/294289/297312/4464"><img src="//a.impactradius-go.com/display-ad/4464-297312" border="0" alt="Liquid Web Managed Web Hosting" width="325" height="38"/></a><img height="0" width="0" src="//liquidweb.evyy.net/i/294289/297312/4464" style="position:absolute;visibility:hidden;" border="0" /><?php
		break;

	// StudioPress Block
	case "studiopress-120x240":
				?><a target="_blank" href="http://shareasale.com/r.cfm?b=281069&amp;u=728549&amp;m=28169&amp;urllink=&amp;afftrack="><img src="https://i.shareasale.com/image/28169/TotMCrystal120x240.gif" border="0" alt="StudioPress Theme of the Month" /></a><?php
		break;
	case "studiopress-468x60":
				?><div class="astudio"><center><a target="_new" href="http://www.shareasale.com/r.cfm?b=281075&u=728549&m=28169&urllink=&afftrack="><img src="http://www.shareasale.com/image/28169/TotMCrystal468x60.gif"  alt="StudioPress Theme of the Month" border="0"></a></center></div><?php
		break;

	// Google block
	case "google-responsive":
		?>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<!-- Responsive -->
		<ins class="adsbygoogle"
			 style="display:block"
			 data-ad-client="ca-pub-7868382837959636"
			 data-ad-slot="8167384707"
			 data-ad-format="auto"></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>
	<?php
		break;
	case "google-medium-rectangle":
			?>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Medium Rectangle -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:300px;height:250px"
				 data-ad-client="ca-pub-7868382837959636"
				 data-ad-slot="8946113908"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		<?php
		break;
	case "google-large-rectangle":
			?>
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Large Rectangle -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:336px;height:280px"
				 data-ad-client="ca-pub-7868382837959636"
				 data-ad-slot="6542485108"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		<?php
		break;
	case "google-skyscraper":
		?>
			<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
			<!-- Skyscraper -->
			<ins class="adsbygoogle"
				 style="display:inline-block;width:300px;height:600px"
				 data-ad-client="ca-pub-7868382837959636"
				 data-ad-slot="1689081509"></ins>
			<script>
			(adsbygoogle = window.adsbygoogle || []).push({});
			</script>
		<?php
		break;

	default:
		echo "Why are you here?";
}

echo '</div>';