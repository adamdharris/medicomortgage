<?php

// helper functions
require_once ('functions.php');

// Defining local variables

$errors = array();
$sent = false;

// Check for form submission
if (! empty($_POST)){
    // Process the form
    $process = process_form($_POST);

    //Check for errors
    if (! empty($process['phone'])){
        $errors[] = $process['phone'];
    } elseif (!empty($process['errors'])){
        $errors = $process['errors'];
    } else {
        $sent = true;
    }
}
?>
<!--End File-->