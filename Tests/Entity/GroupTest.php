<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\Group;

class GroupTest extends TestCase
{
    public function testConstructor()
    {
        $group = new Group;
        $this->assertTrue(is_a($group->getChildren(), ArrayCollection::class));
    }

    public function idProvider()
    {
        return array(
            [1],[17],[255],[9876542]
        );
    }

    /**
     * @dataProvider idProvider
     */
    public function testIdPass($id)
    {
        $group = new Group;
        $this->assertTrue(is_a($group->setId($id), Group::class));
        $this->assertSame($id, $group->getId());
    }

    public function idFailProvider()
    {
        return array(
            ['ab'],[array()],[new \StdClass],['12345'],
        );
    }

    /**
     * @dataProvider idFailProvider
     * @expectedException InvalidArgumentException
     */
    public function testIdFail($id)
    {
        $group = new Group;
        $this->assertTrue(is_a($group->setId($id), Group::class));
    }

    public function nameProvider()
    {
        return array(
            ['1'],['abc'],['Super Org'],['Some name with 4642$&^@&%^&$%']
        );
    }

    /**
     * @dataProvider nameProvider
     */
    public function testNamePass($name)
    {
        $group = new Group;
        $this->assertTrue(is_a($group->setName($name), Group::class));
        $this->assertSame($name, $group->getName());
    }

    public function descriptionProvider()
    {
        return array(
            ['1 2 3 4 5 6 7'],['abc'],['Super group'],['Some name with 4642$&^@&%^&$%']
        );
    }

    /**
     * @dataProvider descriptionProvider
     */
    public function testDescriptionPass($description)
    {
        $group = new Group;
        $this->assertTrue(is_a($group->setDescription($description), Group::class));
        $this->assertSame($description, $group->getDescription());
    }

    public function parentGroupProvider()
    {
        for ($i=0; $i < 10; $i++) { 
            $data[] = array($this->generateGroup());
        }

        return $data;
    }

    /**
     * @dataProvider parentGroupProvider
     */
    public function testSetParent($parent)
    {
        $group = new Group;
        $this->assertTrue(is_a($group->setParent($parent), Group::class));
        $this->assertSame($group->getParent(), $parent);
    }

    public function childGroupProvider()
    {
        for ($i=0; $i < 10; $i++) { 
            $data[] = array($this->generateGroup());
        }

        return $data;
    }

    /**
     * @dataProvider childGroupProvider
     */
    public function testAddChild($child)
    {
        $group = new Group;
        $this->assertTrue(is_a($group->addChild($child), Group::class));
        $this->assertTrue($group->getChildren()->contains($child));
    }

    public function removeChildGroupProvider()
    {
        for ($i=0; $i < 5; $i++) {
            $group = $this->generateGroup();
            for ($i=0; $i < 5; $i++) {
                $child = $this->generateGroup();
                $group->addChild($child);
            }
            $data[] = array($group, $child);
        }

        return $data;
    }

    /**
     * @dataProvider removeChildGroupProvider
     */
    public function testRemoveChild($group, $child)
    {
        $this->assertTrue(is_a($group->removeChild($child), Group::class));
        $this->assertFalse($group->getChildren()->contains($child));
    }

    /**
     * @return Group
     */
    private function generateGroup()
    {
        $group = new Group;
        $group
            ->setId(rand(1000,9000) + rand(1000,9000))
            ->setName('Group name ' . rand(1,100))
            ->setDescription('Description of Group ' . rand(1,100));

        return $group;
    }
}
