<?php

namespace MehrAlsNix\Jacky;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\Common\Annotations\CachedReader;
use Doctrine\Common\Cache\ArrayCache;
use Doctrine\Common\Cache\Cache;

class Jacky
{
    private $cache;

    private $debug = false;

    private $reader;

    public function __construct()
    {
        $this->cache = new ArrayCache();
    }

    public function setCache(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function setDebug($flag)
    {
        $this->debug = $flag;
    }

    public function bootstrap()
    {
        $this->registerAnnotationNamespace();
        $this->setupReader();
    }

    private function registerAnnotationNamespace()
    {
        AnnotationRegistry::registerAutoloadNamespace(
            "MehrAlsNix\\Jacky\\Annotations",
            __DIR__ . "/Annotations"
        );
    }

    private function setupReader()
    {
        $this->reader = new CachedReader(
            new AnnotationReader(),
            $this->cache,
            $this->debug
        );
    }
}
