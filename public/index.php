<?php
ini_set("display_errors", true);
error_reporting(E_ALL);
require_once __DIR__ . "/../config.php";

use Elements\HtmlContent;
use Elements\Form;
use Elements\Head;
use Elements\Fields\Label;
use Elements\Factory\InputTextFactory;
use Elements\Factory\InputPasswordFactory;
use Elements\Factory\InputButtonFactory;
use Elements\Factory\LabelFactory;


$objetoHTML = new HtmlContent("pagina.html","Titulo");
$objetoH1 = new Head("head1", "School Of Net", "1");
$objetoH2 = new Head("head2", "Informe os dados abaixo", "2");

$objetoHTML->addElemento($objetoH1);

//injetando Dependencia
$request = new \Elements\Validation\Request();
$validator = new \Elements\Validation\Validator($request);
$objetoForm = new Form("pagina.html", "", $validator);

$objetoHTML->addElemento($objetoForm);



$factoryInputNome =  new InputTextFactory("login", "");
$factoryInputSenha =  new InputPasswordFactory("passwd", "");
$factoryInputButton =  new InputButtonFactory("submit", "submit");

$factoryLabel = new LabelFactory("nome", "Login");
$factoryLabel2 = new LabelFactory("passwd", "Password");

$objetoForm->addElemento($objetoH2);
$objetoForm->addElemento($factoryLabel->createField());
$objetoForm->addElemento($factoryInputNome->createField());
$objetoForm->addElemento($factoryLabel2->createField());
$objetoForm->addElemento($factoryInputSenha->createField());
$objetoForm->addElemento($factoryInputButton->createField());


$objetoHTML->render();




