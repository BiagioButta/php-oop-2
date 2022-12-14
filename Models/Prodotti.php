<?php
include_once __DIR__ . "./Categoria.php";
class Prodotti {
    protected String $nomeProdotto;
    protected String $immagineProdotto;
    protected float $prezzo;
    public Categoria $categoria;
    private bool $disponibilita;

    function __construct($_nomeProdotto, $_immagineProdotto, $_prezzo, Categoria $_categoria)
    {
        $this->nomeProdotto = $_nomeProdotto;
        $this->immagineProdotto = $_immagineProdotto;
        $this->prezzo = $_prezzo;
        $this->categoria = $_categoria;
        $this->setDisponibilita($_prezzo);
    }
    public function getNomeProdotto(){
        return $this->nomeProdotto;
    }
    public function setNomeProdotto($nomeProdotto){
        if(strlen($nomeProdotto)){
            $this->nomeProdotto = $nomeProdotto;
        } else{
            $this->nomeProdotto = null;
        }
        return $this;
    }
    public function getImmagineProfotto(){
        return $this->immagineProdotto;
    }
    public function setImmagineProdotto($immagineProdotto){
        $this->immagineProdotto = $immagineProdotto;
        return $this;
    }
    public function getPrezzo(){
        return $this->prezzo;
    }
    public function setPrezzo($prezzo){
        if($prezzo > 0){
            $this->prezzo = $prezzo;
        }else{
            $this->prezzo = abs($prezzo);
        }
        return $this;
    }

    // ??? 
    public function getDisponibilita(){
        return $this->disponibilita;
    }
    public function setDisponibilita($prezzo){
        if($prezzo <= 0){
            $this->disponibilita = false;
        }else{
            $this->disponibilita = true;
        }
        return $this;
    }
}

?>