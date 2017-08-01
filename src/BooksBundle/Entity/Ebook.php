<?php

namespace BooksBundle\Entity;

use BooksBundle\Model\Library;

/**
 * Class Ebook
 */
class Ebook extends Library
{
    /**
     * @var integer
     */
    protected $size;

    /**
     * @var string
     */
    protected $unitySize;

    /**
     * @var string
     */
    protected $file;

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set size
     *
     * @param int $size
     *
     * @return Ebook
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get unitySize
     *
     * @return string
     */
    public function getUnitySize()
    {
        return $this->unitySize;
    }

    /**
     * Set unitySize
     *
     * @param $unitySize
     *
     * @return Ebook
     */
    public function setUnitySize($unitySize)
    {
        $this->unitySize = $unitySize;

        return $this;
    }

}