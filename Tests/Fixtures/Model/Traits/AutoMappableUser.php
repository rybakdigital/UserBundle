<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits;

use RybakDigital\Bundle\UserBundle\Model\Traits\AutoMappable;
use RybakDigital\Bundle\UserBundle\Model\ModelInterface;
use RybakDigital\Bundle\UserBundle\Entity\User;

/**
 * RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits\AutoMappableUser
 */
class AutoMappableUser extends User implements ModelInterface
{
    use AutoMappable;
}
