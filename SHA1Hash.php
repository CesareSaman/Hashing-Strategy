<?php

class SHA1Hash implements HashStrategy
{
    private static $instance = null;

    private function __construct() {
        return $this;
    }

    public function hash($data)
    {
        return sha1($data);
    }

    public static function getInstance()
    {
        if ( !(self::$instance instanceof self) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}