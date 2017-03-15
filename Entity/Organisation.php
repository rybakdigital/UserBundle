<?php

namespace RybakDigital\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use RybakDigital\Bundle\UserBundle\Entity\Traits\OrganisationUserOrganisationRole;
use Ucc\Model\ModelInterface;
use Ucc\Model\Traits\AutoMappable;
use \DateTime;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Organisation
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 * @ORM\Table(name="acl_organisations")
 * @ORM\Entity(repositoryClass="RybakDigital\Bundle\UserBundle\Entity\OrganisationRepository")
 */
class Organisation implements ModelInterface
{
    use OrganisationUserOrganisationRole;
    use AutoMappable;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="name", type="string", length=128, unique=true)
     */
    private $namespace;

    /**
     * @ORM\Column(name="name", type="string", length=128)
     */
    private $name;

    /**
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToMany(targetEntity="Organisation", mappedBy="parents")
     */
    private $children;

    /**
     * @ORM\ManyToMany(targetEntity="Organisation", inversedBy="children")
     * @ORM\JoinTable(name="acl_organisation_parents",
     *      joinColumns={@ORM\JoinColumn(name="organisation_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="parent_id", referencedColumnName="id")}
     * )
     */
    private $parents;

    /**
     * @var     array
     */
    private $descendants;

    /**
     * @var     array
     */
    private $ancestors;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    public function __construct() {
        $this->children         = new ArrayCollection();
        $this->parents          = new ArrayCollection();
        $this->descendants      = array();
        $this->ancestors        = array();
        $this->uors             = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param   integer     $id
     * @return  Group
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get namespace
     *
     * @return  string
     */
    public function getNamespace()
    {
        return $this->namespace;
    }

    /**
     * Set namespace
     *
     * @param   string $namespace
     * @return  Organisation
     */
    public function setNamespace($namespace)
    {
        $this->namespace = $namespace;

        return $this;
    }

    /**
     * Get name
     *
     * @return  string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set name
     *
     * @param   string $name
     * @return  Organisation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get description
     *
     * @return  string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param   string $description
     * @return  Organisation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get parents
     *
     * @return  ArrayCollection
     */
    public function getParents()
    {
        return $this->parents;
    }

    /**
     * Add parent
     *
     * @return  Organisation
     */
    public function addParent(Organisation $parent)
    {
        $this->parents[] = $parent;

        return $this;
    }

    /**
     * Remove parent
     *
     * @return  Organisation
     */
    public function removeParent(Organisation $parent)
    {
        $this->parents->removeElement($parent);

        return $this;
    }

    /**
     * Get children
     *
     * @return  ArrayCollection
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Add child
     *
     * @return  Organisation
     */
    public function addChild(Organisation $child)
    {
        $this->children[] = $child;

        return $this;
    }

    /**
     * Remove child
     *
     * @return  Organisation
     */
    public function removeChild(Organisation $child)
    {
        $this->children->removeElement($child);

        return $this;
    }

    /**
     * Get descendants
     *
     * @return  array
     */
    public function getDescendants()
    {
        foreach ($this->getChildren()->toArray() as $organisation) {
            $this->descendants[$organisation->getId()] = $organisation;
            $this->addOrganisationInheritedChildren($organisation);
        }

        return $this->descendants;
    }

    /**
     * Get inherited children
     *
     * @return  void()
     */
    public function addOrganisationInheritedChildren(Organisation $organisation)
    {
        foreach ($descendants = $organisation->getChildren() as $descendant) {
            if ($descendant) {
                $this->descendants[$descendant->getId()] = $descendant;

                if ($descendant->getChildren()->count() > 0) {
                    $this->addOrganisationInheritedChildren($descendant);
                }
            }
        }
    }

    /**
     * Get ancestors
     *
     * @return  array
     */
    public function getAncestors()
    {
        foreach ($this->getParents()->toArray() as $organisation) {
            $this->ancestors[$organisation->getId()] = $organisation;
            $this->addOrganisationInheritedParents($organisation);
        }

        return $this->ancestors;
    }

    /**
     * Get inherited parents
     *
     * @return  void()
     */
    public function addOrganisationInheritedParents(Organisation $organisation)
    {
        foreach ($ancestors = $organisation->getParents() as $ancestor) {
            if ($ancestor) {
                $this->ancestors[$ancestor->getId()] = $ancestor;

                if ($ancestor->getParents()->count() > 0) {
                    $this->addOrganisationInheritedParents($ancestor);
                }
            }
        }
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Organisation
     */
    public function setCreatedAt(DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}
