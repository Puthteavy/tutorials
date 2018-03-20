<?php
/**
 * Created by PhpStorm.
 * User: Puttheavy Tep
 * Date: 2/9/2018
 * Time: 1:34 PM
 */
//include ('C1.php');
//require ('C1.php'); // error only include other code still working
//require_once ('C1.php');// but, if require is error cod will not working
//include_once ('C1.php');
spl_autoload_register(function ($class_name){
    include $class_name .'.php';
});
//auto include all class
class C2 extends C1
{

}