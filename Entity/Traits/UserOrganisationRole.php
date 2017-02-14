<?php
namespace RybakDigital\Bundle\UserBundle\Entity\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRole as Uor;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Traits\UserOrganisationRole
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
trait UserOrganisationRole {
    /**
     * Get uors
     *
     * @return UserOrganisationRole
     */
    public function getUors()
    {
        return $this->uors;
    }

    /**
     * Remove uor
     *
     * @param   UserOrganisationRole $uor
     * @return  UserOrganisationRole
     */
    public function removeUor(Uor $uor)
    {
        $this->uors->removeElement($uor);

        return $this;
    }
}
