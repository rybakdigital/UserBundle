<?php
namespace RybakDigital\Bundle\UserBundle\Entity\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\Traits\UserOrganisationRole as UserOrganisationRoleTriat;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Traits\RoleUserOrganisationRole
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
trait RoleUserOrganisationRole {
    use UserOrganisationRoleTriat;

    /**
     * @ORM\OneToMany(targetEntity="UserOrganisationRole", mappedBy="role")
     */
    private $uors;

    /**
     * Add uor
     *
     * @param   UserOrganisationRole     $uor
     * @return  Role
     */
    public function addUor(UserOrganisationRole $uor)
    {
        $this->uors[] = $uor;

        $uor->setRole($this);

        return $this;
    }
}
