<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\Group;
use RybakDigital\Bundle\UserBundle\Tests\Entity\RoleTest;

class GroupTest extends TestCase
{
    // public function testConstructor()
    // {
    //     $group = new Group;
    //     $this->assertTrue(is_a($group->getChildren(), ArrayCollection::class));
    //     $this->assertTrue(is_a($group->getRoles(), ArrayCollection::class));
    // }

    // public function idProvider()
    // {
    //     return array(
    //         [1],[17],[255],[9876542]
    //     );
    // }

    // /**
    //  * @dataProvider idProvider
    //  */
    // public function testIdPass($id)
    // {
    //     $group = new Group;
    //     $this->assertTrue(is_a($group->setId($id), Group::class));
    //     $this->assertSame($id, $group->getId());
    // }

    // public function nameProvider()
    // {
    //     return array(
    //         ['1'],['abc'],['Super Org'],['Some name with 4642$&^@&%^&$%']
    //     );
    // }

    // /**
    //  * @dataProvider nameProvider
    //  */
    // public function testNamePass($name)
    // {
    //     $group = new Group;
    //     $this->assertTrue(is_a($group->setName($name), Group::class));
    //     $this->assertSame($name, $group->getName());
    // }

    // public function descriptionProvider()
    // {
    //     return array(
    //         ['1 2 3 4 5 6 7'],['abc'],['Super group'],['Some name with 4642$&^@&%^&$%']
    //     );
    // }

    // /**
    //  * @dataProvider descriptionProvider
    //  */
    // public function testDescriptionPass($description)
    // {
    //     $group = new Group;
    //     $this->assertTrue(is_a($group->setDescription($description), Group::class));
    //     $this->assertSame($description, $group->getDescription());
    // }

    // public function parentGroupProvider()
    // {
    //     for ($i=0; $i < 10; $i++) { 
    //         $data[] = array($this->generateGroup());
    //     }

    //     return $data;
    // }

    // /**
    //  * @dataProvider parentGroupProvider
    //  */
    // public function testSetParent($parent)
    // {
    //     $group = new Group;
    //     $this->assertTrue(is_a($group->setParent($parent), Group::class));
    //     $this->assertSame($group->getParent(), $parent);
    // }

    // public function childGroupProvider()
    // {
    //     for ($i=0; $i < 10; $i++) { 
    //         $data[] = array($this->generateGroup());
    //     }

    //     return $data;
    // }

    // /**
    //  * @dataProvider childGroupProvider
    //  */
    // public function testAddChild($child)
    // {
    //     $group = new Group;
    //     $this->assertTrue(is_a($group->addChild($child), Group::class));
    //     $this->assertTrue($group->getChildren()->contains($child));
    // }

    // public function removeChildGroupProvider()
    // {
    //     for ($i=0; $i < 5; $i++) {
    //         $group = $this->generateGroup();
    //         for ($i=0; $i < 5; $i++) {
    //             $child = $this->generateGroup();
    //             $group->addChild($child);
    //         }
    //         $data[] = array($group, $child);
    //     }

    //     return $data;
    // }

    // /**
    //  * @dataProvider removeChildGroupProvider
    //  */
    // public function testRemoveChild($group, $child)
    // {
    //     $this->assertTrue(is_a($group->removeChild($child), Group::class));
    //     $this->assertFalse($group->getChildren()->contains($child));
    // }

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
    // }

    // public function removeRoleProvider()
    // {
    //     for ($i=0; $i < 5; $i++) {
    //         $group = $this->generateGroup();
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
    // }

    // /**
    //  * @return Group
    //  */
    // public static function generateGroup()
    // {
    //     $group = new Group;
    //     $group
    //         ->setId(rand(1000,9000) + rand(1000,9000))
    //         ->setName('Group name ' . rand(1,100))
    //         ->setDescription('Description of Group ' . rand(1,100));

    //     return $group;
    // }
}
