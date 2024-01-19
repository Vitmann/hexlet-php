<?php

namespace Hexlet\Php\Runner;

require_once __DIR__ . '/../vendor/autoload.php';

function run()
{
    $collection = collect(['taylor', 'abigail', null])->map(function ($name) {
        return strtoupper($name);
    });

    return $collection;
}
