<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Utils;

use Ucc\Crypt\Hash;

/**
 * RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Utils\Basic
 */
class Basic
{
    public static function integerIdProvider()
    {
        return array(
            123456,
            789456,
            123456789,
            987654321,
            1,
            2,
            12345678910111213,
        );
    }

    public static function stringProvider($count = 10, $min = 1, $max = 20, $base64 = false)
    {
        $array = array();

        for ($i=0; $i < $count; $i++) { 
            array_push($array, Hash::generateSalt(rand($min, $max), $base64));
        }

        return $array;
    }
}
