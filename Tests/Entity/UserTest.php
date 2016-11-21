<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\User;

class UserTest extends TestCase
{
    public function userObjectProvider()
    {
        $userOne = new User;
        $userOne
            ->setId(15);

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
        $this->assertTrue(is_a($user, 'RybakDigital\Bundle\AuthenticationBundle\Security\Authentication\Api\AppToken\AppTokenAuthorizableInterface'));
        $this->assertTrue(is_a($user, 'RybakDigital\Bundle\AuthenticationBundle\Security\Authentication\Api\AppUserToken\AppUserInterface'));
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

    /**
     * @dataProvider userObjectProvider
     */
    public function testGetId($user)
    {
        if (!is_null($user->getId())) {
            $this->assertTrue(is_int($user->getId()));
        } else {
            $this->assertTrue(is_null($user->getId()));
        }
    }

    /**
     * @dataProvider userObjectProvider
     * @expectedException InvalidArgumentException
     */
    public function testSetIdFail_id_is_string($user)
    {
        $user->setId("15");
    }

    /**
     * @dataProvider userObjectProvider
     * @expectedException InvalidArgumentException
     */
    public function testSetIdFail_id_is_array($user)
    {
        $user->setId(array());
    }

    /**
     * @dataProvider userObjectProvider
     * @expectedException InvalidArgumentException
     */
    public function testSetIdFail_id_is_object($user)
    {
        $user->setId(new \StdClass());
    }
}
