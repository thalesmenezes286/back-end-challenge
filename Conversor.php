<?php
/*
 * Autor        = Thales Menezes
 * Data Criação = 04/06/2019
 * Classe Conversor realiza a conversão e a formatação da moéda
 * @valor   = valor da moéda
 * @cotacao = cotação do dia
 * @tipo    = tipo de conversão que são: real-dolar, dolar-real,
 */
final Class Conversor
{
    private $valor;   //valor do dinheiro
    private $cotacao; //o valor da cotação do dia
    private $tipo;    // tipo de conversão inicial

    function __construct() 
    {
       
    }

    //verifica se o valor do dinheiro e numérico e maior que zero
    public function setValor($valor) 
    {
        if(is_numeric($valor) && ($valor > 0))
        {
            $this->valor = $valor;
        }   
    }
    
    //Verifica se a cotação e maior que zero e numérico
    public function setCotacao($cotacao)
    {
        if(is_numeric($cotacao) && ($cotacao > 0))
        {
            $this->cotacao = $cotacao;
        }   
    }

    //
    public function setTipo($tipo) 
    {
        if(!isset($this->tipo))
        {
            $this->tipo = (string) $tipo;
        }   
    }

    /*
     * Método getConversao verifica o tipo de conversão será realizado
     * Retorna o valor da convertido 
     */
    private function getConversao()
    {
        switch ($this->tipo) 
        {
            case 'real-dolar': //selecionado Real para Dólar

                return  $this->valor / $this->cotacao;
                    
                break;
            case 'dolar-real': //selecionado Dólar para Real

                return $this->valor * $this->cotacao;

                break;
            case 'real-euro': //selecionado Real para Euro
                
                return $this->valor / $this->cotacao;

                break;
            case 'euro-real': //selecionado Euro para Real
                
                return $this->valor * $this->cotacao;
            
                break;
        }
    }

    /*
     * Método getSimbolo responsável por gerar o símbolo da moeda
     * Retorna o símbolo da própria conversão com valor arredondado de 
     * no máximo três casas decimais após a virgula 
     */
    public function getFormatoMoeda()
    {
        (string) $simbolo = " ";

        if(($this->tipo === "dolar-real")||($this->tipo === "euro-real") )
        {
            $simbolo = "R$ ";

            return $simbolo.round($this->getConversao(),3);
        }
        else if (($this->tipo === "real-dolar")) 
        {
            $simbolo = "$ ";

            return $simbolo.round($this->getConversao(),3);
        }
        else if (($this->tipo === "real-euro"))
        {
            $simbolo = "€ ";

            return $simbolo.round($this->getConversao(),3);
        }
    }
}
?>