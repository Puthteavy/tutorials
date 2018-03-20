<?php
/**
 * Created by PhpStorm.
 * User: Puttheavy Tep
 * Date: 2/6/2018
 * Time: 4:20 PM
 */

class myclass
{
 var $name;
 static $sex;
}
$a = new myclass();//instance of a class
$b =new myclass();
$a->name = 'Theavy'.'<br>';
$b->name ='Theara';
//static is same to one to many ;
//use one apply to all 
echo $a->name;
$a::$sex = 'F'.'<br>';
echo $b::$sex;
echo myclass::$sex;
