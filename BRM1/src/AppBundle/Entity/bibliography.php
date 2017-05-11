<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * bibliography
 *
 * @ORM\Table(name="bibliography")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\bibliographyRepository")
 */
class bibliography
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bibID", type="string", length=255)
     */
    private $bibID;

    /**
     * @var string
     *
     * @ORM\Column(name="userID", type="string", length=255)
     */
    private $userID;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="yearPub", type="string", length=255)
     */
    private $yearPub;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="chapter", type="string", length=255)
     */
    private $chapter;

    /**
     * @var string
     *
     * @ORM\Column(name="editor", type="string", length=255)
     */
    private $editor;

    /**
     * @var string
     *
     * @ORM\Column(name="edition", type="string", length=255)
     */
    private $edition;

    /**
     * @var string
     *
     * @ORM\Column(name="placePub", type="string", length=255)
     */
    private $placePub;

    /**
     * @var string
     *
     * @ORM\Column(name="publisher", type="string", length=255)
     */
    private $publisher;

    /**
     * @var bool
     *
     * @ORM\Column(name="book", type="boolean")
     */
    private $book;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set bibID
     *
     * @param string $bibID
     *
     * @return bibliography
     */
    public function setBibID($bibID)
    {
        $this->bibID = $bibID;

        return $this;
    }

    /**
     * Get bibID
     *
     * @return string
     */
    public function getBibID()
    {
        return $this->bibID;
    }

    /**
     * Set userID
     *
     * @param string $userID
     *
     * @return bibliography
     */
    public function setUserID($userID)
    {
        $this->userID = $userID;

        return $this;
    }

    /**
     * Get userID
     *
     * @return string
     */
    public function getUserID()
    {
        return $this->userID;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return bibliography
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
     * Set yearPub
     *
     * @param string $yearPub
     *
     * @return bibliography
     */
    public function setYearPub($yearPub)
    {
        $this->yearPub = $yearPub;

        return $this;
    }

    /**
     * Get yearPub
     *
     * @return string
     */
    public function getYearPub()
    {
        return $this->yearPub;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return bibliography
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
     * Set chapter
     *
     * @param string $chapter
     *
     * @return bibliography
     */
    public function setChapter($chapter)
    {
        $this->chapter = $chapter;

        return $this;
    }

    /**
     * Get chapter
     *
     * @return string
     */
    public function getChapter()
    {
        return $this->chapter;
    }

    /**
     * Set editor
     *
     * @param string $editor
     *
     * @return bibliography
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

    /**
     * Set edition
     *
     * @param string $edition
     *
     * @return bibliography
     */
    public function setEdition($edition)
    {
        $this->edition = $edition;

        return $this;
    }

    /**
     * Get edition
     *
     * @return string
     */
    public function getEdition()
    {
        return $this->edition;
    }

    /**
     * Set placePub
     *
     * @param string $placePub
     *
     * @return bibliography
     */
    public function setPlacePub($placePub)
    {
        $this->placePub = $placePub;

        return $this;
    }

    /**
     * Get placePub
     *
     * @return string
     */
    public function getPlacePub()
    {
        return $this->placePub;
    }

    /**
     * Set publisher
     *
     * @param string $publisher
     *
     * @return bibliography
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;

        return $this;
    }

    /**
     * Get publisher
     *
     * @return string
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * Set book
     *
     * @param boolean $book
     *
     * @return bibliography
     */
    public function setBook($book)
    {
        $this->book = $book;

        return $this;
    }

    /**
     * Get book
     *
     * @return bool
     */
    public function getBook()
    {
        return $this->book;
    }
}

