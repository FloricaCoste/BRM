<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * reference
 *
 * @ORM\Table(name="reference")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\referenceRepository")
 */
class reference
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
     * @ORM\Column(name="referenceID", type="string", length=12)
     */
    private $referenceID;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="journal_title", type="string", length=255)
     */
    private $journalTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="type_Of_Medium", type="string", length=255)
     */
    private $typeOfMedium;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_publication", type="datetimetz")
     */
    private $dateOfPublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_citation", type="datetimetz")
     */
    private $dateOfCitation;

    /**
     * @var string
     *
     * @ORM\Column(name="volumNumber", type="string", length=255)
     */
    private $volumNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="ISBN", type="string", length=255)
     */
    private $iSBN;

    /**
     * @var string
     *
     * @ORM\Column(name="location", type="string", length=255)
     */
    private $location;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="availability", type="string", length=255)
     */
    private $availability;

    /**
     * @var string
     *
     * @ORM\Column(name="textSummary", type="string", length=255)
     */
    private $textSummary;

    /**
     * @var string
     *
     * @ORM\Column(name="publicReference", type="string", length=255)
     */
    private $publicReference;


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
     * Set referenceID
     *
     * @param string $referenceID
     *
     * @return reference
     */
    public function setReferenceID($referenceID)
    {
        $this->referenceID = $referenceID;

        return $this;
    }

    /**
     * Get referenceID
     *
     * @return string
     */
    public function getReferenceID()
    {
        return $this->referenceID;
    }

    /**
     * Set author
     *
     * @param string $author
     *
     * @return reference
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
     * Set title
     *
     * @param string $title
     *
     * @return reference
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
     * Set journalTitle
     *
     * @param string $journalTitle
     *
     * @return reference
     */
    public function setJournalTitle($journalTitle)
    {
        $this->journalTitle = $journalTitle;

        return $this;
    }

    /**
     * Get journalTitle
     *
     * @return string
     */
    public function getJournalTitle()
    {
        return $this->journalTitle;
    }

    /**
     * Set typeOfMedium
     *
     * @param string $typeOfMedium
     *
     * @return reference
     */
    public function setTypeOfMedium($typeOfMedium)
    {
        $this->typeOfMedium = $typeOfMedium;

        return $this;
    }

    /**
     * Get typeOfMedium
     *
     * @return string
     */
    public function getTypeOfMedium()
    {
        return $this->typeOfMedium;
    }

    /**
     * Set dateOfPublication
     *
     * @param \DateTime $dateOfPublication
     *
     * @return reference
     */
    public function setDateOfPublication($dateOfPublication)
    {
        $this->dateOfPublication = $dateOfPublication;

        return $this;
    }

    /**
     * Get dateOfPublication
     *
     * @return \DateTime
     */
    public function getDateOfPublication()
    {
        return $this->dateOfPublication;
    }

    /**
     * Set dateOfCitation
     *
     * @param \DateTime $dateOfCitation
     *
     * @return reference
     */
    public function setDateOfCitation($dateOfCitation)
    {
        $this->dateOfCitation = $dateOfCitation;

        return $this;
    }

    /**
     * Get dateOfCitation
     *
     * @return \DateTime
     */
    public function getDateOfCitation()
    {
        return $this->dateOfCitation;
    }

    /**
     * Set volumNumber
     *
     * @param string $volumNumber
     *
     * @return reference
     */
    public function setVolumNumber($volumNumber)
    {
        $this->volumNumber = $volumNumber;

        return $this;
    }

    /**
     * Get volumNumber
     *
     * @return string
     */
    public function getVolumNumber()
    {
        return $this->volumNumber;
    }

    /**
     * Set iSBN
     *
     * @param string $iSBN
     *
     * @return reference
     */
    public function setISBN($iSBN)
    {
        $this->iSBN = $iSBN;

        return $this;
    }

    /**
     * Get iSBN
     *
     * @return string
     */
    public function getISBN()
    {
        return $this->iSBN;
    }

    /**
     * Set location
     *
     * @param string $location
     *
     * @return reference
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return reference
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set availability
     *
     * @param string $availability
     *
     * @return reference
     */
    public function setAvailability($availability)
    {
        $this->availability = $availability;

        return $this;
    }

    /**
     * Get availability
     *
     * @return string
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * Set textSummary
     *
     * @param string $textSummary
     *
     * @return reference
     */
    public function setTextSummary($textSummary)
    {
        $this->textSummary = $textSummary;

        return $this;
    }

    /**
     * Get textSummary
     *
     * @return string
     */
    public function getTextSummary()
    {
        return $this->textSummary;
    }

    /**
     * Set publicReference
     *
     * @param string $publicReference
     *
     * @return reference
     */
    public function setPublicReference($publicReference)
    {
        $this->publicReference = $publicReference;

        return $this;
    }

    /**
     * Get publicReference
     *
     * @return string
     */
    public function getPublicReference()
    {
        return $this->publicReference;
    }
}

