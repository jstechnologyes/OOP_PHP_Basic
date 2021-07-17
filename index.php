<?php 

//Object oriented programming
class Person //class
{
	//properties
	public $name="Hadiuzzaman";
	public $age= 38;
	//method
	public function myfullName($fristname, $lastname)
	{
		return "My Full name is:".$fristname." ".$lastname;
	}
	

}

$ob1=new Person(); //Object
echo "Name=".$ob1->name."<br/>";
echo "Age=".$ob1->age."</br/>";
echo $ob1->myfullName("Hadiuzzaman","Hadi");








?>