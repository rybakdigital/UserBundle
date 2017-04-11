<?php

namespace RybakDigital\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Security\Core\Role\RoleInterface;
use RybakDigital\Bundle\UserBundle\Entity\Traits\RoleUserOrganisationRole;
use RybakDigital\Bundle\UserBundle\Entity\Traits\RoleGroups;
use Ucc\Model\ModelInterface;
use Ucc\Model\Traits\AutoMappable;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Role
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 * @ORM\Table(name="acl_roles")
 * @ORM\Entity(repositoryClass="RybakDigital\Bundle\UserBundle\Entity\RoleRepository")
 */
class Role implements RoleInterface, ModelInterface
{
    use RoleUserOrganisationRole;
    use AutoMappable;

    /**
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=128)
     */
    private $name;

    /**
     * @ORM\Column(name="role", type="string", length=128, unique=true)
     */
    private $role;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->groups   = new ArrayCollection();
        $this->uors     = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param   integer     $id
     * @return  Role
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Role
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set role
     *
     * @param string $role
     * @return Role
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }
}
