<?php

class Layout {
    function __construct($title, $items, $to_page) {
        $this->title = $title;
        $this->items = $items;
        $this->to_page = $to_page;
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
        echo '      <div class="container">';
        echo '          <h1>'.$this->title.'</h1>';
        $this->item_list();
        echo '      </div>';
        echo '      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>';
        echo '      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>';
        echo '  </body>';
    }

    function item_list() {
        if (count($this->items) > 0) {
            // for each item it makes a link 
            echo '<ul class="list-group">';
            foreach($this->items as $name) {
                echo '  <li class="list-group-item">';
                echo '      <a href="'.$this->to_page.'?lang='.$name.'" class="name">'.$name.'</a>';
                echo '  </li>';
            }
            echo '</ul>';
        } else {
            echo "<p>Nothing to show</p>";
        }
    }

}

?>