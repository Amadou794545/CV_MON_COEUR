<?php

class Competence
{
    protected $Name;

    public function __construct($Name)
    {
        $this->Name = $Name;
    }

public function displayCompetence()
    {
        return $this->Name;
    }


}