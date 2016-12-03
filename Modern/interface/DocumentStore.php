<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/1
 * Time: 10:18
 */
class DocumentStore
{
    protected $data = array();
    
    public function addDocument(Documentable $document){
        $key = $document->getId();
        $value = $document->getContent();
        $this->data[$key] = $value;
    }

    public function getDocuments(){
        return $this->data;
    }
}