<?php
require_once 'Superfeedr.php';

$username = 'demo'; // your superfeedr username
$password = 'demo'; // your superfeedr password
$callback = 'http://ouvre-boite.com/debug/endpoint.php'; // your callback URL
$secret   = 'thisissecret';

/**
 * Example feed.
 *
 * Go to hhttp://push-pub.appspot.com/ to update it.
 */
$feed = 'http://push-pub.appspot.com/feed';

$superfeedr = new Superfeedr($username, $password, $callback, $secret);

if ($superfeedr->subscribe($feed)) {
  echo 'Subscribed' . "\n";
}

?>
