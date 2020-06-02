<?php

function greet($name){
    $insert = $name ?? 'my friend';
    return 'Hello, ' . $insert . '.';
}
