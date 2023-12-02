<?php

class Softskill extends Competence
{
    public function __construct($Name)
    {
        parent::__construct($Name);
    }

    public function displayCompetence(): string
    {
        return "softskill".$this->Name;
    }


}