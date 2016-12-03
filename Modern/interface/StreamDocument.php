<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/1
 * Time: 10:51
 */
class StreamDocument implements Documentable{
    protected $resource;
    protected $buffer;

    public function __construct($resource,$buffer = 4096){
        $this->resource = $resource;
        $this->buffer = $buffer;
    }

    public function getId()
    {
        return 'resource-' . (int)$this->resource;
    }

    public function getContent()
    {
        $streamContent = '';
        //rewind    倒回文件指针的位置
        rewind($this->resource);
        //feof      测试文件指针是否到了文件结束的位置
        while (feof($this->resource) === false){
            //fread     读取文件
            $streamContent .= fread($this->resource,$this->buffer);
        }

        return $streamContent;
    }
}