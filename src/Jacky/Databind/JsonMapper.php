<?php

namespace MehrAlsNix\Jacky\Databind;

use MehrAlsNix\Jacky\Listeners\InMemoryListener;

class JsonMapper extends ObjectMapper
{
    private $emitWhitespace = false;

    /** @var \Doctrine\Common\Annotations\CachedReader $reader */
    private $reader;

    public function __construct($reader)
    {
        $this->reader = $reader;
    }

    public function setEmitWhitespace($emitWhitespace)
    {
        $this->emitWhitespace = (bool) $emitWhitespace;
    }

    public function readStream($stream)
    {
        $listener = new InMemoryListener();
        $parser = new \JsonStreamingParser_Parser(
            $stream,
            $listener,
            PHP_EOL,
            $this->emitWhitespace
        );
        $parser->parse();

        print_r($listener->get_json());
    }

    public function readString($string)
    {

    }
}
