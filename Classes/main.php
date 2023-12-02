<?php
include 'CV.php';
include 'Interest.php';
include 'Contact.php';
include 'Education.php';
include 'Experience.php';
include 'Competence.php';
include 'Hardskill.php';
include 'Softskill.php';
include '..\Web\CreateCv.html';

//$_SESSION['Name'] = "amadou";

//cv

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validation des données
    $titre = filter_input(INPUT_POST, 'titre', FILTER_SANITIZE_SPECIAL_CHARS);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_SPECIAL_CHARS);

    // Vérification du nombre de mots dans la description
    if (str_word_count($description) > 100) {
        // La description a plus de 100 mots, renvoyer un message d'erreur
        echo "Erreur : La description ne doit pas dépasser 100 mots.";
    } else {
        // Instanciation de la classe CV
        $cv = new CV();
        $cv->setTitle($titre);
        $cv->setName($nom);
        $cv->setFirstname($prenom);
        $cv->setDescription($description);

        if ($_POST['token'] === 'votre_jeton_CSRF') {
            header("Location: pdf.php?titre=$titre&nom=$nom&prenom=$prenom&description=$description");



        } else {
            echo 'Le jeton CSRF est invalide';
            }
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