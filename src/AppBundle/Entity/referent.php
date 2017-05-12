<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * referent
 *
 * @ORM\Table(name="referent")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\referentRepository")
 */
class referent
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
     * @ORM\Column(name="userID", type="string", length=255)
     */
    private $userID;

    /**
     * @var string
     *
     * @ORM\Column(name="statusID", type="string", length=255)
     */
    private $statusID;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateEdit", type="datetimetz")
     */
    private $dateEdit;

    /**
     * @var string
     *
     * @ORM\Column(name="reader", type="string", length=255)
     */
    private $reader;


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
     * Set userID
     *
     * @param string $userID
     *
     * @return referent
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
     * Set statusID
     *
     * @param string $statusID
     *
     * @return referent
     */
    public function setStatusID($statusID)
    {
        $this->statusID = $statusID;

        return $this;
    }

    /**
     * Get statusID
     *
     * @return string
     */
    public function getStatusID()
    {
        return $this->statusID;
    }

    /**
     * Set dateEdit
     *
     * @param \DateTime $dateEdit
     *
     * @return referent
     */
    public function setDateEdit($dateEdit)
    {
        $this->dateEdit = $dateEdit;

        return $this;
    }

    /**
     * Get dateEdit
     *
     * @return \DateTime
     */
    public function getDateEdit()
    {
        return $this->dateEdit;
    }

    /**
     * Set reader
     *
     * @param string $reader
     *
     * @return referent
     */
    public function setReader($reader)
    {
        $this->reader = $reader;

        return $this;
    }

    /**
     * Get reader
     *
     * @return string
     */
    public function getReader()
    {
        return $this->reader;
    }
}
