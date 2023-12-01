<?php
class CV
{
    private string $title;
    private string $name;
    private string $firstname;
    private string $description;

    public function __construct(){}

    //title
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }
    //name
    public function getName(): string
    {
        return $this->name;
    }
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    //firstname
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }
    //description
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
       if(strlen($description) < 1000){
        $this->description = $description;
    }
    else{
        echo "Description too long";
    }
    }




    //display
    public function displayCV(): string
    {
        return $this->title . "\n" . $this->name . "\n" . $this->firstname . "\n" . $this->description;
    }




}