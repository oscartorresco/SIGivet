<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EventoFinca
 *
 * @ORM\Table(name="evento_finca", indexes={@ORM\Index(name="r41_fk", columns={"id_enfermedad"}), @ORM\Index(name="r6_fk", columns={"id_finca"})})
 * @ORM\Entity
 */
class EventoFinca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_evento", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEvento;

    /**
     * @var string
     *
     * @ORM\Column(name="producto", type="string", length=100, nullable=true)
     */
    private $producto;

    /**
     * @var integer
     *
     * @ORM\Column(name="aplicado_a", type="integer", nullable=false)
     */
    private $aplicadoA;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aguja_desechable", type="boolean", nullable=false)
     */
    private $agujaDesechable;

    /**
     * @var integer
     *
     * @ORM\Column(name="vacunador_evento", type="integer", nullable=false)
     */
    private $vacunadorEvento;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_vacuna", type="date", nullable=true)
     */
    private $fechaVacuna;

    /**
     * @var integer
     *
     * @ORM\Column(name="tipo_tratamiento", type="integer", nullable=true)
     */
    private $tipoTratamiento;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_tratamiento", type="string", length=1024, nullable=true)
     */
    private $detalleTratamiento;

    /**
     * @var integer
     *
     * @ORM\Column(name="frecuencia_desparasitacion", type="integer", nullable=true)
     */
    private $frecuenciaDesparasitacion;

    /**
     * @var \Enfermedad
     *
     * @ORM\ManyToOne(targetEntity="Enfermedad")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_enfermedad", referencedColumnName="id_enfermedad")
     * })
     */
    private $idEnfermedad;

    /**
     * @var \Finca
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Finca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_finca", referencedColumnName="id_finca")
     * })
     */
    private $idFinca;



    /**
     * Set idEvento
     *
     * @param integer $idEvento
     * @return EventoFinca
     */
    public function setIdEvento($idEvento)
    {
        $this->idEvento = $idEvento;

        return $this;
    }

    /**
     * Get idEvento
     *
     * @return integer 
     */
    public function getIdEvento()
    {
        return $this->idEvento;
    }

    /**
     * Set producto
     *
     * @param string $producto
     * @return EventoFinca
     */
    public function setProducto($producto)
    {
        $this->producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return string 
     */
    public function getProducto()
    {
        return $this->producto;
    }

    /**
     * Set aplicadoA
     *
     * @param integer $aplicadoA
     * @return EventoFinca
     */
    public function setAplicadoA($aplicadoA)
    {
        $this->aplicadoA = $aplicadoA;

        return $this;
    }

    /**
     * Get aplicadoA
     *
     * @return integer 
     */
    public function getAplicadoA()
    {
        return $this->aplicadoA;
    }

    /**
     * Set agujaDesechable
     *
     * @param boolean $agujaDesechable
     * @return EventoFinca
     */
    public function setAgujaDesechable($agujaDesechable)
    {
        $this->agujaDesechable = $agujaDesechable;

        return $this;
    }

    /**
     * Get agujaDesechable
     *
     * @return boolean 
     */
    public function getAgujaDesechable()
    {
        return $this->agujaDesechable;
    }

    /**
     * Set vacunadorEvento
     *
     * @param integer $vacunadorEvento
     * @return EventoFinca
     */
    public function setVacunadorEvento($vacunadorEvento)
    {
        $this->vacunadorEvento = $vacunadorEvento;

        return $this;
    }

    /**
     * Get vacunadorEvento
     *
     * @return integer 
     */
    public function getVacunadorEvento()
    {
        return $this->vacunadorEvento;
    }

    /**
     * Set fechaVacuna
     *
     * @param \DateTime $fechaVacuna
     * @return EventoFinca
     */
    public function setFechaVacuna($fechaVacuna)
    {
        $this->fechaVacuna = $fechaVacuna;

        return $this;
    }

    /**
     * Get fechaVacuna
     *
     * @return \DateTime 
     */
    public function getFechaVacuna()
    {
        return $this->fechaVacuna;
    }

    /**
     * Set tipoTratamiento
     *
     * @param integer $tipoTratamiento
     * @return EventoFinca
     */
    public function setTipoTratamiento($tipoTratamiento)
    {
        $this->tipoTratamiento = $tipoTratamiento;

        return $this;
    }

    /**
     * Get tipoTratamiento
     *
     * @return integer 
     */
    public function getTipoTratamiento()
    {
        return $this->tipoTratamiento;
    }

    /**
     * Set detalleTratamiento
     *
     * @param string $detalleTratamiento
     * @return EventoFinca
     */
    public function setDetalleTratamiento($detalleTratamiento)
    {
        $this->detalleTratamiento = $detalleTratamiento;

        return $this;
    }

    /**
     * Get detalleTratamiento
     *
     * @return string 
     */
    public function getDetalleTratamiento()
    {
        return $this->detalleTratamiento;
    }

    /**
     * Set frecuenciaDesparasitacion
     *
     * @param integer $frecuenciaDesparasitacion
     * @return EventoFinca
     */
    public function setFrecuenciaDesparasitacion($frecuenciaDesparasitacion)
    {
        $this->frecuenciaDesparasitacion = $frecuenciaDesparasitacion;

        return $this;
    }

    /**
     * Get frecuenciaDesparasitacion
     *
     * @return integer 
     */
    public function getFrecuenciaDesparasitacion()
    {
        return $this->frecuenciaDesparasitacion;
    }

    /**
     * Set idEnfermedad
     *
     * @param \SIGivetBundle\Entity\Enfermedad $idEnfermedad
     * @return EventoFinca
     */
    public function setIdEnfermedad(\SIGivetBundle\Entity\Enfermedad $idEnfermedad = null)
    {
        $this->idEnfermedad = $idEnfermedad;

        return $this;
    }

    /**
     * Get idEnfermedad
     *
     * @return \SIGivetBundle\Entity\Enfermedad 
     */
    public function getIdEnfermedad()
    {
        return $this->idEnfermedad;
    }

    /**
     * Set idFinca
     *
     * @param \SIGivetBundle\Entity\Finca $idFinca
     * @return EventoFinca
     */
    public function setIdFinca(\SIGivetBundle\Entity\Finca $idFinca)
    {
        $this->idFinca = $idFinca;

        return $this;
    }

    /**
     * Get idFinca
     *
     * @return \SIGivetBundle\Entity\Finca 
     */
    public function getIdFinca()
    {
        return $this->idFinca;
    }
}
