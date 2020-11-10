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
            '<div class="name">'.$name.'</div>'.
        '</div>';
    }
} else {
    echo "<p>Nothing to show</p>";
}

$db->close();

?>
    </body>
</html>