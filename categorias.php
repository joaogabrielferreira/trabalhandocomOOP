<?php
//CRIANDO AS CLASSES
class Categorias
{
    private $codigodacategoria;
    private $nomedacategoria;
    private $descricao;
    private $figura;

    function __construct($codigodacategoria, $nomedacategoria, $descricao, $figura)
    {
        $this->codigodacategoria = $codigodacategoria;
        $this->nomedacategoria = $nomedacategoria;
        $this->descricao = $descricao;
        $this->figura = $figura;
    }
}
?>