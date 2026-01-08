<?php

namespace CoenJacobs\Mozart\Replace;

use CoenJacobs\Mozart\Composer\Autoload\Autoloader;

abstract class BaseReplacer implements Replacer
{
    public Autoloader $autoloader;

    public function setAutoloader(Autoloader $autoloader): void
    {
        $this->autoloader = $autoloader;
    }
}
