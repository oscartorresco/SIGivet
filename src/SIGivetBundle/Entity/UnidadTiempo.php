<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UnidadTiempo
 *
 * @ORM\Table(name="unidad_tiempo", uniqueConstraints={@ORM\UniqueConstraint(name="unidad_tiempo_pk", columns={"id_unidad"})})
 * @ORM\Entity
 */
class UnidadTiempo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_unidad", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="unidad_tiempo_id_unidad_seq", allocationSize=1, initialValue=1)
     */
    private $idUnidad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_unidad", type="string", length=20, nullable=false)
     */
    private $nombreUnidad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_unidad", type="boolean", nullable=false)
     */
    private $estadoUnidad;



    /**
     * Get idUnidad
     *
     * @return integer 
     */
    public function getIdUnidad()
    {
        return $this->idUnidad;
    }

    /**
     * Set nombreUnidad
     *
     * @param string $nombreUnidad
     * @return UnidadTiempo
     */
    public function setNombreUnidad($nombreUnidad)
    {
        $this->nombreUnidad = $nombreUnidad;

        return $this;
    }

    /**
     * Get nombreUnidad
     *
     * @return string 
     */
    public function getNombreUnidad()
    {
        return $this->nombreUnidad;
    }

    /**
     * Set estadoUnidad
     *
     * @param boolean $estadoUnidad
     * @return UnidadTiempo
     */
    public function setEstadoUnidad($estadoUnidad)
    {
        $this->estadoUnidad = $estadoUnidad;

        return $this;
    }

    /**
     * Get estadoUnidad
     *
     * @return boolean 
     */
    public function getEstadoUnidad()
    {
        return $this->estadoUnidad;
    }
}
