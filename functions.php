<?php

function greet($name){
    if (strtoupper($name) === $name) {
        $msg = 'HELLO ' . $name . "!";
    } else {
        $insert = $name ?? 'my friend';
        $msg = 'Hello, ' . $insert . '.';
    }
    return $msg;
}
