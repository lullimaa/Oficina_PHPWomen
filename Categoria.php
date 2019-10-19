<?php
namespace Catalogo;

class Categoria{
    public $id;
    public $nome;
    public $descricao;

}

$minhaCategoria = new Categoria(); // new to criando um obj categoria

$minhaCategoria ->nome ="Móveis";
$minhaCategoria ->descricao ="Móveis madeira";


$outraCategoria = new Categoria(); // new to criando um obj categoria

$outraCategoria ->nome ="Eletrodomestico";
$outraCategoria ->descricao ="Linha Branca";


//var_dump($minhaCategoria);
//var_dump($outraCategoria);
