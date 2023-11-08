<?php

$url = "https://bd.rriptv.xyz/live-bd/live.php?c=26"; // URL to grab data from

// Initialize cURL session
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url); // The URL to fetch
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Return the transfer as a string
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects

// Execute cURL session
$result = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
    // If an error occurred, print the error
    echo 'cURL error: ' . curl_error($ch);
} else {
    // If no errors, output the grabbed HTML (for testing purposes)
    echo htmlspecialchars($result);
}

// Close cURL session
curl_close($ch);

?>
