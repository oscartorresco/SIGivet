<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Finca
 *
 * @ORM\Table(name="finca", indexes={@ORM\Index(name="r3_fk", columns={"id_vereda"}), @ORM\Index(name="r33_fk", columns={"id_pasto"})})
 * @ORM\Entity
 */
class Finca
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_finca", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="finca_id_finca_seq", allocationSize=1, initialValue=1)
     */
    private $idFinca;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_persona", type="integer", nullable=false)
     */
    private $idPersona;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_finca", type="string", length=50, nullable=false)
     */
    private $nombreFinca;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono_finca", type="string", length=50, nullable=true)
     */
    private $telefonoFinca;

    /**
     * @var string
     *
     * @ORM\Column(name="direccion_finca", type="string", length=100, nullable=false)
     */
    private $direccionFinca;

    /**
     * @var string
     *
     * @ORM\Column(name="area_finca", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $areaFinca;

    /**
     * @var integer
     *
     * @ORM\Column(name="msnm", type="integer", nullable=true)
     */
    private $msnm;

    /**
     * @var string
     *
     * @ORM\Column(name="temperatura_finca", type="decimal", precision=10, scale=0, nullable=true)
     */
    private $temperaturaFinca;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_finca", type="boolean", nullable=false)
     */
    private $estadoFinca;

    /**
     * @var \Vereda
     *
     * @ORM\ManyToOne(targetEntity="Vereda")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_vereda", referencedColumnName="id_vereda")
     * })
     */
    private $idVereda;

    /**
     * @var \Pasto
     *
     * @ORM\ManyToOne(targetEntity="Pasto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_pasto", referencedColumnName="id_pasto")
     * })
     */
    private $idPasto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="FuenteAgua", inversedBy="idFinca")
     * @ORM\JoinTable(name="fuente_agua_finca",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_finca", referencedColumnName="id_finca")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_fuente_agua", referencedColumnName="id_fuente_agua")
     *   }
     * )
     */
    private $idFuenteAgua;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Enfermedad", mappedBy="idFinca")
     */
    private $idEnfermedad;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ParametroReproductivo", mappedBy="idFinca")
     */
    private $idParametroReproductivo;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idFuenteAgua = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idEnfermedad = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idParametroReproductivo = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idFinca
     *
     * @return integer 
     */
    public function getIdFinca()
    {
        return $this->idFinca;
    }

    /**
     * Set idPersona
     *
     * @param integer $idPersona
     * @return Finca
     */
    public function setIdPersona($idPersona)
    {
        $this->idPersona = $idPersona;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return integer 
     */
    public function getIdPersona()
    {
        return $this->idPersona;
    }

    /**
     * Set nombreFinca
     *
     * @param string $nombreFinca
     * @return Finca
     */
    public function setNombreFinca($nombreFinca)
    {
        $this->nombreFinca = $nombreFinca;

        return $this;
    }

    /**
     * Get nombreFinca
     *
     * @return string 
     */
    public function getNombreFinca()
    {
        return $this->nombreFinca;
    }

    /**
     * Set telefonoFinca
     *
     * @param string $telefonoFinca
     * @return Finca
     */
    public function setTelefonoFinca($telefonoFinca)
    {
        $this->telefonoFinca = $telefonoFinca;

        return $this;
    }

    /**
     * Get telefonoFinca
     *
     * @return string 
     */
    public function getTelefonoFinca()
    {
        return $this->telefonoFinca;
    }

    /**
     * Set direccionFinca
     *
     * @param string $direccionFinca
     * @return Finca
     */
    public function setDireccionFinca($direccionFinca)
    {
        $this->direccionFinca = $direccionFinca;

        return $this;
    }

    /**
     * Get direccionFinca
     *
     * @return string 
     */
    public function getDireccionFinca()
    {
        return $this->direccionFinca;
    }

    /**
     * Set areaFinca
     *
     * @param string $areaFinca
     * @return Finca
     */
    public function setAreaFinca($areaFinca)
    {
        $this->areaFinca = $areaFinca;

        return $this;
    }

    /**
     * Get areaFinca
     *
     * @return string 
     */
    public function getAreaFinca()
    {
        return $this->areaFinca;
    }

    /**
     * Set msnm
     *
     * @param integer $msnm
     * @return Finca
     */
    public function setMsnm($msnm)
    {
        $this->msnm = $msnm;

        return $this;
    }

    /**
     * Get msnm
     *
     * @return integer 
     */
    public function getMsnm()
    {
        return $this->msnm;
    }

    /**
     * Set temperaturaFinca
     *
     * @param string $temperaturaFinca
     * @return Finca
     */
    public function setTemperaturaFinca($temperaturaFinca)
    {
        $this->temperaturaFinca = $temperaturaFinca;

        return $this;
    }

    /**
     * Get temperaturaFinca
     *
     * @return string 
     */
    public function getTemperaturaFinca()
    {
        return $this->temperaturaFinca;
    }

    /**
     * Set estadoFinca
     *
     * @param boolean $estadoFinca
     * @return Finca
     */
    public function setEstadoFinca($estadoFinca)
    {
        $this->estadoFinca = $estadoFinca;

        return $this;
    }

    /**
     * Get estadoFinca
     *
     * @return boolean 
     */
    public function getEstadoFinca()
    {
        return $this->estadoFinca;
    }

    /**
     * Set idVereda
     *
     * @param \SIGivetBundle\Entity\Vereda $idVereda
     * @return Finca
     */
    public function setIdVereda(\SIGivetBundle\Entity\Vereda $idVereda = null)
    {
        $this->idVereda = $idVereda;

        return $this;
    }

    /**
     * Get idVereda
     *
     * @return \SIGivetBundle\Entity\Vereda 
     */
    public function getIdVereda()
    {
        return $this->idVereda;
    }

    /**
     * Set idPasto
     *
     * @param \SIGivetBundle\Entity\Pasto $idPasto
     * @return Finca
     */
    public function setIdPasto(\SIGivetBundle\Entity\Pasto $idPasto = null)
    {
        $this->idPasto = $idPasto;

        return $this;
    }

    /**
     * Get idPasto
     *
     * @return \SIGivetBundle\Entity\Pasto 
     */
    public function getIdPasto()
    {
        return $this->idPasto;
    }

    /**
     * Add idFuenteAgua
     *
     * @param \SIGivetBundle\Entity\FuenteAgua $idFuenteAgua
     * @return Finca
     */
    public function addIdFuenteAgua(\SIGivetBundle\Entity\FuenteAgua $idFuenteAgua)
    {
        $this->idFuenteAgua[] = $idFuenteAgua;

        return $this;
    }

    /**
     * Remove idFuenteAgua
     *
     * @param \SIGivetBundle\Entity\FuenteAgua $idFuenteAgua
     */
    public function removeIdFuenteAgua(\SIGivetBundle\Entity\FuenteAgua $idFuenteAgua)
    {
        $this->idFuenteAgua->removeElement($idFuenteAgua);
    }

    /**
     * Get idFuenteAgua
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdFuenteAgua()
    {
        return $this->idFuenteAgua;
    }

    /**
     * Add idEnfermedad
     *
     * @param \SIGivetBundle\Entity\Enfermedad $idEnfermedad
     * @return Finca
     */
    public function addIdEnfermedad(\SIGivetBundle\Entity\Enfermedad $idEnfermedad)
    {
        $this->idEnfermedad[] = $idEnfermedad;

        return $this;
    }

    /**
     * Remove idEnfermedad
     *
     * @param \SIGivetBundle\Entity\Enfermedad $idEnfermedad
     */
    public function removeIdEnfermedad(\SIGivetBundle\Entity\Enfermedad $idEnfermedad)
    {
        $this->idEnfermedad->removeElement($idEnfermedad);
    }

    /**
     * Get idEnfermedad
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEnfermedad()
    {
        return $this->idEnfermedad;
    }

    /**
     * Add idParametroReproductivo
     *
     * @param \SIGivetBundle\Entity\ParametroReproductivo $idParametroReproductivo
     * @return Finca
     */
    public function addIdParametroReproductivo(\SIGivetBundle\Entity\ParametroReproductivo $idParametroReproductivo)
    {
        $this->idParametroReproductivo[] = $idParametroReproductivo;

        return $this;
    }

    /**
     * Remove idParametroReproductivo
     *
     * @param \SIGivetBundle\Entity\ParametroReproductivo $idParametroReproductivo
     */
    public function removeIdParametroReproductivo(\SIGivetBundle\Entity\ParametroReproductivo $idParametroReproductivo)
    {
        $this->idParametroReproductivo->removeElement($idParametroReproductivo);
    }

    /**
     * Get idParametroReproductivo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdParametroReproductivo()
    {
        return $this->idParametroReproductivo;
    }
}
