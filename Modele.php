<?php

// Renvoie la liste de tous les billets, tri�s par identifiant d�croissant
function getBillets() {
	$bdd = getBdd();
	$billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
			. ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
			. ' order by BIL_ID desc');
	return $billets;
}

function getBdd() {
	$bdd = new PDO('mysql:host=localhost;dbname=miseenplacemvc;charset=utf8',
			'ts2', 'ts2', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	return $bdd;
}