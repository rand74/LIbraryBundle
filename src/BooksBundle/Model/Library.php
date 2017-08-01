<?php

namespace BooksBundle\Model;
/**
 * Created by PhpStorm.
 * User: david
 * Date: 01/08/17
 * Time: 09:49
 */

/**
 * Class Library
 */
abstract class Library
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $author;

    /**
     * @var string
     */
    protected $cycle;

    /**
     * @var string
     */
    protected $resume;

    /**
     * @var boolean
     */
    protected $detention = 0;

    /**
     * @var integer
     */
    protected $isbn_10;

    /**
     * @var integer
     */
    protected $isbn_13;

    /**
     * @var \DateTime
     */
    protected $publishedDate;

    /**
     * @var \DateTime
     */
    protected $registrationDate;

    /**
     * @var integer
     */
    protected $pageCount;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $editor;


    public function __construct()
    {
        $this->registrationDate = new \DateTime();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $type
     * @return Library
     */
    public function setType($type)
    {
        if (!in_array($type, SupportTypeEnum::getAvailableTypes())) {
            throw new \InvalidArgumentException("Invalid type");
        }

        $this->type = $type;

        return $this;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Library
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return Library
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set cycle
     *
     * @param string $cycle
     *
     * @return Library
     */
    public function setCycle($cycle)
    {
        $this->cycle = $cycle;

        return $this;
    }

    /**
     * Get cycle
     *
     * @return string
     */
    public function getCycle()
    {
        return $this->cycle;
    }

    /**
     * Set resume
     *
     * @param string $resume
     *
     * @return Library
     */
    public function setResume($resume)
    {
        $this->resume = $resume;

        return $this;
    }

    /**
     * Get resume
     *
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * Set detention
     *
     * @param boolean $detention
     *
     * @return Library
     */
    public function setDetention($detention)
    {
        $this->detention = $detention;

        return $this;
    }

    /**
     * Get detention
     *
     * @return boolean
     */
    public function getDetention()
    {
        return $this->detention;
    }

    /**
     * Set isbn10
     *
     * @param integer $isbn10
     *
     * @return Library
     */
    public function setIsbn10($isbn10)
    {
        $this->isbn_10 = $isbn10;

        return $this;
    }

    /**
     * Get isbn10
     *
     * @return integer
     */
    public function getIsbn10()
    {
        return $this->isbn_10;
    }

    /**
     * Set isbn13
     *
     * @param integer $isbn13
     *
     * @return Library
     */
    public function setIsbn13($isbn13)
    {
        $this->isbn_13 = $isbn13;

        return $this;
    }

    /**
     * Get isbn13
     *
     * @return integer
     */
    public function getIsbn13()
    {
        return $this->isbn_13;
    }

    /**
     * Set publishedDate
     *
     * @param \DateTime $publishedDate
     *
     * @return Library
     */
    public function setPublishedDate($publishedDate)
    {
        $this->publishedDate = $publishedDate;

        return $this;
    }

    /**
     * Get publishedDate
     *
     * @return \DateTime
     */
    public function getPublishedDate()
    {
        return $this->publishedDate;
    }

    /**
     * Set registrationDate
     *
     * @param \DateTime $registrationDate
     *
     * @return Library
     */
    public function setRegistration($registrationDate)
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    /**
     * Get registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->registrationDate;
    }

    /**
     * Set pageCount
     *
     * @param integer $pageCount
     *
     * @return Library
     */
    public function setPageCount($pageCount)
    {
        $this->pageCount = $pageCount;

        return $this;
    }

    /**
     * Get pageCount
     *
     * @return integer
     */
    public function getPageCount()
    {
        return $this->pageCount;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return Library
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set editor
     *
     * @param string $editor
     *
     * @return Library
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return string
     */
    public function getEditor()
    {
        return $this->editor;
    }
}