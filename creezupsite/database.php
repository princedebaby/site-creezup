<?php

	// ouverture d'une connexion à la base 
	$objetPdo = new PDO('mysql:host=localhost;dbname=gamestoredatabase','root','');

	// preparation de la requete d'insertion 
	$pdoStat= $objetPdo->prepare('INSERT INTO commanderr values(NULL, :name, :email, :habitation, :adresse, :telephone, :article, :quantite,date(now()) )');

	//On lie les valeurs du formulaire 
	$pdoStat->bindValue(':name',$_POST['nom'], PDO::PARAM_STR);
	$pdoStat->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
	$pdoStat->bindValue(':habitation',$_POST['habitation'], PDO::PARAM_STR);
	$pdoStat->bindValue(':adresse',$_POST['adresse'], PDO::PARAM_STR);
	$pdoStat->bindValue(':telephone',$_POST['tel'], PDO::PARAM_STR);
	$pdoStat->bindValue(':article',$_POST['article'], PDO::PARAM_STR);
	$pdoStat->bindValue(':quantite',$_POST['quantite'],);

	// execution de la requete prepare 
	$insertionOk= $pdoStat->execute(); 

	if($insertionOk){
		$message="Votre commande a valider , Merci";
		header('Location: notification.php');
	}
	else{
		$message="Desolé veillez remplir tout les champs";
	}

?>