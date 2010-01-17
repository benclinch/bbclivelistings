<?php 
include ("connect.php");

$service = $_GET["service"];
$currenttime = time();
$query = "SELECT * FROM $service where start <= '$currenttime' ORDER BY start DESC LIMIT 1; "; 
$result = mysql_query($query); 
$row = mysql_fetch_array($result);

$start= $row['start']; 
$end= $row['end']; 
$title= $row['title']; 
$subtitle= $row['subtitle']; 
$synopsis = $row['synopsis']; 
$pid= $row['pid']; 
$seriespid= $row['seriespid']; 

$starttime = date('H:i:s', $start);
$endtime = date('H:i:s', $end);

if ($seriespid=="") {
	echo "<div id=\"now\"><h1>Now</h1><h3>$starttime - $endtime</h3>";
	echo "<h2><a href=\"http://www.bbc.co.uk/programmes/$pid\">$title</a></h2><h3><a href=\"http://www.bbc.co.uk/programmes/$pid\">$title</a></h3>$synopsis</div>";
	} else {
		echo "<div id=\"now\"><h1>Now</h1><h3>$starttime - $endtime</h3>";
		echo "<h2><a href=\"http://www.bbc.co.uk/programmes/$seriespid\">$title</a></h2><h3><a href=\"http://www.bbc.co.uk/programmes/$pid\">$subtitle</a></h3>$synopsis</div>";
	}

$nextquery = "SELECT * FROM $service where start > '$currenttime' ORDER BY start ASC LIMIT 1;"; 
$nextresult = mysql_query($nextquery); 
$nextrow = mysql_fetch_array($nextresult);

$nextstart= $nextrow['start']; 
$nextend= $nextrow['end']; 
$nexttitle= $nextrow['title']; 
$nextsubtitle= $nextrow['subtitle']; 
$nextsynopsis = $nextrow['synopsis']; 
$nextpid= $nextrow['pid']; 
$nextseriespid= $nextrow['seriespid']; 


$nextstarttime = date('H:i:s', $nextstart);
$nextendtime = date('H:i:s', $nextend);

if ($nextseriespid=="") {
	echo "<div id=\"next\"><h1>Next</h1><h3>$nextstarttime - $nextendtime</h3>";
	echo "<h2><a href=\"http://www.bbc.co.uk/programmes/$nextpid\">$nexttitle</a></h2><h3><a href=\"http://www.bbc.co.uk/programmes/$nextpid\">$nexttitle</a></h3>$nextsynopsis</div>";
} else {
echo "<div id=\"next\"><h1>Next</h1><h3>$nextstarttime - $nextendtime</h3>";
echo "<h2><a href=\"http://www.bbc.co.uk/programmes/$nextseriespid\">$nexttitle</a></h2><h3><a href=\"http://www.bbc.co.uk/programmes/$nextpid\">$nextsubtitle</a></h3>$nextsynopsis</div>";
}
?>