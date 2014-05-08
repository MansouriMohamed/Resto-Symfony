<?php

namespace restaurantTunisie\PidevSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Note
 *
 * @ORM\Table(name="note")
 * @ORM\Entity
 */
class Note
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idnote", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnote;

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
     * @ORM\Column(name="note", type="integer", nullable=false)
     */
    private $note;



    /**
     * Get idnote
     *
     * @return integer 
     */
    public function getIdnote()
    {
        return $this->idnote;
    }

    /**
     * Set idClient
     *
     * @param integer $idClient
     * @return Note
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
     * @return Note
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
     * Set note
     *
     * @param integer $note
     * @return Note
     */
    public function setNote($note)
    {
        $this->note = $note;
    
        return $this;
    }

    /**
     * Get note
     *
     * @return integer 
     */
    public function getNote()
    {
        return $this->note;
    }
}