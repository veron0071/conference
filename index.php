<?php

/**
 * Gateway to public/index.php when accessed via subfolder http://localhost/icset2027
 */

$_SERVER['SCRIPT_NAME'] = '/icset2027/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/public/index.php';

require_once __DIR__ . '/public/index.php';
