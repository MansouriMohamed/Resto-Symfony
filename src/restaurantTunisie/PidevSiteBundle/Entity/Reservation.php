<?php

namespace restaurantTunisie\PidevSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity
 */
class Reservation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idreservation", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="date", type="integer", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_client", type="integer", nullable=false)
     */
    private $idClient;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_restaurant", type="integer", nullable=false)
     */
    private $idRestaurant;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_restaurateur", type="integer", nullable=false)
     */
    private $idRestaurateur;



    /**
     * Get idreservation
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param integer $date
     * @return Reservation
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return integer 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     * @return Reservation
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;
    
        return $this;
    }

    /**
     * Get idClient
     *
     * @return integer 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }

    /**
     * Set idRestaurant
     *
     * @param integer $idRestaurant
     * @return Reservation
     */
    public function setIdRestaurant($idRestaurant)
    {
        $this->idRestaurant = $idRestaurant;
    
        return $this;
    }

    /**
     * Get idRestaurant
     *
     * @return integer 
     */
    public function getIdRestaurant()
    {
        return $this->idRestaurant;
    }

    /**
     * Set idRestaurateur
     *
     * @param integer $idRestaurateur
     * @return Reservation
     */
    public function setIdRestaurateur($idRestaurateur)
    {
        $this->idRestaurateur = $idRestaurateur;
    
        return $this;
    }

    /**
     * Get idRestaurateur
     *
     * @return integer 
     */
    public function getIdRestaurateur()
    {
        return $this->idRestaurateur;
    }
}