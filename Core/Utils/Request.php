<?php

namespace Core\Utils;

class Request
{
    public static function getUri()
    {
        return $_SERVER['REQUEST_URI'];
    }

    public static function getMethod()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}
