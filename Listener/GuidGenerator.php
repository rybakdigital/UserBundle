<?php

namespace RybakDigital\Bundle\UserBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use RybakDigital\Bundle\UserBundle\Entity\Email;
use RybakDigital\Bundle\UserBundle\Doctrine\GuidGenerator as Generator;

/**
 * RybakDigital\Bundle\UserBundle\Listener\GuidGenerator
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
class GuidGenerator
{
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        // only act on some "Email" entity
        if (!$entity instanceof Email) {
            return;
        }

        // Get Entity Manager
        $em = $args->getEntityManager();
        
        // Generate random Guid
        $guidGenerator = new Generator();
        $guid = $guidGenerator->generate($em, $entity);

        // Set Guid
        $entity->setGuid($guid);
    }
}
