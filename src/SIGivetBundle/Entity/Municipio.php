<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="municipio", indexes={@ORM\Index(name="IDX_FE98F5E0548E12DF", columns={"gid_provincia"})})
 * @ORM\Entity
 */
class Municipio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="gid", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="municipio_gid_seq", allocationSize=1, initialValue=1)
     */
    private $gid;

    /**
     * @var float
     *
     * @ORM\Column(name="area", type="float", precision=10, scale=0, nullable=true)
     */
    private $area;

    /**
     * @var float
     *
     * @ORM\Column(name="perimetro", type="float", precision=10, scale=0, nullable=true)
     */
    private $perimetro;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_mpio", type="text", nullable=true)
     */
    private $nomMpio;

    /**
     * @var string
     *
     * @ORM\Column(name="codmpio", type="text", nullable=true)
     */
    private $codmpio;

    /**
     * @var float
     *
     * @ORM\Column(name="pob_total", type="float", precision=10, scale=0, nullable=true)
     */
    private $pobTotal;

    /**
     * @var float
     *
     * @ORM\Column(name="shape_leng", type="float", precision=10, scale=0, nullable=true)
     */
    private $shapeLeng;

    /**
     * @var float
     *
     * @ORM\Column(name="shape_area", type="float", precision=10, scale=0, nullable=true)
     */
    private $shapeArea;

    /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="gid_provincia", referencedColumnName="gid")
     * })
     */
    private $gidProvincia;



    /**
     * Get gid
     *
     * @return integer 
     */
    public function getGid()
    {
        return $this->gid;
    }

    /**
     * Set area
     *
     * @param float $area
     * @return Municipio
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * Get area
     *
     * @return float 
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * Set perimetro
     *
     * @param float $perimetro
     * @return Municipio
     */
    public function setPerimetro($perimetro)
    {
        $this->perimetro = $perimetro;

        return $this;
    }

    /**
     * Get perimetro
     *
     * @return float 
     */
    public function getPerimetro()
    {
        return $this->perimetro;
    }

    /**
     * Set nomMpio
     *
     * @param string $nomMpio
     * @return Municipio
     */
    public function setNomMpio($nomMpio)
    {
        $this->nomMpio = $nomMpio;

        return $this;
    }

    /**
     * Get nomMpio
     *
     * @return string 
     */
    public function getNomMpio()
    {
        return $this->nomMpio;
    }

    /**
     * Set codmpio
     *
     * @param string $codmpio
     * @return Municipio
     */
    public function setCodmpio($codmpio)
    {
        $this->codmpio = $codmpio;

        return $this;
    }

    /**
     * Get codmpio
     *
     * @return string 
     */
    public function getCodmpio()
    {
        return $this->codmpio;
    }

    /**
     * Set pobTotal
     *
     * @param float $pobTotal
     * @return Municipio
     */
    public function setPobTotal($pobTotal)
    {
        $this->pobTotal = $pobTotal;

        return $this;
    }

    /**
     * Get pobTotal
     *
     * @return float 
     */
    public function getPobTotal()
    {
        return $this->pobTotal;
    }

    /**
     * Set shapeLeng
     *
     * @param float $shapeLeng
     * @return Municipio
     */
    public function setShapeLeng($shapeLeng)
    {
        $this->shapeLeng = $shapeLeng;

        return $this;
    }

    /**
     * Get shapeLeng
     *
     * @return float 
     */
    public function getShapeLeng()
    {
        return $this->shapeLeng;
    }

    /**
     * Set shapeArea
     *
     * @param float $shapeArea
     * @return Municipio
     */
    public function setShapeArea($shapeArea)
    {
        $this->shapeArea = $shapeArea;

        return $this;
    }

    /**
     * Get shapeArea
     *
     * @return float 
     */
    public function getShapeArea()
    {
        return $this->shapeArea;
    }

    /**
     * Set gidProvincia
     *
     * @param \SIGivetBundle\Entity\Provincia $gidProvincia
     * @return Municipio
     */
    public function setGidProvincia(\SIGivetBundle\Entity\Provincia $gidProvincia = null)
    {
        $this->gidProvincia = $gidProvincia;

        return $this;
    }

    /**
     * Get gidProvincia
     *
     * @return \SIGivetBundle\Entity\Provincia 
     */
    public function getGidProvincia()
    {
        return $this->gidProvincia;
    }
}
