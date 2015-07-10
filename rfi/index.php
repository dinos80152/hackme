<?php

// Have to set 'allow_url_include = On' in php.ini

$event = $_GET['event'];
$award_id = $_GET['award'];

include $event .'.php';

echo $awards[$award_id]['name'];

// ...