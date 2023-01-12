<?php

// This is my CONTROLLER for the hello project

// Turn on error reporting

ini_set('display_errors', 1);
error_reporting(E_ALL);

// Require the autoload file
require_once('vendor/autoload.php');

// Create an instance of the Base class
$f3 = Base::instance();
// Java equivalent -> Base f3 = new Base();

// Define a default route (what the user sees when they go to the homepage)
$f3->route('GET /', function() {
    echo '<h1> Hello, Fat Free!</h1>';
});

// Run Fat-Free
$f3->run();
// Java -> f3.run();
