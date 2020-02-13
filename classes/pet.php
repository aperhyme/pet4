<?php

class Pet
{
    private $_name;
    private $_color;
    private $_type;


    function __construct($name="unknown", $color="?", $type="unknown")
    {
        $this->_name = $name;
        $this->_color = $color;
        $this->_type = $type;
    }

    function eat()
    {
        echo $this->_name ." " . $this->_color . " is eating.<br>";
    }

    function talk()
    {
        echo "Pet is Talking<br>";
    }

    function getName()
    {
        return $this->_name;
    }

    function setName($name)
    {
        $this->_name = $name;
    }

    function getColor()
    {
        return $this->_color;
    }

    function setColor($color)
    {
        $this->_color = $color;
    }

    function getType()
    {
        return $this->_type;
    }

    function setType($type)
    {
        $this->_type = $type;
    }

}