<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits;

use RybakDigital\Bundle\UserBundle\Model\Traits\AutoMappable;
use RybakDigital\Bundle\UserBundle\Model\ModelInterface;
use RybakDigital\Bundle\UserBundle\Entity\Role;

/**
 * RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits\AutoMappableUser
 */
class AutoMappableRole extends Role implements ModelInterface
{
    use AutoMappable;
}
