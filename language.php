<?php require 'connect.php'; ?>
<!doctype html>
<html lang="en">
    <head>
        <title>Languages of the World</title>
    </head>
    <body>
        <h1>Hello World 2<h1>
<?php

$sql = "SELECT country.Name from country";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_array()) {
        $name = $row["Name"];
        echo
        '<div class="country">'.
            '<a href="#'.name.'" class="name">'.$name.'</a>'.
        '</div>';
    }
} else {
    echo "<p>Nothing to show</p>";
}

$db->close();

?>
    </body>
</html>