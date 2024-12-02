<?php
// Set the headers for JSON response
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");

// Check if the HTTP method is GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    // Response data
    $response = [
        "message" => "Hello there 👋",
        "success" => true
    ];

    // Send the JSON response
    echo json_encode($response);
} else {
    // Handle unsupported HTTP methods
    http_response_code(405); // Method Not Allowed
    echo json_encode([
        "message" => "Method not allowed, sorry",
        "success" => false
    ]);
}
?>
