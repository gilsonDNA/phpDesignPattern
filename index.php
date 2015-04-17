<?php
ini_set("display_errors", true);
error_reporting(E_ALL);
include_once("config.php");
include ("src/Elements/HtmlContent.php");




$objetoHTML = new HtmlContent("pagina.html","Titulo");

$objetoForm = new Form("pagina.html", "");
$objetoHTML.addElemento($objetoForm);


$objetoInputNome =  new InputText("nome", "");
$objetoInputSenha =  new InputPassword("paswd", "");
$objetoInputButton =  new InputButton("submit", "submit");

$objetoForm.addElemento($objetoInputNome);
$objetoForm.addElemento($objetoInputSenha);
$objetoForm.addElemento($objetoInputButton);

$objetoHTML.render();




