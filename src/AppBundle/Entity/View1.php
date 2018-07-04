<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * View1
 *
 * @ORM\Entity(readOnly=true)
 * @ORM\Table(name="view1")
 */
class View1
{


    /**
     * @ORM\Id
     * @ORM\Column(type="string", name="NumeroSolicitud")
     */
    protected $solicitud;



     /**
     * @ORM\Column(type="string", name="NombreProducto")
     */
    protected $producto;


     /**
     * @ORM\Column(type="string", name="Marca")
     */
    protected $marca;


     /**
     * @ORM\Column(type="string", name="PaisOrigen")
     */
    protected $pais;


     /**
     * @ORM\Column(type="string", name="NumeroRegistro")
     */
    protected $numRegistro;


    /**
     * @ORM\Column(type="string", name="Presentacion")
     */
    protected $presentacion;

     


     /**
     * @return mixed
     */
    public function getSolicitud()
    {
        return $this->solicitud;
    }



     /**
     * @return mixed
     */
    public function getProducto()
    {
        return $this->producto;
    }



     /**
     * @return mixed
     */
    public function getMarca()
    {
        return $this->marca;
    }




     /**
     * @return mixed
     */
    public function getPais()
    {
        return $this->pais;
    }



     /**
     * @return mixed
     */
    public function getNumRegistro()
    {
        return $this->numRegistro;
    }





    /**
     * @return mixed
     */
    public function getPresentacion()
    {
        return $this->presentacion;
    }



}

