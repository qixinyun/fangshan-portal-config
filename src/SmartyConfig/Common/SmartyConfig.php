<?php

namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/zhongyang-portal-config/src/SmartyConfig/Zy',
            S_ROOT.'vendor/qixinyun/zhongyang-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/zhongyang-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
