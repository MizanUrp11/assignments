
<?php
class IronMan extends Avenger{
    public $color;
    public $fly;
    public $armour;
    public $visibility;

    function attributes($color,$fly,$armour,$visibility){

        $this->color = $color;
        $this->fly = $fly;
        $this->armour = $armour;
        $this->visibility = $visibility;

        echo "Color of Iron man is: $this->color<br>";
        echo "Iron can fly : $this->fly<br>";
        echo "Iron have armour : $this->armour<br>";
        echo "Iron can invisibile : $this->visibility<br>";

    }
}
?>