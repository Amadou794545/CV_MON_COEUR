<?php

class Contact
{
    private string $email;
    private string $phone;
    private string $adress;

    public function __construct(){}
    //email
    public function getEmail(): string
    {
        return $this->email;
    }
    //utiliser setEmail pour modifier la valeur de $email
    public function setEmail(string $email): void
    {
        // Utilisation d'une expression régulière pour vérifier le format de l'email
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        } else {
            // L'email ne correspond pas au format attendu
            throw new \InvalidArgumentException('Adresse e-mail invalide');
        }
    }
    //phone
    public function getPhone(): string
    {
        return $this->phone;
    }
    //utiliser setPhone pour modifier la valeur de $phone
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
    //adress
    public function getAdress(): string
    {
        return $this->adress;
    }
    //utiliser setAdress pour modifier la valeur de $adress
    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }
    public function displayContact(): string
    {
        return "\n" . $this->email . "\n" . $this->phone . "\n" . "\n" . $this->adress;
    }

}