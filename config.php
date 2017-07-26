<?php
/**
 * Created by PhpStorm.
 * User: adamharris
 * Date: 19/7/17
 * Time: 9:16 AM
 */

// Defining the for field names
$whitelist = array('name','email','message');

// Set the from name
$from = 'Adam Harris';

// Set the email address submission will be sent to
$email_address = 'adh061977@gmail.com';

// Set the email subject
$subject = 'New loan strategy session request';

// Table name
$table = 'cta_email';

// Database name
define('DB_NAME', 'snippets');

// Database username
define('DB_USERNAME', 'root');

// Database password
define('DB_PASSWORD', 'fxm0S7');

// Database host
define('DB_HOST', 'localhost');