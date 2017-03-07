<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits;

use Ucc\Model\Traits\AutoMappable;
use Ucc\Model\ModelInterface;
use RybakDigital\Bundle\UserBundle\Entity\User;

/**
 * RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits\AutoMappableUser
 */
class AutoMappableUser extends User implements ModelInterface
{
    use AutoMappable;
}
