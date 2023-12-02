<?php

class Experience
{
    private string $name;
    private int $date;
    private string $description;

    public function __construct(string $name, int $date, string $description)
    {
        $this->name = $name;
        $this->date = $date;
        $this->description = $description;
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
    //date
    public function getDate(): int
    {
        return $this->date;
    }
    public function setDate(int $date): void
    {
    $this->date = $date;
    }
    //description
    public function getDescription(): string
    {
        return $this->description;
    }
    public function setDescription(string $description): void
    {
    $this->description = $description;
    }
    //display

    public function displayExperience(): string
    {
        return $this->name . "\n" . $this->date . "\n" . $this->description;
    }
}