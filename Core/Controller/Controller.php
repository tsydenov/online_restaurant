<?php

namespace Core\Controller;

interface Controller
{
    public static function render(string $page, string $method, array $params);
}
