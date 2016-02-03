<?php

namespace RentBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="RentBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */


    
    protected $id;

    public function __construct()

    {
        parent::__construct();
        // your own logic
    }
    
   


    /**
     * Get id
     *
     * @return int
     */
   /* public function getId()
    {
        return $this->id;
    }

    /**
     * Set adres
     *
     * @param string $adres
     *
     * @return User
     */

    public function setAdres($adres)
    {
        $this->adres = $adres;

        return $this;
    }

    /**
     * Get adres
     *
     * @return string
     */
    public function getAdres()
    {
        return $this->adres;
    }
}

