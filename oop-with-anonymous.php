<?php
class Bottle {
    private $material = null;
    private $bottle_type = null;
    public function set_material(string $material){
        if(!trim($material)){
            return throw new Exception("You can't pass empty material");
        }
        $this->material = $material;

    }

    public function set_bottle_type(string | int $bottle_type){
        if(!trim($bottle_type)){
            return throw new Exception("You can't pass empty bottle type ");
        }
        return $this->bottle_type = $bottle_type;
    }

    public function get_bottle($fnc, $param){
        
            return "You've a bottle type {$this->bottle_type} and {$this->material}". ($fnc !== null? $fnc($param) : '');
    }
}

$bottle = new Bottle();
$bottle->set_material("Plastic");
$bottle->set_bottle_type(1.0);
echo $bottle->get_bottle(function ($aroKichu){
      return " notun kichu jog hoilo $aroKichu ";
}, "aro kichu");


