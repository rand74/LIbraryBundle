<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 01/08/17
 * Time: 10:29
 */

namespace BooksBundle\Model;


abstract class SupportTypeEnum
{
    const TYPE_BOOK = "book";
    const TYPE_EBOOK = "ebook";
    const TYPE_COMIC_STRIP = "comic strip";

    /**
     * @var array type support name
     */
    protected static $typeName = [
        self::TYPE_BOOK => "Livre",
        self::TYPE_EBOOK => "Ebook",
        self::TYPE_COMIC_STRIP => "Bande dessinée"
    ];

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

    /**
     * @return array
     */
    public static function getAvailableTypes()
    {
        return [
            self::TYPE_BOOK,
            self::TYPE_BOOK,
            self::TYPE_COMIC_STRIP
        ];
    }
}