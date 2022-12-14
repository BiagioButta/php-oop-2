<?php

include_once __DIR__ . "./Prodotti.php";
include_once __DIR__ . "/../Traits/Size.php";

class Giochi extends Prodotti {
    use Size;
    private Array $materiale;

    function __construct(String $_nomeProdotto, String $_immagineProdotto, Float $_prezzo, Categoria $_categoria, Array $_materiale)
    {
        parent::__construct($_nomeProdotto, $_immagineProdotto, $_prezzo, $_categoria);
        $this->setMateriale($_materiale);
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        if(strlen($size)){
            $this->size = $size;
        }else{
            $this->size = "Piccolo";
        }
        return $this;
    }
    public function getMateriale()
    {
        return $this->materiale;
    }
    public function setMateriale($materiale)
    {
        if(count($materiale)){
            $this->materiale = $materiale;
        }else{
            $this->materiale = ["Unknown"];
        }
        return $this;
    }
}

?>