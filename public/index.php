<?php
ini_set("display_errors", true);
error_reporting(E_ALL);
require_once __DIR__ . "/../config.php";

use Elements\HtmlContent;
use Elements\Form;
use Elements\Head;



$objetoHTML = new HtmlContent("pagina.html","Titulo");
$objetoH1 = new Head("head1", "School Of Net", "1");
$objetoH2 = new Head("head2", "Informe os dados abaixo", "2");

$objetoHTML->addElemento($objetoH1);

//injetando Dependencia
$request = new \Elements\Validation\Request();
$validator = new \Elements\Validation\Validator($request);
$objetoForm = new Form("pagina.html", "", $validator);

$objetoHTML->addElemento($objetoForm);



$inputNome =  $objetoForm->createField("input" , array('type' => 'text') ) ;
$inputNome->setName("login");


$inputSenha =  $objetoForm->createField("input" , array('type' => 'password') ) ;
$inputSenha->setName("passwd");


$inputButton = $objetoForm->createField("input" , array('type' => 'button') ) ;
$inputButton->setName("submit");
$inputButton->setValue("submit");



$label = $objetoForm->createField("label" , null ) ;
$label->setFor("nome");
$label->setValue("Login");


$label2 = $objetoForm->createField("label" , null ) ;
$label2->setFor("passwd");
$label2->setValue("Password");


$objetoForm->addElemento($objetoH2);
$objetoForm->addElemento($label);
$objetoForm->addElemento($inputNome);
$objetoForm->addElemento($label2);
$objetoForm->addElemento($inputSenha);
$objetoForm->addElemento($inputButton);


$objetoHTML->render();




