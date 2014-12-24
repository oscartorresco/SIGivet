<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pasto
 *
 * @ORM\Table(name="pasto")
 * @ORM\Entity
 */
class Pasto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_pasto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="pasto_id_pasto_seq", allocationSize=1, initialValue=1)
     */
    private $idPasto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_pasto", type="string", length=100, nullable=false)
     */
    private $nombrePasto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_pasto", type="boolean", nullable=false)
     */
    private $estadoPasto;



    /**
     * Get idPasto
     *
     * @return integer 
     */
    public function getIdPasto()
    {
        return $this->idPasto;
    }

    /**
     * Set nombrePasto
     *
     * @param string $nombrePasto
     * @return Pasto
     */
    public function setNombrePasto($nombrePasto)
    {
        $this->nombrePasto = $nombrePasto;

        return $this;
    }

    /**
     * Get nombrePasto
     *
     * @return string 
     */
    public function getNombrePasto()
    {
        return $this->nombrePasto;
    }

    /**
     * Set estadoPasto
     *
     * @param boolean $estadoPasto
     * @return Pasto
     */
    public function setEstadoPasto($estadoPasto)
    {
        $this->estadoPasto = $estadoPasto;

        return $this;
    }

    /**
     * Get estadoPasto
     *
     * @return boolean 
     */
    public function getEstadoPasto()
    {
        return $this->estadoPasto;
    }
}
