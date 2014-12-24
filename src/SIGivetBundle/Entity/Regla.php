<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regla
 *
 * @ORM\Table(name="regla", indexes={@ORM\Index(name="r62_fk", columns={"id_analisis"})})
 * @ORM\Entity
 */
class Regla
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_regla", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="regla_id_regla_seq", allocationSize=1, initialValue=1)
     */
    private $idRegla;

    /**
     * @var string
     *
     * @ORM\Column(name="confianza", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $confianza;

    /**
     * @var string
     *
     * @ORM\Column(name="soporte", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $soporte;

    /**
     * @var string
     *
     * @ORM\Column(name="lift", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $lift;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_regla", type="boolean", nullable=false)
     */
    private $estadoRegla;

    /**
     * @var \Analisis
     *
     * @ORM\ManyToOne(targetEntity="Analisis")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_analisis", referencedColumnName="id_analisis")
     * })
     */
    private $idAnalisis;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Variable", mappedBy="idRegla")
     */
    private $idVariable;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idVariable = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idRegla
     *
     * @return integer 
     */
    public function getIdRegla()
    {
        return $this->idRegla;
    }

    /**
     * Set confianza
     *
     * @param string $confianza
     * @return Regla
     */
    public function setConfianza($confianza)
    {
        $this->confianza = $confianza;

        return $this;
    }

    /**
     * Get confianza
     *
     * @return string 
     */
    public function getConfianza()
    {
        return $this->confianza;
    }

    /**
     * Set soporte
     *
     * @param string $soporte
     * @return Regla
     */
    public function setSoporte($soporte)
    {
        $this->soporte = $soporte;

        return $this;
    }

    /**
     * Get soporte
     *
     * @return string 
     */
    public function getSoporte()
    {
        return $this->soporte;
    }

    /**
     * Set lift
     *
     * @param string $lift
     * @return Regla
     */
    public function setLift($lift)
    {
        $this->lift = $lift;

        return $this;
    }

    /**
     * Get lift
     *
     * @return string 
     */
    public function getLift()
    {
        return $this->lift;
    }

    /**
     * Set estadoRegla
     *
     * @param boolean $estadoRegla
     * @return Regla
     */
    public function setEstadoRegla($estadoRegla)
    {
        $this->estadoRegla = $estadoRegla;

        return $this;
    }

    /**
     * Get estadoRegla
     *
     * @return boolean 
     */
    public function getEstadoRegla()
    {
        return $this->estadoRegla;
    }

    /**
     * Set idAnalisis
     *
     * @param \SIGivetBundle\Entity\Analisis $idAnalisis
     * @return Regla
     */
    public function setIdAnalisis(\SIGivetBundle\Entity\Analisis $idAnalisis = null)
    {
        $this->idAnalisis = $idAnalisis;

        return $this;
    }

    /**
     * Get idAnalisis
     *
     * @return \SIGivetBundle\Entity\Analisis 
     */
    public function getIdAnalisis()
    {
        return $this->idAnalisis;
    }

    /**
     * Add idVariable
     *
     * @param \SIGivetBundle\Entity\Variable $idVariable
     * @return Regla
     */
    public function addIdVariable(\SIGivetBundle\Entity\Variable $idVariable)
    {
        $this->idVariable[] = $idVariable;

        return $this;
    }

    /**
     * Remove idVariable
     *
     * @param \SIGivetBundle\Entity\Variable $idVariable
     */
    public function removeIdVariable(\SIGivetBundle\Entity\Variable $idVariable)
    {
        $this->idVariable->removeElement($idVariable);
    }

    /**
     * Get idVariable
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdVariable()
    {
        return $this->idVariable;
    }
}
