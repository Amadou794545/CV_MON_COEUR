<?php
include '../../data/inc_connexion.php';
$id = $_GET['id'];

$title = $name = $firstname = $description = $email = $phone = $adress = $school = $formation = $dateEducation = $name_entreprise = $dateExperience = $descriptionExperience = $interest = $hardskill = $softskill = "";

$result = $mysqli->query("SELECT * FROM user_cv WHERE id='$id'");

// Initialiser les variables à des valeurs par défaut


$row = $result->fetch_assoc();
$title = $row['Title'];
$name = $row['Name'];
$lastname = $row['LastName'];
$description = $row['description'];
$email = $row['Email'];
$phone = $row['phone'];
$adress = $row['Adress'];
$school = $row['NameSchool'];
$formation = $row['Formation'];
$year = $row['year'];
$name_entreprise = $row['Society'];
$dateExperience = $row['dateSociety'];
$descriptionExperience = $row['descriptionSociety'];
$interest = $row['Interest'];
$hardskill = $row['Hardskill'];
$softskill = $row['Softskill'];



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Créer un CV</title>
</head>
<body>

<form action="../Classes/main.php" method="post">
    <h1>Créer un CV</h1>
    <h3>cv</h3>
    <label for="titre">Titre</label>
    <input type="text" name="titre" placeholder="Titre" id="titre" value="<?php echo $title ?>"><br>
    <label for="nom">Nom</label>
    <input type="text" name="nom" placeholder="Nom" id="nom" value="<?php echo $name ?>"><br>
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom" placeholder="Prénom" id="prenom" value="<?php echo $lastname ?>"><br>
    <label for="description">description</label>
    <input type="text" name="description" placeholder="Description" id="description" value="<?php echo $description ?>"><br>
    <h3>Contact</h3>
    <label for="email">Email</label>
    <input type="text" name="email" placeholder="Email" id="email" value="<?php echo $email ?>"><br>
    <label for="telephone">Téléphone</label>
    <input type="text" name="telephone" placeholder="Téléphone" id="telephone" value="<?php echo $phone ?>"><br>
    <label for="adresse">Adresse</label>
    <input type="text" name="adresse" placeholder="Adresse" id="adresse" value="<?php echo $adress ?>"><br>
    <h3>Education</h3>
    <label for="school">Nom de l'ecole</label>
    <input type="text" name="school" placeholder="Nom de l'ecole" id="school" value="<?php echo $school?>"><br>
    <label for="formation">formation</label>
    <input type="text" name="formation" placeholder="formation" id="formation" value="<?php echo $formation ?>"><br>
    <label for="dateEducation">date</label>
    <input type="text" name="dateEducation" placeholder="date" id="dateEducation" value="<?php echo $year ?>"><br>
    <h3>Experience</h3>
    <label for="Name_entreprise">Nom de l'entreprise</label>
    <input type="text" name="name_entreprise" placeholder="Nom de l'entreprise" id="name_entreprise" value="<?php echo $name_entreprise ?>"><br>
    <label for="dateExperience">date</label>
    <input type="text" name="dateExperience" placeholder="dat" id="dateExperience" value="<?php echo $dateExperience ?>"><br>
    <label for="descriptionExperience">description</label>
    <input type="text" name="descriptionExperience" placeholder="description" id="descriptionExperience" value=" <?php echo $descriptionExperience ?>"><br>
    <h3>Interet</h3>
    <label for="interest">interet</label>
    <input type="text" name="interest" placeholder="interet" id="interest" value="<?php echo $interest ?>"><br>
    <h3>Competence</h3>
    <h3>hardskill</h3>
    <label for="Hardskill">hardskill</label>
    <input type="text" name="hardskill" placeholder="hard-skill" id="hardskill" value="<?php echo $hardskill ?>"><br>
    <h3>softskill</h3>
    <label for="Softskill">softskill</label>
    <input type="text" name="softskill" placeholder="soft-skill" id="softskill" value="<?php echo $softskill ?>"><br>


    <input  type="hidden" name="token" value="votre_jeton_CSRF">
    <button type="submit">Créer</button>

</form>


</body>
</html>