<?php

/*
|--------------------------------------------------------------------------
| Read Friendly Debug Function
|--------------------------------------------------------------------------
|
| ddF() prints data in readable format using <pre>
|
*/

function ddF($data)
{
    echo "<pre>";

    print_r($data);

    echo "</pre>";
}


/*
|--------------------------------------------------------------------------
| Bubble Sort Function
|--------------------------------------------------------------------------
*/

function bubbleSort($numbers)
{
    $length = count($numbers);

    echo "Original Array";
    ddF($numbers);

    // Outer loop
    for ($i = 0; $i < $length - 1; $i++) {

        echo "====================";
        echo "<br>";

        echo "PASS : " . ($i + 1);

        echo "<br>";
        echo "====================";

        echo "<br><br>";

        // Inner loop
        for ($j = 0; $j < $length - $i - 1; $j++) {

            echo "Comparing ";

            echo $numbers[$j];

            echo " and ";

            echo $numbers[$j + 1];

            echo "<br>";

            // Swap condition
            if ($numbers[$j] > $numbers[$j + 1]) {

                echo "Swap Needed";

                echo "<br>";

                // Swapping
                $temp = $numbers[$j];

                $numbers[$j] = $numbers[$j + 1];

                $numbers[$j + 1] = $temp;

                echo "Array After Swap";

                ddF($numbers);

            } else {

                echo "No Swap Needed";

                echo "<br><br>";
            }
        }

        echo "<br>";
    }

    return $numbers;
}


/*
|--------------------------------------------------------------------------
| Input Array
|--------------------------------------------------------------------------
*/

$numbers = [64, 34, 25, 12, 22, 11, 90];


/*
|--------------------------------------------------------------------------
| Function Call
|--------------------------------------------------------------------------
*/

$sortedNumbers = bubbleSort($numbers);


/*
|--------------------------------------------------------------------------
| Final Output
|--------------------------------------------------------------------------
*/

echo "Final Sorted Array";

ddF($sortedNumbers);

?>