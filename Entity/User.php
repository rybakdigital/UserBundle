<?php

namespace RybakDigital\Bundle\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\User\AdvancedUserInterface;
use RybakDigital\Bundle\AuthenticationBundle\Security\Authentication\Api\AppToken\AppTokenAuthorizableInterface;
use RybakDigital\Bundle\AuthenticationBundle\Security\Authentication\Api\AppUserToken\AppUserInterface;

/**
 * RybakDigital\Bundle\UserBundle\Entity\User
 *
 * @author Kris Rybak <kris.rybak@krisrybak.com>
 * @ORM\Table(name="acl_users")
 * @ORM\Entity(repositoryClass="RybakDigital\Bundle\UserBundle\Entity\UserRepository")
 */
class User implements AdvancedUserInterface, \Serializable, AppTokenAuthorizableInterface, AppUserInterface
{
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
        if (is_integer($id)) {
            $this->id = $id;
        } else {
            throw new \InvalidArgumentException("User id must be an integer", Response::HTTP_BAD_REQUEST);
        }

        return $this;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
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
     * Checks whether the user's account has expired.
     *
     * Internally, if this method returns false, the authentication system
     * will throw an AccountExpiredException and prevent login.
     *
     * @return bool true if the user's account is non expired, false otherwise
     *
     * @see AccountExpiredException
     */
    public function isAccountNonExpired()
    {
        return false;
    }

    /**
     * Checks whether the user is locked.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a LockedException and prevent login.
     *
     * @return bool true if the user is not locked, false otherwise
     *
     * @see LockedException
     */
    public function isAccountNonLocked()
    {
        return false;
    }

    /**
     * Checks whether the user's credentials (password) has expired.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a CredentialsExpiredException and prevent login.
     *
     * @return bool true if the user's credentials are non expired, false otherwise
     *
     * @see CredentialsExpiredException
     */
    public function isCredentialsNonExpired()
    {
        return false;
    }

    /**
     * Checks whether the user is enabled.
     *
     * Internally, if this method returns false, the authentication system
     * will throw a DisabledException and prevent login.
     *
     * @return bool true if the user is enabled, false otherwise
     *
     * @see DisabledException
     */
    public function isEnabled()
    {
        return false;
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
     * Returns the password used to authenticate the user.
     *
     * This should be the encoded password. On authentication, a plain-text
     * password will be salted, encoded, and then compared to this value.
     *
     * @return string The password
     */
    public function getPassword()
    {
        return '';
    }

    /**
     * Returns the salt that was originally used to encode the password.
     *
     * This can return null if the password was not encoded using a salt.
     *
     * @return string|null The salt
     */
    public function getSalt()
    {
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
    }

    /**
     * @inheritDoc
     */
    public function unserialize($serialized)
    {
    }

    /**
     * @inheritDoc
     */
    public function getApiKey()
    {
        return $this->getApiToken();
    }

    /**
     * @inheritDoc
     */
    public function loadApiAppByName($name)
    {
        return $this;
    }
}
