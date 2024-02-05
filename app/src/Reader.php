<?php

namespace Reader;

class Reader
{
    public $handle;

    function __construct(public $filename)
    {
        if (file_exists($filename)) {
            $this->handle = fopen($filename, 'r');
        } else {
            echo "Le fichier n'existe pas";
        }
        echo 'construct call';
    }

    function read()
    {
        echo fread($this->handle, 10);
    }

    function __destruct()
    {
        fclose($this->handle);
        echo 'destruct call';
    }
}
