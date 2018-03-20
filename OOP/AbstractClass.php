<?php
abstract class AbstractClass{
    public $id;
    public $name;
    abstract function index();
    abstract function edit();
    function __construct($id, $name){
        $this->id = $id;
        $this->name = $name;
    }
    function walk(){
        echo "Hello";
    }

}
class item extends AbstractClass{
    public $sex;
    function __construct($id, $name,$sex)
    {
        parent::__construct($id, $name);
        $this->sex = $sex;
    }

    function index()
 {
     // TODO: Implement index() method.
     echo  "index<br>";
 }
 function edit()
 {
     // TODO: Implement edit() method.
     echo "edit<br>";
 }

 
}
$item = new item('1','theavy','Female');
echo $item->id.'<br>';
echo $item->name.'<br>';
echo $item->sex.'<br>';
echo $item->index().'<br>';
echo $item->edit().'<br>';
echo $item->walk().'<br>';




