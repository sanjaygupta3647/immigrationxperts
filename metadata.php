<?php
include_once 'image-gallery/config/Database.php';

// Instantiate the Database class and get the connection
$database = new Database();
$mysqli = $database->getConnection();

// Get the current URL
$current_url = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

// Parse the URL to get its components
$parsed_url = parse_url($current_url);

// Construct the canonical URL without query parameters or fragments
$canonical_url = $parsed_url['scheme'] . '://' . $parsed_url['host'] . $parsed_url['path'];

// Get the path of the current URL
$current_path = $parsed_url['path'];

// Fetch metadata from the database
$query = "SELECT title, description, keyword FROM page_metadata WHERE url = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $current_path);
$stmt->execute();
$stmt->bind_result($page_title, $page_description, $page_keyword);
$stmt->fetch();
$stmt->close();

// Set default metadata if not found
$page_title = $page_title ?? 'Immigration Consultants in Noida, Delhi for Canada & Australia';
$page_description = $page_description ?? 'Expert advice and immigration assistance for those aspiring to settle, work or study in Australia, Canada, Hong Kong, New Zealand, Denmark, United Kingdom';
$page_keyword = $page_keyword ?? 'immigration consultants, Canada immigration, Australia immigration, Noida consultants, Delhi consultants';

$mysqli->close();
?>
