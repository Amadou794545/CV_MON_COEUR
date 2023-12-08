<?php

class Interest
{
    private string $interest;

    public function __construct()
    {
    }

    public function getInterest(): string
    {
        return $this->interest;
    }
    //utiliser setInterest pour modifier la valeur de $interest
    public function setInterest(string $interest): void
    {
        $this->interest = $interest;
    }

    public function displayInterest(): string
    {
        return $this->interest;
    }


}