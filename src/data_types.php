<?php

function convert_to_int($input)
{
    $modInput = intval($input);
    if (is_int($modInput)) {
        return $modInput;
    } else {
        return 0;
    }
}

function convert_to_float($input)
{
    $modInput = floatval($input);
    if (is_float($modInput)) {
        return $modInput;
    } else {
        return 0.0;
    }
}

function convert_to_string($input)
{
    if (is_array($input)) {
        $modInput = implode(", " , $input);
        return $modInput;
    } else {
        $modInput = strval($input);
        if (is_string($modInput)) {
            return $modInput;
        } else {
            return "";
        }
    }
}

function convert_to_bool($input)
{
    $modInput = boolval($input);
    if (is_bool($modInput)) {
        return $modInput;
    } else {
        return false;
    }
}

function convert_to_null($input)
{
    if ($input == null || $input == 'null') {
        return null;
    } else {
        return $input;
    }
}

function convert_to_array($input)
{
    if (is_array($input)) {
        return $input;
    } else {
        $modInput = array($input);
        if (is_array($modInput)) {
            return $modInput;
        } else {
            return [];
        }
    }
}
 ?>