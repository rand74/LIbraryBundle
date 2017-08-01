<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 01/08/17
 * Time: 16:34
 */

namespace BooksBundle\Enum;


class FormatBookEnum extends Enum implements AvailableType
{

    const TYPE_POCKET_BOOK = "novel";
    const TYPE_NOVEL_PAPERBACK = "paperback";
    const TYPE_SHORT_STORIES = "short stories";

    protected static $typeName = [
        self::TYPE_POCKET_BOOK => "Roman",
        self::TYPE_NOVEL_PAPERBACK => "Roman broché",
        self::TYPE_SHORT_STORIES => "Nouvelles"
    ];

    public static function getAvailableTypes()
    {
        return [
            self::TYPE_POCKET_BOOK,
            self::TYPE_NOVEL_PAPERBACK,
            self::TYPE_SHORT_STORIES
        ];
    }
}