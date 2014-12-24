<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ParametroReproductivo
 *
 * @ORM\Table(name="parametro_reproductivo", uniqueConstraints={@ORM\UniqueConstraint(name="parametro_reproductivo_pk", columns={"id_parametro_reproductivo"})})
 * @ORM\Entity
 */
class ParametroReproductivo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_parametro_reproductivo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="parametro_reproductivo_id_parametro_reproductivo_seq", allocationSize=1, initialValue=1)
     */
    private $idParametroReproductivo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_parametro_reproductivo", type="string", length=100, nullable=false)
     */
    private $nombreParametroReproductivo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_parametro_reproductivo", type="boolean", nullable=false)
     */
    private $estadoParametroReproductivo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Finca", inversedBy="idParametroReproductivo")
     * @ORM\JoinTable(name="parametro_finca",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_parametro_reproductivo", referencedColumnName="id_parametro_reproductivo")
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
     * Get idParametroReproductivo
     *
     * @return integer 
     */
    public function getIdParametroReproductivo()
    {
        return $this->idParametroReproductivo;
    }

    /**
     * Set nombreParametroReproductivo
     *
     * @param string $nombreParametroReproductivo
     * @return ParametroReproductivo
     */
    public function setNombreParametroReproductivo($nombreParametroReproductivo)
    {
        $this->nombreParametroReproductivo = $nombreParametroReproductivo;

        return $this;
    }

    /**
     * Get nombreParametroReproductivo
     *
     * @return string 
     */
    public function getNombreParametroReproductivo()
    {
        return $this->nombreParametroReproductivo;
    }

    /**
     * Set estadoParametroReproductivo
     *
     * @param boolean $estadoParametroReproductivo
     * @return ParametroReproductivo
     */
    public function setEstadoParametroReproductivo($estadoParametroReproductivo)
    {
        $this->estadoParametroReproductivo = $estadoParametroReproductivo;

        return $this;
    }

    /**
     * Get estadoParametroReproductivo
     *
     * @return boolean 
     */
    public function getEstadoParametroReproductivo()
    {
        return $this->estadoParametroReproductivo;
    }

    /**
     * Add idFinca
     *
     * @param \SIGivetBundle\Entity\Finca $idFinca
     * @return ParametroReproductivo
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
