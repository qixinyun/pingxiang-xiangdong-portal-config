<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/pingxiang-xiangdong-portal-config/src/SmartyConfig/Xd',
            S_ROOT.'vendor/qixinyun/pingxiang-xiangdong-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/pingxiang-xiangdong-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
