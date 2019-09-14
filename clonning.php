<?php
class charger{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
    public function charging(){
        echo "charger name".$this->name."charging";
    }
}
class toycar{
    public $carname,$carcolor,$charger;
    public function __construct($name,$carcolor,$charger)
    {
        echo "car name is ".$this->carname = $name;
        $this->carcolor = $carcolor;
        $this->charger = $charger;
    }
}
$chargerobj = new charger("asus charger");
$carobj = new toycar("mehran","silver",$chargerobj);