<?php
require '../helper/autoload.php';

$documentStore = new DocumentStore();

//Add HTML document
$htmlDoc = new HtmlDocument('https://php.net');
$documentStore->addDocument($htmlDoc);

//Add Stream document
$streamDoc = new StreamDocument(fopen('../src/stream.txt','rb'));
$documentStore->addDocument($streamDoc);

//Add terminal command document
$cmdDoc = new CommandOutputDocument('cat /etc/hosts');
$documentStore->addDocument($cmdDoc);

print_r($documentStore->getDocuments());