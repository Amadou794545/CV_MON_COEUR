<?php

class Interest
{
    private string $interest;

    public function __construct(string $interest)
    {
        $this->interest = $interest;
    }

    public function getInterest(): string
    {
        return $this->interest;
    }
    public function setInterest(string $interest): void
    {
        $this->interest = $interest;
    }

    public function displayInterest(): string
    {
        return $this->interest;
    }


}