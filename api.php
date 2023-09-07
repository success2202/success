<?php
// Get the Slack name and track from GET parameters
$slack_name = isset($_GET['stack_name']) ? $_GET['stack_name'] : '';
$track = isset($_GET['track']) ? $_GET['track'] : '';

// Set the current day of the week
$current_day_of_week = date('l');

// Set the current UTC time with validation of +/-2 minutes
$current_time = date("Y-m-d H:i:s", time());

// Set the GitHub URL of the file being run
$source_file_url = 'https://github.com/path_to_the_current_file_running_in_your_repo.php';

// Get the GitHub URL of the full source code
$source_repo_url = 'https://github.com/success2202/success.git';

// Associative array to hold the data
$response_data = [
    'slack_name' => $slack_name,
    'Current_Day' => $current_day_of_week,
    'utc_time' => $current_time,
    'track' => $track,
    'githubfile_url' => $source_file_url,
    'githubRepo_url' => $source_repo_url,
    'status_code' => 200
];

// Convert the data to JSON format
$encoded_data = json_encode($response_data, JSON_PRETTY_PRINT);

// Set the response headers to indicate JSON content
//header('Content-Type: application/json');
header("content-Type: JSON");

// Output the JSON data
echo $encoded_data;

?>