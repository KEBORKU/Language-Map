<?php 
// GET DATABASE
require 'connect.php'; 
include 'Layout.php';

// get lang var
$var_countries = $_REQUEST['lang'];

// get countries that use the lang var given
$sql = sprintf('
SELECT countrylanguage.Language FROM countrylanguage
JOIN country ON country.Code = countrylanguage.CountryCode
WHERE country.Name= "%s"
', $var_countries); // String
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
