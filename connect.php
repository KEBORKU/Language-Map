<?php

$hostname = "localhost";
$username = "ixd579_lang_user";
$password = "?S{sX&p+UG@G";
$database = "ixd579_language-map";

// Create connection
$db = new mysqli($hostname, $username, $password, $database);
$db->set_charset("utf8");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

?>