<?php

function greet($names){

    if (is_array($names)) {

        $sortedNames = sortNames($names);

        $lowercaseNames = $sortedNames['lower'];
        $uppercaseNames = $sortedNames['upper'];

        $uppercaseMsg = '';
        $lowercaseMsg = '';

        if (count($lowercaseNames) > 1){
            $lowercaseMsg = 'Hello, ' . handleNamesArray($lowercaseNames) . '.';
        } elseif (count($lowercaseNames) == 1){
            $lowercaseMsg = handleName($lowercaseNames[0]);
        }

        if (count($uppercaseNames) > 1) {
            $uppercaseMsg = 'HELLO ' . handleNamesArray($uppercaseNames) . '!';
        } elseif (count($uppercaseNames) == 1){
            $uppercaseMsg = handleName($uppercaseNames[0]);
        }

        if (!empty($lowercaseMsg) && (!empty($uppercaseMsg))){
            $msg = $lowercaseMsg . ' AND ' . $uppercaseMsg;
        } else {
            $msg = $lowercaseMsg . $uppercaseMsg;
        }

    } else {
        $msg = handleName($names);
    }
    return $msg;
}

function handleNamesArray(array $names): string {
    $return = '';

    if (count($names) == 2){
        $return .= $names[0];
        $return .= (strtoupper($names[0]) === $names[0]) ? ' AND ' : ' and ';
        $return .= $names[1];

    } else {
        foreach ($names as $i => $name) {
            if ($i == count($names) - 1) {
                $return .= (strtoupper($name) === $name) ? 'AND ' : 'and ';
                $return .= $name;
            } else {
                $return .= $name . ', ';
            }
        }
    }

    return $return;
}

function  handleName($name) {
    if (strtoupper($name) === $name) {
        $return = 'HELLO ' . $name . "!";
    } else {
        $insert = $name ?? 'my friend';
        $return = 'Hello, ' . $insert . '.';
    }

    return $return;
}

function sortNames($names) {
    $lowercaseNames = [];
    $uppercaseNames = [];

    foreach ($names as $i => $name) {
        if (!preg_match('/^[^, ]*$/', $name )){
            $newNames = explode(', ', $name);
            $sortedNames = sortNames($newNames);

            $lowercaseNames = array_merge($lowercaseNames, $sortedNames['lower']);
            $uppercaseNames = array_merge($uppercaseNames, $sortedNames['upper']);

            continue;
        }
        if (strtoupper($name) === $name) {
            $uppercaseNames[] = $names[$i];
        } else {
            $lowercaseNames[] = $names[$i];
        }
    }

    return ['lower' => $lowercaseNames, 'upper' => $uppercaseNames];
}
