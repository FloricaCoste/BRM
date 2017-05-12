<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ROLE
 *
 * @ORM\Table(name="r_o_l_e")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ROLERepository")
 */
class ROLE
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
     * @ORM\Column(name="userROLE", type="string", length=20)
     */
    private $userROLE;


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
     * Set userROLE
     *
     * @param string $userROLE
     *
     * @return ROLE
     */
    public function setUserROLE($userROLE)
    {
        $this->userROLE = $userROLE;

        return $this;
    }

    /**
     * Get userROLE
     *
     * @return string
     */
    public function getUserROLE()
    {
        return $this->userROLE;
    }
}
