<?php
//MODELO DO MEU OBJETO:
class Garrafa
{
    //ATRIBUTOS (características - o que ele é):
    public $cor; //o "public" são as características que aparecem para todos.
    public $tipo_material;
    public $volume;
    public $tipo_liquido;

    //MÉTODO (acão - o que ele faz)
    function __construct($cor, $tipo_material, $volume, $tipo_liquido)
    { //até aqui são parâmetros
        $this->cor = $cor; //com o prefixo this, aqui passa a ser uma variável
        $this->tipo_material = $tipo_material;
        $this->volume = $volume;
        $this->tipo_liquido = $tipo_liquido;
    }

    function status_tampado($tampa)
    {
        if ($tampa == true) {
            echo "A garrafa está tampada.";
        } else {
            echo "A garrafa está destampada.";
        }
    }

    function apresentar_garrafa()
    {
        echo "A garrafa é: <br>";
        echo "
        <br>Cor: $this->cor
        <br>Tipo de material: $this->tipo_material
        <br>Volume: $this->volume ml
        <br>Tipo liquido: $this->tipo_liquido
        "; //FINAL DA MONTAGEM DO TIPO DE DADO.
    }
}

$nome = "Vanessa";
$idade = 27;
$garrafa = new Garrafa("Azul", "Inox", 510, "Água"); //AQUI A GARRAFA É UM OBJETO.

echo "Nome: $nome<br>";

$garrafa->apresentar_garrafa();

echo "<br>O estatus da garrafa é: ";
echo $garrafa->status_tampado(true);

$copo = new Garrafa("Transparente", "Vidro", 150, "Suco"); //O objeto é matido, só os valores foram mudados.
echo "<br><br>";
$copo->apresentar_garrafa();

echo "<br><br>A cor do copo é: ";
echo $copo->cor;
?>
