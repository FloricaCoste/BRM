<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User
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
     * @ORM\Column(name="username", type="string", length=255)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="e_mail", type="string", length=255)
     */
    private $eMail;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActiv", type="boolean")
     */
    private $isActiv;

    /**
     * @var string
     *
     * @ORM\Column(name="userID", type="string", length=255)
     */
    private $userID;

    /**
     * @var string
     *
     * @ORM\Column(name="roleUser", type="string", length=255)
     */
    private $roleUser;


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
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     *
     * @return User
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set isActiv
     *
     * @param boolean $isActiv
     *
     * @return User
     */
    public function setIsActiv($isActiv)
    {
        $this->isActiv = $isActiv;

        return $this;
    }

    /**
     * Get isActiv
     *
     * @return bool
     */
    public function getIsActiv()
    {
        return $this->isActiv;
    }

    /**
     * Set userID
     *
     * @param string $userID
     *
     * @return User
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
     * Set roleUser
     *
     * @param string $roleUser
     *
     * @return User
     */
    public function setRoleUser($roleUser)
    {
        $this->roleUser = $roleUser;

        return $this;
    }

    /**
     * Get roleUser
     *
     * @return string
     */
    public function getRoleUser()
    {
        return $this->roleUser;
    }


    //add extra function
    public function getSalt()
    {
    }

    public function getRoles()
    {
        return array('ROLE_USER');
    }

    public function eraseCredentials()
    {
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function isEnabled()
    {
        return $this->isActiv;
    }

// serialize and unserialize must be updated - see below
    public function serialize()
    {
        return serialize(array(
            // ...
            $this->isActiv
        ));
    }
    public function unserialize($serialized)
    {
        list (
            // ...
            $this->isActiv
            ) = unserialize($serialized);
    }

}

