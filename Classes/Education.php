<?php
class Education
{
private string $school;
private string $formation;
private int $date;

public function __construct(string $school, string $formation, int $date)
{
$this->school = $school;
$this->formation = $formation;
$this->date = $date;
}

//school
public function getSchool(): string
{
return $this->school;
}
public function setSchool(string $school): void
{
$this->school = $school;
}
//formation
public function getFormation(): string
{
return $this->formation;
}
public function setFormation(string $formation): void
{
$this->formation = $formation;
}
//date
public function getDate(): string
{
return $this->date;
}

public function setDate(string $date): void
{
$this->date = $date;
}
//display
public function displayEducation(): string
{
    return $this->school . "\n" . $this->formation . "\n" . $this->date;
}
}
