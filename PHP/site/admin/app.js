  faker.locale = "fr_CA";
  //var reference = faker.random.number(); // Caitlyn Kerluke
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

  //document.getElementById('reference').value    = reference;
  document.getElementById('titre').value        = titre;
  document.getElementById('description').value  = description;
  document.getElementById('prix').value         = prix;
  document.getElementById('stock').value        = stock;

  var form = document.querySelector('form');

  
// https://github.com/fat/zoom.js/
  