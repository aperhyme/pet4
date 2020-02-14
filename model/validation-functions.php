<?php

function validColor($color) {
    global $f3;
    return in_array($color, $f3->get('colors'));
}

function validString($animalName) {
    return !empty($animalName) && ctype_alpha($animalName);
}

function validType($type) {
    global $f3;
    return in_array($type, $f3->get('types'));
}