<?php

namespace App\Entity;

use App\Repository\IncidenciaRepository;
use App\Entity\TipoIncidencia;
use App\Entity\Emplazamiento;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IncidenciaRepository::class)
 */
class Incidencia
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idUsuario;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $numeroIncidencia;

    /**
     * @ORM\Column(type="datetime")
     */
    private $fechaIntroduccion;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaIncidencia;

    /**
     * @ORM\Column(type="integer")
     */
    private $turno;
    
    /**
     * @ORM\Column(type="integer")
     */
    private $estado;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $otroEmplazamiento;

    /**
     * @ORM\Column(type="text")
     */
    private $descripcion;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $analisisCausa;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isAnonimo;

    /**
     * @ORM\ManyToOne(targetEntity=TipoIncidencia::class, inversedBy="incidencias")
     */
    private $tipoIncidencia;

    /**
     * @ORM\ManyToOne(targetEntity=Emplazamiento::class, inversedBy="incidencias")
     */
    private $emplazamiento;


    public function __construct()
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdUsuario(): ?int
    {
        return $this->idUsuario;
    }

    public function setIdUsuario(int $idUsuario): self
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getNumeroIncidencia(): ?string
    {
        return $this->numeroIncidencia;
    }

    public function setNumeroIncidencia(string $numeroIncidencia): self
    {
        $this->numeroIncidencia = $numeroIncidencia;

        return $this;
    }

    public function getFechaIntroduccion(): ?\DateTimeInterface
    {
        return $this->fechaIntroduccion;
    }

    public function setFechaIntroduccion(\DateTimeInterface $fechaIntroduccion): self
    {
        $this->fechaIntroduccion = $fechaIntroduccion;

        return $this;
    }

    public function getFechaIncidencia(): ?\DateTimeInterface
    {
        return $this->fechaIncidencia;
    }

    public function setFechaIncidencia(\DateTimeInterface $fechaIncidencia): self
    {
        $this->fechaIncidencia = $fechaIncidencia;

        return $this;
    }

    public function getTurno(): ?int
    {
        return $this->turno;
    }

    public function setTurno(int $turno): self
    {
        $this->turno = $turno;

        return $this;
    }

    public function getEstado(): ?int
    {
        return $this->estado;
    }

    public function setEstado(int $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getOtroEmplazamiento(): ?string
    {
        return $this->otroEmplazamiento;
    }

    public function setOtroEmplazamiento(?string $otroEmplazamiento): self
    {
        $this->otroEmplazamiento = $otroEmplazamiento;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(string $descripcion): self
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getAnalisisCausa(): ?string
    {
        return $this->analisisCausa;
    }

    public function setAnalisisCausa(?string $analisisCausa): self
    {
        $this->analisisCausa = $analisisCausa;

        return $this;
    }

    public function getIsAnonimo(): ?bool
    {
        return $this->isAnonimo;
    }

    public function setIsAnonimo(bool $isAnonimo): self
    {
        $this->isAnonimo = $isAnonimo;

        return $this;
    }

    public function getIsAnonimo2(): ?bool
    {
        return $this->isAnonimo2;
    }

    public function setIsAnonimo2(bool $isAnonimo2): self
    {
        $this->isAnonimo2 = $isAnonimo2;

        return $this;
    }

    public function getTipoIncidencia(): ?TipoIncidencia
    {
        return $this->tipoIncidencia;
    }

    public function setTipoIncidencia(?TipoIncidencia $tipoIncidencia): self
    {
        $this->tipoIncidencia = $tipoIncidencia;

        return $this;
    }

    public function getEmplazamiento(): ?Emplazamiento
    {
        return $this->emplazamiento;
    }

    public function setEmplazamiento(?Emplazamiento $emplazamiento): self
    {
        $this->emplazamiento = $emplazamiento;

        return $this;
    }

}