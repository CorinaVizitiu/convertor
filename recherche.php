<?php
session_start() ; 
$title="Search";
$nav="search";
require_once "header.php";
?>
 <?php

if(isset($_GET['query'])) {
  // Get the search query from the form data
  $query = $_GET['query'];

  // Perform the search
  $results = search_files($query);

  // Display the search results
  foreach ($results as $result) {
    echo '<a href="' . $result . '">' . basename($result) . '</a><br>';
  }
}

function search_files($query) {
  // Get the list of files in the directory
  $files = glob('*.*');

  // Search for files that match the query
  $results = array();
  foreach ($files as $file) {
    if (stripos(basename($file), $query) !== false) {
      $results[] = $file;
    }
  }

  return $results;
}
?> 

