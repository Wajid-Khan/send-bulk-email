<?php

$api_url = 'https://livefit4ever.com/wp-json/wp/v2/posts'; // Replace with the actual URL of the WordPress site

// Get pagination parameters from the query string
$per_page = isset($_GET['per_page']) ? $_GET['per_page'] : 10;
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Set the parameters for the API request
$params = array(
    'per_page' => $per_page,
    'page'     => $page,
    '_embed'   => true // Include embedded data, including featured images
);

// Append the parameters to the API URL
$api_url .= '?' . http_build_query($params);

$ch = curl_init($api_url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo json_encode(array('error' => 'Curl error: ' . curl_error($ch)));
} else {
    $data = json_decode($response, true);

    // Send JSON response
    echo json_encode($data);
}

// Close cURL session
curl_close($ch);
?>
