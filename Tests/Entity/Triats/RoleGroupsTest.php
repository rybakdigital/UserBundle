<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity\Traits;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Role;
use RybakDigital\Bundle\UserBundle\Entity\Group;
use RybakDigital\Bundle\UserBundle\Entity\Traits\RoleGroups;
use RybakDigital\Bundle\UserBundle\Tests\Entity\RoleTest;
use RybakDigital\Bundle\UserBundle\Tests\Entity\GroupTest;

class RoleGroupsTest extends TestCase
{
    // public function testAddGroup()
    // {
    //     $role   = new Role;
    //     $group  = new Group;
    //     $role->addGroup($group);
    //     $this->assertContains(RoleGroups::class, class_uses($role));
    //     $this->assertTrue($role->getGroups()->contains($group));
    // }

    // public function removeGroupProvider()
    // {
    //     for ($i=0; $i < 5; $i++) {
    //         $role = RoleTest::generateRole();
    //         for ($i=0; $i < 5; $i++) {
    //             $group = GroupTest::generateGroup();
    //             $role->addGroup($group);
    //         }
    //         $data[] = array($role, $group);
    //     }

    //     return $data;
    // }

    // /**
    //  * @dataProvider removeGroupProvider
    //  */
    // public function testRemoveGroup($role, $group)
    // {
    //     $this->assertTrue(is_a($role->removeGroup($group), Role::class));
    //     $this->assertContains(RoleGroups::class, class_uses($role));
    //     $this->assertFalse($role->getGroups()->contains($group));
    // }
}
