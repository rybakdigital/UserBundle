<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Organisation;
use Doctrine\Common\Collections\ArrayCollection;

class OrganisationTest extends TestCase
{
    public function testConstructor()
    {
        $org = new Organisation;
        $this->assertTrue(is_a($org->getChildren(), ArrayCollection::class));
        $this->assertTrue(is_a($org->getParents(), ArrayCollection::class));
        $this->assertTrue(is_array($org->getAncestors()));
        $this->assertTrue(is_array($org->getDescendants()));
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
        $org = new Organisation;
        $this->assertTrue(is_a($org->setId($id), Organisation::class));
        $this->assertSame($id, $org->getId());
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
        $org = new Organisation;
        $this->assertTrue(is_a($org->setId($id), Organisation::class));
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
        $org = new Organisation;
        $this->assertTrue(is_a($org->setName($name), Organisation::class));
        $this->assertSame($name, $org->getName());
    }

    public function descriptionProvider()
    {
        return array(
            ['1 2 3 4 5 6 7'],['abc'],['Super Org'],['Some name with 4642$&^@&%^&$%']
        );
    }

    /**
     * @dataProvider descriptionProvider
     */
    public function testDescriptionPass($description)
    {
        $org = new Organisation;
        $this->assertTrue(is_a($org->setDescription($description), Organisation::class));
        $this->assertSame($description, $org->getDescription());
    }

    public function parentOrgProvider()
    {
        $data = array(
            [new Organisation()],
            [(new Organisation)->setId(1)],
            [(new Organisation)->setId(1)->setName('abc')],
        );

        return $data;
    }

    /**
     * @dataProvider parentOrgProvider
     */
    public function testAddParent($parent)
    {
        $org = new Organisation;
        $this->assertTrue(is_a($org->addParent($parent), Organisation::class));
        $this->assertTrue($org->getParents()->contains($parent));
    }

    public function removeParentOrgProvider()
    {
        $org = new Organisation;
        $org
            ->setId(1)
            ->setName('abc');

        $parent1 = new Organisation();
        $parent2 = (new Organisation)->setId(1);
        $parent3 = (new Organisation)->setId(1)->setName('abc');

        $org
            ->addParent($parent1)
            ->addParent($parent2)
            ->addParent($parent3);


        $data = array(
            [$org, new Organisation()],
            [$org, (new Organisation)->setId(1)],
            [$org, (new Organisation)->setId(1)->setName('abc')],
        );

        return $data;
    }

    /**
     * @dataProvider removeParentOrgProvider
     */
    public function testRemoveParent($org, $parent)
    {
        $this->assertTrue(is_a($org->removeParent($parent), Organisation::class));
        $this->assertFalse($org->getParents()->contains($parent));
    }

    public function childOrgProvider()
    {
        $data = array(
            [new Organisation()],
            [(new Organisation)->setId(1)],
            [(new Organisation)->setId(1)->setName('abc')],
        );

        return $data;
    }

    /**
     * @dataProvider childOrgProvider
     */
    public function testAddChild($child)
    {
        $org = new Organisation;
        $this->assertTrue(is_a($org->addChild($child), Organisation::class));
        $this->assertTrue($org->getChildren()->contains($child));
    }

    public function removeChildOrgProvider()
    {
        $org = new Organisation;
        $org
            ->setId(1)
            ->setName('abc');

        $parent1 = new Organisation();
        $parent2 = (new Organisation)->setId(1);
        $parent3 = (new Organisation)->setId(1)->setName('abc');

        $org
            ->addParent($parent1)
            ->addParent($parent2)
            ->addParent($parent3);


        $data = array(
            [$org, new Organisation()],
            [$org, (new Organisation)->setId(1)],
            [$org, (new Organisation)->setId(1)->setName('abc')],
        );

        return $data;
    }

    /**
     * @dataProvider removeChildOrgProvider
     */
    public function testRemoveChild($org, $child)
    {
        $this->assertTrue(is_a($org->removeChild($child), Organisation::class));
        $this->assertFalse($org->getChildren()->contains($child));
    }

    public function descendantsProvider()
    {
        $data = array();

        $org = $this->generateOrganisation();

        $descendents = array(
            $this->generateOrganisation(), // 0
            $this->generateOrganisation(), // 1
            $this->generateOrganisation(), // 2
            $this->generateOrganisation(), // 3
            $this->generateOrganisation(), // 4
            $this->generateOrganisation(), // 5
            $this->generateOrganisation(), // 6
            $this->generateOrganisation(), // 7
        );

        $descendents[0]->addChild($descendents[3]); // Level 2
        $descendents[0]->addChild($descendents[4]);
        $descendents[0]->addChild($descendents[5]);
        $descendents[0]->addChild($descendents[6]);
        $descendents[1]->addChild($descendents[6]);
        $descendents[3]->addChild($descendents[7]); // Level 3

        $org
            ->addChild($descendents[0]) // Level 1
            ->addChild($descendents[1])
            ->addChild($descendents[2]);

        $data[] = array($org, $descendents);

        return $data;
    }

    /**
     * @dataProvider descendantsProvider
     */
    public function testGetDescendants($org, $descendents)
    {
        $this->assertTrue(is_array($org->getDescendants()));
        $this->assertSame(count($org->getDescendants()), count($descendents));
    }

    public function ancestorsProvider()
    {
        $data = array();

        $org = $this->generateOrganisation();

        $descendents = array(
            $this->generateOrganisation(), // 0
            $this->generateOrganisation(), // 1
            $this->generateOrganisation(), // 2
            $this->generateOrganisation(), // 3
            $this->generateOrganisation(), // 4
            $this->generateOrganisation(), // 5
            $this->generateOrganisation(), // 6
            $this->generateOrganisation(), // 7
        );

        $descendents[0]->addParent($descendents[3]); // Level 2
        $descendents[0]->addParent($descendents[4]);
        $descendents[0]->addParent($descendents[5]);
        $descendents[0]->addParent($descendents[6]);
        $descendents[1]->addParent($descendents[6]);
        $descendents[3]->addParent($descendents[7]); // Level 3

        $org
            ->addParent($descendents[0]) // Level 1
            ->addParent($descendents[1])
            ->addParent($descendents[2]);

        $data[] = array($org, $descendents);

        return $data;
    }

    /**
     * @dataProvider ancestorsProvider
     */
    public function testGetAncestors($org, $ancestors)
    {
        $this->assertTrue(is_array($org->getAncestors()));
        $this->assertSame(count($org->getAncestors()), count($ancestors));
    }

    /**
     * @return Organisation
     */
    private function generateOrganisation()
    {
        $org = new Organisation;
        $org
            ->setId(rand(1,100) + 1)
            ->setName('Org name ' . rand(1,100))
            ->setDescription('Description of ' . rand(1,100));

        return $org;
    }
}
