<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/12/1
 * Time: 10:58
 */
class CommandOutputDocument implements Documentable{
    protected $command;

    public function __construct($command){
        $this -> command = $command;
    }

    public function getId(){
        return $this -> command;
    }

    public function getContent(){
        return shell_exec($this->command);
    }
}