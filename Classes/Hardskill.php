<?php

class Hardskill extends Competence
{
    public function __construct($Name)
    {
        parent::__construct($Name);
    }

    public function displayCompetence(): string
    {
        return "Hardskill".$this->Name;
    }

}