<?php
namespace RybakDigital\Bundle\UserBundle\Entity\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\Group;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Traits\RoleGroups
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
trait RoleGroups {
    /**
     * @ORM\ManyToMany(targetEntity="Group", mappedBy="roles")
     */
    private $groups;

    /**
     * Add group
     *
     * @param Group $group
     * @return Role
     */
    public function addGroup(Group $group)
    {
        $this->groups[] = $group;

        return $this;
    }

    /**
     * Remove group
     *
     * @param   Group $group
     * @return  RoleGroups
     */
    public function removeGroup(Group $group)
    {
        $this->groups->removeElement($group);

        return $this;
    }

    /**
     * Get groups
     *
     * @return ArrayCollection
     */
    public function getGroups()
    {
        return $this->groups;
    }
}
