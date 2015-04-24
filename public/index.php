<?php
ini_set("display_errors", true);
error_reporting(E_ALL);
require_once __DIR__ . "/../config.php";

use Elements\HtmlContent;
use Elements\Form;
use Elements\InputButton;
use Elements\InputText;
use Elements\InputPassword;
use Elements\Head;
use Elements\Label;




$objetoHTML = new HtmlContent("pagina.html","Titulo");



$objetoH1 = new Head("head1", "School Of Net", "1");
$objetoH2 = new Head("head2", "Informe os dados abaixo", "2");

$objetoHTML->addElemento($objetoH1);

$objetoForm = new Form("pagina.html", "");
$objetoHTML->addElemento($objetoForm);



$objetoInputNome =  new InputText("login", "");
$objetoInputSenha =  new InputPassword("passwd", "");
$objetoInputButton =  new InputButton("submit", "submit");

$objetoLabel1 = new Label("nome", "Login");
$objetoLabel2 = new Label("passwd", "Password");

$objetoForm->addElemento($objetoH2);
$objetoForm->addElemento($objetoLabel1);
$objetoForm->addElemento($objetoInputNome);
$objetoForm->addElemento($objetoLabel2);
$objetoForm->addElemento($objetoInputSenha);
$objetoForm->addElemento($objetoInputButton);

$objetoHTML->render();




