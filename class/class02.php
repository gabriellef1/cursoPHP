<?php

class Materia{

//Determinando os atributos
    public $bimestre1;
    public $bimestre2;
    public $bimestre3;
    public $bimestre4;

//Calcular nota dos alunos
    public function calcularNotas(){
        return $this->bimestre1 + $this->bimestre2 + $this->bimestre3 + $this->bimestre4;
    }

}

//Instanciando a classe Matéria

$mat = new Materia();

$mat->bimestre1 = 20;
$mat->bimestre2 = 10;
$mat->bimestre3 = 10;
$mat->bimestre4 = 20;

echo "Nota total em Matemática: ".$mat->calcularNotas()."<br/>";
 
if($mat->calcularNotas() >= 60 && $mat->calcularNotas() < 100) {
	echo "SITUAÇÃO: Aprovado";
}else if($mat->calcularNotas() > 0 && $mat->calcularNotas() < 60){
	echo "SITUAÇÃO: Reprovado";
}else{
    echo "Alguma nota está errada!";
}

echo '<br>';

$port = new Materia();

$port->bimestre1 = 20;
$port->bimestre2 = 30;
$port->bimestre3 = 20;
$port->bimestre4 = 30;

echo '<br>';

echo "Nota total em Português:  " . $port->calcularNotas() . '<br>';
if($port->calcularNotas() >= 60 && $port->calcularNotas() <= 100) {
	echo "SITUAÇÃO: Aprovado";
}else if($port->calcularNotas() > 0 && $port->calcularNotas() < 60){
	echo "SITUAÇÃO: Reprovado";
}else{
    echo "Alguma nota está errada!";
}



?>