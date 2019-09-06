<?php
class Thanos extends Avenger{
    public $name;
    public $color;
    public $fly;
    public $armour;
    public $visibility;

    function attributes($name,$color,$fly,$armour,$visibility){

        $this->name = $name;
        $this->color = $color;
        $this->fly = $fly;
        $this->armour = $armour;
        $this->visibility = $visibility;

        echo "Color of $this->name is: $this->color<br>";
        echo "$this->name can fly : $this->fly<br>";
        echo "$this->name have armour : $this->armour<br>";
        echo "$this->name can invisibile : $this->visibility<br>";
    }
}
?>