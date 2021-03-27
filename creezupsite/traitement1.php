
<?php
include 'connexion.php'; 

                $status = '';
                $name = $_POST['name'];
                $email = $_POST['email'];
                $telephone = $_POST['telephone'];
                $habitation = $_POST['habitation']; 


                // Insertion des données dans la base de données
                $insert = mysqli_query($conn, "INSERT into commanderr(name, email,habitation,adresse,telephone,)
						VALUES ('$name','$email','$habitation','$adresse','$telephone')");

                if ($insert) {
					$status = 'success';
				
                    header('Location: notification.php');
                } else {
                    echo  'Veillez renseignez tout les champs du formulaire';
                }

	mysqli_close($conn);

?>

