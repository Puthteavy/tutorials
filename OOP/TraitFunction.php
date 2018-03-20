<?php
/**
 * Created by PhpStorm.
 * User: Puttheavy Tep
 * Date: 2/9/2018
 * Time: 9:30 AM
 */
//it's a group of function
trait TraitFunction
{
    function A(){echo "A";}
    function B(){echo "B";}

}
trait Trait2
{
    function C(){echo "c";}
    function D(){echo "d";}

}
class UseTrait{
    public $id;
    public  $name;
    public function __construct($id, $name)
    {
        $this->id =$id;
        $this->name = $name;

    }
    function indent(){
        echo "Student Identification";
    }
  // calling trait

    use TraitFunction,Trait2;
}
class subClass extends UseTrait{

    public $phone;
    public $address;

    public function __construct($id, $name,$phone, $address)
    {
        parent::__construct($id, $name);
        $this->phone = $phone;
        $this->address = $address;
    }

}
// create new instant of class
$class = new subClass('1','Theavy','0234325','PP');
echo $class->indent();
echo '<br>'.$class->id.'<br>';
echo $class->A();