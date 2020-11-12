<?php

class Layout {
    function __construct($title, $items) {
        $this->title = $title;
        $this->items = $items;
    }

    function show() {
        echo '<!doctype html>';
        echo '<html lang="en">';
        $this->header();
        $this->body();
        echo '</html>';
    }

    function header() {
        echo '  <head>';
        echo '      <title>Languages of the World</title>';
        echo '      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">';
        echo '  </head>';
    }

    function body() {
        echo '  <body>';
        echo '      <h1>'.$this->title.'</h1>';
        //$this->list();
        echo '      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>';
        echo '      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>';
        echo '  </body>';
    }

    // function list() {
    //     if (count($this->items) > 0) {
    //         // for each item it makes a link 
    //         foreach($this->items as $name) {
    //             echo '  <div class="country">';
    //             echo '      <a href="countries.php?lang='.$name.'" class="name">'.$name.'</a>';
    //             echo '  </div>';
    //         }
    //     } else {
    //         echo "<p>Nothing to show</p>";
    //     }
    // }

}

?>