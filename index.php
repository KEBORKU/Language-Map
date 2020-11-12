<?php 
// GET DATABASE
require 'connect.php'; 
require 'layout.php'; 

// Get all unique langs
$sql = "SELECT DISTINCT countrylanguage.Language from countrylanguage";
$result = $db->query($sql);

$items = array();

// if ($result->num_rows > 0) {
//     while($row = $result->fetch_array()) {
//         $name = $row["Language"];
//         array_push($items, $name);
//     }
// }

$db->close();

$my_page = new Layout("Languages", $items);
$my_page->show();


?>