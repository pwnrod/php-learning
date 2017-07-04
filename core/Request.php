<?php

class Request
{
    // Returns a neatly trimmed URI from the server global array.
    public static function uri()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }
}