<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity\Traits;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Organisation;
use RybakDigital\Bundle\UserBundle\Entity\Traits\OrganisationUserOrganisationRole;
use RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRole;

class OrganisationUserOrganisationRoleTest extends TestCase
{
    public function addUorProvider()
    {
        $data = array(
            array(new UserOrganisationRole())
        );

        return $data;
    }

    /**
     * @dataProvider addUorProvider
     */
    public function testAddUor($uor)
    {
        $org = new Organisation;
        $org->addUor($uor);
        $this->assertContains(OrganisationUserOrganisationRole::class, class_uses($org));
        $this->assertTrue($org->getUors()->contains($uor));
    }
}
