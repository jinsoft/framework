<?php
/**
 * Created by PhpStorm.
 * User: xiaojin
 * Email: job@ainiok.com
 * Date: 2019/1/5 0:13
 */

namespace Illuminate\Container;

class Container
{
    protected static $instance;

    protected $bindings = [];

    public function bind($abstract, $concrete = null, $shared = false)
    {
        //
    }

    public function singleton($abstract, $concrete = null)
    {
        $this->bind($abstract, $concrete, true);
    }
}