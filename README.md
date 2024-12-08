# Набор правил php-cs-fixer

## Install

```shell
composer require --dev free-elephants/php-cs-fixer-ruleset
```

## Usage

```php
<?php
// .php-cs-fixer.dist.php

$finder = PhpCsFixer\Finder::create()
    ->in([
        './config/',
        './src/',
        './tests/'
       );

$overridedProjectRules = [

];

return \StudService\PhpCsFixer\build_config($finder, $overridedProjectRules);
```
