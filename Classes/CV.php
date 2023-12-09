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
        $this->description = $description;
    }
    //display
    public function displayCV(): string
    {
        return $this->title . "\n" . $this->name . "\n" . $this->firstname . "\n" . $this->description;
    }


    public function getAllCV($mysqli)
    {

        $result = $mysqli->query('Select ID,Title From user_cv');

        while ($row = $result->fetch_assoc()){
        $id = $row['ID'];
        $title = $row['Title'];
        echo "
<div >
<h2>$title</h2>
<a href='../Web/CV/Download.php?id=$id&title=$title'>Telecharger</a><br>
<a href='../Web/CV/Modify.php?id=$id&title=$title'>Modifier</a><br>
<a href='../Web/CV/Delete.php?id=$id&title=$title'>Supprimer</a><br>
</div>
";
        }

        return $row;
    }



}