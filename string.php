<?php
$strings = ["Hello", "World", "PHP", "Programming"];

// Count vowels Function
function countVowels($string) {
    $vowelCount = 0;
    $vowels = "aeiouAEIOU";
    
    for ($i = 0; $i < strlen($string); $i++) {
        if (strpos($vowels, $string[$i]) !== false) {
            $vowelCount++;
        }
    }
    return $vowelCount;
}


foreach ($strings as $string) {
    // Count the vowels
    $vowel_count = countVowels($string);
    // Reverse the string
    $reversed_string = strrev($string);

    echo "Original String: $string, Vowel Count: $vowel_count, Reversed String: $reversed_string\n";
    echo "<br/>";
}

