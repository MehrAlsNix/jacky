<?php

namespace MehrAlsNix\Jacky;

use janeklb\json\JSONCharInputReader;
use janeklb\json\JSONChunkProcessorImpl;

class JsonParser
{
    private $reader;

    public function __construct()
    {
        $this->reader = new JSONCharInputReader(
            new JSONChunkProcessorImpl()
        );
    }

    public function read($char)
    {
        $this->reader->readChar($char);
    }
}
