<?php 
// GET DATABASE
require 'connect.php'; 

// get lang var
$var_countries = $_REQUEST['countries'];
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Languages of the World</title>
    </head>
    <body>
        <h1>Languages that this country speaks <h1>
<?php

// get countries that use the lang var given
$sql = sprintf('
SELECT countrylanguage.Language FROM countrylanguage
JOIN country ON country.Code = countrylanguage.CountryCode
WHERE country.Name= "%s"
', $var_countries); // String
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        $name = $row["Language"];
        echo
        '<div class="country">'.
            '<a href="countries.php?=lang'.$name.'" class="name">'.$name.'</a>'.
        '</div>';
    }
} else {
    echo "<p>Nothing to show</p>";
}

$db->close();

?>
    </body>
</html>