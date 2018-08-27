<?php
class Banana extends Apple{
    Private $color;
    Private $cultivar;
    private $length;

    function __construct(){
        echo 'Banana object has been created<br>';
        
        $argumentCount = func_num_args();
        $arguments = func_get_args();       
        if(isset($arguments[0]) && gettype($arguments[0])==='array'){
            parent::__construct($arguments[0]);
        }elseif($argumentCount===1){
            $this->__construct1($arguments[0]);
        }elseif($argumentCount===2){
            $this->__construct2($arguments[0], $arguments[1]);
        }elseif($argumentCount===3){
            $this->__construct3($arguments[0], $arguments[1], $arguments[2]);
        }
        //defult values
       
        if(!isset($this->length)){ $this->length =4;
        }
    }
    function __construct1($color){
        $this->color = $color;
    }
    function __construct2($color, $cultivar){
        $this->color = $color;
        $this->cultivar = $cultivar;
    }
    function __construct3($color, $cultivar, $length){
        $this->color = $color;
        $this->cultivar = $cultivar;
        $this->length = $length;
    }
    function toString(){
        $indent = '&nbsp;&nbsp;&nbsp;&nbsp;';
        return 
            'This is a Banana object<br>'.
        ((isset($this->color)) ? $indent. 'color: '.$this->color.'<br>':'').
        ((isset($this->color)) ? $indent. 'cultivar: '.$this->cultivar.'<br>':'').
        $indent. 'length: '.$this->length.'<br>';
    }
}