<?php

require_once("piece.php");
require_once("vue_listepieces.php");
require_once("modele_listepieces.php");


$listepieces = [];
createlistePieces(newPieces("salle de bain", 5, 3));
createlistePieces(newPieces("sallon", 7, 8));

vue_listePieces( $listepieces );
