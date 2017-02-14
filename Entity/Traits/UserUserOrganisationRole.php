<?php
namespace RybakDigital\Bundle\UserBundle\Entity\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\Traits\UserOrganisationRole as UserOrganisationRoleTriat;
use RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRole as Uor;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Traits\UserUserOrganisationRole
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
trait UserUserOrganisationRole {
    use UserOrganisationRoleTriat;

    /**
     * @ORM\OneToMany(targetEntity="UserOrganisationRole", mappedBy="user", cascade={"persist", "remove"})
     */
    private $uors;

    /**
     * Add uor
     *
     * @param   UserOrganisationRole     $uor
     * @return  User
     */
    public function addUor(Uor $uor)
    {
        $this->uors[] = $uor;

        $uor->setUser($this);

        return $this;
    }
}
