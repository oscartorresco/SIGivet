<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoProyecto
 *
 * @ORM\Table(name="tipo_proyecto", uniqueConstraints={@ORM\UniqueConstraint(name="tipo_proyecto_pk", columns={"id_tipo_proyecto"})})
 * @ORM\Entity
 */
class TipoProyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_tipo_proyecto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipo_proyecto_id_tipo_proyecto_seq", allocationSize=1, initialValue=1)
     */
    private $idTipoProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tipo_proyecto", type="string", length=100, nullable=false)
     */
    private $nombreTipoProyecto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_tipo_proyecto", type="boolean", nullable=false)
     */
    private $estadoTipoProyecto;



    /**
     * Get idTipoProyecto
     *
     * @return integer 
     */
    public function getIdTipoProyecto()
    {
        return $this->idTipoProyecto;
    }

    /**
     * Set nombreTipoProyecto
     *
     * @param string $nombreTipoProyecto
     * @return TipoProyecto
     */
    public function setNombreTipoProyecto($nombreTipoProyecto)
    {
        $this->nombreTipoProyecto = $nombreTipoProyecto;

        return $this;
    }

    /**
     * Get nombreTipoProyecto
     *
     * @return string 
     */
    public function getNombreTipoProyecto()
    {
        return $this->nombreTipoProyecto;
    }

    /**
     * Set estadoTipoProyecto
     *
     * @param boolean $estadoTipoProyecto
     * @return TipoProyecto
     */
    public function setEstadoTipoProyecto($estadoTipoProyecto)
    {
        $this->estadoTipoProyecto = $estadoTipoProyecto;

        return $this;
    }

    /**
     * Get estadoTipoProyecto
     *
     * @return boolean 
     */
    public function getEstadoTipoProyecto()
    {
        return $this->estadoTipoProyecto;
    }
}
