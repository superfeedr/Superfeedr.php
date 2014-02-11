<?php
require_once 'Superfeedr.php';

$username = 'demo'; // your superfeedr username
$password = 'demo'; // your superfeedr password
$callback = ''; // your callback URL
$secret   = 'thisissecret'; // Important. Please, set me up and resubscribe if you change me!

/**
 * Example feed.
 *
 * Go to http://push-pub.appspot.com/ to update it once you're subscribed to it. (see subscribe.php)
 */

$superfeedr = new Superfeedr($username, $password, $callback, $secret);


$json = $superfeedr->callback($secret);

    //
    // Dump the content to a file... or fo whatever you need with it!
    //
file_put_contents('result.txt', print_r($json,true) . "\n", FILE_APPEND);


?>
