<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits;

use RybakDigital\Bundle\UserBundle\Model\Traits\AutoMapable;
use RybakDigital\Bundle\UserBundle\Model\ModelInterface;
use RybakDigital\Bundle\UserBundle\Entity\Role;

/**
 * RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits\AutoMapableUser
 */
class AutoMapableRole extends Role implements ModelInterface
{
    use AutoMapable;
}
