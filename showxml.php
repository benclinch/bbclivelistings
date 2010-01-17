<?php 
header ("Content-Type:text/xml");
$connect = mysql_connect('localhost', 'benradio', 'jeeves1');
if (!$connect) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("benclinc_radio") or die(mysql_error());

$currenttime = time();



echo "<?xml version=\"1.0\"?>
<nownext><now>";

$query = "SELECT * FROM radio4 where start < '$currenttime' ORDER BY start DESC LIMIT 1; "; 
$result = mysql_query($query); 
$row = mysql_fetch_array($result);

$start= $row['start']; 
$title= $row['title']; 
$subtitle= $row['subtitle']; 
$synopsis = $row['synopsis']; 
$pid= $row['pid']; 

echo "<start>" . $start . "</start>"; 
echo "<title>" . $title . "</title>"; 
echo "<subtitle>" . $subtitle . "</subtitle>"; 
echo "<synopsis>" . $synopsis . "</synopsis>"; 
echo "<starttime>" . date('H:i:s', $start) . "</starttime>"; 
echo "<pid>" . $pid . "</pid>";

echo "</now><next>";

$nextquery = "SELECT * FROM radio4 where start > '$currenttime' ORDER BY start ASC LIMIT 1;"; 
$nextresult = mysql_query($nextquery); 
$nextrow = mysql_fetch_array($nextresult);

$nextstart= $nextrow['start']; 
$nexttitle= $nextrow['title']; 
$nextsubtitle= $nextrow['subtitle']; 
$nextsynopsis = $nextrow['synopsis']; 
$nextpid= $nextrow['pid']; 

echo "<start>" . $nextstart . "</start>"; 
echo "<title>" . $nexttitle . "</title>"; 
echo "<subtitle>" . $nextsubtitle . "</subtitle>"; 
echo "<synopsis>" . $nextsynopsis . "</synopsis>"; 
echo "<starttime>" . date('H:i:s', $nextstart) . "</starttime>"; 
echo "<pid>" . $nextpid . "</pid>";

echo "</next></nownext>";

?>