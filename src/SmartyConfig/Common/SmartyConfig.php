<?php

namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/fangshan-portal-config/src/SmartyConfig/Fs',
            S_ROOT.'vendor/qixinyun/fangshan-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/fangshan-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
