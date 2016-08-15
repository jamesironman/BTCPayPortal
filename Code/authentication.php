<?php

// The library, needed to do anything involving bitcoins...
require_once('block_io.php');

// Your API Key you got from your wallet
$apiKey = "abcd-1234-efgh-5678";
$version = 2; // API version, DON'T CHANGE
//The 3 Letter Abbreviation for Your Currency
$currency = "ABC";
//Your secret pin for withdrawl (Not needed but program requires it...)
$pin = "1234567890";
//All the pieces assemble into one BlockIo object
$block_io = new BlockIo($apiKey, $pin, $version);


?>