<?php

class Cat extends Pet
{
    function jump()
    {
        echo $this->getName() . " is jumping<br>";
    }

    function talk()
    {
        echo $this->getName() . " is meowing<br>";
    }

} // End of Dog class