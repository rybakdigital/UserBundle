<?php

namespace RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits;

use RybakDigital\Bundle\UserBundle\Model\Traits\AutoMapable;
use RybakDigital\Bundle\UserBundle\Model\ModelInterface;
use RybakDigital\Bundle\UserBundle\Entity\User;

/**
 * RybakDigital\Bundle\UserBundle\Tests\Fixtures\Model\Traits\AutoMapableUser
 */
class AutoMapableUser extends User implements ModelInterface
{
    use AutoMapable;
}
