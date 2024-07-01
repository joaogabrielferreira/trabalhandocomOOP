<?php
//CLASSE
//CRIANDO AS CLASSES
class Clientes
{
    private $codigodocliente;
    private $endereco;
    private $cidade;
    private $cep;
    private $uf;
    private $pais;
    private $telefone;

    function __construct($codigodocliente, $endereco, $cidade, $cep, $uf, $pais, $telefone)
    {
        $this->codigodocliente = $codigodocliente;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->cep = $cep;
        $this->uf = $uf;
        $this->pais = $pais;
        $this->telefone = $telefone;
    }
    //MÉTODOS
    //CRIANDO FUNÇÕES USANDO GET E SET
    function get_codigodocliente()
    {
        return $this->codigodocliente;
    }
    function set_endereco($endereco)
    {
        $this->endereco = $endereco;
    }
    function set_cidade($cidade)
    {
        $this->cidade = $cidade;
    }
    function set_cep($cep)
    {
        $this->cep = $cep;
    }
    function set_uf($uf)
    {
        $this->uf = $uf;
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