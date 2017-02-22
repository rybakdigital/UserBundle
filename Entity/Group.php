<?php

namespace RybakDigital\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use RybakDigital\Bundle\UserBundle\Entity\Traits\GroupRoles;
use RybakDigital\Bundle\UserBundle\Model\ModelInterface;
use RybakDigital\Bundle\UserBundle\Model\Traits\AutoMappable;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Group
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 * @ORM\Table(name="acl_groups")
 * @ORM\Entity(repositoryClass="RybakDigital\Bundle\UserBundle\Entity\GroupRepository")
 */
class Group implements ModelInterface
{
    use GroupRoles;
    use AutoMappable;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=64)
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="Group", mappedBy="parent")
     */
    private $children;

    /**
     * @ORM\ManyToOne(targetEntity="Group", inversedBy="children")
     * @ORM\JoinColumn(name="parent_id", referencedColumnName="id")
     */
    private $parent;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->children = new ArrayCollection();
        $this->roles    = new ArrayCollection();
    }

    /**
     * Set id
     *
     * @param   integer     $id
     * @return  Group
     * @throws  InvalidArgumentException
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
     * @return Group
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
     * Set description
     *
     * @param string $description
     * @return Group
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set parent
     *
     * @param Group $parent
     * @return Group
     */
    public function setParent(Group $parent = null)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return \Core\Bundle\UserBundle\Entity\Group
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Add child
     *
     * @param   Group $child
     * @return  Group
     */
    public function addChild(Group $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @param Group $child
     */
    public function removeChild(Group $child)
    {
        $this->children->removeElement($child);

        return $this;
    }

    /**
     * Get children
     *
     * @return ArrayCollection
     */
    public function getChildren()
    {
        return $this->children;
    }
}
