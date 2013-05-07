<?php
/*
 * Gallery - a web based photo album viewer and editor
 * Copyright (C) 2000-2006 Bharat Mediratta
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or (at
 * your option) any later version.
 *
 * This program is distributed in the hope that it will be useful, but
 * WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street - Fifth Floor, Boston, MA  02110-1301, USA.
 */

/*
 * Last updated 3/24/2006 to fix a bug with the way that we do directory
 * processing that would cause it to miss locks subdirectories.  Restructured
 * the file at that time and made it with with register_globals off and long
 * php tags.
 */
$version = "1.1";

$dir = '';
if (isset($_REQUEST['dir'])) {
    $dir = $_REQUEST['dir'];
}

welcomeMessage($dir);
if (isset($_REQUEST['dir'])) {
    echo "<hr>";
    fix($_REQUEST['dir']);
}

function fix($obj) {
    if (is_dir($obj)) {
	status("Directory", $obj);
	if ($fd = opendir($obj)) {
	    while (($child = readdir($fd)) !== false) {
		if ($child == '.' || $child == '..') {
		    continue;
		}

		$fullpath = "$obj/$child";
		fix($fullpath);
	    }
	    closedir($fd);
	    if (!@chmod($obj, 0777)) {
		error("Can't fix", $obj);
	    }
	} else {
	    error("Error reading dir", $obj);
	}
    } else if (is_file($obj)) {
	print "File: <b>$obj</b><br>";
	chmod($obj, 0666);
    }
}

function status($msg, $obj) {
    print "$msg: <b>$obj</b><br>";
}

function error($msg, $obj) {
    print "<font color=red>$msg: <b>$obj</b></font><br>";
}


function welcomeMessage($dir) {
?>
<font size=+2>
Gallery Cleanup Script
</font>
<p>
Because Gallery runs as part of the webserver, any files it creates
are owned by the webserver process.  If you want to modify those
files yourself, you need to get the webserver to change the permissions
on them so that you have access.  That's what this script is for.
Simply enter the path to your albums directory below and this script
will make every file in that path (that it can access) writable
by everybody.  Then, you can do whatever you want to the files.
</p>

<p>
Path (on your filesystem) to a file or directory to fix?
<br/>
<font size=-1>(examples: /home/~you/public_html/albums, /var/g2data)</font>
<br/>
</p>
<form>
<input name="dir" value="<?php print $dir ?>"/>
<input type=submit value="Go!"/>
</form>
<?php
}
?>