<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Model\Traits;

use \PHPUnit_Framework_TestCase as TestCase;

use RybakDigital\Bundle\UserBundle\Model\Traits\AutoMappable;
use RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits\AutoMappableUser;
use RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits\AutoMappableRole;

class AutoMapableTest extends TestCase
{
    public function testAutoMapableProvider()
    {
        $data = array();

        $array = array(
            'id'        => 1,
            'username'  => 'jane.doe',
            'firstName' => 'Jane',
        );

        $user = new AutoMappableUser;

        $data[] = array($user, $array);

        $array = array(
            'id'        => 1,
            'name'      => 'read users',
            'role'      => 'ROLE_READ_USERS',
        );

        $role = new AutoMappableRole;

        $data[] = array($role, $array);

        return $data;
    }

    /**
     * @dataProvider testAutoMapableProvider
     */
    public function testAutoMapableFromAndToArray($object, $expectedArray)
    {
        $stdObject = $object->fromArray($expectedArray);

        $this->assertTrue(is_object($stdObject));
        $array = $stdObject->toArray();

        foreach ($expectedArray as $key => $value) {
            if (isset($array[$key])) {
                $this->assertEquals($array[$key], $value);
            }
        }
    }

    public function testAutoMapableFromAndToJsonProvider()
    {
        $data = array();

        $user = new AutoMappableUser;
        $json = '{"id": 7, "username": "jane"}';

        $data[] = array($user, $json);

        $json = '{"id": 125, "name": "read", "role": "ROLE_READ"}';
        $role = new AutoMappableRole;

        $data[] = array($role, $json);

        return $data;
    }

    /**
     * @dataProvider testAutoMapableFromAndToJsonProvider
     */
    public function testAutoMapableFromAndToJson($object, $expectedJson)
    {
        $stdObject = $object->fromJson($expectedJson);
        $expectedArray = json_decode($expectedJson, true);

        $this->assertTrue(is_object($stdObject));
        $json   = $stdObject->toJson();
        $array  = json_decode($json, true);
        $this->assertTrue(is_string($json));

        foreach ($expectedArray as $key => $value) {
            if (isset($array[$key])) {
                $this->assertEquals($array[$key], $value);
            }
        }
    }

    public function testAutoMapableFromAndToObjectProvider()
    {
        $data = array();

        $user = new AutoMappableUser;
        $object = new \StdClass();
        $object->id = 7;
        $object->username = "jane.doe";
        $object->firstname= "Jane";

        $data[] = array($user, $object);

        return $data;
    }

    /**
     * @dataProvider testAutoMapableFromAndToObjectProvider
     */
    public function testAutoMapableFromAndToObject($object, $expectedObject)
    {
        $stdObject = $object->fromObject($expectedObject);

        $this->assertTrue(is_object($stdObject));
        $newObject = $stdObject->toObject();
        $this->assertTrue(is_object($newObject));
    }

    public function testCompareFromandToProvider()
    {
        $data = array(
            'id'        => 17,
            'username'  => 'jane.doe',
            'firstname' => 'Jane',
            'lastname'  => 'Doe',
            'salt'      => 'hsajhjkhfahjfa',
            'password'  => 'abc123',
        );

        return array(
            array($data, json_encode($data), (object) $data, new AutoMappableUser),
        );
    }

    /**
     * @dataProvider testCompareFromandToProvider
     */
    public function testCompareFromAndTo($array, $json, $objectData, $object)
    {
        $fromArrayObject    = $object->fromArray($array);
        $fromJsonObject     = $object->fromJson($json);
        $fromObjectObject   = $object->fromObject($objectData);

        $this->assertTrue(is_object($fromArrayObject));
        $this->assertTrue(is_object($fromJsonObject));
        $this->assertTrue(is_object($fromObjectObject));

        $this->assertEquals($fromArrayObject, $fromJsonObject);
        $this->assertEquals($fromObjectObject, $fromJsonObject);
        $this->assertEquals($fromObjectObject, $fromArrayObject);

        $this->assertEquals($fromArrayObject->toObject(), $fromJsonObject->toObject());
        $this->assertEquals($fromArrayObject->toObject(), $fromObjectObject->toObject());
        $this->assertEquals($fromJsonObject->toObject(), $fromObjectObject->toObject());

        $this->assertEquals($fromArrayObject->toJson(), $fromJsonObject->toJson());
        $this->assertEquals($fromArrayObject->toJson(), $fromObjectObject->toJson());
        $this->assertEquals($fromJsonObject->toJson(), $fromObjectObject->toJson());

        $this->assertEquals($fromArrayObject->toArray(), $fromJsonObject->toArray());
        $this->assertEquals($fromArrayObject->toArray(), $fromObjectObject->toArray());
        $this->assertEquals($fromJsonObject->toArray(), $fromObjectObject->toArray());
    }
}
