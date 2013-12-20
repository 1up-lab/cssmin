<?php

namespace Oneup\CssMin;

class CssError
{
    /**
     * File.
     *
     * @var string
     */
    public $File = "";

    /**
     * Line.
     *
     * @var integer
     */
    public $Line = 0;

    /**
     * Error message.
     *
     * @var string
     */
    public $Message = "";

    /**
     * Source.
     *
     * @var string
     */
    public $Source = "";

    /**
     * Constructor triggering the error.
     *
     * @param  string $message Error message
     * @param  string $source  Corresponding line [optional]
     * @return void
     */
    public function __construct($file, $line, $message, $source = "")
    {
        $this->File		= $file;
        $this->Line		= $line;
        $this->Message	= $message;
        $this->Source	= $source;
    }
    /**
     * Returns the error as formatted string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->Message . ($this->Source ? ": <br /><code>" . $this->Source . "</code>": "") . "<br />in file " . $this->File . " at line " . $this->Line;
    }
}
