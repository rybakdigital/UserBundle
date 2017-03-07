<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits;

use Ucc\Model\Traits\AutoMappable;
use Ucc\Model\ModelInterface;
use RybakDigital\Bundle\UserBundle\Entity\Role;

/**
 * RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits\AutoMappableUser
 */
class AutoMappableRole extends Role implements ModelInterface
{
    use AutoMappable;
}
