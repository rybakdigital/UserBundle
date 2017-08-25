<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\User;

class UserTest extends TestCase
{
    // public function userObjectProvider()
    // {
    //     $userOne = new User;
    //     $userOne
    //         ->setId(15)
    //         ->setIsExpired(true)
    //         ->setIsCredentialsExpired(true);

    //     $userTwo = new User;

    //     $now = new \Datetime;
    //     $now->modify('-1 day'); // Make user accout expired yesterday

    //     $userThree = new User;
    //     $userThree
    //         ->setExpiresAt($now)
    //         ->setCredentialsExpireAt($now);

    //     // Build array of User objects
    //     $array = array(
    //         array($userOne),
    //         array($userTwo),
    //         array($userThree),
    //     );

    //     return $array;
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testInterfaces($user)
    // {
    //     $this->assertTrue(is_a($user, 'Symfony\Component\Security\Core\User\AdvancedUserInterface'));
    //     $this->assertTrue(is_a($user, 'Symfony\Component\Security\Core\User\UserInterface'));
    //     $this->assertTrue(is_a($user, 'RybakDigital\Bundle\AuthenticationBundle\Security\Authentication\Api\AppToken\AppTokenAuthorizableInterface'));
    //     $this->assertTrue(is_a($user, 'RybakDigital\Bundle\AuthenticationBundle\Security\Authentication\Api\AppUserToken\AppUserInterface'));
    //     $this->assertTrue(is_a($user, 'Serializable'));
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testIsAccountNonExpired($user)
    // {
    //     $this->assertTrue(is_bool($user->isAccountNonExpired()));
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testIsAccountNonLocked($user)
    // {
    //     $this->assertTrue(is_bool($user->isAccountNonLocked()));
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testIsCredentialsNonExpired($user)
    // {
    //     $this->assertTrue(is_bool($user->isCredentialsNonExpired()));
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testIsEnabled($user)
    // {
    //     $this->assertTrue(is_bool($user->isEnabled()));
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testGetRoles($user)
    // {
    //     $this->assertTrue(is_array($user->getRoles()));
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testGetPassword($user)
    // {
    //     if (!is_null($user->getPassword())) {
    //         $this->assertTrue(is_string($user->getPassword()));
    //     } else {
    //         $this->assertTrue(is_null($user->getPassword()));
    //     }
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testGetSalt($user)
    // {
    //     if (!is_null($user->getSalt())) {
    //         $this->assertTrue(is_string($user->getSalt()));
    //     } else {
    //         $this->assertTrue(is_null($user->getSalt()));
    //     }
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testGetUsername($user)
    // {
    //     if ($user->getUsername()) {
    //         $this->assertTrue(is_string($user->getUsername()));
    //     } else {
    //         $this->assertFalse(is_string($user->getUsername()));
    //     }
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testEraseCredentials($user)
    // {
    //     $this->assertTrue(is_a($user->eraseCredentials(), User::class));
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testGetId($user)
    // {
    //     if (!is_null($user->getId())) {
    //         $this->assertTrue(is_int($user->getId()));
    //     } else {
    //         $this->assertTrue(is_null($user->getId()));
    //     }
    // }

    // public function userIdProvider()
    // {
    //     return array(
    //         array(1),
    //         array(10),
    //         array(15),
    //         array(10005),
    //         array(0),
    //         array(1000000000),
    //     );
    // }

    // /**
    //  * @dataProvider userIdProvider
    //  */
    // public function testSetId($id)
    // {
    //     $user = new User;

    //     $this->assertTrue(is_a($user->setId($id), User::class));
    //     $this->assertSame($id, $user->getId());
    // }

    // /**
    //  * @dataProvider userNameProvider
    //  */
    // public function testSetUsername($username)
    // {
    //     $user = new User;

    //     $this->assertTrue(is_a($user->setUsername($username), User::class));
    //     $this->assertSame($username, $user->getUsername());
    // }

    // public function invalidUsernameProvider()
    // {
    //     return array(
    //         array(123),
    //         array(new \StdClass),
    //         array(array()),
    //     );
    // }

    // /**
    //  * @dataProvider invalidUsernameProvider
    //  * @expectedException InvalidArgumentException
    //  */
    // public function testSetUsernameFail($username)
    // {
    //     $user = new User;

    //     $this->assertTrue(is_a($user->setUsername($username), User::class));
    // }

    // public function userNameProvider()
    // {
    //     return array(
    //         array("john"),
    //         array("bar"),
    //         array("foo"),
    //         array("moo"),
    //         array(""),
    //         array(null),
    //     );
    // }

    // /**
    //  * @dataProvider userNameProvider
    //  */
    // public function testSetFirstName($name)
    // {
    //     $user = new User;

    //     $this->assertTrue(is_a($user->setFirstName($name), User::class));
    //     $this->assertSame($name, $user->getFirstName());
    // }

    // /**
    //  * @dataProvider userNameProvider
    //  */
    // public function testSetLastName($name)
    // {
    //     $user = new User;

