<?php

function dd($label, $value)
{
    echo "<pre>";
    echo "====================\n";
    echo $label . "\n";
    echo "====================\n";
    print_r($value);
    echo "</pre>";
}

function mergeSort($array)
{
    dd("mergeSort Called", $array);

    // Base condition
    if (count($array) <= 1) {

        dd("Returned (Base Condition)", $array);

        return $array;
    }

    // Find middle
    $middle = floor(count($array) / 2);

    dd("Middle Index", $middle);

    // Split arrays
    $left = array_slice($array, 0, $middle);
    $right = array_slice($array, $middle);

    dd("Left Array", $left);
    dd("Right Array", $right);

    // Recursive calls
    $left = mergeSort($left);
    $right = mergeSort($right);

    // Merge
    return merge($left, $right);
}

function merge($left, $right)
{
    dd("Merge Function Left", $left);
    dd("Merge Function Right", $right);

    $result = [];

    while (count($left) > 0 && count($right) > 0) {

        dd("Comparing", [$left[0], $right[0]]);

        if ($left[0] < $right[0]) {

            $result[] = array_shift($left);

            dd("Result After Left Shift", $result);

        } else {

            $result[] = array_shift($right);

            dd("Result After Right Shift", $result);
        }
    }

    $final = array_merge($result, $left, $right);

    dd("Final Merged Array", $final);

    return $final;
}

// Example
$array = [8, 3, 5];

dd("Original Array", $array);

$sorted = mergeSort($array);

dd("Sorted Array", $sorted);

?>