<?php
// Initialize a cURL session
$ch = curl_init();

// Set the URL of the API
curl_setopt($ch, CURLOPT_URL, "https://official-joke-api.appspot.com/random_joke");

// Set the return transfer option to true (so that the result is returned as a string)
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session
$response = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Decode the JSON response
$joke = json_decode($response, true);

// Display the joke
if ($joke) {
    echo "Here's a joke for you:<br>";
    echo $joke['setup'] . "<br>";
    echo $joke['punchline'] . "<br>";
} else {
    echo "Failed to fetch joke.";
}
?>
