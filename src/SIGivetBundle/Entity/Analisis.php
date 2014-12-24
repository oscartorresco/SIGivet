<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analisis
 *
 * @ORM\Table(name="analisis", indexes={@ORM\Index(name="r61_fk", columns={"id_proyecto"})})
 * @ORM\Entity
 */
class Analisis
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_analisis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="analisis_id_analisis_seq", allocationSize=1, initialValue=1)
     */
    private $idAnalisis;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_analisis", type="date", nullable=false)
     */
    private $fechaAnalisis;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_analisis", type="boolean", nullable=false)
     */
    private $estadoAnalisis;

    /**
     * @var \Proyecto
     *
     * @ORM\ManyToOne(targetEntity="Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id_proyecto")
     * })
     */
    private $idProyecto;



    /**
     * Get idAnalisis
     *
     * @return integer 
     */
    public function getIdAnalisis()
    {
        return $this->idAnalisis;
    }

    /**
     * Set fechaAnalisis
     *
     * @param \DateTime $fechaAnalisis
     * @return Analisis
     */
    public function setFechaAnalisis($fechaAnalisis)
    {
        $this->fechaAnalisis = $fechaAnalisis;

        return $this;
    }

    /**
     * Get fechaAnalisis
     *
     * @return \DateTime 
     */
    public function getFechaAnalisis()
    {
        return $this->fechaAnalisis;
    }

    /**
     * Set estadoAnalisis
     *
     * @param boolean $estadoAnalisis
     * @return Analisis
     */
    public function setEstadoAnalisis($estadoAnalisis)
    {
        $this->estadoAnalisis = $estadoAnalisis;

        return $this;
    }

    /**
     * Get estadoAnalisis
     *
     * @return boolean 
     */
    public function getEstadoAnalisis()
    {
        return $this->estadoAnalisis;
    }

    /**
     * Set idProyecto
     *
     * @param \SIGivetBundle\Entity\Proyecto $idProyecto
     * @return Analisis
     */
    public function setIdProyecto(\SIGivetBundle\Entity\Proyecto $idProyecto = null)
    {
        $this->idProyecto = $idProyecto;

        return $this;
    }

    /**
     * Get idProyecto
     *
     * @return \SIGivetBundle\Entity\Proyecto 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }
}
