<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SuplementoNutricional
 *
 * @ORM\Table(name="suplemento_nutricional", uniqueConstraints={@ORM\UniqueConstraint(name="suplemento_nutricional_pk", columns={"id_suplemento_nutricional"})})
 * @ORM\Entity
 */
class SuplementoNutricional
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_suplemento_nutricional", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="suplemento_nutricional_id_suplemento_nutricional_seq", allocationSize=1, initialValue=1)
     */
    private $idSuplementoNutricional;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo_suplemento_nutricional", type="string", length=100, nullable=false)
     */
    private $tipoSuplementoNutricional;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_suplemento", type="boolean", nullable=false)
     */
    private $estadoSuplemento;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Estudio", inversedBy="idSuplementoNutricional")
     * @ORM\JoinTable(name="suplemento_suministrado",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_suplemento_nutricional", referencedColumnName="id_suplemento_nutricional")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_estudio", referencedColumnName="id_estudio")
     *   }
     * )
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
     * Get idSuplementoNutricional
     *
     * @return integer 
     */
    public function getIdSuplementoNutricional()
    {
        return $this->idSuplementoNutricional;
    }

    /**
     * Set tipoSuplementoNutricional
     *
     * @param string $tipoSuplementoNutricional
     * @return SuplementoNutricional
     */
    public function setTipoSuplementoNutricional($tipoSuplementoNutricional)
    {
        $this->tipoSuplementoNutricional = $tipoSuplementoNutricional;

        return $this;
    }

    /**
     * Get tipoSuplementoNutricional
     *
     * @return string 
     */
    public function getTipoSuplementoNutricional()
    {
        return $this->tipoSuplementoNutricional;
    }

    /**
     * Set estadoSuplemento
     *
     * @param boolean $estadoSuplemento
     * @return SuplementoNutricional
     */
    public function setEstadoSuplemento($estadoSuplemento)
    {
        $this->estadoSuplemento = $estadoSuplemento;

        return $this;
    }

    /**
     * Get estadoSuplemento
     *
     * @return boolean 
     */
    public function getEstadoSuplemento()
    {
        return $this->estadoSuplemento;
    }

    /**
     * Add idEstudio
     *
     * @param \SIGivetBundle\Entity\Estudio $idEstudio
     * @return SuplementoNutricional
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
