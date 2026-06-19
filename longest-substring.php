<?php

class Solution {

    function lengthOfLongestSubstring($s) {

        $map = [];      // Stores character => last index
        $left = 0;      // Start of current window
        $maxLen = 0;    // Longest length found

        for ($right = 0; $right < strlen($s); $right++) {

            $char = $s[$right];

            echo "\n-----------------\n";
            echo "Current Character: $char\n";
            echo "Current Index (right): $right\n";

            // Check if character already exists in current window
            if (isset($map[$char]) && $map[$char] >= $left) {

                echo "'$char' already found at index {$map[$char]}\n";
                echo "Move left from $left to " . ($map[$char] + 1) . "\n";

                $left = $map[$char] + 1;
            }

            // Store latest position of character
            $map[$char] = $right;

            // Current window length
            $currentLen = $right - $left + 1;

            // Update maximum length
            $maxLen = max($maxLen, $currentLen);

            echo "Window Start (left): $left\n";
            echo "Current Length: $currentLen\n";
            echo "Max Length: $maxLen\n";

            echo "Map:\n";
            print_r($map);
        }

        return $maxLen;
    }
}

echo "<pre>";

$solution = new Solution();

echo "Input: ddddabc\n";
echo "Final Answer: ";
echo $solution->lengthOfLongestSubstring('ababab');

echo "</pre>";