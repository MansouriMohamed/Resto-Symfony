<?php

namespace restaurantTunisie\PidevSiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Plat
 *
 * @ORM\Table(name="plat")
 * @ORM\Entity
 */
class Plat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idplat", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_restaurant", type="integer", nullable=false)
     */
    private $idRestaurant;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_plat", type="string", length=50, nullable=false)
     */
    private $nomPlat;

    /**
     * @var string
     *
     * @ORM\Column(name="description_plat", type="string", length=100, nullable=false)
     */
    private $descriptionPlat;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_plat", type="float", nullable=false)
     */
    private $prixPlat;



    /**
     * Get idplat
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idRestaurant
     *
     * @param integer $idRestaurant
     * @return Plat
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
     * Set nomPlat
     *
     * @param string $nomPlat
     * @return Plat
     */
    public function setNomPlat($nomPlat)
    {
        $this->nomPlat = $nomPlat;
    
        return $this;
    }

    /**
     * Get nomPlat
     *
     * @return string 
     */
    public function getNomPlat()
    {
        return $this->nomPlat;
    }

    /**
     * Set descriptionPlat
     *
     * @param string $descriptionPlat
     * @return Plat
     */
    public function setDescriptionPlat($descriptionPlat)
    {
        $this->descriptionPlat = $descriptionPlat;
    
        return $this;
    }

    /**
     * Get descriptionPlat
     *
     * @return string 
     */
    public function getDescriptionPlat()
    {
        return $this->descriptionPlat;
    }

    /**
     * Set prixPlat
     *
     * @param float $prixPlat
     * @return Plat
     */
    public function setPrixPlat($prixPlat)
    {
        $this->prixPlat = $prixPlat;
    
        return $this;
    }

    /**
     * Get prixPlat
     *
     * @return float 
     */
    public function getPrixPlat()
    {
        return $this->prixPlat;
    }
}