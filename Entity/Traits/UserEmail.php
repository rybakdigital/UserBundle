<?php
namespace RybakDigital\Bundle\UserBundle\Entity\Traits;

use Doctrine\Common\Collections\ArrayCollection;
use RybakDigital\Bundle\UserBundle\Entity\Email;

trait UserEmail {
    /**
     * @ORM\OneToOne(targetEntity="Email")
     * @ORM\JoinColumn(name="primary_email_id", referencedColumnName="id")
     */
    private $primaryEmail;

    /**
     * One User has Many Emails.
     * @ORM\OneToMany(targetEntity="Email", mappedBy="user", cascade={"persist", "remove"})
     */
    private $emails;

    public function __construct() {
        $this->emails = new ArrayCollection();
    }

    /**
     * Get emails
     */
    public function getEmails()
    {
        return $this->emails;
    }

    /**
     * Add Email. Will also set this email as primary if this is first email User had.
     */
    public function addEmail(Email $email)
    {
        if ($this->emails->isEmpty()) {
            $this->setPrimaryEmail($email);
        }

        $this->emails[] = $email;

        $email->setUser($this);

        return $this;
    }

    /**
     * Remove email
     *
     * @param Email $email
     */
    public function removeEmail(Email $email)
    {
        $this->emails->removeElement($email);

        return $this;
    }

    /**
     * @setPrimaryEmail
     */
    public function setPrimaryEmail(Email $email)
    {
        $this->primaryEmail = $email;

        return $this;
    }

    /**
     * @getPrimaryEmail
     */
    public function getPrimaryEmail()
    {
        return $this->primaryEmail;
    }
}
