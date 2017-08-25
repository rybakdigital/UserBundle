<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Role as Base_Role;
use RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Utils\Basic;

class RoleTest extends TestCase
{
    public function idProvider()
    {
        $array = array();

        foreach (Basic::integerIdProvider() as $id) {
            array_push($array, array($id));
        }

        return $array;
    }

    /**
     * @dataProvider idProvider
     */
    public function testSetGetId($id)
    {
        $role = new Base_Role;

        $this->assertTrue(is_a($role->setId($id), Base_Role::class));
        $this->assertSame($id, $role->getId());
    }

    // public function testConstructor()
    // {
    //     $role = new Role;
    //     $this->assertTrue(is_a($role->getGroups(), ArrayCollection::class));
    //     $this->assertTrue(is_a($role->getUors(), ArrayCollection::class));
    // }

    // public function idProvider()
    // {
    //     return array(
    //         [1],[17],[255],[9876542],["abc"],["abc-123-uuid"]
    //     );
    // }

    // /**
    //  * @dataProvider idProvider
    //  */
    // public function testIdPass($id)
    // {
    //     $role = new Role;
    //     $this->assertTrue(is_a($role->setId($id), Role::class));
    //     $this->assertSame($id, $role->getId());
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
    //     $role = new Role;
    //     $this->assertTrue(is_a($role->setName($name), Role::class));
    //     $this->assertSame($name, $role->getName());
    // }

    // public function roleProvider()
    // {
    //     return array(
    //         ['1'],['abc'],['Super Org'],['Some name with 4642$&^@&%^&$%']
    //     );
    // }

    // /**
    //  * @dataProvider roleProvider
    //  */
    // public function testRolePass($name)
    // {
    //     $role = new Role;
    //     $this->assertTrue(is_a($role->setRole($name), Role::class));
    //     $this->assertSame($name, $role->getRole());
    // }

    // public function addGroupProvider()
    // {
    //     for ($i=0; $i < 10; $i++) { 
    //         $data[] = array(GroupTest::generateGroup());
    //     }

    //     return $data;
    // }

    // /**
    //  * @dataProvider addGroupProvider
    //  */
    // public function testAddGroupPass($group)
    // {
    //     $role = new Role;
    //     $this->assertTrue(is_a($role->addGroup($group), Role::class));
    //     $this->assertTrue($role->getGroups()->contains($group));
    // }

    // public function removeGroupProvider()
    // {
    //     for ($i=0; $i < 5; $i++) {
    //         $role = $this->generateRole();
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
    // public function testRemoveGroupPass($role, $group)
    // {
    //     $this->assertTrue(is_a($role->removeGroup($group), Role::class));
    //     $this->assertFalse($role->getGroups()->contains($group));
    // }

    // /**
    //  * @return Role
    //  */
    // public static function generateRole()
    // {
    //     $role = new Role;
    //     $role
    //         ->setId(rand(1000,9000) + rand(1000,9000))
    //         ->setName('Role name with privalages of' . rand(1,100))
    //         ->setRole('ROLE_' . rand(1,9000) . '_' . rand(1,9000));

    //     return $role;
    // }
}
