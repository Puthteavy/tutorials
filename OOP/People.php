<?php 
class People
{
	//property 
 public $id;
 public $name;
 public $sex;
 public static $st;

 function __construct($p_id,$p_name,$p_sex){
 	//asign value to object
 	$this->id = $p_id;
 	$this->name = $p_name;
 	$this->sex = $p_sex;

 }
 function walk(){
 	//method
    echo 'Walking';
 }
}

class stu extends People
{
	public $score;
	public $avg;
	// static method from parent 
	public static function st_method(){
		echo self::$st;
	}

	function __construct($p_id,$p_name,$p_sex,$score,$avg)
	{
		parent::__construct($p_id,$p_name,$p_sex);
		$this->score = $score;
        $this->avg = $avg;
	}
}
$student = new stu('1','theavy','F','100','Good');
stu::$st ='Static propery';


$student->walk();
echo '<br>'.$student->id.' '.$student->name.' '.$student->sex.' '.$student->score.' '.$student->avg.'<br>';

echo stu::st_method();