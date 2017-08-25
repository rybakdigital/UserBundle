<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity\Traits;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Traits\UserUserOrganisationRole;
use RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRole;
use RybakDigital\Bundle\UserBundle\Entity\user;

class UserUserOrganisationRoleTest extends TestCase
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
    //     $user = new User;
    //     $user->addUor($uor);
    //     $this->assertContains(UserUserOrganisationRole::class, class_uses($user));
    //     $this->assertTrue($user->getUors()->contains($uor));
    // }
}
