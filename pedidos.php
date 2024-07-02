<?php
//CRIANDO AS CLASSES
class Pedidos
{
    private $numeropedido;
    private $codigocliente;
    private $codigofuncionario;
    private $datadopedido;
    private $datadeentrega;
    private $datadeenvio;
    private $frete;
    private $nomededestinatario;
    private $enderecodestinatario;
    private $cidadededestino;
    private $cepdedestino;
    private $paisdedestino;

    function __construct($numeropedido, $codigocliente, $codigofuncionario, $datadopedido, $datadeentrega, $datadeenvio, $frete, $nomededestinatario, $enderecodestinatario, $cidadededestino, $cepdedestino, $paisdedestino)
    {
        $this->numeropedido = $numeropedido;
        $this->codigocliente = $codigocliente;
        $this->codigofuncionario = $codigofuncionario;
        $this->datadopedido = $datadopedido;
        $this->datadeentrega = $datadeentrega;
        $this->datadeenvio = $datadeenvio;
        $this->frete = $frete;
        $this->nomededestinatario = $nomededestinatario;
        $this->enderecodestinatario = $enderecodestinatario;
        $this->cidadededestino = $cidadededestino;
        $this->cepdedestino = $cepdedestino;
        $this->paisdedestino = $paisdedestino;
    }
    //MÉTODOS
    //CRIANDO FUNÇÕES USANDO GET E SET
    function get_numeropedido()
    {
        return $this->numeropedido;
    }
    function get_codigocliente()
    {
        return $this->codigocliente;
    }
    function get_codigofuncionario()
    {
        return $this->codigofuncionario;
    }
    function get_datadopedido()
    {
        return $this->datadopedido;
    }
    function get_datadeentrega()
    {
        return $this->datadeentrega;
    }
    function get_datadeenvio()
    {
        return $this->datadeenvio;
    }
    function get_frete()
    {
        return $this->frete;
    }
    function get_nomededestinatario()
    {
        return $this->nomededestinatario;
    }
    function get_enderecodedestinatario()
    {
        return $this->enderecodestinatario;
    }
    function get_cidadededestino()
    {
        return $this->cidadededestino;
    }
    function get_cepdedestino()
    {
        return $this->cepdedestino;
    }
    function get_paisdedestino()
    {
        return $this->paisdedestino;
    }
}
?>