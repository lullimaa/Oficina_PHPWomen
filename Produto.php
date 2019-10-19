<?php
namespace Catalogo;

require 'Categoria.php';

class Produto{
    public $id;
    public $nome;
    public $preco;
    public $descricao;
    public $categoria;

}



$produto = new Produto(); // new to criando um obj categoria

$produto ->nome ="Mesa";
$produto ->preco ="45.00";
$produto ->descricao ="Mesa de escritorio";
$produto ->categoria = new Categoria();




var_dump($produto);
