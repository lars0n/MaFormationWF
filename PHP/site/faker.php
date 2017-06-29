
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Faker/3.1.0/locales/fr_CA/faker.fr_CA.js" type="text/javascript"></script>
<script>
  var reference = faker.random.uuid(); // Caitlyn Kerluke
  var categorie = faker.commerce.department(); // Caitlyn Kerluke
  var titre = faker.commerce.productName(); // Caitlyn Kerluke
  var description = faker.lorem.paragraph(); // Caitlyn Kerluke
  var couleur = faker.commerce.color(); // Caitlyn Kerluke
  var taille = faker.helpers.randomize(); // Caitlyn Kerluke
  var sexe = faker.helpers.randomize(); // Caitlyn Kerluke
  var prix = faker.commerce.price(); // Caitlyn Kerluke
  var stock = faker.random.number(); // Caitlyn Kerluke
  
  console.log(reference);
  console.log(categorie);
  console.log(titre);
  console.log(description);
  console.log(couleur);
  console.log(prix);
  console.log(stock);
</script>

</body>
</html>