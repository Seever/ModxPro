<?php

define('MODX_API_MODE', true);
define('XPDO_CLI_MODE', true);
$path = dirname(dirname(dirname(dirname(dirname(__FILE__)))));

/** @noinspection PhpIncludeInspection */
require $path . '/index.php';
/** @var modX $modx */
$modx->getService('error', 'error.modError');
$modx->setLogLevel(modX::LOG_LEVEL_INFO);
$modx->setLogTarget('ECHO');