<?php

namespace BooksBundle\Entity;

use BooksBundle\Model\Library;

/**
 * Class ComicStrip
 */
class ComicStrip extends Library
{
    /**
     * @var string
     */
    protected $designer;

    /**
     * Get designer
     *
     * @return string
     */
    public function getDesigner()
    {
        return $this->designer;
    }

    /**
     * Set comicStrip
     *
     * @param $designer
     *
     * @return ComicStrip
     */
    public function setDesigner($designer)
    {
        $this->designer = $designer;

        return $this;
    }
}