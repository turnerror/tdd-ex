<?php

function greet($names){

    if (is_array($names)){
        if (count($names) == 2){
            $msg = 'Hello, ' . $names[0] . ' and ' . $names[1] . '.';
        } else {
            $msg = 'Hello, ';
            foreach ($names as $i=>$name){
                if ($i == count($names) - 1) {
                    $msg .= 'and ' . $name . '.';
                } else {
                    $msg .= $name . ', ';
                }
            }
        }

    } elseif (strtoupper($names) === $names) {
        $msg = 'HELLO ' . $names . "!";
    } else {
        $insert = $names ?? 'my friend';
        $msg = 'Hello, ' . $insert . '.';
    }
    return $msg;
}
