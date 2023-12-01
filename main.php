<?php
include 'CV.php';
include 'Interest.php';

  $cv = new CV();
  $interest = new Interest("I like to play football, watch movies and read books.");

  $cv->setTitle("CV");
  $cv->setName("Ama");
  $cv->setFirstname("Kouassi");
  $cv->setDescription("I am a student at Becode.org. I am learning PHP and I am enjoying it. I am looking forward to learning more about PHP and other languages.");
  echo $cv->displayCV();
  echo "\n";
    echo $interest->displayInterest();
