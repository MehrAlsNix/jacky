<?php

namespace MehrAlsNix\Jacky;

use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\Cache\Cache;

class JsonFactory
{
    const FORMAT_NAME_JSON = "JSON";

    private static $instance;

    /** @var Jacky $jacky */
    private static $jacky;

    public static function create($cache = 'ArrayCache', $debug = false)
    {
        self::$jacky = new Jacky();
        self::$jacky->setCache($cache);
        self::$jacky->setDebug($debug);
        self::$jacky->bootstrap();


    }

    /**
     * @param Cache $cache
     */
    public function setCache(Cache $cache)
    {
        $this->cache = $cache;
    }
}
