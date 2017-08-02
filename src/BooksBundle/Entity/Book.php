<?php

namespace BooksBundle\Entity;

use BooksBundle\Enum\FormatBookEnum;



/**
 * Class Book
 */
class Book extends Library
{
    /**
     * @var string
     */
    protected $formatBook;

    /**
     * @param $formatBook
     * @return Book
     */
    public function setFormatBook($formatBook)
    {
        if (!in_array($formatBook, FormatBookEnum::getAvailableTypes())) {
            throw new \InvalidArgumentException("Invalid type");
        }

        $this->formatBook = $formatBook;

        return $this;
    }
}