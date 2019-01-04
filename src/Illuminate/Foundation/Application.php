<?php
/**
 * Created by PhpStorm.
 * User: xiaojin
 * Email: job@ainiok.com
 * Date: 2019/1/5 0:02
 */

namespace Illuminate\Foundation;

class Application
{
    const VERSION = '1.0.1';

    protected $basePath;

    protected $environmentPath;

    protected $environmentFile = '.env';

    protected $namespace;

    public function __construct($basePath = null)
    {
        if ($basePath) {
            //
        }
    }

    public function version()
    {
        return static::VERSION;
    }
}