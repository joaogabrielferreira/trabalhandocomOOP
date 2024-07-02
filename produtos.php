<?php
//CRIANDO AS CLASSES
class Produtos
{
    private $codigoproduto;
    private $nomedoproduto;
    private $codigofornecedor;
    private $codigocategoria;
    private $quantidadeporunidade;
    private $precounitario;
    private $unidadesemestoque;
    private $unidadespedidas;
    private $niveldeestoque;
    private $descontinuado;

    function __construct($codigoproduto, $nomedoproduto, $codigofornecedor, $codigocategoria, $quantidadeporunidade, $precounitario, $unidadesemestoque, $unidadespedidas, $niveldeestoque, $descontinuado)
    {
        $this->codigoproduto = $codigoproduto;
        $this->nomedoproduto = $nomedoproduto;
        $this->codigofornecedor = $codigofornecedor;
        $this->codigocategoria = $codigocategoria;
        $this->quantidadeporunidade = $quantidadeporunidade;
        $this->precounitario = $precounitario;
        $this->unidadesemestoque = $unidadesemestoque;
        $this->unidadespedidas = $unidadespedidas;
        $this->niveldeestoque = $niveldeestoque;
        $this->descontinuado = $descontinuado;
    }
    //MÉTODOS
    //CRIANDO FUNÇÕES USANDO GET E SET
    function get_codigoproduto()
    {
        return $this->codigoproduto;
    }
    function get_nomedoproduto()
    {
        return $this->nomedoproduto;
    }
    function get_codigofornecedor()
    {
        return $this->codigofornecedor;
    }
    function get_codigocategoria()
    {
        return $this->codigocategoria;
    }
    function set_quantidadeporunidade($quantidadeporunidade)
    {
        $this->quantidadeporunidade = $quantidadeporunidade;
    }
    function set_precounitario($precounitario)
    {
        $this->precounitario = $precounitario;
    }
    function set_unidadesemestoque($unidadesemestoque)
    {
        $this->unidadesemestoque = $unidadesemestoque;
    }
    function get_unidadespedidas()
    {
        return $this->unidadespedidas;
    }
    function set_niveldeestoques($niveldeestoque)
    {
        $this->niveldeestoque = $niveldeestoque;
    }
    function set_descontinuado($descontinuado)
    {
        $this->descontinuado = $descontinuado;
    }
}
?>