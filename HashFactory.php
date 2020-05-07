<?php

class HashFactory
{

    protected $strategies = [];

    // Register a new strategy
    public function register($name, HashStrategy $strategy)
    {
        $this->strategies[$name] = $strategy;
    }

    public function make($name)
    {
        // Check if the strategy exists
        if (!array_key_exists($name, $this->strategies)){
            throw new \Exception("Strategy Not Supported");
        }

        // Return the existing strategy
        return $this->strategies[$name];
    }
}