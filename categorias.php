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
    //MÉTODOS
    //CRIANDO FUNÇÕES USANDO GET E SET
    function get_codigodacategoria()
    {
        return $this->codigodacategoria;
    }
    function get_nomedacategoria()
    {
        return $this->nomedacategoria;
    }
    function set_descricao($descricao)
    {
        $this->descricao = $descricao;
    }
    function get_figura()
    {
        return $this->figura;
    }
}
?>