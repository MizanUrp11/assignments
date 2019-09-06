<?php
class Fight extends Avenger{
    public $fighter1;
    public $fighter2;

    function fightBetween($fighter1,$fighter2){
        $this->fighter1 = $fighter1;
        $this->fighter2 = $fighter2;
        echo "$this->fighter1"." fights with ".$this->fighter2."<br>";
    }
}
?>