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
}
?>