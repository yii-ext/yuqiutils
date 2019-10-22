<?php

namespace yiiexttbq\yiqiutils\libs;

class StringUtils
{
    public static function valiName($name)
    {
        if (preg_match('/^[a-zA-Z0-9\.\-_]+$/', $name, $matches)) {
            return true; //name合法
        } else {
            return false; //name 不合法
        }
    }

    public static function checkExt($filename)
    {
        $array = array("gif", "png", "jpg", "jpeg"); //赋值一个数组
        $tmp = explode(".", $filename); //用explode()函数把字符串打散成为数组。
        $extension = end($tmp); //用end获取数组最后一个元素
        if (in_array(strtolower($extension), $array)) {
            return true;
        } else {
            return false;
        }
    }
}
