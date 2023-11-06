<?php

function create_constants(string $dir)
{
    $envfile = fopen($dir . "/.env", "r") or die("Unable to open file!");

    while (($line = fgets($envfile)) !== false) {
        list($var, $value) = explode('=', $line);
        $var = str_replace(' ', '', $var);
        $value = str_replace(' ', '', $value);
        $value = str_replace("\"", '', $value);
        $value = str_replace("\n", '', $value);
        $_ENV[$var] = $value;
    }

    fclose($envfile);
}
