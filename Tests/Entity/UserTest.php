<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use RybakDigital\Bundle\UserBundle\Entity\User;

class UserTest extends WebTestCase
{
    /**
     * @dataProvider userObjectProvider
     */
    public function userObjectProvider()
    {
        $userOne = new User;
        $userTwo = new User;

        // Build array of User objects
        $array = array(
            array($userOne),
            array($userTwo),
        );


        return $array;
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testInterfaces($user)
    {
        $this->assertTrue(is_a($user, 'Symfony\Component\Security\Core\User\AdvancedUserInterface'));
        $this->assertTrue(is_a($user, 'Symfony\Component\Security\Core\User\UserInterface'));
        $this->assertTrue(is_a($user, 'Serializable'));
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testIsAccountNonExpired($user)
    {
        $this->assertTrue(is_bool($user->isAccountNonExpired()));
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testIsAccountNonLocked($user)
    {
        $this->assertTrue(is_bool($user->isAccountNonLocked()));
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testIsCredentialsNonExpired($user)
    {
        $this->assertTrue(is_bool($user->isCredentialsNonExpired()));
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testIsEnabled($user)
    {
        $this->assertTrue(is_bool($user->isEnabled()));
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testGetRoles($user)
    {
        $this->assertTrue(is_array($user->getRoles()));
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testGetPassword($user)
    {
        $this->assertTrue(is_string($user->getPassword()));
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testGetSalt($user)
    {
        if (!is_null($user->getSalt())) {
            $this->assertTrue(is_string($user->getSalt()));
        } else {
            $this->assertTrue(is_null($user->getSalt()));
        }
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testGetUsername($user)
    {
        $this->assertTrue(is_string($user->getUsername()));
    }

    /**
     * @dataProvider userObjectProvider
     */
    public function testEraseCredentials($user)
    {
        $this->assertTrue(is_a($user->eraseCredentials(), User::class));
    }
}
