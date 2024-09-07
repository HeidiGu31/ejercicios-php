<?php
// Function to check if a string is a palindrome
function isPalindrome($string) {
    // Remove spaces and convert to lowercase
    $cleanString = strtolower(str_replace(' ', '', $string));
    
    // Check if the string is equal to its reverse
    return $cleanString == strrev($cleanString);
}

$word = "madam";
if (isPalindrome($word)) {
    echo "$word is a palindrome.";
} else {
    echo "$word is not a palindrome.";
}
?>