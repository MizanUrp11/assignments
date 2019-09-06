<?php
class Avenger
{
    public $enemy;
    public $moto;
    public $speed;

    function CommonActions($enemy,$moto,$speed){
        $this->enemy = $enemy;
        $this->moto = $moto;
        $this->speed = $speed;

        echo "Character Name: $this->enemy<br>";
        echo "Moto is: $this->moto<br>";
        echo "Speed is: $this->speed<br>";
    }


}

?>