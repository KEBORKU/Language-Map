<?php 
// GET DATABASE
require 'connect.php'; 
include 'Layout.php';

// Get all unique langs
$sql = "SELECT DISTINCT countrylanguage.Language from countrylanguage ORDER BY countrylanguage.Language;";
$result = $db->query($sql);

$items = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        $name = $row["Language"];
        array_push($items, $name);
    }
}

$db->close();

$my_page = new Layout("Languages", $items, "countries.php");
$my_page->show();


?>