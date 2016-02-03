<?php

namespace RentBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rent
 *
 * @ORM\Table(name="rent")
 * @ORM\Entity(repositoryClass="RentBundle\Repository\RentRepository")
 */
class Rent
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
     * @ORM\ManyToOne(targetEntity="Car", inversedBy="rent")
     *
     * 
     */
    protected $car;

    /**
     * 
     * @ORM\ManyToOne(targetEntity="Client", inversedBy="rent")
     * 
     */
    protected $client;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataWypozyczenia", type="datetime")
     */
    private $dataWypozyczenia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DataOddania", type="datetime")
     */
    private $dataOddania;

    /**
     * @var int
     *
     * @ORM\Column(name="KwotaOdKlienta", type="integer")
     */
    private $kwotaOdKlienta;


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
     * Set car
     *
     * @param string $car
     *
     * @return Rent
     */
    public function setCar($car)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return string
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return Rent
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set dataWypozyczenia
     *
     * @param \DateTime $dataWypozyczenia
     *
     * @return Rent
     */
    public function setDataWypozyczenia($dataWypozyczenia)
    {
        $this->dataWypozyczenia = $dataWypozyczenia;

        return $this;
    }

    /**
     * Get dataWypozyczenia
     *
     * @return \DateTime
     */
    public function getDataWypozyczenia()
    {
        return $this->dataWypozyczenia;
    }

    /**
     * Set dataOddania
     *
     * @param \DateTime $dataOddania
     *
     * @return Rent
     */
    public function setDataOddania($dataOddania)
    {
        $this->dataOddania = $dataOddania;

        return $this;
    }

    /**
     * Get dataOddania
     *
     * @return \DateTime
     */
    public function getDataOddania()
    {
        return $this->dataOddania;
    }

    /**
     * Set kwotaOdKlienta
     *
     * @param integer $kwotaOdKlienta
     *
     * @return Rent
     */
    public function setKwotaOdKlienta($kwotaOdKlienta)
    {
        $this->kwotaOdKlienta = $kwotaOdKlienta;

        return $this;
    }

    /**
     * Get kwotaOdKlienta
     *
     * @return int
     */
    public function getKwotaOdKlienta()
    {
        return $this->kwotaOdKlienta;
    }
}

