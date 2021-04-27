<?php

namespace XYZ\ProveedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cuenta
 *
 * @ORM\Table(name="cuenta", uniqueConstraints={@ORM\UniqueConstraint(name="cuentaNumero_UNIQUE", columns={"cuentaNumero"})}, indexes={@ORM\Index(name="fk_cuenta_compra1_idx", columns={"compra_idcompra"})})
 * @ORM\Entity
 */
class Cuenta
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcuenta", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcuenta;

    /**
     * @var string
     *
     * @ORM\Column(name="cuentaNumero", type="string", length=20, nullable=false)
     */
    private $cuentanumero;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="cuentaFechaOperacion", type="date", nullable=false)
     */
    private $cuentafechaoperacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cuentaPagada", type="boolean", nullable=false)
     */
    private $cuentapagada;

    /**
     * @var \XYZ\ProveedorBundle\Entity\Compra
     *
     * @ORM\ManyToOne(targetEntity="XYZ\ProveedorBundle\Entity\Compra")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="compra_idcompra", referencedColumnName="idcompra")
     * })
     */
    private $compracompra;



    /**
     * Get idcuenta
     *
     * @return integer
     */
    public function getIdcuenta()
    {
        return $this->idcuenta;
    }

    /**
     * Set cuentanumero
     *
     * @param string $cuentanumero
     *
     * @return Cuenta
     */
    public function setCuentanumero($cuentanumero)
    {
        $this->cuentanumero = $cuentanumero;

        return $this;
    }

    /**
     * Get cuentanumero
     *
     * @return string
     */
    public function getCuentanumero()
    {
        return $this->cuentanumero;
    }

    /**
     * Set cuentafechaoperacion
     *
     * @param \DateTime $cuentafechaoperacion
     *
     * @return Cuenta
     */
    public function setCuentafechaoperacion($cuentafechaoperacion)
    {
        $this->cuentafechaoperacion = $cuentafechaoperacion;

        return $this;
    }

    /**
     * Get cuentafechaoperacion
     *
     * @return \DateTime
     */
    public function getCuentafechaoperacion()
    {
        return $this->cuentafechaoperacion;
    }

    /**
     * Set cuentapagada
     *
     * @param boolean $cuentapagada
     *
     * @return Cuenta
     */
    public function setCuentapagada($cuentapagada)
    {
        $this->cuentapagada = $cuentapagada;

        return $this;
    }

    /**
     * Get cuentapagada
     *
     * @return boolean
     */
    public function getCuentapagada()
    {
        return $this->cuentapagada;
    }

    /**
     * Set compracompra
     *
     * @param \XYZ\ProveedorBundle\Entity\Compra $compracompra
     *
     * @return Cuenta
     */
    public function setCompracompra(\XYZ\ProveedorBundle\Entity\Compra $compracompra = null)
    {
        $this->compracompra = $compracompra;

        return $this;
    }

    /**
     * Get compracompra
     *
     * @return \XYZ\ProveedorBundle\Entity\Compra
     */
    public function getCompracompra()
    {
        return $this->compracompra;
    }
}
