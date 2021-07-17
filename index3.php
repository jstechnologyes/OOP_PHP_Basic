<?php

class Teacher
{
	public $name;
	public $age;
	public $phone;

	public function info($name, $age, $phone)
	{
			$this->name=$name;
			$this->age=$age;
			$this->phone=$phone;
	}
	public function print_info()
	{
		echo "Name is:".$this->name."<br/>";
		echo "Age is:".$this->age."<br/>";
		echo "Phone is:".$this->phone."<br/>";

	}
}

class Student extends Teacher
{
	

}
echo "Tehacher Information<br/>";
$teacher1= new Teacher;
$teacher1->info("Md. Hadiuzzaman","38","01712404964");
$teacher1->print_info();

$teacher2= new Teacher;
$teacher2->info("Md. Abdur Rahim","35","01923876686");
$teacher2->print_info();

echo "<br/><br/>";
echo "Student Informantion<br/>";
$student1=new Student;
$student1->info("Tokuzzaman Sadi","10","0192523272");
$student1->print_info();

$student2=new Student;
$student2->info("Esmamzanam Joti","10","01712404964");
$student2->print_info();

$student3=new Student;
$student3->info("Md. Kamal Hossain","25","01825847314");
$student3->print_info()






?>



