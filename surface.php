<?php

require_once("piece.php");
require_once("vue_listepieces.php");
require_once("modele_listepieces.php");


$listepieces = [];
createListePieces(newPiece("salle de bain", 5, 3));
createListePieces(newPiece("sallon", 7, 8));

vue_listePieces( $listepieces );
