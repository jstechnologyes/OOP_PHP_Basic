<?php 

class Student
{
	public $name;
	public $age;
	public $cgpa;

	//getter method
	public function getName()
	{
		return $this->name;
	}
	public function getAge()
	{
		return $this->age;
	}
	public function getCgpa()
	{
		return $this->cgpa;
	}


	//setter method
	public function setName($name)
	{
		$this->name= $name;
	}
	public function setAge($age)
	{
		$this->age= $age;
	}
	public function setCgpa($cgpa)
	{
		$this->cgpa= $cgpa;
	}
}
$student1= new Student;
$student1->setName("Hadiuzzaman");
$student1->setAge(38);
$student1->setCgpa(3.75);
echo "Name is:".$student1->getName()."<br/>";
echo "Age is:".$student1->getAge()."<br/>";
echo "CGPA is:".$student1->getCgpa()."<br/>";



