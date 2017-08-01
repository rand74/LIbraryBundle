<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 01/08/17
 * Time: 16:43
 */

namespace BooksBundle\Enum;


abstract class Enum
{

    protected static $typeName = [];

    /**
     * @param string $typeShortName
     * @return string
     */
    public static function getTypeName($typeShortName)
    {
        if (!isset(static::$typeName[$typeShortName]))
        {
            return "Unknown type ($typeShortName)";
        }
        return static::$typeName[$typeShortName];
    }

}