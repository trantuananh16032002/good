<?php
$error = array();
echo "<pre>";
print_r($error);
echo "</pre>";
function show_array($data){
    if(is_array($data)){
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}