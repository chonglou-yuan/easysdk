<?php
namespace Easysdk\Map;

class Qmap
{
    public $key;
    public function __construct($options)
    {
        $this->key = $options['key'];
    }

    public function test()
    {
        exit($this->key);
    }
}