<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * tag
 *
 * @ORM\Table(name="tag")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\tagRepository")
 */
class tag
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
     * @ORM\Column(name="tagID", type="string", length=255)
     */
    private $tagID;

    /**
     * @var string
     *
     * @ORM\Column(name="tagName", type="string", length=255)
     */
    private $tagName;

    /**
     * @var int
     *
     * @ORM\Column(name="vote", type="integer")
     */
    private $vote;

    /**
     * @var string
     *
     * @ORM\Column(name="tagStatus", type="string", length=255)
     */
    private $tagStatus;


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
     * Set tagID
     *
     * @param string $tagID
     *
     * @return tag
     */
    public function setTagID($tagID)
    {
        $this->tagID = $tagID;

        return $this;
    }

    /**
     * Get tagID
     *
     * @return string
     */
    public function getTagID()
    {
        return $this->tagID;
    }

    /**
     * Set tagName
     *
     * @param string $tagName
     *
     * @return tag
     */
    public function setTagName($tagName)
    {
        $this->tagName = $tagName;

        return $this;
    }

    /**
     * Get tagName
     *
     * @return string
     */
    public function getTagName()
    {
        return $this->tagName;
    }

    /**
     * Set vote
     *
     * @param integer $vote
     *
     * @return tag
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set tagStatus
     *
     * @param string $tagStatus
     *
     * @return tag
     */
    public function setTagStatus($tagStatus)
    {
        $this->tagStatus = $tagStatus;

        return $this;
    }

    /**
     * Get tagStatus
     *
     * @return string
     */
    public function getTagStatus()
    {
        return $this->tagStatus;
    }
}

