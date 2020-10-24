<?php

define('SC_TESTS', __DIR__);

/** @var \Composer\Autoload\ClassLoader $autoloader */
$autoloader = require SC_TESTS . '/../vendor/autoload.php';

// Register test classes
$autoloader->addPsr4('DarkMatter\Tests\\', SC_TESTS);
