<?php

$connect = mysql_connect('localhost', '', '');
if (!$connect) {
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("radio") or die(mysql_error());

?>