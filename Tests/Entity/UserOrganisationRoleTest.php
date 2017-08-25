<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\User;
use RybakDigital\Bundle\UserBundle\Entity\Organisation;
use RybakDigital\Bundle\UserBundle\Entity\Role;
use RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRole;

class UserOrganisationRoleTest extends TestCase
{
    // public function uorProvider()
    // {
    //     $data = array();

    //     $uor = new UserOrganisationRole();
    //     $data[] = array($uor);

    //     $uor = new UserOrganisationRole();
    //     $uor
    //         ->setRole(new Role());

    //     $data[] = array($uor);

    //     $uor = new UserOrganisationRole();
    //     $uor
    //         ->setOrganisation(new Organisation());

    //     $data[] = array($uor);

    //     $uor = new UserOrganisationRole();
    //     $uor
    //         ->setUser(new User());

    //     $data[] = array($uor);

    //     return $data;
    // }

    // /**
    //  * @dataProvider uorProvider
    //  */
    // public function testGetRole($uor)
    // {
    //     if (!is_null($uor->getRole())) {
    //         $this->assertTrue(is_a($uor->getRole(), Role::class));
    //     }
    // }

    // /**
    //  * @dataProvider uorProvider
    //  */
    // public function testGetOrganisation($uor)
    // {
    //     if (!is_null($uor->getOrganisation())) {
    //         $this->assertTrue(is_a($uor->getOrganisation(), Organisation::class));
    //     }
    // }

    // /**
    //  * @dataProvider uorProvider
    //  */
    // public function testGetUser($uor)
    // {
    //     if (!is_null($uor->getUser())) {
    //         $this->assertTrue(is_a($uor->getUser(), User::class));
    //     }
    // }
}
