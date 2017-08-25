<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity\Traits;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Traits\UserOrganisationRole;
use RybakDigital\Bundle\UserBundle\Entity\Role;
use RybakDigital\Bundle\UserBundle\Entity\User;
use RybakDigital\Bundle\UserBundle\Entity\Organisation;
use RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRole as Uor;

class UserOrganisationRoleTest extends TestCase
{
    // public function addUorProvider()
    // {
    //     $data = array(
    //         array(new Role(), new Uor()),
    //         array(new User(), new Uor()),
    //         array(new Organisation(), new Uor()),
    //     );

    //     return $data;
    // }

    // /**
    //  * @dataProvider addUorProvider
    //  */
    // public function testRemoveUor($parent, $uor)
    // {
    //     $this->assertTrue(is_a($parent->removeUor($uor), get_class($parent)));
    //     $this->assertFalse($parent->getUors()->contains($uor));
    // }
}
