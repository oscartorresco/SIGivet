<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ManejoReproductivo
 *
 * @ORM\Table(name="manejo_reproductivo", uniqueConstraints={@ORM\UniqueConstraint(name="manejo_reproductivo_pk", columns={"id_manejo_reproductivo"})})
 * @ORM\Entity
 */
class ManejoReproductivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_manejo_reproductivo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="manejo_reproductivo_id_manejo_reproductivo_seq", allocationSize=1, initialValue=1)
     */
    private $idManejoReproductivo;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_manejo_reproductivo", type="string", length=100, nullable=false)
     */
    private $tipoManejoReproductivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_manejo_reproductivo", type="boolean", nullable=false)
     */
    private $estadoManejoReproductivo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Estudio", mappedBy="idManejoReproductivo")
     */
    private $idEstudio;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idEstudio = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idManejoReproductivo
     *
     * @return integer 
     */
    public function getIdManejoReproductivo()
    {
        return $this->idManejoReproductivo;
    }

    /**
     * Set tipoManejoReproductivo
     *
     * @param string $tipoManejoReproductivo
     * @return ManejoReproductivo
     */
    public function setTipoManejoReproductivo($tipoManejoReproductivo)
    {
        $this->tipoManejoReproductivo = $tipoManejoReproductivo;

        return $this;
    }

    /**
     * Get tipoManejoReproductivo
     *
     * @return string 
     */
    public function getTipoManejoReproductivo()
    {
        return $this->tipoManejoReproductivo;
    }

    /**
     * Set estadoManejoReproductivo
     *
     * @param boolean $estadoManejoReproductivo
     * @return ManejoReproductivo
     */
    public function setEstadoManejoReproductivo($estadoManejoReproductivo)
    {
        $this->estadoManejoReproductivo = $estadoManejoReproductivo;

        return $this;
    }

    /**
     * Get estadoManejoReproductivo
     *
     * @return boolean 
     */
    public function getEstadoManejoReproductivo()
    {
        return $this->estadoManejoReproductivo;
    }

    /**
     * Add idEstudio
     *
     * @param \SIGivetBundle\Entity\Estudio $idEstudio
     * @return ManejoReproductivo
     */
    public function addIdEstudio(\SIGivetBundle\Entity\Estudio $idEstudio)
    {
        $this->idEstudio[] = $idEstudio;

        return $this;
    }

    /**
     * Remove idEstudio
     *
     * @param \SIGivetBundle\Entity\Estudio $idEstudio
     */
    public function removeIdEstudio(\SIGivetBundle\Entity\Estudio $idEstudio)
    {
        $this->idEstudio->removeElement($idEstudio);
    }

    /**
     * Get idEstudio
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdEstudio()
    {
        return $this->idEstudio;
    }
}
