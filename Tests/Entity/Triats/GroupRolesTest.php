<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity\Traits;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Group;
use  RybakDigital\Bundle\UserBundle\Entity\Traits\GroupRoles;
use RybakDigital\Bundle\UserBundle\Tests\Entity\RoleTest;
use RybakDigital\Bundle\UserBundle\Tests\Entity\GroupTest;

class GroupRolesTest extends TestCase
{
    // public function addRoleProvider()
    // {
    //     for ($i=0; $i < 10; $i++) {
    //         $data[] = array(RoleTest::generateRole());
    //     }

    //     return $data;
    // }

    // /**
    //  * @dataProvider addRoleProvider
    //  */
    // public function testAddRole($role)
    // {
    //     $group = new Group;
    //     $this->assertTrue(is_a($group->addRole($role), Group::class));
    //     $this->assertTrue($group->getRoles()->contains($role));
    //     $this->assertContains(GroupRoles::class, class_uses($group));
    // }

    // public function removeRoleProvider()
    // {
    //     for ($i=0; $i < 5; $i++) {
    //         $group = GroupTest::generateGroup();
    //         for ($i=0; $i < 5; $i++) {
    //             $role = RoleTest::generateRole();
    //             $group->addRole($role);
    //         }
    //         $data[] = array($group, $role);
    //     }

    //     return $data;
    // }

    // /**
    //  * @dataProvider removeRoleProvider
    //  */
    // public function testRemoveRole($group, $role)
    // {
    //     $this->assertTrue(is_a($group->removeRole($role), Group::class));
    //     $this->assertFalse($group->getRoles()->contains($role));
    //     $this->assertContains(GroupRoles::class, class_uses($group));
    // }
}
