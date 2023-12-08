<?php
session_start();
include 'CV.php';
include 'C:\laragon\www\CV_mon_coeur\Classes\Interest.php';
include 'Contact.php';
include 'Education.php';
include 'Experience.php';
include 'Hard skill.php';
include 'Soft skill.php';
include '..\Web\CreateCv.html';


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
    //interest
    $interet = filter_input(INPUT_POST, 'interest', FILTER_SANITIZE_SPECIAL_CHARS);
    //experience
    $name_entreprise = filter_input(INPUT_POST, 'name_entreprise', FILTER_SANITIZE_SPECIAL_CHARS);
    $dateExperience = filter_input(INPUT_POST, 'dateExperience', FILTER_SANITIZE_NUMBER_INT);
    $descriptionExperience = filter_input(INPUT_POST, 'descriptionExperience', FILTER_SANITIZE_SPECIAL_CHARS);




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
            $_SESSION['interest'] = $interest;
            header("Location: pdf.php?");



        } else {
            echo 'Le jeton CSRF est invalide';
            }


}


/*
  //interest
echo "Interest \n";
$interest = new Interest("I like to play football, watch movies and read books.");
echo $interest->displayInterest();
    //Contact
    echo "contact \n";
    $contact = new Contact();
    $contact->setEmail("amadou@gmail.com");
    $contact->setPhone("0487654321");
    $contact->setAdress("Rue de la paix, 1");
    echo $contact->displayContact();

    //Education
echo "\n";
    echo "Education \n";
// Créez un tableau pour stocker les instances d'éducation
$educationsArray = [];

// Ajoutez la première instance d'éducation au tableau
$education1 = new Education('Nom de l\'école', 'Nom de la formation', 2012);
$educationsArray[] = $education1;

// Ajoutez la deuxième instance d'éducation au tableau
$education2 = new Education('Becode', 'Développeur Web', 2021);
$educationsArray[] = $education2;

// Affichez les éducations du tableau
foreach ($educationsArray as $education) {
    echo $education->displayEducation() . "\n";
}
echo "\n";

    //Experience
    echo "Experience \n";
// Créez un tableau pour stocker les instances d'expérience
$experiencesArray = [];
$experience1 = new Experience('Nom de l\'entreprise', 2101, 'Description');
$experiencesArray[] = $experience1;
$experience2 = new Experience('Becode', 2021, 'Data Analyst');
$experiencesArray[] = $experience2;
foreach ($experiencesArray as $experience) {
    echo $experience->displayExperience() . "\n";
}

//competence
$competencesArray = [];

$competence1 = new Hardskill('PHP');
$competencesArray[] = $competence1;

$competence2 = new Softskill('Rigoureux');
$competencesArray[] = $competence2;

// Affichez les compétences du tableau
echo "\nCompétences :\n";
foreach ($competencesArray as $competence) {
    echo $competence->displayCompetence() . "\n";
}
*/