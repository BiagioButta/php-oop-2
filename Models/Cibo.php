<?php

include_once __DIR__ . "./Prodotti.php";


class Cibo extends Prodotti {
    
    private Array $ingredienti;

    function __construct(String $_nomeProdotto, String $_immagineProdotto, Float $_prezzo, Categoria $_categoria, Array $_ingredienti)
    {
        parent::__construct($_nomeProdotto, $_immagineProdotto, $_prezzo, $_categoria);
        $this->setIngredienti($_ingredienti);
    }

    public function getIngredienti(){
        return $this->ingredienti;
    }
    public function setIngredienti($ingredienti){
        if(count($ingredienti)){
            $this->ingredienti = $ingredienti;
        }else{
            $this->ingredienti = ["Unknown"];
        }
        return $this;
    }


    
}

?>