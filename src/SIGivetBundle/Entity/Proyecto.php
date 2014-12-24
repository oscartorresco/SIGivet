<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proyecto
 *
 * @ORM\Table(name="proyecto", uniqueConstraints={@ORM\UniqueConstraint(name="proyecto_pk", columns={"id_proyecto"})}, indexes={@ORM\Index(name="r51_fk", columns={"id_tipo_proyecto"})})
 * @ORM\Entity
 */
class Proyecto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_proyecto", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="proyecto_id_proyecto_seq", allocationSize=1, initialValue=1)
     */
    private $idProyecto;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_proyecto", type="date", nullable=false)
     */
    private $fechaProyecto;

    /**
     * @var string
     *
     * @ORM\Column(name="objetivo_proyecto", type="string", length=1024, nullable=false)
     */
    private $objetivoProyecto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_proyecto", type="boolean", nullable=false)
     */
    private $estadoProyecto;

    /**
     * @var \TipoProyecto
     *
     * @ORM\ManyToOne(targetEntity="TipoProyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tipo_proyecto", referencedColumnName="id_tipo_proyecto")
     * })
     */
    private $idTipoProyecto;



    /**
     * Get idProyecto
     *
     * @return integer 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    /**
     * Set fechaProyecto
     *
     * @param \DateTime $fechaProyecto
     * @return Proyecto
     */
    public function setFechaProyecto($fechaProyecto)
    {
        $this->fechaProyecto = $fechaProyecto;

        return $this;
    }

    /**
     * Get fechaProyecto
     *
     * @return \DateTime 
     */
    public function getFechaProyecto()
    {
        return $this->fechaProyecto;
    }

    /**
     * Set objetivoProyecto
     *
     * @param string $objetivoProyecto
     * @return Proyecto
     */
    public function setObjetivoProyecto($objetivoProyecto)
    {
        $this->objetivoProyecto = $objetivoProyecto;

        return $this;
    }

    /**
     * Get objetivoProyecto
     *
     * @return string 
     */
    public function getObjetivoProyecto()
    {
        return $this->objetivoProyecto;
    }

    /**
     * Set estadoProyecto
     *
     * @param boolean $estadoProyecto
     * @return Proyecto
     */
    public function setEstadoProyecto($estadoProyecto)
    {
        $this->estadoProyecto = $estadoProyecto;

        return $this;
    }

    /**
     * Get estadoProyecto
     *
     * @return boolean 
     */
    public function getEstadoProyecto()
    {
        return $this->estadoProyecto;
    }

    /**
     * Set idTipoProyecto
     *
     * @param \SIGivetBundle\Entity\TipoProyecto $idTipoProyecto
     * @return Proyecto
     */
    public function setIdTipoProyecto(\SIGivetBundle\Entity\TipoProyecto $idTipoProyecto = null)
    {
        $this->idTipoProyecto = $idTipoProyecto;

        return $this;
    }

    /**
     * Get idTipoProyecto
     *
     * @return \SIGivetBundle\Entity\TipoProyecto 
     */
    public function getIdTipoProyecto()
    {
        return $this->idTipoProyecto;
    }
}
