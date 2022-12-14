<?php

class Categoria{
    private string $tipo;
    private string $iconaAnimale;
    function __construct(String $_tipo, string $_iconaAnimale = 'default.jpg')
    {
        $this->setTipo($_tipo);
        $this->setIcona($_iconaAnimale);
    }

    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        if(strlen($tipo)){
            $this->tipo = $tipo;
        }else{
            $this->tipo = 'Unknown';
        }
        return $this;
    }
    public function getIcona()
    {
        return $this->iconaAnimale;
    }

    public function setIcona($iconaAnimale)
    {
        $this->iconaAnimale = $iconaAnimale;
        return $this;
    }
}

?>