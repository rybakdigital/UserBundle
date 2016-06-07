<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use RybakDigital\Bundle\UserBundle\Entity\User;


class UserTest extends WebTestCase
{
    public function testInterfaces()
    {
        $user = new User();

        $this->assertTrue(is_a($user, 'Symfony\Component\Security\Core\User\AdvancedUserInterface'));
        $this->assertTrue(is_a($user, 'Symfony\Component\Security\Core\User\UserInterface'));
        $this->assertTrue(is_a($user, 'Serializable'));
    }
}
