<?php

namespace RybakDigital\Bundle\UserBundle\Doctrine;

use Doctrine\ORM\Id\AbstractIdGenerator;
use Doctrine\ORM\EntityManager;
use Ucc\Crypt\Hash;

/**
 * RybakDigital\Bundle\UserBundle\Doctrine\GuidGenerator
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
class GuidGenerator extends AbstractIdGenerator
{
    public function generate(EntityManager $em, $entity, $length = 11)
    {
        $entityName = $em->getClassMetadata(get_class($entity))->getName();

        // Number of times before random generator will give up
        $maxAttempts    = 100;
        $attempt        = 0;

        while (true) {
            $id = Hash::generateSalt($length, false);
            $item = $em->getRepository($entityName)->findOneByGuid($id);

            if (!$item) {
                return $id;
            }

            // Should we stop?
            $attempt++;

            if ($attempt > $maxAttempts) {
                throw new \Exception('RandomIdGenerator worked hardly, but failed to generate unique ID');
            }  
        }
    }
}
