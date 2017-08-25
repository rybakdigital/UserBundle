<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Organisation as Base_Organisation;
use RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Utils\Basic;

class OrganisationTest extends TestCase
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
        $organisation = new Base_Organisation;

        $this->assertTrue(is_a($organisation->setId($id), Base_Organisation::class));
        $this->assertSame($id, $organisation->getId());
    }

    // public function testConstructor()
    // {
    //     $org = new Organisation;
    //     $this->assertTrue(is_a($org->getChildren(), ArrayCollection::class));
    //     $this->assertTrue(is_a($org->getParents(), ArrayCollection::class));
    //     $this->assertTrue(is_array($org->getAncestors()));
    //     $this->assertTrue(is_array($org->getDescendants()));
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
    //     $org = new Organisation;
    //     $this->assertTrue(is_a($org->setId($id), Organisation::class));
    //     $this->assertSame($id, $org->getId());
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
    //     $org = new Organisation;
    //     $this->assertTrue(is_a($org->setName($name), Organisation::class));
    //     $this->assertSame($name, $org->getName());
    // }

    // public function namespaceProvider()
    // {
    //     return array(
    //         array('Organisation 123', 'organisation123'),
    //         array('Bradley-Dyer-Media', 'bradleydyermedia'),
    //         array('Bradley DyerMedia', 'bradleydyermedia'),
    //         array('!@£$%^&*()-_A', 'a'),
    //         array('ABCDE', 'abcde'),
    //     );
    // }

    // /**
    //  * @dataProvider namespaceProvider
    //  */
    // public function testNamespacePass($namespace, $expected)
    // {
    //     $org = new Organisation;
    //     $this->assertTrue(is_a($org->setNamespace($namespace), Organisation::class));
    //     $this->assertSame($expected, $org->getNamespace());
    // }

    // public function descriptionProvider()
    // {
    //     return array(
    //         ['1 2 3 4 5 6 7'],['abc'],['Super Org'],['Some name with 4642$&^@&%^&$%']
    //     );
    // }

    // /**
    //  * @dataProvider descriptionProvider
    //  */
    // public function testDescriptionPass($description)
    // {
    //     $org = new Organisation;
    //     $this->assertTrue(is_a($org->setDescription($description), Organisation::class));
    //     $this->assertSame($description, $org->getDescription());
    // }

    // public function parentOrgProvider()
    // {
    //     $data = array(
    //         [new Organisation()],
    //         [(new Organisation)->setId(1)],
    //         [(new Organisation)->setId(1)->setName('abc')],
    //     );

    //     return $data;
    // }

    // /**
    //  * @dataProvider parentOrgProvider
    //  */
    // public function testAddParent($parent)
    // {
    //     $org = new Organisation;
    //     $this->assertTrue(is_a($org->addParent($parent), Organisation::class));
    //     $this->assertTrue($org->getParents()->contains($parent));
    // }

    // public function removeParentOrgProvider()
    // {
    //     $org = new Organisation;
    //     $org
    //         ->setId(1)
    //         ->setName('abc');

    //     $parent1 = new Organisation();
    //     $parent2 = (new Organisation)->setId(1);
    //     $parent3 = (new Organisation)->setId(1)->setName('abc');

    //     $org
    //         ->addParent($parent1)
    //         ->addParent($parent2)
    //         ->addParent($parent3);


    //     $data = array(
    //         [$org, new Organisation()],
    //         [$org, (new Organisation)->setId(1)],
    //         [$org, (new Organisation)->setId(1)->setName('abc')],
    //     );

    //     return $data;
    // }

    // /**
    //  * @dataProvider removeParentOrgProvider
    //  */
    // public function testRemoveParent($org, $parent)
    // {
    //     $this->assertTrue(is_a($org->removeParent($parent), Organisation::class));
    //     $this->assertFalse($org->getParents()->contains($parent));
    // }

    // public function childOrgProvider()
    // {
    //     $data = array(
    //         [new Organisation()],
    //         [(new Organisation)->setId(1)],
    //         [(new Organisation)->setId(1)->setName('abc')],
    //     );

    //     return $data;
    // }

    // /**
    //  * @dataProvider childOrgProvider
    //  */
    // public function testAddChild($child)
    // {
    //     $org = new Organisation;
    //     $this->assertTrue(is_a($org->addChild($child), Organisation::class));
    //     $this->assertTrue($org->getChildren()->contains($child));
    // }

    // public function removeChildOrgProvider()
    // {
    //     $org = new Organisation;
    //     $org
    //         ->setId(1)
    //         ->setName('abc');

    //     $parent1 = new Organisation();
    //     $parent2 = (new Organisation)->setId(1);
    //     $parent3 = (new Organisation)->setId(1)->setName('abc');

    //     $org
    //         ->addParent($parent1)
    //         ->addParent($parent2)
    //         ->addParent($parent3);


    //     $data = array(
    //         [$org, new Organisation()],
    //         [$org, (new Organisation)->setId(1)],
    //         [$org, (new Organisation)->setId(1)->setName('abc')],
    //     );

    //     return $data;
    // }

    // /**
    //  * @dataProvider removeChildOrgProvider
    //  */
    // public function testRemoveChild($org, $child)
    // {
    //     $this->assertTrue(is_a($org->removeChild($child), Organisation::class));
    //     $this->assertFalse($org->getChildren()->contains($child));
    // }

    // public function descendantsProvider()
    // {
    //     $data = array();

    //     $org = $this->generateOrganisation();

    //     $descendents = array(
    //         $this->generateOrganisation(), // 0
    //         $this->generateOrganisation(), // 1
    //         $this->generateOrganisation(), // 2
    //         $this->generateOrganisation(), // 3
    //         $this->generateOrganisation(), // 4
    //         $this->generateOrganisation(), // 5
    //         $this->generateOrganisation(), // 6
    //         $this->generateOrganisation(), // 7
    //     );

    //     $descendents[0]->addChild($descendents[3]); // Level 2
    //     $descendents[0]->addChild($descendents[4]);
    //     $descendents[0]->addChild($descendents[5]);
    //     $descendents[0]->addChild($descendents[6]);
    //     $descendents[1]->addChild($descendents[6]);
    //     $descendents[3]->addChild($descendents[7]); // Level 3

    //     $org
    //         ->addChild($descendents[0]) // Level 1
    //         ->addChild($descendents[1])
    //         ->addChild($descendents[2]);

    //     $data[] = array($org, $descendents);

    //     return $data;
    // }

    // /**
    //  * @dataProvider descendantsProvider
    //  */
    // public function testGetDescendants($org, $descendents)
    // {
    //     $this->assertTrue(is_array($org->getDescendants()));
    //     $this->assertSame(count($org->getDescendants()), count($descendents));
    // }

    // public function ancestorsProvider()
    // {
    //     $data = array();

    //     $org = $this->generateOrganisation();

    //     $ancestors = array(
    //         $this->generateOrganisation(), // 0
    //         $this->generateOrganisation(), // 1
    //         $this->generateOrganisation(), // 2
    //         $this->generateOrganisation(), // 3
    //         $this->generateOrganisation(), // 4
    //         $this->generateOrganisation(), // 5
    //         $this->generateOrganisation(), // 6
    //         $this->generateOrganisation(), // 7
    //     );

    //     $ancestors[0]->addParent($ancestors[3]); // Level 2
    //     $ancestors[0]->addParent($ancestors[4]);
    //     $ancestors[0]->addParent($ancestors[5]);
    //     $ancestors[0]->addParent($ancestors[6]);
    //     $ancestors[1]->addParent($ancestors[6]);
    //     $ancestors[3]->addParent($ancestors[7]); // Level 3

    //     $org
    //         ->addParent($ancestors[0]) // Level 1
    //         ->addParent($ancestors[1])
    //         ->addParent($ancestors[2]);

    //     $data[] = array($org, $ancestors);

    //     return $data;
    // }

    // /**
    //  * @dataProvider ancestorsProvider
    //  */
    // public function testGetAncestors($org, $ancestors)
    // {
    //     $this->assertTrue(is_array($org->getAncestors()));
    //     $this->assertSame(count($org->getAncestors()), count($ancestors));
    // }

    // /**
    //  * @return Organisation
    //  */
    // private function generateOrganisation()
    // {
    //     $org = new Organisation;
    //     $org
    //         ->setId(rand(1000,9000) + rand(1000,9000))
    //         ->setName('Org name ' . rand(1,100))
    //         ->setNamespace($this->getName())
    //         ->setDescription('Description of ' . rand(1,100));

    //     return $org;
    // }
}
