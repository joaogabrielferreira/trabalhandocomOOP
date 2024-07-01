<?php
//CRIANDO AS CLASSES
class Fornecedores
{
    private $codigodofornecedor;
    private $nomedaempresa;
    private $nomedocontato;
    private $cargodocontato;
    private $endereco;
    private $cidade;
    private $uf;
    private $cep;
    private $pais;
    private $telefone;

    function __construct($codigodofornecedor, $nomedaempresa, $nomedocontato, $cargodocontato, $endereco, $cidade, $uf, $cep, $pais, $telefone)
    {
        $this->codigodofornecedor = $codigodofornecedor;
        $this->nomedaempresa = $nomedaempresa;
        $this->nomedocontato = $nomedocontato;
        $this->cargodocontato = $cargodocontato;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->uf = $uf;
        $this->cep = $cep;
        $this->pais = $pais;
        $this->telefone = $telefone;
    }
    //MÉTODOS
    //CRIANDO FUNÇÕES USANDO GET E SET
    function get_codigodofornecedor()
    {
        return $this->codigodofornecedor;
    }
    function get_nomedaempresa()
    {
        return $this->nomedaempresa;
    }
    function set_nomedocontato($nomedocontato)
    {
        $this->nomedocontato = $nomedocontato;
    }
    function set_cargodocontato($cargodocontato)
    {
        $this->cargodocontato = $cargodocontato;
    }
    function set_endereco($endereco)
    {
        $this->endereco = $endereco;
    }
    function set_cidade($cidade)
    {
        $this->cidade = $cidade;
    }
    function set_uf($uf)
    {
        $this->uf = $uf;
    }
    function set_cep($cep)
    {
        $this->cep = $cep;
    }
    function set_pais($pais)
    {
        $this->pais = $pais;
    }
    function set_telefone($telefone)
    {
        $this->telefone = $telefone;
    }
}
?>