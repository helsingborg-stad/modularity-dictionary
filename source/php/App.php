<?php

namespace ModularityDictionary;

class App
{
    public function __construct()
    {
        new \ModularityDictionary\Dictionary();
        new \ModularityDictionary\Module();

        add_filter('acf/settings/load_json', array($this, 'jsonLoadPath'));
    }

    public function jsonLoadPath($paths)
    {
        $paths[] = MODULARITYDICTIONARY_PATH . 'source/acf-json';
        return $paths;
    }
}
