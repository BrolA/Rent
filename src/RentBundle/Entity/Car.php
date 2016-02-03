<?php

namespace RentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Car
 *
 * @ORM\Table(name="car")
 * @ORM\Entity(repositoryClass="RentBundle\Repository\CarRepository")
 */
class Car
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="Zdjecie", type="string", length=255)
     */
    private $zdjecie;

    /**
     * @var string
     *
     * @ORM\Column(name="Model", type="string", length=255)
     */
    private $model;

    /**
     * @var string
     * dupa
     * @ORM\Column(name="Kategoria", type="string", length=255)
     */
    private $kategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="Kolor", type="string", length=255)
     */
    private $kolor;

    /**
     * @var int
     *
     * @ORM\Column(name="CenaDoba", type="integer")
     */
    private $cenaDoba;

    /**
     * 
     *
     * @ORM\OneToOne(targetEntity="Rent", mappedBy="car")
     */
    protected $wypozyczony;

    public function __construct()
    {
        $this->wypozyczony = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set zdjecie
     *
     * @param string $zdjecie
     *
     * @return Car
     */
    public function setZdjecie($zdjecie)
    {
        $this->zdjecie = $zdjecie;

        return $this;
    }

    /**
     * Get zdjecie
     *
     * @return string
     */
    public function getZdjecie()
    {
        return $this->zdjecie;
    }

    /**
     * Set model
     *
     * @param string $model
     *
     * @return Car
     */
    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    /**
     * Get model
     *
     * @return string
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * Set kategoria
     *
     * @param string $kategoria
     *
     * @return Car
     */
    public function setKategoria($kategoria)
    {
        $this->kategoria = $kategoria;

        return $this;
    }

    /**
     * Get kategoria
     *
     * @return string
     */
    public function getKategoria()
    {
        return $this->kategoria;
    }

    /**
     * Set kolor
     *
     * @param string $kolor
     *
     * @return Car
     */
    public function setKolor($kolor)
    {
        $this->kolor = $kolor;

        return $this;
    }

    /**
     * Get kolor
     *
     * @return string
     */
    public function getKolor()
    {
        return $this->kolor;
    }

    /**
     * Set cenaDoba
     *
     * @param integer $cenaDoba
     *
     * @return Car
     */
    public function setCenaDoba($cenaDoba)
    {
        $this->cenaDoba = $cenaDoba;

        return $this;
    }

    /**
     * Get cenaDoba
     *
     * @return int
     */
    public function getCenaDoba()
    {
        return $this->cenaDoba;
    }

    /**
     * Set wypozyczony
     *
     * @param boolean $wypozyczony
     *
     * @return Car
     */
    public function setWypozyczony($wypozyczony)
    {
        $this->wypozyczony = $wypozyczony;

        return $this;
    }

    /**
     * Get wypozyczony
     *
     * @return bool
     */
    public function getWypozyczony()
    {
        return $this->wypozyczony;
    }
    public function __toString()
    {
        return $this->car;
    }
}

