<?php

function greet($name){

    if (is_array($name)){
        $msg = 'Hello, ' . $name[0] . ' and ' . $name[1] . '.';
    } elseif (strtoupper($name) === $name) {
        $msg = 'HELLO ' . $name . "!";
    } else {
        $insert = $name ?? 'my friend';
        $msg = 'Hello, ' . $insert . '.';
    }
    return $msg;
}
