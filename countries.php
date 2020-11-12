<?php 
// GET DATABASE
require 'connect.php'; 
include 'Layout.php';

// get lang var
$var_lang = $_REQUEST['lang'];

// get countries that use the lang var given
$sql = sprintf('
SELECT country.Name FROM country
JOIN countrylanguage ON country.Code = countrylanguage.CountryCode
WHERE countrylanguage.Language = "%s"
', $var_lang); // String
$result = $db->query($sql);

$items = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        $name = $row["Name"];
        array_push($items, $name);
    }
}

$db->close();

$my_page = new Layout("Languages", $items, "country.php");
$my_page->show();

?>