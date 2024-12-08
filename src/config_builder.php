<?php

namespace FreeElephants\PhpCsFixer;

use PhpCsFixer\Config;
use PhpCsFixer\ConfigInterface;

function build_config(iterable $finder, array $rules = []): ConfigInterface
{
    $rules = array_merge(require __DIR__.'/rules.php', $rules);

    return (new Config())
        ->setFinder($finder)
        ->setRules($rules);
}
