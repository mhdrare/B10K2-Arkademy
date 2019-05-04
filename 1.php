<?php 

error_reporting(E_ERROR | E_PARSE);

Class School {

	function setHighschool($highSchool)
	{
		$this->highSchool = $highSchool;
	}

	function setUniversity($university)
	{
		$this->university = $university;
	}
}

Class Skills {
	function __construct($skill)
	{
		$this->skill = $skill;
	}
}

function biodata()
{
	$school = new School;
	$school->setHighschool("SMKN 1 Katapang");
	$school->setUniversity(null);

	$skills = new Skills('Framework Laravel');

	$bio->name = 'Muhamad Faisal Akbar';
	$bio->address = 'Jl. Gandasari Ciluncat RT06/RW01';
	$bio->hobbies = ['Futsal', 'Volly'];
	$bio->is_married = false;
	$bio->school = $school;
	$bio->skills = json_decode(json_encode($skills), true);

	return json_encode($bio);
}

echo biodata();

 ?>