<?php
namespace RybakDigital\Bundle\UserBundle\Entity\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\Role;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Traits\GroupRoles
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
trait GroupRoles {
    /**
     * @ORM\ManyToMany(targetEntity="Role", inversedBy="groups")
     * @ORM\JoinTable(name="acl_roles_to_groups")
     */
    private $roles;

    /**
     * Add role
     *
     * @param Role $role
     * @return Group
     */
    public function addRole(Role $role)
    {
        $this->roles[] = $role;

        return $this;
    }

    /**
     * Remove role
     *
     * @param Role $role
     */
    public function removeRole(Role $role)
    {
        $this->roles->removeElement($role);

        return $this;
    }

    /**
     * Get roles
     *
     * @return ArrayCollection
     */
    public function getRoles()
    {
        return $this->roles;
    }
}
