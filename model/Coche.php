<?php
class Coche
{
/**gestiona el estado de los atributos con:
 * Función                  Acción
 * __construct()         inicializa cuatro atributos de un objeto tipo coche
 * setMarca($miMarca)    escribe el atributo marca
 * getMarca():str        retorna un str
 */
    var $marca;
    var $modelo;
    var $color;
    var $propietario;

    // constructor
    function __construct($miRegistro,$miMarca,$miModelo,$miColor,$miPropietario)
    {
		$this->registro=$miRegistro;
        $this->marca=$miMarca;
        $this->modelo=$miModelo;
        $this->color=$miColor;
        $this->propietario=$miPropietario;
    }

    // getter/setter
	function setRegistro($miRegistro)
    {
        $this->registro=$miRegistro;
    }
    function setMarca($miMarca)
    {
        $this->marca=$miMarca;
    }
    function getMarca()
    {
        return $this->marca;
    }
    function setModelo($miModelo)
    {
        $this->modelo=$miModelo;
    }
    function getModelo()
    {
        return $this->modelo;
    }
    function setColor($miColor)
    {
        $this->color=$miColor;
    }
    function getColor()
    {
        return $this->color;
    }
    function setPropietario($miPropietario)
    {
    $this->propietario=$miPropietario;
    }
    function getPropietario()
    {
        return $this->propietario;
    }
}
