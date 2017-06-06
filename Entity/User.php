<?php

namespace RybakDigital\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use RybakDigital\Bundle\AuthenticationBundle\Security\Authentication\Api\AppToken\AppTokenAuthorizableInterface;
use RybakDigital\Bundle\AuthenticationBundle\Security\Authentication\Api\AppUserToken\AppUserInterface;
use \DateTime;
use RybakDigital\Bundle\UserBundle\Entity\Traits\UserEmail;
use RybakDigital\Bundle\UserBundle\Entity\Traits\UserUserOrganisationRole;
use Ucc\Model\ModelInterface;
use Ucc\Model\Traits\AutoMappable;

/**
 * RybakDigital\Bundle\UserBundle\Entity\User
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 * @ORM\Table(name="acl_users")
 * @ORM\Entity(repositoryClass="RybakDigital\Bundle\UserBundle\Entity\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable, AppTokenAuthorizableInterface, AppUserInterface, ModelInterface
{
    use UserEmail;
    use UserUserOrganisationRole;
    use AutoMappable;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(name="username", type="string", length=64, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(name="firstname", type="string", length=64, nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(name="lastname", type="string", length=64, nullable=true)
     */
    private $lastName;

    /**
     * @ORM\Column(name="salt", type="string", length=255, nullable=true)
     */
    private $salt;

    /**
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(name="is_expired", type="boolean")
     */
    private $isExpired;

    /**
     * @ORM\Column(name="is_locked", type="boolean")
     */
    private $isLocked;

    /**
     * @ORM\Column(name="is_credentials_expired", type="boolean")
     */
    private $isCredentialsExpired;

    /**
     * @ORM\Column(name="expires_at", type="datetime", nullable=true)
     */
    private $expiresAt;

    /**
     * @ORM\Column(name="credentials_expire_at", type="datetime", nullable=true)
     */
    private $credentialsExpireAt;

    /**
     * @ORM\Column(name="password_token", type="string", length=32, nullable=true)
     */
    private $passwordToken;

    /**
     * @ORM\Column(name="api_key", type="string", length=64, nullable=true)
     */
    private $apiKey;

    /**
     * @var \DateTime
     * @ORM\Column(name="api_key_expires_at", type="datetime", nullable=true)
     */
    private $apiKeyExpiresAt;

    /**
     * @var \DateTime
     * @ORM\Column(name="last_login_at", type="datetime", nullable=true)
     */
    private $lastLoginAt;

    /**
     * @var \DateTime
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var \DateTime
     * @ORM\OneToMany(targetEntity="App", mappedBy="user")
     */
    private $apps;

    public function __construct()
    {
        $this->uors     = new ArrayCollection();
        $this->emails   = new ArrayCollection();
        $this->apps     = new ArrayCollection();
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
     * @return  User
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     * @throws InvalidArgumentException
     */
    public function setUsername($username)
    {
        if (!is_string($username) && !is_null($username)) {
            throw new \InvalidArgumentException("Username must be a string", Response::HTTP_BAD_REQUEST);
        }

        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        if (!is_null($salt) && (!is_integer($salt) && !is_string($salt))) {
            throw new \InvalidArgumentException("Salt must be a string", Response::HTTP_BAD_REQUEST);
        }

        $this->salt = $salt;

        return $this;
    }

    /**
     * Get salt
     *
     * @return string
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean
     */
    public function getIsActive()
    {
        return (boolean) $this->isActive;
    }

    /**
     * Set isExpired
     *
     * @param boolean $isExpired
     * @return User
     */
    public function setIsExpired($isExpired)
    {
        $this->isExpired = $isExpired;

        return $this;
    }

    /**
     * Get isExpired
     *
     * @return boolean
     */
    public function getIsExpired()
    {
        return (boolean) $this->isExpired;
    }

    /**
     * Set isLocked
     *
     * @param boolean $isLocked
     * @return User
     */
    public function setIsLocked($isLocked)
    {
        $this->isLocked = $isLocked;

        return $this;
    }

    /**
     * Get isLocked
     *
     * @return boolean
     */
    public function getIsLocked()
    {
        return (boolean) $this->isLocked;
    }

    /**
     * Set isCredentialsExpired
     *
     * @param boolean $isCredentialsExpired
     * @return User
     */
    public function setIsCredentialsExpired($isCredentialsExpired)
    {
        $this->isCredentialsExpired = $isCredentialsExpired;

        return $this;
    }

    /**
     * Get isCredentialsExpired
     *
     * @return boolean
     */
    public function getIsCredentialsExpired()
    {
        return (boolean) $this->isCredentialsExpired;
    }

    /**
     * Set expiresAt
     *
     * @param \DateTime $expiresAt
     * @return User
     */
    public function setExpiresAt(DateTime $expiresAt)
    {
        $this->expiresAt = $expiresAt;

        return $this;
    }

    /**
     * Get expiresAt
     *
     * @return \DateTime
     */
    public function getExpiresAt()
    {
        return $this->expiresAt;
    }

    /**
     * Set credentialsExpireAt
     *
     * @param \DateTime $credentialsExpireAt
     * @return User
     */
    public function setCredentialsExpireAt(DateTime $credentialsExpireAt)
    {
        $this->credentialsExpireAt = $credentialsExpireAt;

        return $this;
    }

    /**
     * Get credentialsExpireAt
     *
     * @return \DateTime
     */
    public function getCredentialsExpireAt()
    {
        return $this->credentialsExpireAt;
    }

    /**
     * Set passwordToken
     *
     * @param string $passwordToken
     * @return User
     */
    public function setPasswordToken($passwordToken)
    {
        $this->passwordToken = $passwordToken;

        return $this;
    }

    /**
     * Get passwordToken
     *
     * @return string
     */
    public function getPasswordToken()
    {
        return $this->passwordToken;
    }

    /**
     * Set apiKey
     *
     * @param string $apiKey
     *
     * @return User
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    /**
     * Get apiKey
     *
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * Set apiKeyExpiresAt
     *
     * @param \DateTime $apiKeyExpiresAt
     *
     * @return User
     */
    public function setApiKeyExpiresAt(DateTime $apiKeyExpiresAt)
    {
        $this->apiKeyExpiresAt = $apiKeyExpiresAt;

        return $this;
    }

    /**
     * Get apiKeyExpiresAt
     *
     * @return \DateTime
     */
    public function getApiKeyExpiresAt()
    {
        return $this->apiKeyExpiresAt;
    }

    /**
     * Set lastLoginAt
     *
     * @param \DateTime $lastLoginAt
     *
     * @return User
     */
    public function setLastLoginAt(DateTime $lastLoginAt)
    {
        $this->lastLoginAt = $lastLoginAt;

        return $this;
    }

    /**
     * Get lastLoginAt
     *
     * @return \DateTime
     */
    public function getLastLoginAt()
    {
        return $this->lastLoginAt;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return User
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

    /**
     * @inheritDoc
     */
    public function isAccountNonExpired()
    {
        if (true === $this->isExpired) {
            return false;
        }


        if (null !== $this->expiresAt && $this->expiresAt->getTimestamp() < time()) {
            return false;
        }

        return true;
    }

    /**
     * @inheritDoc
     */
    public function isAccountNonLocked()
    {
        return !$this->isLocked;
    }

    /**
     * @inheritDoc
     */
    public function isCredentialsNonExpired()
    {
        if (true === $this->isCredentialsExpired) {
            return false;
        }

        if (false !== $this->isCredentialsExpired && ($this->credentialsExpireAt instanceof DateTime) && $this->credentialsExpireAt->getTimestamp() < time()) {
            return false;
        }

        return true;
    }

    /**
     * @inheritDoc
     */
    public function isEnabled()
    {
        return $this->getIsActive();
    }

    /**
     * Returns the roles granted to the user.
     *
     * <code>
     * public function getRoles()
     * {
     *     return array('ROLE_USER');
     * }
     * </code>
     *
     * Alternatively, the roles might be stored on a ``roles`` property,
     * and populated in any number of different ways when the user object
     * is created.
     *
     * @return (Role|string)[] The user roles
     */
    public function getRoles()
    {
        return array();
    }

    /**
     * Removes sensitive data from the user.
     *
     * This is important if, at any given point, sensitive information like
     * the plain-text password is stored on this object.
     * @return User
     */
    public function eraseCredentials()
    {
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function serialize()
    {
        return serialize(array(
           $this->id,
           $this->username,
           $this->firstName,
           $this->lastName,
        ));
    }

    /**
     * @inheritDoc
     */
    public function unserialize($serialized)
    {
        return list (
           $this->id,
           $this->username,
           $this->firstName,
           $this->lastName,
            ) = unserialize($serialized);
    }

    /**
     * @inheritDoc
     */
    public function loadApiAppByName($name)
    {
        return $this;
    }

    /**
     * Add app
     *
     * @param \RybakDigital\Bundle\UserBundle\Entity\App $app
     *
     * @return User
     */
    public function addApp(\RybakDigital\Bundle\UserBundle\Entity\App $app)
    {
        $this->apps[] = $app;

        return $this;
    }

    /**
     * Remove app
     *
     * @param \RybakDigital\Bundle\UserBundle\Entity\App $app
     */
    public function removeApp(\RybakDigital\Bundle\UserBundle\Entity\App $app)
    {
        $this->apps->removeElement($app);
    }

    /**
     * Get apps
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getApps()
    {
        return $this->apps;
    }
}
