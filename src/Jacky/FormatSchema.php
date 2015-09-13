<?php

namespace MehrAlsNix\Jacky;

interface FormatSchema
{
    /**
     * Method that can be used to get an identifier that can be used for diagnostics
     * purposes, to indicate what kind of data format this schema is used for: typically
     * it is a short name of format itself, but it can also contain additional information
     * in cases where data format supports multiple types of schemas.
     */
    public function getSchemaType();
}
