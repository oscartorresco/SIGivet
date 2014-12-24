<?php

namespace SIGivetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Estudio
 *
 * @ORM\Table(name="estudio", uniqueConstraints={@ORM\UniqueConstraint(name="estudio_pk", columns={"id_estudio"})}, indexes={@ORM\Index(name="r14_fk", columns={"id_finca"}), @ORM\Index(name="r50_fk", columns={"id_proyecto"}), @ORM\Index(name="r21_fk", columns={"id_raza"})})
 * @ORM\Entity
 */
class Estudio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_estudio", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="estudio_id_estudio_seq", allocationSize=1, initialValue=1)
     */
    private $idEstudio;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_persona", type="integer", nullable=false)
     */
    private $idPersona;

    /**
     * @var integer
     *
     * @ORM\Column(name="vacas_toro", type="integer", nullable=true)
     */
    private $vacasToro;

    /**
     * @var boolean
     *
     * @ORM\Column(name="comparte_reproductores", type="boolean", nullable=true)
     */
    private $comparteReproductores;

    /**
     * @var boolean
     *
     * @ORM\Column(name="animales_certificados", type="boolean", nullable=true)
     */
    private $animalesCertificados;

    /**
     * @var integer
     *
     * @ORM\Column(name="disposicion_animal_muerto", type="integer", nullable=true)
     */
    private $disposicionAnimalMuerto;

    /**
     * @var boolean
     *
     * @ORM\Column(name="control_roedores", type="boolean", nullable=true)
     */
    private $controlRoedores;

    /**
     * @var integer
     *
     * @ORM\Column(name="almacen_concentrado", type="integer", nullable=true)
     */
    private $almacenConcentrado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="humedad_alimentos", type="boolean", nullable=true)
     */
    private $humedadAlimentos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="registro_produccion", type="boolean", nullable=true)
     */
    private $registroProduccion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="botoquin_veterinario", type="boolean", nullable=true)
     */
    private $botoquinVeterinario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="productos_agricolas", type="boolean", nullable=true)
     */
    private $productosAgricolas;

    /**
     * @var boolean
     *
     * @ORM\Column(name="asistente_tecnico", type="boolean", nullable=true)
     */
    private $asistenteTecnico;

    /**
     * @var boolean
     *
     * @ORM\Column(name="control_ectoparasitos", type="boolean", nullable=true)
     */
    private $controlEctoparasitos;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_estudio", type="boolean", nullable=false)
     */
    private $estadoEstudio;

    /**
     * @var \Finca
     *
     * @ORM\ManyToOne(targetEntity="Finca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_finca", referencedColumnName="id_finca")
     * })
     */
    private $idFinca;

    /**
     * @var \Raza
     *
     * @ORM\ManyToOne(targetEntity="Raza")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_raza", referencedColumnName="id_raza")
     * })
     */
    private $idRaza;

    /**
     * @var \Proyecto
     *
     * @ORM\ManyToOne(targetEntity="Proyecto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proyecto", referencedColumnName="id_proyecto")
     * })
     */
    private $idProyecto;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="RazaClasificacion", mappedBy="idEstudio")
     */
    private $idClasificacion;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="ManejoReproductivo", inversedBy="idEstudio")
     * @ORM\JoinTable(name="manejo_reproductivo_finca",
     *   joinColumns={
     *     @ORM\JoinColumn(name="id_estudio", referencedColumnName="id_estudio")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="id_manejo_reproductivo", referencedColumnName="id_manejo_reproductivo")
     *   }
     * )
     */
    private $idManejoReproductivo;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Sintoma", mappedBy="idEstudio")
     */
    private $idSintoma;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="SuplementoNutricional", mappedBy="idEstudio")
     */
    private $idSuplementoNutricional;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idClasificacion = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idManejoReproductivo = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idSintoma = new \Doctrine\Common\Collections\ArrayCollection();
        $this->idSuplementoNutricional = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Get idEstudio
     *
     * @return integer 
     */
    public function getIdEstudio()
    {
        return $this->idEstudio;
    }

    /**
     * Set idPersona
     *
     * @param integer $idPersona
     * @return Estudio
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
     * Set vacasToro
     *
     * @param integer $vacasToro
     * @return Estudio
     */
    public function setVacasToro($vacasToro)
    {
        $this->vacasToro = $vacasToro;

        return $this;
    }

    /**
     * Get vacasToro
     *
     * @return integer 
     */
    public function getVacasToro()
    {
        return $this->vacasToro;
    }

    /**
     * Set comparteReproductores
     *
     * @param boolean $comparteReproductores
     * @return Estudio
     */
    public function setComparteReproductores($comparteReproductores)
    {
        $this->comparteReproductores = $comparteReproductores;

        return $this;
    }

    /**
     * Get comparteReproductores
     *
     * @return boolean 
     */
    public function getComparteReproductores()
    {
        return $this->comparteReproductores;
    }

    /**
     * Set animalesCertificados
     *
     * @param boolean $animalesCertificados
     * @return Estudio
     */
    public function setAnimalesCertificados($animalesCertificados)
    {
        $this->animalesCertificados = $animalesCertificados;

        return $this;
    }

    /**
     * Get animalesCertificados
     *
     * @return boolean 
     */
    public function getAnimalesCertificados()
    {
        return $this->animalesCertificados;
    }

    /**
     * Set disposicionAnimalMuerto
     *
     * @param integer $disposicionAnimalMuerto
     * @return Estudio
     */
    public function setDisposicionAnimalMuerto($disposicionAnimalMuerto)
    {
        $this->disposicionAnimalMuerto = $disposicionAnimalMuerto;

        return $this;
    }

    /**
     * Get disposicionAnimalMuerto
     *
     * @return integer 
     */
    public function getDisposicionAnimalMuerto()
    {
        return $this->disposicionAnimalMuerto;
    }

    /**
     * Set controlRoedores
     *
     * @param boolean $controlRoedores
     * @return Estudio
     */
    public function setControlRoedores($controlRoedores)
    {
        $this->controlRoedores = $controlRoedores;

        return $this;
    }

    /**
     * Get controlRoedores
     *
     * @return boolean 
     */
    public function getControlRoedores()
    {
        return $this->controlRoedores;
    }

    /**
     * Set almacenConcentrado
     *
     * @param integer $almacenConcentrado
     * @return Estudio
     */
    public function setAlmacenConcentrado($almacenConcentrado)
    {
        $this->almacenConcentrado = $almacenConcentrado;

        return $this;
    }

    /**
     * Get almacenConcentrado
     *
     * @return integer 
     */
    public function getAlmacenConcentrado()
    {
        return $this->almacenConcentrado;
    }

    /**
     * Set humedadAlimentos
     *
     * @param boolean $humedadAlimentos
     * @return Estudio
     */
    public function setHumedadAlimentos($humedadAlimentos)
    {
        $this->humedadAlimentos = $humedadAlimentos;

        return $this;
    }

    /**
     * Get humedadAlimentos
     *
     * @return boolean 
     */
    public function getHumedadAlimentos()
    {
        return $this->humedadAlimentos;
    }

    /**
     * Set registroProduccion
     *
     * @param boolean $registroProduccion
     * @return Estudio
     */
    public function setRegistroProduccion($registroProduccion)
    {
        $this->registroProduccion = $registroProduccion;

        return $this;
    }

    /**
     * Get registroProduccion
     *
     * @return boolean 
     */
    public function getRegistroProduccion()
    {
        return $this->registroProduccion;
    }

    /**
     * Set botoquinVeterinario
     *
     * @param boolean $botoquinVeterinario
     * @return Estudio
     */
    public function setBotoquinVeterinario($botoquinVeterinario)
    {
        $this->botoquinVeterinario = $botoquinVeterinario;

        return $this;
    }

    /**
     * Get botoquinVeterinario
     *
     * @return boolean 
     */
    public function getBotoquinVeterinario()
    {
        return $this->botoquinVeterinario;
    }

    /**
     * Set productosAgricolas
     *
     * @param boolean $productosAgricolas
     * @return Estudio
     */
    public function setProductosAgricolas($productosAgricolas)
    {
        $this->productosAgricolas = $productosAgricolas;

        return $this;
    }

    /**
     * Get productosAgricolas
     *
     * @return boolean 
     */
    public function getProductosAgricolas()
    {
        return $this->productosAgricolas;
    }

    /**
     * Set asistenteTecnico
     *
     * @param boolean $asistenteTecnico
     * @return Estudio
     */
    public function setAsistenteTecnico($asistenteTecnico)
    {
        $this->asistenteTecnico = $asistenteTecnico;

        return $this;
    }

    /**
     * Get asistenteTecnico
     *
     * @return boolean 
     */
    public function getAsistenteTecnico()
    {
        return $this->asistenteTecnico;
    }

    /**
     * Set controlEctoparasitos
     *
     * @param boolean $controlEctoparasitos
     * @return Estudio
     */
    public function setControlEctoparasitos($controlEctoparasitos)
    {
        $this->controlEctoparasitos = $controlEctoparasitos;

        return $this;
    }

    /**
     * Get controlEctoparasitos
     *
     * @return boolean 
     */
    public function getControlEctoparasitos()
    {
        return $this->controlEctoparasitos;
    }

    /**
     * Set estadoEstudio
     *
     * @param boolean $estadoEstudio
     * @return Estudio
     */
    public function setEstadoEstudio($estadoEstudio)
    {
        $this->estadoEstudio = $estadoEstudio;

        return $this;
    }

    /**
     * Get estadoEstudio
     *
     * @return boolean 
     */
    public function getEstadoEstudio()
    {
        return $this->estadoEstudio;
    }

    /**
     * Set idFinca
     *
     * @param \SIGivetBundle\Entity\Finca $idFinca
     * @return Estudio
     */
    public function setIdFinca(\SIGivetBundle\Entity\Finca $idFinca = null)
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

    /**
     * Set idRaza
     *
     * @param \SIGivetBundle\Entity\Raza $idRaza
     * @return Estudio
     */
    public function setIdRaza(\SIGivetBundle\Entity\Raza $idRaza = null)
    {
        $this->idRaza = $idRaza;

        return $this;
    }

    /**
     * Get idRaza
     *
     * @return \SIGivetBundle\Entity\Raza 
     */
    public function getIdRaza()
    {
        return $this->idRaza;
    }

    /**
     * Set idProyecto
     *
     * @param \SIGivetBundle\Entity\Proyecto $idProyecto
     * @return Estudio
     */
    public function setIdProyecto(\SIGivetBundle\Entity\Proyecto $idProyecto = null)
    {
        $this->idProyecto = $idProyecto;

        return $this;
    }

    /**
     * Get idProyecto
     *
     * @return \SIGivetBundle\Entity\Proyecto 
     */
    public function getIdProyecto()
    {
        return $this->idProyecto;
    }

    /**
     * Add idClasificacion
     *
     * @param \SIGivetBundle\Entity\RazaClasificacion $idClasificacion
     * @return Estudio
     */
    public function addIdClasificacion(\SIGivetBundle\Entity\RazaClasificacion $idClasificacion)
    {
        $this->idClasificacion[] = $idClasificacion;

        return $this;
    }

    /**
     * Remove idClasificacion
     *
     * @param \SIGivetBundle\Entity\RazaClasificacion $idClasificacion
     */
    public function removeIdClasificacion(\SIGivetBundle\Entity\RazaClasificacion $idClasificacion)
    {
        $this->idClasificacion->removeElement($idClasificacion);
    }

    /**
     * Get idClasificacion
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdClasificacion()
    {
        return $this->idClasificacion;
    }

    /**
     * Add idManejoReproductivo
     *
     * @param \SIGivetBundle\Entity\ManejoReproductivo $idManejoReproductivo
     * @return Estudio
     */
    public function addIdManejoReproductivo(\SIGivetBundle\Entity\ManejoReproductivo $idManejoReproductivo)
    {
        $this->idManejoReproductivo[] = $idManejoReproductivo;

        return $this;
    }

    /**
     * Remove idManejoReproductivo
     *
     * @param \SIGivetBundle\Entity\ManejoReproductivo $idManejoReproductivo
     */
    public function removeIdManejoReproductivo(\SIGivetBundle\Entity\ManejoReproductivo $idManejoReproductivo)
    {
        $this->idManejoReproductivo->removeElement($idManejoReproductivo);
    }

    /**
     * Get idManejoReproductivo
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdManejoReproductivo()
    {
        return $this->idManejoReproductivo;
    }

    /**
     * Add idSintoma
     *
     * @param \SIGivetBundle\Entity\Sintoma $idSintoma
     * @return Estudio
     */
    public function addIdSintoma(\SIGivetBundle\Entity\Sintoma $idSintoma)
    {
        $this->idSintoma[] = $idSintoma;

        return $this;
    }

    /**
     * Remove idSintoma
     *
     * @param \SIGivetBundle\Entity\Sintoma $idSintoma
     */
    public function removeIdSintoma(\SIGivetBundle\Entity\Sintoma $idSintoma)
    {
        $this->idSintoma->removeElement($idSintoma);
    }

    /**
     * Get idSintoma
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdSintoma()
    {
        return $this->idSintoma;
    }

    /**
     * Add idSuplementoNutricional
     *
     * @param \SIGivetBundle\Entity\SuplementoNutricional $idSuplementoNutricional
     * @return Estudio
     */
    public function addIdSuplementoNutricional(\SIGivetBundle\Entity\SuplementoNutricional $idSuplementoNutricional)
    {
        $this->idSuplementoNutricional[] = $idSuplementoNutricional;

        return $this;
    }

    /**
     * Remove idSuplementoNutricional
     *
     * @param \SIGivetBundle\Entity\SuplementoNutricional $idSuplementoNutricional
     */
    public function removeIdSuplementoNutricional(\SIGivetBundle\Entity\SuplementoNutricional $idSuplementoNutricional)
    {
        $this->idSuplementoNutricional->removeElement($idSuplementoNutricional);
    }

    /**
     * Get idSuplementoNutricional
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIdSuplementoNutricional()
    {
        return $this->idSuplementoNutricional;
    }
}
