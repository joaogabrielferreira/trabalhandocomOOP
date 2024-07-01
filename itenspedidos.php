<?php
//CRIANDO AS CLASSES
class ItensPedidos
{
    private $numerodopedido;
    private $codigodoprotudo;
    private $precounitario;
    private $quantidade;
    private $desconto;

    function __construct($numerodopedido, $codigodoprotudo, $precounitario, $quantidade, $desconto)
    {
        $this->numerodopedido = $numerodopedido;
        $this->codigodoproduto = $codigodoprotudo;
        $this->precounitario = $precounitario;
        $this->quantidade = $quantidade;
        $this->desconto = $desconto;
    }
    //MÉTODOS
    //CRIANDO FUNÇÕES USANDO GET E SET
    function get_numerodopedido()
    {
        return $this->numerodopedido;
    }
    function get_codigodoproduto()
    {
        return $this->codigodoproduto;
    }
    function set_precounitario($precounitario)
    {
        $this->precounitario = $precounitario;
    }
    function get_quantidade()
    {
        return $this->quantidade;
    }
    function set_quantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }
    function set_desconto($desconto)
    {
        $this->desconto = $desconto;
    }
}
?>