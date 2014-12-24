<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enfermedad
 *
 * @ORM\Table(name="enfermedad", uniqueConstraints={@ORM\UniqueConstraint(name="enfermedad_pk", columns={"id_enfermedad"})})
 * @ORM\Entity
 */
class Enfermedad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_enfermedad", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="enfermedad_id_enfermedad_seq", allocationSize=1, initialValue=1)
     */
    private $idEnfermedad;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_enfermedad", type="string", length=50, nullable=false)
     */
    private $nombreEnfermedad;

    /**
     * @var boolean
     *
     * @ORM\Column(name="tiene_vacuna", type="boolean", nullable=false)
     */
    private $tieneVacuna;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_enfermedad", type="boolean", nullable=false)
     */
    private $estadoEnfermedad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Finca", inversedBy="idEnfermedad")
     * @ORM\JoinTable(name="muestra",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_enfermedad", referencedColumnName="id_enfermedad")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_finca", referencedColumnName="id_finca")
     *   }
     * )
     */
    private $idFinca;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFinca = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idEnfermedad
     *
     * @return integer 
     */
    public function getIdEnfermedad()
    {
        return $this->idEnfermedad;
    }

    /**
     * Set nombreEnfermedad
     *
     * @param string $nombreEnfermedad
     * @return Enfermedad
     */
    public function setNombreEnfermedad($nombreEnfermedad)
    {
        $this->nombreEnfermedad = $nombreEnfermedad;

        return $this;
    }

    /**
     * Get nombreEnfermedad
     *
     * @return string 
     */
    public function getNombreEnfermedad()
    {
        return $this->nombreEnfermedad;
    }

    /**
     * Set tieneVacuna
     *
     * @param boolean $tieneVacuna
     * @return Enfermedad
     */
    public function setTieneVacuna($tieneVacuna)
    {
        $this->tieneVacuna = $tieneVacuna;

        return $this;
    }

    /**
     * Get tieneVacuna
     *
     * @return boolean 
     */
    public function getTieneVacuna()
    {
        return $this->tieneVacuna;
    }

    /**
     * Set estadoEnfermedad
     *
     * @param boolean $estadoEnfermedad
     * @return Enfermedad
     */
    public function setEstadoEnfermedad($estadoEnfermedad)
    {
        $this->estadoEnfermedad = $estadoEnfermedad;

        return $this;
    }

    /**
     * Get estadoEnfermedad
     *
     * @return boolean 
     */
    public function getEstadoEnfermedad()
    {
        return $this->estadoEnfermedad;
    }

    /**
     * Add idFinca
     *
     * @param \SIGivetBundle\Entity\Finca $idFinca
     * @return Enfermedad
     */
    public function addIdFinca(\SIGivetBundle\Entity\Finca $idFinca)
    {
        $this->idFinca[] = $idFinca;

        return $this;
    }

    /**
     * Remove idFinca
     *
     * @param \SIGivetBundle\Entity\Finca $idFinca
     */
    public function removeIdFinca(\SIGivetBundle\Entity\Finca $idFinca)
    {
        $this->idFinca->removeElement($idFinca);
    }

    /**
     * Get idFinca
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdFinca()
    {
        return $this->idFinca;
    }
}
