<?php
class calculo{

    //propriedades
    private $aluguel;
    private $luz;
    private $agua;
    private $gas;
    private $mercado;
    private $internet;
    private $transporte;
    private $lazer;
    private $resultado;
    private $mensal;

    //metodos
    //gets 
    public function getAluguel (){
        return $this->aluguel;
    }

    public function getLuz(){
        return $this->luz;
    }

    public function getAgua(){
        return $this->agua;
    }

    public function getGas(){
        return $this->gas;
    }

    public function getMercado(){
        return $this->mercado;
    }

    public function getInternet(){
        return $this->internet;
    }

    public function getTransporte(){
        return $this->transporte;
    }

    public function getLazer(){
        return $this->lazer;
    }

    public function getResultado(){
        return $this->resultado;
    }

    public function getMensal(){
        return $this->mensal;
    }

    //sets 
    public function setAluguel($valor){
        $this->alguel = $valor;
    }

    public function setLuz($valor){
        $this->luz = $valor;
    }

    public function setAgua($valor){
        $this->agua = $valor;
    }

    public function setGas($valor){
        $this->gas = $valor;
    }

    public function setMercado($valor){
        $this->mercado = $valor;
    }

    public function setInternet($valor){
        $this->internet = $valor;
    }

    public function setTransporte($valor){
        $this->transporte = $valor;
    }

    public function setLazer($valor){
        $this->lazer = $valor;
    }

    public function setMensal(){
        $this->mensal = ($this->aluguel + $this->luz + $this->agua + $this->gas + $this->mercado + $this->internet + $this->transporte + $this->lazer) + (($this->aluguel + $this->luz + $this->agua + $this->gas + $this->mercado + $this->internet + $this->transporte + $this->lazer) /100) *10;
    }

    public function setResultado(){
        $this->resultado =  (($this->aluguel + $this->luz + $this->agua + $this->gas + $this->mercado + $this->internet + $this->transporte + $this->lazer) + (($this->aluguel + $this->luz + $this->agua + $this->gas + $this->mercado + $this->internet + $this->transporte + $this->lazer) /100) *10) * 3;
    }
}
?>