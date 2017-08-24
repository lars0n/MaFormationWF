<?php

// probleme du nom de fichier

spl_autoload_register(function ($class){
    require 'class/' . $class . '.php';
});

$validation = new Validation($_POST);
$db = new Database('exo1_userslist', 'root');

// je  renome le $post en $_POST
if(!empty($_POST)) {
    foreach ($_POST as $key => $value) {
        $user[$key] = strip_tags(trim($value));
    }

    $validation->isValideLenght('firstname', 'Le prénom doit comporter au moins 3 caractères', 3);
    $validation->isValideLenght('lastname', 'Le nom doit comporter au moins 3 caractères', 3);
    $validation->valideEmail('email', 'L\'adresse email est invalide');
    $validation->isEmpty('birthdate', 'La date de naissance doit être complétée');
    $validation->isEmpty('city', 'La ville ne peut être vide');

// si il 'ya pas d'erreuir on peut faire une insertion
    if ($validation->isValide()) {

        $inserted = $db->query('INSERT INTO users (gender, firstname, lastname, email, birthdate, city) VALUES(?, ?, ?, ?, ?, ?)', [
            $_POST['gender'],
            $_POST['firstname'],
            $_POST['lastname'],
            $_POST['email'],
            date('Y-m-d', strtotime($_POST['birthdate'])),
            $_POST['city']
        ]);

        if ($inserted) {
            $createUser = true;
        }
    }

}


// je déplace ce code en bas pour que la requete de recupération se fasse apres l'insertionen bdd
//je renome colm en column et ordre en order
if(isset($_GET['order']) && isset($_GET['column'])){

    if($_GET['column'] == 'lastname'){$order = ' ORDER BY lastname';}
    // $_GET['column'] = 'firstname' au lieux de $_GET['column'] == 'firstname' donc trie par age non fonctionnel
    elseif($_GET['column'] == 'firstname'){$order = ' ORDER BY firstname';}
    elseif($_GET['column'] == 'birthdate'){$order = ' ORDER BY birthdate';}
    if($_GET['order'] == 'asc'){$order .= ' ASC';}
    elseif($_GET['order'] == 'desc'){$order .= ' DESC';}

    // je deplace cette requete qui a plus sa place ici
    $queryUsers = $db->prepare('SELECT * FROM users' . $order);
    if ($queryUsers->execute()) {
        $users = $queryUsers->fetchAll(PDO::FETCH_ASSOC);
    }
}else {
    // si un critere de trie n'est pas spécifié alors je recuper tous les utilisateurs est je fais un order by name
    $queryUsers = $db->query('SELECT * FROM users ORDER BY lastname');
    if ($queryUsers) {
        $users = $queryUsers->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>
<!-- j'ai réindenter le code HTML pour que ce soit plus clair -->
<!DOCTYPE html>
<html>
	<head>
		<title>Exercice 1</title>
		<meta charset="utf-8">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>

		<div class="container">

			<h1>Liste des utilisateurs</h1>
			
			<p>Trier par : 
				<a href="index.php?column=firstname&order=asc">Prénom (croissant)</a> |
				<a href="index.php?column=firstname&order=desc">Prénom (décroissant)</a> |
				<a href="index.php?column=lastname&order=asc">Nom (croissant)</a> |
				<a href="index.php?column=lastname&order=desc">Nom (décroissant)</a> |
				<a href="index.php?column=birthdate&order=desc">Âge (croissant)</a> |
				<a href="index.php?column=birthdate&order=asc">Âge (décroissant)</a>
			</p>
			<br>

			<div class="row">
				<?php
				if(isset($createUser) && $createUser == true){
					echo '<div class="col-md-6 col-md-offset-3">';
					echo '<div class="alert alert-success">Le nouvel utilisateur a été ajouté avec succès.</div>';
					echo '</div><br>';
				}
				// si il y'a des erreur on les affiche
				if(!$validation->isValide()){
					echo '<div class="col-md-6 col-md-offset-3">';
					echo '<div class="alert alert-danger">'.implode('<br>', $validation->getErrors()).'</div>';
					echo '</div><br>';
				}
				?>

				<div class="col-md-7">
					<table class="table">
						<thead>
							<tr>
								<th>Civilité</th>
								<th>Prénom</th>
								<th>Nom</th>
								<th>Email</th>
								<th>Age</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach($users as $user): ?>
							<tr>
								<td><?php echo $user['gender']; ?></td>
								<td><?php echo $user['firstname']; ?></td>
								<td><?php echo $user['lastname']; ?></td>
								<td><?php echo $user['email']; ?></td>
								<td>
									<?php echo DateTime::createFromFormat('Y-m-d', $user['birthdate'])->diff(new DateTime('now'))->y; ?> ans
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
					</table>
				</div>

				<div class="col-md-5">

					<form method="post" class="form-horizontal well well-sm">
						<fieldset>
							<legend>Ajouter un utilisateur</legend>

							<div class="form-group">
								<label class="col-md-4 control-label" for="gender">Civilité</label>
								<div class="col-md-8">
									<select id="gender" name="gender" class="form-control input-md" required>
										<option value="Mlle">Mademoiselle</option>
										<option value="Mme">Madame</option>
										<option value="M">Monsieur</option>
									</select>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="firstname">Prénom</label>
								<div class="col-md-8">
									<input id="firstname" name="firstname" type="text" class="form-control input-md" required>
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label" for="lastname">Nom</label>  
								<div class="col-md-8">
									<input id="lastname" name="lastname" type="text" class="form-control input-md" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" for="email">Email</label>  
								<div class="col-md-8">
									<input id="email" name="email" type="email" class="form-control input-md" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" for="city">Ville</label>  
								<div class="col-md-8">
									<input id="city" name="city" type="text" class="form-control input-md" required>
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-4 control-label" for="birthdate">Date de naissance</label>  
								<div class="col-md-8">
									<input id="birthdate" name="birthdate" type="text" placeholder="JJ-MM-AAAA" class="form-control input-md" required>
									<span class="help-block">au format JJ-MM-AAAA</span>  
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-4 col-md-offset-4">
									<button type="submit" class="btn btn-primary">Envoyer</button>
								</div>
							</div>
						</fieldset>
					</form>
				</div><!-- col-5 -->
			</div><!-- /.row -->
		</div><!-- ./container -->
	</body>
</html>