    //     $this->assertTrue(is_a($user->setLastName($name), User::class));
    //     $this->assertSame($name, $user->getLastName());
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testSerialize($user)
    // {
    //     $this->assertTrue(is_string($user->serialize()));
    // }

    // /**
    //  * @dataProvider userObjectProvider
    //  */
    // public function testUnerialize($user)
    // {
    //     $this->assertTrue(is_array($user->unserialize($user->serialize())));
    // }

    // public function saltProvider()
    // {
    //     return array(
    //         array("dshajk423784627cgcUYdgh"),
    //         array("bar"),
    //         array("555522223111"),
    //         array(555522223111),
    //         array(""),
    //         array(null),
    //     );
    // }

    // /**
    //  * @dataProvider saltProvider
    //  */
    // public function testSetSalt($salt)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setSalt($salt), User::class));
    //     $this->assertSame($salt, $user->getSalt());
    // }

    // public function invalidSaltProvider()
    // {
    //     return array(
    //         array(new \StdClass),
    //         array(array()),
    //         array(new User),
    //     );
    // }

    // /**
    //  * @dataProvider invalidSaltProvider
    //  * @expectedException InvalidArgumentException
    //  */
    // public function testSetSaltFail($salt)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setSalt($salt), User::class));
    //     $this->assertSame($salt, $user->getSalt());
    // }

    // public function statusProvider()
    // {
    //     return array(
    //         array(0, false),
    //         array(false, false),
    //         array(1, true),
    //         array(true, true),
    //         array(null, false),
    //         array('', false),
    //     );
    // }

    // /**
    //  * @dataProvider statusProvider
    //  */
    // public function testSetIsActive($status, $expected)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setIsActive($status), User::class));
    //     $this->assertSame($expected, $user->getIsActive());
    // }

    // /**
    //  * @dataProvider statusProvider
    //  */
    // public function testSetIsExpired($status, $expected)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setIsExpired($status), User::class));
    //     $this->assertSame($expected, $user->getIsExpired());
    // }

    // /**
    //  * @dataProvider statusProvider
    //  */
    // public function testSetIsLocked($status, $expected)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setIsLocked($status), User::class));
    //     $this->assertSame($expected, $user->getIsLocked());
    // }

    // /**
    //  * @dataProvider statusProvider
    //  */
    // public function testSetIsCredentialsExpired($status, $expected)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setIsCredentialsExpired($status), User::class));
    //     $this->assertSame($expected, $user->getIsCredentialsExpired());
    // }

    // public function datetimeProvider()
    // {
    //     return array(
    //         array(new \Datetime),
    //         array(new \Datetime('yesterday')),
    //         array(new \Datetime('2011-01-01T15:03:01.012345Z')),
    //     );
    // }

    // /**
    //  * @dataProvider datetimeProvider
    //  */
    // public function testSetExpiresAt($datetime)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setExpiresAt($datetime), User::class));
    //     $this->assertSame($datetime, $user->getExpiresAt());
    // }

    // /**
    //  * @dataProvider datetimeProvider
    //  */
    // public function testSetCredentialsExpireAt($datetime)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setCredentialsExpireAt($datetime), User::class));
    //     $this->assertSame($datetime, $user->getCredentialsExpireAt());
    // }

    // /**
    //  * @dataProvider datetimeProvider
    //  */
    // public function testSetApiKeyExpiresAt($datetime)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setApiKeyExpiresAt($datetime), User::class));
    //     $this->assertSame($datetime, $user->getApiKeyExpiresAt());
    // }

    // /**
    //  * @dataProvider datetimeProvider
    //  */
    // public function testSetLastLoginAt($datetime)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setLastLoginAt($datetime), User::class));
    //     $this->assertSame($datetime, $user->getLastLoginAt());
    // }

    // /**
    //  * @dataProvider datetimeProvider
    //  */
    // public function testSetCreatedAt($datetime)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setCreatedAt($datetime), User::class));
    //     $this->assertSame($datetime, $user->getCreatedAt());
    // }

    // public function tokenProvider()
    // {
    //     return array(
    //         array('abc', 'abc'),
    //     );
    // }

    // /**
    //  * @dataProvider tokenProvider
    //  */
    // public function testSetAndSetPasswordToken($token, $expected)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setPasswordToken($token), User::class));
    //     $this->assertSame($expected, $user->getPasswordToken());
    // }

    // public function apiKeyProvider()
    // {
    //     return array(
    //         array('abc', 'abc'),
    //         array('abc192831', 'abc192831'),
    //         array('123456789', '123456789'),
    //     );
    // }

    // /**
    //  * @dataProvider apiKeyProvider
    //  */
    // public function testSetAndSetApiKey($key, $expected)
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->setApiKey($key), User::class));
    //     $this->assertSame($expected, $user->getApiKey());
    // }

    // public function testLoadApiAppByName()
    // {
    //     $user = new User;
    //     $this->assertTrue(is_a($user->loadApiAppByName('name'), User::class));
    // }
}
