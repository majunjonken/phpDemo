<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/1
 * Time: 11:05
 */
require 'Documentable.php';
require 'DocumentStore.php';
require 'HtmlDocument.php';
require 'StreamDocument.php';
require 'CommandOutputDocument.php';

$documentStore = new DocumentStore();

$htmlDoc = new HtmlDocument("http://www.baidu.com");
$documentStore -> addDocument($htmlDoc);
//
$streamDoc = new StreamDocument(fopen("hello.txt","rb"));
$documentStore -> addDocument($streamDoc);

//$cmdDoc = new CommandOutputDocument('cat /etc/hosts');
$cmdDoc = new CommandOutputDocument('ipconfig');
$documentStore -> addDocument($cmdDoc);

print_r($documentStore->getDocuments());