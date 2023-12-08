<?php

class Hardskill
{
    private string $Name;
    public function __construct($Name)
    {
        $this->Name = $Name;
    }

    public function displayCompetence(): string
    {
    return $this->Name;
   }

}
?>