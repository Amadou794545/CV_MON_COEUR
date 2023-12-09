<?php

session_start();
include 'CV.php';
include 'Interest.php';
include 'Contact.php';
include 'Education.php';
include 'Experience.php';
include 'Hard skill.php';
include 'Soft skill.php';
include '..\Web\CreateCv.html';
require_once '..\Data\inc_connexion.php';



//cv

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validation des données
    //cv
    $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_SPECIAL_CHARS);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);
    //contact
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $phone = filter_input(INPUT_POST, 'telephone', FILTER_SANITIZE_NUMBER_INT);
    $adress = filter_input(INPUT_POST, 'adresse', FILTER_SANITIZE_SPECIAL_CHARS);
    //education
    $school = filter_input(INPUT_POST, 'school', FILTER_SANITIZE_SPECIAL_CHARS);
    $formation = filter_input(INPUT_POST, 'formation', FILTER_SANITIZE_SPECIAL_CHARS);
    $dateEducation = filter_input(INPUT_POST, 'dateEducation', FILTER_SANITIZE_NUMBER_INT);
    //experience
    $name_entreprise = filter_input(INPUT_POST, 'name_entreprise', FILTER_SANITIZE_SPECIAL_CHARS);
    $dateExperience = filter_input(INPUT_POST, 'dateExperience', FILTER_SANITIZE_NUMBER_INT);
    $descriptionExperience = filter_input(INPUT_POST, 'descriptionExperience', FILTER_SANITIZE_SPECIAL_CHARS);
    //interest
    $interet = filter_input(INPUT_POST, 'interest', FILTER_SANITIZE_SPECIAL_CHARS);
    //hardskill
    $hardskill = filter_input(INPUT_POST, 'hardskill', FILTER_SANITIZE_SPECIAL_CHARS);
    //softskill
    $softskill = filter_input(INPUT_POST, 'softskill', FILTER_SANITIZE_SPECIAL_CHARS);



        // Instanciation de la classe CV
        $cv = new CV();
        $cv->setTitle($titre);
        $cv->setName($nom);
        $cv->setFirstname($prenom);
        $cv->setDescription($description);
        // Instanciation de la classe Contact
        $contact = new Contact();
        $contact->setEmail($email);
        $contact->setPhone($phone);
        $contact->setAdress($adress);
        // Instanciation de la classe Education
        $education = new Education($school, $formation, $dateEducation);

        // Instanciation de la classe Experience
        $experience = new Experience($name_entreprise, $dateExperience, $descriptionExperience );
        // Instanciation de la classe Interest
        $interest = new Interest();
        $interest->setInterest($interet);
        // Instanciation de la classe Hardskill
        $hardskill = new Hardskill($hardskill);
        // Instanciation de la classe Softskill
        $softskill = new Softskill($softskill);

    insertCV($mysqli,$titre,$nom,$prenom,$description,$email,$phone,$adress,$school,$formation,$dateEducation,$name_entreprise,$dateExperience,$descriptionExperience,$interest->getInterest(),$hardskill->getHardskill(),$softskill->getSoftskill());


        // Génération du jeton CSRF
        if ($_POST['token'] === 'votre_jeton_CSRF') {
           //cv
            $_SESSION['Titre'] = $titre;
            $_SESSION['Name'] = $nom;
            $_SESSION['prenom'] = $prenom;
            $_SESSION['description'] = $description;
            //contact
            $_SESSION['email'] = $email;
            $_SESSION['phone'] = $phone;
            $_SESSION['adress'] = $adress;
            //education
            $_SESSION['school'] = $school;
            $_SESSION['formation'] = $formation;
            $_SESSION['dateEducation'] = $dateEducation;

            //experience
            $_SESSION['name_entreprise'] = $name_entreprise;
            $_SESSION['dateExperience'] = $dateExperience;
            $_SESSION['descriptionExperience'] = $descriptionExperience;
            //interest
            $_SESSION['interest'] = $interest->getInterest();
            //hardskill
            $_SESSION['hardskill'] = $hardskill->getHardskill();
            //softskill
            $_SESSION['softskill'] = $softskill->getSoftskill();
            header("Location: pdf.php?");



        } else {
            echo 'Le jeton CSRF est invalide';
            }



}

function insertCV($mysqli,$title,$name,$lastname,$bio,$email,$phone,$adress,$nameschool,$formation,$year,$society,$dateSociety,$description,$interest,$hardskill,$softskill){
    $sql="INSERT INTO user_cv (title, name, lastname, description, email, phone, adress, nameschool, formation, year, society, dateSociety, descriptionSociety, interest, hardskill, softskill) 
VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt=$mysqli->prepare($sql);
$stmt->bind_param("sssssisssisissss",$title,$name,$lastname,$bio,$email,$phone,$adress,$nameschool,$formation,$year,$society,$dateSociety,$description,$interest,$hardskill,$softskill);
if ($stmt->execute()){
    echo "Data inserted successfully";
}else{
    echo $stmt->error;
}
    }
