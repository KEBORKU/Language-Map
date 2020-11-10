<?php 
require 'connect.php'; 
$var_lang = $_REQUEST['lang'];
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Languages of the World</title>
    </head>
    <body>
        <h1>Countries who speak <?php $var_lang ?> <h1>
<?php


$sql = sprintf('
SELECT country.Name FROM country
JOIN countrylanguage ON country.Code = countrylanguage.CountryCode
WHERE countrylanguage.Language = "%s"
', $var_lang);

$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        $name = $row["Name"];
        echo
        '<div class="country">'.
            '<a href="#'.$name.'" class="name">'.$name.'</a>'.
        '</div>';
    }
} else {
    echo "<p>Nothing to show</p>";
}

$db->close();

?>
    </body>
</html>