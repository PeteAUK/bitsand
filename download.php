<?php
/*-----------------------------------------------------------------------------
 | Bitsand - an online booking system for Live Role Play events
 |
 | File download.php
 |     Author: Russell Phillips
 |  Copyright: (C) 2006 - 2015 The Bitsand Project
 |             (http://github.com/PeteAUK/bitsand)
 |
 | Bitsand is free software; you can redistribute it and/or modify it under the
 | terms of the GNU General Public License as published by the Free Software
 | Foundation, either version 3 of the License, or (at your option) any later
 | version.
 |
 | Bitsand is distributed in the hope that it will be useful, but WITHOUT ANY
 | WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 | FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more
 | details.
 |
 | You should have received a copy of the GNU General Public License along with
 | Bitsand.  If not, see <http://www.gnu.org/licenses/>.
 +---------------------------------------------------------------------------*/

//Do not check that user is logged in
$bLoginCheck = False;

include ('inc/inc_head_db.php');
include ('inc/inc_head_html.php');
?>

<h1><?php echo TITLE?> - Download</h1>

<p>
This booking system runs on Bitsand, a web-based booking system for LRP events. Bitsand is copyright (c) 2006 - 2015 <a href = "https://github.com/PeteAUK/bitsand">The Bitsand Project</a>.
</p>

<p>
Bitsand is free software; you can redistribute it and/or modify it under the terms of the <a href = "http://www.gnu.org/licenses/gpl.html">GNU General Public License</a> as published by the Free Software Foundation; either version 3 of the License, or (at your option) any later version.
</p>

<?php
//Display notice about lion background image if this is the Lions' system
if (fnSystemURL () == 'http://bookings.lionsfaction.co.uk/' || fnSystemURL () == 'https://bookings.lionsfaction.co.uk/')
	echo '<p>The lion background image is modified from an <a href = "http://flickr.com/photos/stuartyeates/216280481/">image by Stuart Yeates</a>, released under the Creative Commons <a href = "http://creativecommons.org/licenses/by-sa/3.0/">Attribution-ShareAlike 3.0</a> licence. The modified image is available from the <a href = "https://github.com/PeteAUK/bitsand">Bitsand Project</a></p>';
?>

<p>
Full source code is available from the <a href = "https://github.com/PeteAUK/bitsand">Bitsand Github repository</a>. There is also an <a href = "https://github.com/PeteAUK/bitsand/issues">issue tracker</a>, where bugs and feature requests can be registered.
</p>

<p>If you would like to be informed when new versions are released, please <a href="https://github.com/PeteAUK/bitsand/subscription">watch the Bitsand Github repository</a> or <a href="http://www.freelists.org/list/bitsand">sign up to our Mailing List</a></p>

<?php
include ('inc/inc_foot.php');