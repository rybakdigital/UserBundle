<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use Doctrine\ORM\EntityRepository;
use Doctrine\Common\Persistence\ObjectManager;
use RybakDigital\Bundle\UserBundle\Entity\UserRepository;
use RybakDigital\Bundle\UserBundle\Entity\User;

class UserRepositoryTest extends TestCase
{
    // public function testGetUserByUsernameOrValidEmail()
    // {
    //     // Mock User object
    //     $user = $this
    //         ->getMockBuilder(User::class)
    //         ->disableOriginalConstructor()
    //         ->getMock();

    //     $userRepository = $this
    //         ->getMockBuilder(UserRepository::class)
    //         ->disableOriginalConstructor()
    //         ->getMock();

    //     $userRepository->expects($this->once())
    //         ->method('getUserByUsernameOrValidEmail')
    //         ->will($this->returnValue($user));

    //     $em = $this
    //         ->getMockBuilder(ObjectManager::class)
    //         ->disableOriginalConstructor()
    //         ->getMock();

    //     $em->expects($this->once())
    //         ->method('getRepository')
    //         ->will($this->returnValue($userRepository));

    //     $repository = $em->getRepository('RybakDigitalUserBundle:User');
    //     $this->assertTrue(is_a($repository->getUserByUsernameOrValidEmail('jane'), User::class));
    // }
}
