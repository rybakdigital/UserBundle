<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Email;
use RybakDigital\Bundle\UserBundle\Entity\User;

class EmailTest extends TestCase
{
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
    //     $email = new Email;
    //     $this->assertTrue(is_a($email->setId($id), Email::class));
    //     $this->assertSame($id, $email->getId());
    // }

    // public function emailProvider()
    // {
    //     return array(
    //         ["jane.doe@example.com"],
    //         ["12345.jane.doe@email.com"],
    //     );
    // }

    // /**
    //  * @dataProvider emailProvider
    //  */
    // public function testEmailPass($emailAddress)
    // {
    //     $email = new Email;
    //     $this->assertTrue(is_a($email->setEmail($emailAddress), Email::class));
    //     $this->assertSame($emailAddress, $email->getEmail());
    // }

    // public function datetimeProvider()
    // {
    //     return array(
    //         [new \Datetime()],
    //         [new \Datetime("yesterday")],
    //     );
    // }

    // /**
    //  * @dataProvider datetimeProvider
    //  */
    // public function testCreatedAtPass($createdAt)
    // {
    //     $email = new Email;
    //     $this->assertTrue(is_a($email->setCreatedAt($createdAt), Email::class));
    //     $this->assertSame($createdAt, $email->getCreatedAt());
    // }

    // /**
    //  * @dataProvider datetimeProvider
    //  */
    // public function testValidatedAtPass($validatedAt)
    // {
    //     $email = new Email;
    //     $this->assertTrue(is_a($email->setValidatedAt($validatedAt), Email::class));
    //     $this->assertSame($validatedAt, $email->getValidatedAt());
    // }

    // public function validationTokenProvider()
    // {
    //     return array(
    //         ["4564564dsgsd5g45sd4g65ds"],
    //         ["87523hjhdsjJHFJSH83hj23h"],
    //         [12345678945123454545454578],
    //     );
    // }

    // /**
    //  * @dataProvider validationTokenProvider
    //  */
    // public function testValidationTokenPass($validationToken)
    // {
    //     $email = new Email;
    //     $this->assertTrue(is_a($email->setValidationToken($validationToken), Email::class));
    //     $this->assertSame($validationToken, $email->getValidationToken());
    // }

    // public function isValidProvider()
    // {
    //     return array(
    //         [1],
    //         [true],
    //         [false],
    //         [0],
    //         [null],
    //         [2]
    //     );
    // }

    // /**
    //  * @dataProvider isValidProvider
    //  */
    // public function testIsValidPass($isValid)
    // {
    //     $email = new Email;
    //     $this->assertTrue(is_a($email->setIsValid($isValid), Email::class));
    //     $this->assertSame((boolean) $isValid, $email->getIsValid());
    // }

    // public function userProvider()
    // {
    //     return array(
    //         [new User()],
    //         [null],
    //         [(new User())->setId(12)],
    //     );
    // }

    // /**
    //  * @dataProvider userProvider
    //  */
    // public function testUserPass($user)
    // {
    //     $email = new Email;
    //     $this->assertTrue(is_a($email->setUser($user), Email::class));
    //     $this->assertSame($user, $email->getUser());
    // }
}
