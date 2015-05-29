<?php
/*-----------------------------------------------------------------------------
 | Bitsand - an online booking system for Live Role Play events
 |
 | File inc/inc_ossearch.php
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

error_reporting(E_ALL);
ini_set('display_errors', '1');

include ('inc_head_db.php');
$db_prefix = DB_PREFIX;
$q = strtolower($_GET["term"]);
$q = ba_db_real_escape_string($link, $q);

if (!$q) return;
	$sql = "SELECT * FROM {$db_prefix}osps where ospName like '%".$q."%' ORDER BY ospName limit 10";
	$result = ba_db_query ($link, $sql);

$results = array();
while ($row = ba_db_fetch_assoc ($result))
{
$results[] = array(value=>$row['ospID'], label=>$row['ospName'], allowadditional=>$row['ospAllowAdditionalText']);

}

echo json_encode($results);
?>
