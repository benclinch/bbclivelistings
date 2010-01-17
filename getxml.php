<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

include("connect.php");

// Load and parse the XML document 
//$rss =  simplexml_load_file('http://www.bbc.co.uk/worldservice/programmes/schedules/2010/1/4.xml');
?>
<html xml:lang="en" lang="en">
<head>
  <title>BBC Live Listings - Updating listings</title>
</head>
<body>

<h1>Listings</h1>

<?php

function getXml($serviceurl, $servicename) {
	$rss =  simplexml_load_file($serviceurl);
	foreach ($rss->day->broadcasts->broadcast as $broadcast) {
		$start = strtotime($broadcast->start);
		echo $start . date('H:i:s', $start) . " - ";
		$end = strtotime($broadcast->end);
		echo $end . date('H:i:s', $end) . "<br />";
		$title = mysql_real_escape_string($broadcast->programme->display_titles->title);
		$subtitle = mysql_real_escape_string($broadcast->programme->display_titles->subtitle);
		$synopsis = mysql_real_escape_string($broadcast->programme->short_synopsis);
		$pid = $broadcast->programme->pid;
		$seriespid = $broadcast->programme->programme->pid;
		if(mysql_num_rows(mysql_query("SELECT start FROM $servicename WHERE start = '$start'"))){
			echo "Skipping repeat...<br />";
		} else {
			mysql_query("INSERT INTO $servicename (start, end, title, subtitle, synopsis, seriespid, pid) VALUES('$start', '$end', '$title', '$subtitle', '$synopsis', '$seriespid', '$pid') ") or die(mysql_error());
		}
		}
}

$bbc1xtraurl = "http://www.bbc.co.uk/1xtra/programmes/schedules/today.xml";
$bbc5liveurl = "http://www.bbc.co.uk/5live/programmes/schedules/today.xml";
$bbc6musicurl = "http://www.bbc.co.uk/6music/programmes/schedules/today.xml";
$bbcasiannetworkurl = "http://www.bbc.co.uk/asiannetwork/programmes/schedules/today.xml";
$bbcradio1url = "http://www.bbc.co.uk/radio1/programmes/schedules/england/today.xml";
$bbcradio2url = "http://www.bbc.co.uk/radio2/programmes/schedules/today.xml";
$bbcradio3url = "http://www.bbc.co.uk/radio3/programmes/schedules/today.xml";
$bbcradio4url = "http://www.bbc.co.uk/radio4/programmes/schedules/fm/today.xml";
$bbcradio7url = "http://www.bbc.co.uk/radio7/programmes/schedules/today.xml";
$worldserviceurl = "http://www.bbc.co.uk/worldservice/programmes/schedules/today.xml";


getXml ($bbc1xtraurl, 'bbc1xtra');
getXml ($bbc5liveurl, '5live');
getXml ($bbc6musicurl, '6music');
getXml ($bbcasiannetworkurl, 'asiannetwork');
getXml ($bbcradio1url, 'radio1');
getXml ($bbcradio2url, 'radio2');
getXml ($bbcradio3url, 'radio3');
getXml ($bbcradio4url, 'radio4');
getXml ($bbcradio7url, 'radio7');
getXml ($worldserviceurl, 'worldservice');

?>