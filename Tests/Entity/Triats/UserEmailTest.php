<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Entity\Traits;

use \PHPUnit_Framework_TestCase as TestCase;
use RybakDigital\Bundle\UserBundle\Entity\Email;
use RybakDigital\Bundle\UserBundle\Entity\User;
use RybakDigital\Bundle\UserBundle\Entity\Traits\UserEmail;
use Doctrine\Common\Collections\ArrayCollection;

class UserEmailTest extends TestCase
{
    // public function testGetEmails()
    // {
    //     $user = new User();
    //     $this->assertTrue(is_a($user->getEmails(), ArrayCollection::class));
    // }

    // public function emailProvider()
    // {
    //     return array(
    //         [new Email()],
    //         [(new Email())->setEmail('abc@example.com')],
    //     );
    // }

    // /**
    //  * @dataProvider emailProvider
    //  */
    // public function testAddEmail($email)
    // {
    //     $user = new User();
    //     $this->assertTrue(is_a($user->addEmail($email), User::class));
    //     $this->assertTrue($user->getEmails()->contains($email));
    // }

    // public function userEmailProvider()
    // {
    //     $data   = array();
    //     $user   = new User();
    //     $email  = (new Email())->setEmail('abc@example.com');
    //     $user
    //         ->addEmail($email)
    //         ->addEmail(new Email());

    //     return array(
    //         [$user, $email],
    //     );
    // }

    // /**
    //  * @dataProvider userEmailProvider
    //  */
    // public function testRemoveEmail($user, $email)
    // {
    //     $this->assertTrue(is_a($user->removeEmail($email), User::class));
    //     $this->assertFalse($user->getEmails()->contains($email));
    // }

    // public function primaryEmailProvider()
    // {
    //     $data   = array();
    //     $user   = new User();
    //     $email  = (new Email())->setEmail('abc@example.com');
    //     $user
    //         ->addEmail($email)
    //         ->addEmail(new Email());

    //     $user2   = new User();
    //     $email2  = (new Email())->setEmail('abc@example.com');
    //     $primaryEmail  = (new Email())->setEmail('def@example.com');
    //     $user2
    //         ->addEmail($email2)
    //         ->addEmail(new Email())
    //         ->setPrimaryEmail($primaryEmail);

    //     return array(
    //         [$user, $email],
    //         [$user2, $primaryEmail],
    //     );
    // }

    // /**
    //  * @dataProvider primaryEmailProvider
    //  */
    // public function testGetPrimaryEmail($user, $email)
    // {
    //     $this->assertSame($email, $user->getPrimaryEmail());
    // }
}
