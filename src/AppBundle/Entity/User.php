<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="app_users")
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
     * @ORM\Column(name="username", type="string", length=64)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="eMail", type="string", length=64)
     */
    private $eMail;

    /**
     * @var bool
     *
     * @ORM\Column(name="isActive", type="boolean")
     */
    private $isActive;


    /**
     * @var \AppBundle\Entity\ROLE
     *
     * @ORM\ManyToOne(targetEntity="ROLE")
     * @ORM\JoinColumn(name="ROLE_id", referencedColumnName="id")
     */
    private $ROLE;

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
     * @param string $encodePassword
     *
     * @return User
     */
    public function setPassword($encodePassword)
    {
        $this->password = $encodePassword;

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
     * Set isActive
     *
     * @param boolean $isActive
     *
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return $this->isActive = true;

    }



//add extra function
public function getSalt()
{
}

public function getRolesUser()
{
    return array(['ROLE_USER']);
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

    return $this->isActive;

}

// serialize and unserialize must be updated - see below

/** @see \Serializable::serialize() */
public function serialize()
{
    return serialize(array( $this->id,
        $this->username,
        $this->password,
        // see section on salt below // $this->salt,
    ));
}

/** @see \Serializable::unserialize() */
public function unserialize($serialized)
{
    list ( $this->id,
        $this->username,
        $this->password,
        ) = unserialize($serialized); }

/**
 * @ORM\Column(type="json_array")
 */
private $roles = [];


public function getRoles()
{
    $roles = $this->roles;
    return $roles;
}

/**
 * Set roles
 *
 * @param array $roles
 *
 * @return User
 */
public function setRoles($roles = ['ROLE_USER'])
{
    $this->roles = $roles;
    return $this;
}

private function createActiveUser($username, $plainPassword, $email, $roles = ['ROLE_USER']):user
{
    $users = new user();
    $users->setUsername($username);
    $encodedPassword = $this->encodePassword($users, $plainPassword);
    $users->setPassword($encodedPassword);
    $users->setEmail($email);
    $users->setRoles($roles);
    $users->setIsActive(true);
    // password - and encoding

    return $users;
}

private function encodePassword($users, $plainPassword):string
{

    $encoder = $this->container->get('security.password_encoder');
    $encodedPassword = $encoder->encodePassword($users, $plainPassword);
    return $encodedPassword;
}



    /**
     * Set rOLE
     *
     * @param \AppBundle\Entity\ROLE $rOLE
     *
     * @return User
     */
    public function setROLE(\AppBundle\Entity\ROLE $rOLE = null)
    {
        $this->ROLE = $rOLE;

        return $this;
    }

    /**
     * Get rOLE
     *
     * @return \AppBundle\Entity\ROLE
     */
    public function getROLE()
    {
        return $this->ROLE;
    }
}
