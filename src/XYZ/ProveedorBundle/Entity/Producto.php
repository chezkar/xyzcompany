<?php

namespace XYZ\ProveedorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Producto
 *
 * @ORM\Table(name="producto")
 * @ORM\Entity
 */
class Producto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idproducto", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idproducto;

    /**
     * @var string
     *
     * @ORM\Column(name="productoNombre", type="string", length=100, nullable=false)
     */
    private $productonombre;

    /**
     * @var float
     *
     * @ORM\Column(name="productoPrecio", type="float", precision=10, scale=0, nullable=false)
     */
    private $productoprecio;



    /**
     * Get idproducto
     *
     * @return integer
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }

    /**
     * Set productonombre
     *
     * @param string $productonombre
     *
     * @return Producto
     */
    public function setProductonombre($productonombre)
    {
        $this->productonombre = $productonombre;

        return $this;
    }

    /**
     * Get productonombre
     *
     * @return string
     */
    public function getProductonombre()
    {
        return $this->productonombre;
    }

    /**
     * Set productoprecio
     *
     * @param float $productoprecio
     *
     * @return Producto
     */
    public function setProductoprecio($productoprecio)
    {
        $this->productoprecio = $productoprecio;

        return $this;
    }

    /**
     * Get productoprecio
     *
     * @return float
     */
    public function getProductoprecio()
    {
        return $this->productoprecio;
    }
}
