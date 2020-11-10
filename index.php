<?php 
// GET DATABASE
require 'connect.php'; 
?>
<!doctype html>
<html lang="en">
    <head>
        <title>Languages of the World</title>
    </head>
    <body>
        <h1>Languages<h1>

<?php

// Get all unique langs
$sql = "SELECT DISTINCT countrylanguage.Language from countrylanguage";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    // for each lang it makes a link 
    while($row = $result->fetch_array()) {
        $name = $row["Language"];
        echo
        '<div class="country">'.
            '<a href="countries.php?lang='.$name.'" class="name">'.$name.'</a>'.
        '</div>';
    }
} else {
    echo "<p>Nothing to show</p>";
}

$db->close();

?>
    </body>
</html>