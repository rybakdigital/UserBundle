<?php

namespace RybakDigital\Bundle\UserBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use RybakDigital\Bundle\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;

/**
 * RybakDigital\Bundle\UserBundle\Event\UserPasswordResetRequestEvent
 *
 * The user.password.reset.request event is dispatched each time a request to rest user password is made
 * in the system.
 *
 * It contains User object for whom to change password and the Request object that it was meade with
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
class UserPasswordResetRequestEvent extends Event
{
    const NAME = 'user.password.reset.request';

    protected $user;

    protected $request;

    public function __construct(User $user, Request $request)
    {
        $this->user     = $user;
        $this->request  = $request;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getRequest()
    {
        return $this->request;
    }
}
