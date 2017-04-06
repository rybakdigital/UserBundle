<?php

namespace RybakDigital\Bundle\UserBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use RybakDigital\Bundle\UserBundle\Entity\User;
use RybakDigital\Bundle\UserBundle\Entity\Email;

/**
 * RybakDigital\Bundle\UserBundle\Event\UserEmailAddedEvent
 *
 * The user.email.added event is dispatched each time a new email has been added to User
 *
 * It contains User object for whom to add new Email object and the Email itself
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
class UserEmailAddedEvent extends Event
{
    const NAME = 'user.email.added';

    protected $user;

    protected $email;

    public function __construct(User $user, Email $email)
    {
        $this->user     = $user;
        $this->email    = $email;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getEmail()
    {
        return $this->email;
    }
}
