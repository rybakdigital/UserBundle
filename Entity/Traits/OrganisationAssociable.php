<?php
namespace RybakDigital\Bundle\UserBundle\Entity\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\Organisation;

/**
 * RybakDigital\Bundle\UserBundle\Entity\Traits\OrganisationAssociable
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 */
trait OrganisationAssociable {
    /**
     * @ORM\ManyToOne(targetEntity="RybakDigital\Bundle\UserBundle\Entity\Organisation")
     * @ORM\JoinColumn(name="organisation_id", referencedColumnName="id")
     */
    private $organisation;

    /**
     * Set organisation
     *
     * @param \RybakDigital\Bundle\UserBundle\Entity\Organisation $organisation
     *
     * @return OrganisationApplication
     */
    public function setOrganisation(Organisation $organisation)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return \RybakDigital\Bundle\UserBundle\Entity\Organisation
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
}
