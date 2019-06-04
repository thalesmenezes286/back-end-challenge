<?php
require_once("config.php");

$valor1   = 10;
$cotacao1 = 3.8710;
$tipo1    = "real-dolar";

$valor2   = 10;
$cotacao2 = 3.8710;
$tipo2    = "dolar-real";

$valor3   = 10;
$cotacao3 = 4.3498;
$tipo3    = "real-euro";

$valor4   = 10;
$cotacao4 = 4.3498;
$tipo4    = "euro-real";

//Conversão de Real para Dólar
$conversor1 = new Conversor();
$conversor1->setValor($valor1);
$conversor1->setCotacao($cotacao1); 
$conversor1->setTipo($tipo1);
echo("Valor de R$ 10")."<br>";
echo('Real para Dólar  '.$conversor1->getFormatoMoeda())."<br>";
echo("-------------------------------------------------")."<br>";

//Conversão de Dólar para Real
$conversor2 = new Conversor();
$conversor2->setValor($valor2);
$conversor2->setCotacao($cotacao2); 
$conversor2->setTipo($tipo2);
echo("Valor de $ 10")."<br>";
echo('Dólar para Real  '.$conversor2->getFormatoMoeda())."<br>";
echo("-------------------------------------------------")."<br>";

//Conversão de Real para Euro
$conversor3 = new Conversor();
$conversor3->setValor($valor3);
$conversor3->setCotacao($cotacao3); 
$conversor3->setTipo($tipo3);
echo("Valor de R$ 10")."<br>";
echo('Real para Euro  '.$conversor3->getFormatoMoeda())."<br>";
echo("-------------------------------------------------")."<br>";

//Conversão de Real para Euro
$conversor4 = new Conversor();
$conversor4->setValor($valor4);
$conversor4->setCotacao($cotacao4); 
$conversor4->setTipo($tipo4);
echo("Valor de  € 10")."<br>";
echo('Euro para Real '.$conversor4->getFormatoMoeda())."<br>";
echo("-------------------------------------------------")."<br>"; 
?>