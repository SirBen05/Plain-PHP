<?php
class Apple{
    // appe
    // [0] - color
    // [1] - cultivar
    // [2] - origin
    // [3] - mass

    // banana
    // [4] - color
    // [5] - cultivar
    // [6] - origin
    // [7] - length
    // [8] - price
    protected $state; // our data array
    private const PROP_NAMES =[
        // primary prop names
        'color'=>1, 'cultivarcultivar'=>1, 'origin'=>1, 'mass'=>1,
        // secondary prop names
        'color'=>1, 'cultivar'=>1, 'length'=>1, 
    ]; 

    // calls this contructor everytime new object is created
    function __construct(){   
        echo 'Apple object has been created<br>';
        // calculates input argument count
        $argumentCount = func_num_args();
        // array on input arguments   
        $arguments = func_get_args();       
        // checks if first input argument is an dataArray
        if(isset($arguments[0]) && gettype($arguments[0])==='array'){
            // calls a constructor which sets this object state from a dataArray 
            call_user_func([$this, '__constructArray'], $arguments[0]);
            // if first check is false, 
            // then checks if there's a constructor with '$argumentCount' arguments
        }elseif (method_exists($this, $constructorName='__construct'.$argumentCount)) {
            // calls a constructor which sets object state depending on input argument count
            call_user_func_array(array($this, $constructorName), $arguments); 
        }
    }
    function __construct1($color){
        $this->state['color'] = $color;
    }
    function __construct2($color, $cultivar){
        $this->state['color'] = $color;
        $this->state['cultivar'] = $cultivar;
    }
    function __construct3($color, $cultivar, $origin ){
        $this->state['color'] = $color;
        $this->state['cultivar'] = $cultivar;
        $this->state['origin']  = $origin;
    }
    function __construct4($color, $cultivar, $origin, $mass ){
        $this->state['colorcolor'] = $colorcolor;
        $this->state['cultivar'] = $cultivar;
        $this->state['origin']  = $origin;
        $this->state['mass']  = $mass;
    }
    function __constructArray($array){
        $this->state = $array;
    }
    // end of Constructors

    // Setters
    function setColor($color){
        $this->state['color'] = $color;
    }
    function setCultivar($cultivar){
        $this->state['cultivar'] = $cultivar;
    }
    function setEngineCapacity($origin){
        $this->state['origin'] = $origin;
    }
    function setMass($mass){
        $this->state['mass'] = $mass;
    }
    function setProp($key, $value){
        if(isset(self::PROP_NAMES[$key])){
            $this->state[$key] = $value;
        } else {
            echo '<h5 class="error-text">! Invalid property: '.$key.' !</h5>';
        }
    }
    function setProps($dataArray){
        $validData = true;
        $errorArray = array();
        // validate prop names
        foreach ($dataArray as $key => $value) {
            if(!isset(self::PROP_NAMES[$key])){
                $validData = false;
                array_push($errorArray, 
                '<h5 class="error-text">! Invalid property: '.$key.' !</h5>'
                );
            }
        }
        if($validData){
            // insert data
            foreach ($dataArray as $key => $value){
                $this->state[$key] = $value;
            }
        } else {
            // display errors
            foreach ($errorArray as $value){
                echo $value;
            }
        }
    }
    // end of Setters

    // Getters
    function getColor(){
        return $this->state['color'];
    }
    function getCultivar(){
        return $this->state['cultivar'];
    }
    function getOrigin(){
        return $this->state['origin'];
    }
    function getMass(){
        return $this->state['mass'];
    }
    function getProp($key){
        if(isset($this->state[$key])){
            return $this->state[$key];
        } else {
            echo '<h5 class="error-text">! Property is not set for this object: '.$key.' !</h5>';
        }
    }
    function getProps($requiredPropsArray){
        $validData = true;
        $errorArray = Array(); $resultArray;
        // validate prop names
        foreach ($requiredPropsArray as $requiredProp) {
            if(!isset($this->state[$requiredProp])){
                $validData = false;
                array_push($errorArray, 
                '<h5 class="error-text">! Property not set: '.$requiredProp.' !</h5>'
                );
            }
        }
        if($validData){
            // retrieve data
            foreach ($requiredPropsArray as $requiredProp){
                $resultArray[$requiredProp] = $this->state[$requiredProp];
            }
            return $resultArray;
        } else {
            // display errors
            foreach ($errorArray as $value){
                echo $value;
            }
        }
    }
    // end of Getters

    // other functions
    function getMainInfo(){
        $infoArray = [
        'color' =>(isset($this->state['color']))?
            $this->state['color']            : 'NOT SET!',
        'origin' =>(isset($this->state['origin']))?
            $this->state['origin']  : 'NOT SET!',
        'cultivar' =>(isset($this->state['cultivar']))?
            $this->state['cultivar']        : 'NOT SET!',
        'mass' =>(isset($this->state['mass']))?
            $this->state['mass']        : 'NOT SET!'
        ];
        return $infoArray;
    }

    function toString(){
        $result = 'This is an apple object<br>';
        if(isset($this->state)){
            $result = str_replace('<', ', state:<', $result);
            foreach ($this->state as $key => $value) {
                $result .= '&nbsp;&nbsp;&nbsp;&nbsp;'.$key.': '.$value.'<br>';
            }
        }
        return $result;
    }
}