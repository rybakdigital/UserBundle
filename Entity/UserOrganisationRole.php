<?php

namespace RybakDigital\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use RybakDigital\Bundle\UserBundle\Entity\User;
use RybakDigital\Bundle\UserBundle\Entity\Organisation;
use RybakDigital\Bundle\UserBundle\Entity\Role;
use Ucc\Model\ModelInterface;
use Ucc\Model\Traits\AutoMappable;

/**
 * RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRole
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 * @ORM\Table(name="acl_user_organisation_roles")
 * @ORM\Entity(repositoryClass="RybakDigital\Bundle\UserBundle\Entity\UserOrganisationRoleRepository")
 */
class UserOrganisationRole implements ModelInterface
{
    use AutoMappable;

    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="uors")
     * @ORM\Id
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="Organisation", inversedBy="uors")
     * @ORM\Id
     * @ORM\JoinColumn(name="organisation_id", referencedColumnName="id")
     */
    private $organisation;

    /**
     * @ORM\ManyToOne(targetEntity="Role", inversedBy="uors")
     * @ORM\Id
     * @ORM\JoinColumn(name="role_id", referencedColumnName="id")
     */
    private $role;

    /**
     * Get user
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param   User     $user
     * @return  UserOrganisationRole
     */
    public function setUser(User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return Organisation
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Set organisation
     *
     * @param   Organisation     $organisation
     * @return  UserOrganisationRole
     */
    public function setOrganisation(Organisation $organisation)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get role
     *
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set role
     *
     * @param   role     $role
     * @return  UserOrganisationRole
     */
    public function setRole(Role $role)
    {
        $this->role = $role;

        return $this;
    }
}
