<?php
class myClass{
    public $name = "My name is Hrushabh";
    public function showName(){
        return($this->name);

    }
    

}
$obj = new myClass;
echo '<br>'.$obj->showName();
echo '<br>'.$obj->showName();
echo '<br>'.$obj->showName();
define("Hrushi","Hello Guys my name is KingHR");
echo '<br>'. Hrushi;
?>