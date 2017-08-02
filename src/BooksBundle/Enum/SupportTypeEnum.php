<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 01/08/17
 * Time: 10:29
 */

namespace BooksBundle\Enum;


class SupportTypeEnum extends Enum implements AvailableType
{
    const TYPE_BOOK = "book";
    const TYPE_EBOOK = "ebook";
    const TYPE_COMIC_STRIP = "comic strip";

    /**
     * @var array type support name
     */
    public static $typeName = [
        self::TYPE_BOOK => "Livre",
        self::TYPE_EBOOK => "Ebook",
        self::TYPE_COMIC_STRIP => "Bande dessinée"
    ];

    /**
     * @return array
     */
    public static function getAvailableTypes()
    {
        return [
            self::TYPE_BOOK,
            self::TYPE_EBOOK,
            self::TYPE_COMIC_STRIP
        ];
    }
}