<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity\Traits;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Traits\RoleUserOrganisationRole;
use RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRole;
use RybakDigital\Bundle\UserBundle\Entity\Role;

class RoleUserOrganisationRoleTest extends TestCase
{
    // public function addUorProvider()
    // {
    //     $data = array(
    //         array(new UserOrganisationRole())
    //     );

    //     return $data;
    // }

    // /**
    //  * @dataProvider addUorProvider
    //  */
    // public function testAddUor($uor)
    // {
    //     $role = new Role;
    //     $role->addUor($uor);
    //     $this->assertContains(RoleUserOrganisationRole::class, class_uses($role));
    //     $this->assertTrue($role->getUors()->contains($uor));
    // }
}
