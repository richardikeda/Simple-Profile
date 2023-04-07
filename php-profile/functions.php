<?php
    //function read a h-card js/h-card.sample.json file and transform into properties
    function read_hcard($file) {
        $json = file_get_contents($file);
        $data = json_decode($json, true);
        return $data;
    }
?>
    