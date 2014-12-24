<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vereda
 *
 * @ORM\Table(name="vereda", uniqueConstraints={@ORM\UniqueConstraint(name="vereda_pk", columns={"id_vereda"})}, indexes={@ORM\Index(name="IDX_896529F3798C152C", columns={"gid_municipio"})})
 * @ORM\Entity
 */
class Vereda
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_vereda", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="vereda_id_vereda_seq", allocationSize=1, initialValue=1)
     */
    private $idVereda;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_vereda", type="string", length=50, nullable=false)
     */
    private $nombreVereda;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_vereda", type="boolean", nullable=false)
     */
    private $estadoVereda;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gid_municipio", referencedColumnName="gid")
     * })
     */
    private $gidMunicipio;



    /**
     * Get idVereda
     *
     * @return integer 
     */
    public function getIdVereda()
    {
        return $this->idVereda;
    }

    /**
     * Set nombreVereda
     *
     * @param string $nombreVereda
     * @return Vereda
     */
    public function setNombreVereda($nombreVereda)
    {
        $this->nombreVereda = $nombreVereda;

        return $this;
    }

    /**
     * Get nombreVereda
     *
     * @return string 
     */
    public function getNombreVereda()
    {
        return $this->nombreVereda;
    }

    /**
     * Set estadoVereda
     *
     * @param boolean $estadoVereda
     * @return Vereda
     */
    public function setEstadoVereda($estadoVereda)
    {
        $this->estadoVereda = $estadoVereda;

        return $this;
    }

    /**
     * Get estadoVereda
     *
     * @return boolean 
     */
    public function getEstadoVereda()
    {
        return $this->estadoVereda;
    }

    /**
     * Set gidMunicipio
     *
     * @param \SIGivetBundle\Entity\Municipio $gidMunicipio
     * @return Vereda
     */
    public function setGidMunicipio(\SIGivetBundle\Entity\Municipio $gidMunicipio = null)
    {
        $this->gidMunicipio = $gidMunicipio;

        return $this;
    }

    /**
     * Get gidMunicipio
     *
     * @return \SIGivetBundle\Entity\Municipio 
     */
    public function getGidMunicipio()
    {
        return $this->gidMunicipio;
    }
}
