<?php

$fb = new Facebook\Facebook([
  'app_id' => '1860290527391199', // Replace {app-id} with your app id
  'app_secret' => '6dcc6172a31b8a5ac7f196de496df4de',
  'default_graph_version' => 'v3.1',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';