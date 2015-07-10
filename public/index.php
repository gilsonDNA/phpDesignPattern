<?php
ini_set("display_errors", true);
error_reporting(E_ALL);
require_once __DIR__ . "/../config.php";

use Elements\HtmlContent;
use Elements\Form;
use Elements\Head;

//phpinfo();


try{
    $db = new SQLiteDatabase("produtos.db", 0666);
}catch( Exception $exception ){
    die($exception->getMessage());
}


$sqlC = "CREATE TABLE colunistas(id INTEGER PRIMARY KEY, nome TEXT)";
$db->queryExec($sqlC);






$objetoHTML = new HtmlContent("pagina.html","Titulo");
$objetoH1 = new Head("head1", "School Of Net", "1");
$objetoH2 = new Head("head2", "Informe os dados abaixo", "2");

$objetoHTML->addElemento($objetoH1);

//injetando Dependencia
$request = new \Elements\Validation\Request();
$validator = new \Elements\Validation\Validator($request);
$objetoForm = new Form("pagina.html", "", $validator);

$objetoHTML->addElemento($objetoForm);


/* Inicio Criação de campos  */
$inputNome =  $objetoForm->createField("input" , array('type' => 'text') ) ;
$inputNome->setName("nome");

$inputValor =  $objetoForm->createField("input" , array('type' => 'text') ) ;
$inputValor->setName("valor");

$inputDescricao =  $objetoForm->createField("input" , array('type' => 'text') ) ;
$inputDescricao->setName("descricao");


$labelNome = $objetoForm->createField("label" , null ) ;
$labelNome->setFor("nome");
$labelNome->setValue("Nome");


$labelValor = $objetoForm->createField("label" , null ) ;
$labelValor->setFor("valor");
$labelValor->setValue("Valor");

$labelDescricao = $objetoForm->createField("label" , null ) ;
$labelDescricao->setFor("descricao");
$labelDescricao->setValue("Descrição");

/* final Criação de campos  */



$inputButton = $objetoForm->createField("input" , array('type' => 'button') ) ;
$inputButton->setName("submit");
$inputButton->setValue("submit");


$fieldSet = $objetoForm->createField("fieldset" , null) ;
$fieldSet->setValue("Cadastro de Produtos:");

$fieldSet->addElemento($objetoH2);
$fieldSet->addElemento($labelNome);
$fieldSet->addElemento($inputNome);
$fieldSet->addElemento($labelValor);
$fieldSet->addElemento($inputValor);
$fieldSet->addElemento($labelDescricao);
$fieldSet->addElemento($inputDescricao);

$fieldSet->addElemento($inputButton);


$objetoForm->addElemento($fieldSet);


$objetoHTML->render();




