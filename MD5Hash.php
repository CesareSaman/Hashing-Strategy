<?php

class MD5Hash implements HashStrategy
{
    private static $instance = null;

    private function __construct() {
        return $this;
    }

    public function hash($data)
    {
        return md5($data);
    }

    public static function getInstance()
    {
        if ( !(self::$instance instanceof self) ) {
            self::$instance = new self();
        }
        return self::$instance;
    }
}
