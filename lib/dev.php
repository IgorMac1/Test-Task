<?php
ini_set('display_errors',1);
error_reporting(E_ALL);

function debag($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';

}