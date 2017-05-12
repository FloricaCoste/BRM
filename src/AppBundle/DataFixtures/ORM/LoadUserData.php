<?php

namespace AppBundle\DataFixtures\ORM;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\User;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface */
    private $container;

    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    public function load(ObjectManager $manager)
    {
        // create objects
        $userStudent = $this->createActiveUser('student', 'student', 'super@admin.com', ['ROLE_STUDENT']);
        $userAdmin = $this->createActiveUser('admin', 'admin', 'admin@admin.com', ['ROLE_ADMIN']);
        $userLecture = $this->createActiveUser('lecture', 'coste', 'coseflorica@yahoo.com', ['ROLE_LECTURE']);
        // store to DB
        $manager->persist($userStudent);
        $manager->persist($userAdmin);
        $manager->persist($userLecture);
        $manager->flush();
    }

    // default role s ROLE_USER
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
}