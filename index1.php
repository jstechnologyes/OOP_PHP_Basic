<?php

class Student
{

	public $name="Hadiuzzaman";
	public function getName()
	{
		//$this Keyword
			return $this->name;
	}

	
}


$student1=new Student;
$student1->getName();
echo $student1->getName();














