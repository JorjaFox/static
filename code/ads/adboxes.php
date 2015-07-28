<?php
	
	/* This code shows the adbox.
	 * 
	 * To use, pass the varable ?ad=FOO
	 * 
	 */
	 
	$thisadd = strip_tags($_GET["name"]);
	
	switch ($thisadd) {
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
			<table cellpadding="0" cellspacing="0" style="width:126px;border-style:none;background-color:;"><tr><td colspan="1"><center><a style="font-size:10px;color:#0000FF;text-decoration:none;line-height:1.2;font-weight:bold;font-family:Tahoma, verdana,arial,helvetica,sans-serif;text-transform: none;letter-spacing:normal;text-shadow:none;white-space:normal;word-spacing:normal;" href="http://www.projectwonderful.com/advertisehere.php?id=43375&type=4&tag=40958" target="_blank">Your ad could be here, right now.</a></center></td></tr><tr><td><img src="http://www.projectwonderful.com/nojs.php?id=43375&type=4" style="width:126px;height:250px;border-style:none;" usemap="#admap43375" alt="" /></td></tr></table>
			</noscript>
			<!-- End Project Wonderful Ad Box Code -->
        <?php
        break;
    case 2:
        echo "i equals 2";
        break;
}
	