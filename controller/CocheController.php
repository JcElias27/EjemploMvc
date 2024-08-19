<?php
class CocheController
{
    var $coches;
    /**define un objeto tipo coche con 5 atributos*/
    function __construct()
    {
        $this->coches = [
            1 => new Coche("1","Wolkswagen","Gol","Rojo","Israel"),
            2 => new Coche("2","Toyota","Corolla","Rojo","Blanca"),
            3 => new Coche("3","Renault","Stepway","negro","Horacio"),
            4 => new Coche("4","Wolkswagen","Jetta","Gris","Elisa"),
            5 => new Coche("5","Renault","Logan","Cafe","Juan"),
            6 => new Coche("6","Kia","Rio","azul","Guadalupe"),
            7 => new Coche("7","Wolkswagen","Tiguan","Negro","Martin")
        ];
    }
    /**asigna atributos de un objeto tipo coche a rowset
     *renderiza 5 atributos de un objeto tipo coche en una tabla
     */
    public function index()
    {
        $rowset = $this->coches;
        require("view/todosRegistros.php");
    }

    /**
	*renderiza un registro pasado por valor,
     * sino renderiza vista principal
    */
    //public function verRegistro($id)
	public function verRegistro($id)
    {
        if (array_key_exists($id,$this->coches))
        {
            $row = $this->coches[$id];
            require("view/unRegistro.php");
        }
        else
        {
            $this->index();
        }
    }
}
