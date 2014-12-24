<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FuenteAgua
 *
 * @ORM\Table(name="fuente_agua")
 * @ORM\Entity
 */
class FuenteAgua
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fuente_agua", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fuente_agua_id_fuente_agua_seq", allocationSize=1, initialValue=1)
     */
    private $idFuenteAgua;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_fuente_agua", type="string", length=100, nullable=false)
     */
    private $tipoFuenteAgua;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_fuente_agua", type="boolean", nullable=false)
     */
    private $estadoFuenteAgua;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Finca", mappedBy="idFuenteAgua")
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
     * Get idFuenteAgua
     *
     * @return integer 
     */
    public function getIdFuenteAgua()
    {
        return $this->idFuenteAgua;
    }

    /**
     * Set tipoFuenteAgua
     *
     * @param string $tipoFuenteAgua
     * @return FuenteAgua
     */
    public function setTipoFuenteAgua($tipoFuenteAgua)
    {
        $this->tipoFuenteAgua = $tipoFuenteAgua;

        return $this;
    }

    /**
     * Get tipoFuenteAgua
     *
     * @return string 
     */
    public function getTipoFuenteAgua()
    {
        return $this->tipoFuenteAgua;
    }

    /**
     * Set estadoFuenteAgua
     *
     * @param boolean $estadoFuenteAgua
     * @return FuenteAgua
     */
    public function setEstadoFuenteAgua($estadoFuenteAgua)
    {
        $this->estadoFuenteAgua = $estadoFuenteAgua;

        return $this;
    }

    /**
     * Get estadoFuenteAgua
     *
     * @return boolean 
     */
    public function getEstadoFuenteAgua()
    {
        return $this->estadoFuenteAgua;
    }

    /**
     * Add idFinca
     *
     * @param \SIGivetBundle\Entity\Finca $idFinca
     * @return FuenteAgua
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
