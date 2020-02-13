<?php

class rottweiler extends Dog
{
    function play()
    {
        echo $this->getName() . " is playing with the cat<br>";
    }

    function talk()
    {
        echo $this->getName() . " is growling<br>";
    }

} // End of Dog class