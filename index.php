<?php

function __autoload($class)
{
    require_once $class . '.php';
}

$factory = new HashFactory();

$factory->register('sha1', SHA1Hash::getInstance());

$factory->register('md5', MD5Hash::getInstance());

$hasher = $factory->make($_GET['strategy']);

echo $hasher->hash($_GET['data']);

