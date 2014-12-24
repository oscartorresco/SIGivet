<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Especie
 *
 * @ORM\Table(name="especie", uniqueConstraints={@ORM\UniqueConstraint(name="especie_pk", columns={"id_especie"})})
 * @ORM\Entity
 */
class Especie
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_especie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="especie_id_especie_seq", allocationSize=1, initialValue=1)
     */
    private $idEspecie;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_especie", type="string", length=50, nullable=false)
     */
    private $nombreEspecie;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_especie", type="boolean", nullable=false)
     */
    private $estadoEspecie;



    /**
     * Get idEspecie
     *
     * @return integer 
     */
    public function getIdEspecie()
    {
        return $this->idEspecie;
    }

    /**
     * Set nombreEspecie
     *
     * @param string $nombreEspecie
     * @return Especie
     */
    public function setNombreEspecie($nombreEspecie)
    {
        $this->nombreEspecie = $nombreEspecie;

        return $this;
    }

    /**
     * Get nombreEspecie
     *
     * @return string 
     */
    public function getNombreEspecie()
    {
        return $this->nombreEspecie;
    }

    /**
     * Set estadoEspecie
     *
     * @param boolean $estadoEspecie
     * @return Especie
     */
    public function setEstadoEspecie($estadoEspecie)
    {
        $this->estadoEspecie = $estadoEspecie;

        return $this;
    }

    /**
     * Get estadoEspecie
     *
     * @return boolean 
     */
    public function getEstadoEspecie()
    {
        return $this->estadoEspecie;
    }
}
