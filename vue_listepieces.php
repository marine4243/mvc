<?php

function vue_listePieces( $listePieces){

  afficheEntete();

  foreach ($listePieces as $key => $value) {

  afficheLigne($value);
  }
}

function afficheEntete()
{
 printf("| %20s | %9s | %9s | %9s |\n","piece", "Longueur", "Largeur", "Surface");
}

function afficheLigne($piece)
{
     printf("| %20s | %9.2f | %9.2f | %9.2f |\n",
     $piece["piece"],
     $piece["longueur"],
     $piece["largeur"],
     $piece["surface"],
   );
}
